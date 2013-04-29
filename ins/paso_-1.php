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
	*/
?>

<form name="continuar" action="" method="POST" style="display:inline; height: 0px; border-width: 0px; width: 0px; padding: 0; margin: 0;">
<div align=center>
<table width="700" cellspacing=10>
	<tr>
		<td valign=top align=center>
			<br><br>
			<img src="../img/practico_login.png" border=0 ALT="Logo Practico">
			<font color=black>
			</font>
		</td>
		<td valign=top align=center><font size=2 color=black><br><b>
			<h1>Versi&oacute;n <?php include("../inc/version_actual.txt"); ?></h1>
			
			<font color=white>
			Welcome &nbsp;&nbsp; Willkommen &nbsp;&nbsp; Ongi Etorri<br>
			<font size=5>Bienvenido<br></font>
			 Bienvenuto &nbsp;&nbsp; Bienvenue &nbsp;&nbsp; bem-vindo<br><br>
			</font>
			
			[Seleccione el idioma deseado/Select your language]</b><br><br>
			<select name="Idioma" class="Combos" >
				<?php
				// Incluye archivos de idioma para ser seleccionados
				$path_idiomas="../inc/practico/idiomas/";
				$directorio_idiomas=opendir($path_idiomas);
				while (($elemento=readdir($directorio_idiomas))!=false)
					{
						//Lo procesa solo si es un archivo diferente del index
						if (!is_dir($path_idiomas.$elemento) && $elemento!="." && $elemento!=".."  && $elemento!="index.html")
							{
								include_once($path_idiomas.$elemento);
								//Establece espanol como predeterminado
								$seleccion="";
								if ($elemento=="es.php") $seleccion="SELECTED";
								$valor_opcion=str_replace(".php","",$elemento);
								//Presenta la opcion
								echo '<option value="'.$valor_opcion.'" '.$seleccion.'>'.$MULTILANG_DescripcionIdioma.' ('.$elemento.')</option>';
								if (file_exists("mod/".$elemento."/index.php"))
									include("mod/".$elemento."/index.php");
							}
					}		
				?>
			</select>
		</font></td>
	</tr>
</table>
<hr>
<br><br>
</div>

<?php
	abrir_barra_estado();
	$anterior=$paso-1;
	$siguiente=$paso+1;
	echo '
			<input type="Hidden" name="paso" value="'.$siguiente.'">
			<input type="Submit" class="BotonesEstadoCuidado" value=" Continuar / Next >>> ">
		</form>';
	cerrar_barra_estado();
?>
