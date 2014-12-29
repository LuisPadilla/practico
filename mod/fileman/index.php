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

<?php
	// Valida sesion activa de Practico
	@session_start();
	if (!isset($Sesion_abierta)) 
		{
			echo '<head><title>Error</title><style type="text/css"> body { background-color: #000000; color: #7f7f7f; font-family: sans-serif,helvetica; } </style></head><body><table width="100%" height="100%" border=0><tr><td align=center>&#9827; Acceso no autorizado !</td></tr></table></body>';
			die();
		}
?>

<?php
/* ################################################################## */
/* ################################################################## */
/*
	Function: fileman_admin_embebido
	Presenta IFrame con la herramienta de administracion de archivos embebida

	Salida:
		IFrame con contenido generado por la herramienta
*/
if ($PCO_Accion=="fileman_admin_embebido") 
	{
		echo '
            <div class="embed-responsive embed-responsive-4by3">
                <iframe src="mod/fileman/elfinder/" frameborder="0" marginheight="0" marginwidth="0">Cargando...</iframe>
            </div>';
	}

?>


