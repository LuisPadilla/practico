<?php
	/*
	Copyright (C) 2013  John F. Arroyave Gutiérrez
						unix4you2@gmail.com

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

	<pre>
	<b>Importante: Si usted esta visualizando este mensaje en su navegador,
	entonces PHP no esta instalado correctamente en su servidor web!</b>
	</pre>
	*/

	/*
		Title: t_basedatos
		Ubicacion *[dev_tools/tests/t_basedatos.php]*.  Pruebas para evaluacion de bases de datos al momento de instalacion
	*/

	// Definicion de variables para almacenar resultado
	$estado_final="0";

	include_once("dev_tools/tests/configuracion.php");
	include_once("core/conexiones.php");
	include_once("core/comunes.php");
	$total_ejecutadas=0;
	//Abre el archivo con los queries dependiendo del motor
	$RutaScriptSQL="ins/sql/practico.".$MotorBD;
	$archivo_consultas=fopen($RutaScriptSQL,"r");
	$total_consultas= fread($archivo_consultas,filesize($RutaScriptSQL));
	fclose($archivo_consultas);
	$arreglo_consultas = split_sql($total_consultas);
	foreach($arreglo_consultas as $consulta)
		{
			try
				{
					//Cambia el prefijo predeterminado en caso que haya sido personalizado en la instalacion
					$consulta=str_replace("core_",$TablasCore,$consulta);
					//Ejecuta el query
					$consulta_enviar = $ConexionPDO->prepare($consulta);
					$consulta_enviar->execute();
					$total_ejecutadas++;
				}
			catch( PDOException $ErrorPDO)
				{
					echo "SQL: ".$consulta." ==>> ".$ErrorPDO->getMessage();
					$hay_error=1;
				}
		}

	if ($hay_error)
		$estado_final=1;

	// Devuelve resultado final de las pruebas
	return $estado_final;
