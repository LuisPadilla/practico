﻿<?php
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

	/*
		Title: Idioma espanol
		Ubicacion *[/inc/idioma/es.php]*.  Incluye la definicion de variables utilizadas para presentar mensajes en el idioma correspondiente
		NOTAS IMPORTANTES:
			* Por cuestiones de rendimiento se recomienda la definicion usando comillas simples.
			* Usar las dobles solo cuando se requieran variables o caracteres especiales.
			* Se pueden definir cadenas en funcion de otras definidas con anterioridad
			* Se puede hacer uso de notacion HTML dentro de las cadenas para dar formato
	*/

	// Cadena que describe el archivo de idioma para su escogencia
	$MULTILANG_DescripcionIdioma='Espanol';

	//Lexico general (palabras y frases comunes a varios modulos)
	$MULTILANG_Accion='Accion';
	$MULTILANG_Actualizacion='Actualizaci&oacute;n';
	$MULTILANG_Administre='Administre';
	$MULTILANG_Anonimo='An&oacute;nimo';
	$MULTILANG_Anterior='Anterior';
	$MULTILANG_Apagado='Apagado';
	$MULTILANG_Aplicando='Aplicando';
	$MULTILANG_Atencion='Atenci&oacute;n';
	$MULTILANG_Ayuda='Ayuda';
	$MULTILANG_Basedatos='Base de datos';
	$MULTILANG_BarraHtas='Barra de herramientas';
	$MULTILANG_Campo='Campo';
	$MULTILANG_Cancelar='Cancelar';
	$MULTILANG_CaracteresCaptcha='N&uacute;mero de caracteres para captcha?';
	$MULTILANG_Cerrar='Cerrar';
	$MULTILANG_CerrarSesion='Cerrar sesi&oacute;n';
	$MULTILANG_Cliente='Cliente';
	$MULTILANG_Columna='Columna';
	$MULTILANG_ConfiguracionGeneral='Configuraci&oacute;n General';
	$MULTILANG_ConfiguracionVarias='Configuraci&oacute;n de opciones varias';
	$MULTILANG_Continuar='Continuar';
	$MULTILANG_Contrasena='Contrase&ntilde;a';
	$MULTILANG_Controlador='Controlador';
	$MULTILANG_Correcto='Correcto';
	$MULTILANG_Defina='Defina';
	$MULTILANG_Deshabilitado='Deshabilitado';
	$MULTILANG_Detalles='Detalles';
	$MULTILANG_Disene='Dise&ntilde;e';
	$MULTILANG_Editar='Editar';
	$MULTILANG_Eliminar='Eliminar';
	$MULTILANG_Encendido='Encendido';
	$MULTILANG_Error='Error';
	$MULTILANG_Estado='Estado';
	$MULTILANG_Etiqueta='Etiqueta';
	$MULTILANG_Finalizado='Finalizado';
	$MULTILANG_Formularios='Formularios';
	$MULTILANG_Grande='Grande';
	$MULTILANG_Guardar='Guardar';
	$MULTILANG_IdiomaPredeterminado='Idioma predeterminado';
	$MULTILANG_Importante='Importante';
	$MULTILANG_InfoAdicional='Informaci&oacute;n adicional';
	$MULTILANG_Informes='Informes';
	$MULTILANG_Ingresar='Ingresar';
	$MULTILANG_Instante='Instante';
	$MULTILANG_IrEscritorio='Ir a mi escritorio';
	$MULTILANG_LlavePaso='Llave de paso';
	$MULTILANG_MotorBD='Motor de Base de Datos';
	$MULTILANG_Ninguno='Ninguno';
	$MULTILANG_No='No';
	$MULTILANG_NombreRAD='Nombre RAD';
	$MULTILANG_Opcional='Opcional';
	$MULTILANG_OpcionesMenu='Opciones de menu';
	$MULTILANG_Paso='Paso';
	$MULTILANG_Peso='Peso';
	$MULTILANG_Pequeno='peque&ntilde;o';
	$MULTILANG_PlantillaActiva='Plantilla gr&aacute;fica activa';
	$MULTILANG_ProcesoFin='Proceso finalizado';
	$MULTILANG_Puerto='Puerto';
	$MULTILANG_Si='Si';
	$MULTILANG_Servidor='Servidor';
	$MULTILANG_SeleccioneUno='Seleccione uno';
	$MULTILANG_Tablas='Tablas';
	$MULTILANG_TablaDatos='Tabla de datos';
	$MULTILANG_TiempoCarga='Tiempo de carga';
	$MULTILANG_Tipo='Tipo';
	$MULTILANG_TipoMotor='Tipo de motor';
	$MULTILANG_Titulo='T&iacute;tulo';
	$MULTILANG_TotalRegistros='Total registros encontrados';
	$MULTILANG_Usuario='Usuario';
	$MULTILANG_Vacio='Vac&iacute;o';
	$MULTILANG_Version='Versi&oacute;n';
	$MULTILANG_ZonaHoraria='Zona horaria';
	
	//Ventana de login
	$MULTILANG_TituloLogin='Ingreso al sistema';
	$MULTILANG_CodigoSeguridad='Codigo de seguridad';
	$MULTILANG_IngreseCodigoSeguridad='Ingrese aqui el codigo de seguridad';
	$MULTILANG_AccesoExclusivo='El acceso a este software es exlusivo para usuarios registrados. Por su seguridad, nunca comparta su nombre de usuario y contrase&ntilde;a.';

	//Banderas de campos en formularios
	$MULTILANG_TitValorUnico='El valor ingresado no acepta duplicados';
	$MULTILANG_DesValorUnico='El sistema validar&aacute; la informaci&oacute;n ingresada en este campo, en caso de ya existir en la base de datos no se permitir&aacute; su ingreso.';
	$MULTILANG_TitObligatorio='Campo obligatorio';
	$MULTILANG_DesObligatorio='Este campo ha sido marcado como obligatorio.  Si no se ingresa un valor para &eacute;ste el sistema no almacenar&aacute; el registro ingresado por el usuario.';

	//Errores y avisos varios
	$MULTILANG_TituloInsExiste='ATENCION: La carpeta de instalaci&oacute;n existe en el servidor';
	$MULTILANG_TextoInsExiste='Este mensaje aparecer&aacute; de manera permanente a todos sus usuarios mientras usted no elimine el directorio utilizado durante el proceso de instalaci&oacute;n de Pr&aacute;ctico.  Es fundamental que la carpeta sea eliminada despu&eacute;s de finalizar una instalaci&oacute;n para evitar que algun usuario an&oacute;nimo inicie nuevamente el proceso sobreescribiendo archivos de configuraci&oacute;n o bases de datos con informaci&oacute;n de importancia para usted.<br><br>Si ya ha finalizado un proceso de instalaci&oacute;n de Pr&aacute;ctico para su uso en producci&oacute;n es importante que elimine esta carpeta antes de continuar.  Si no desea eliminar esta carpeta puede optar por renombrarla en instalaciones temporales o de prueba.<br><br>Si est&aacute; visualizando este mensaje al ejecutar este script por primera vez y desea realizar una instalaci&oacute;n nueva, puede iniciar el asistente haciendo <input type="button" Value="clic AQUI" Onclick="document.location=\'ins\'" class="BotonesCuidado">';
	$MULTILANG_ErrorTiempoEjecucion='Error en tiempo de ejecuci&oacute;n';
	$MULTILANG_ErrorModulo='El modulo central esta tratando de incluir un modulo ubicado en <b>mod/</b> pero no encuentra su punto de accceso.<br>Verifique el estado del m&oacute;dulo, consulte con su administrador o elimine el m&oacute;dulo en conflicto para evitar este mensaje.';
	$MULTILANG_ContacteAdmin='Contacte con el administrador de su sistema y comunique este mensaje.';
	$MULTILANG_ReinicieWeb='Por favor haga los ajustes requeridos y reinicie su servicio web.';
	$MULTILANG_PHPSinSoporte='Su instalacion de PHP parece no tener soporte';
	$MULTILANG_ErrExtension='Extensi&oacute;n PHP faltante o sin activar';
	$MULTILANG_ErrLDAP=$MULTILANG_PHPSinSoporte.' para LDAP activado para ser usado como metodo de autenticacion externa.<br>'.$MULTILANG_ReinicieWeb.'.<br>La autenticaci&oacute;n del usuario admin seguir&aacute; siendo independiente para evitar p&eacute;rdida de acceso.';
	$MULTILANG_ErrHASH=$MULTILANG_PHPSinSoporte.' para HASH activado.<br>Este se requiere cuando es seleccionado un tipo de encripci&oacute;n diferente al plano para contrase&ntilde;as sobre motores de autenticaci&oacute;n externos.<br>'.$MULTILANG_ReinicieWeb;
	$MULTILANG_ErrSESS=$MULTILANG_PHPSinSoporte.' para sesiones activado. '.$MULTILANG_ReinicieWeb;
	$MULTILANG_ErrGD=$MULTILANG_PHPSinSoporte.' para librer&iacute;a gr&aacute;fica GD &oacute; GD2 activado.<br>Aquellos utilizando debian, ubuntu o sus derivados pueden intentar un <b>apt-get install php5-gd</b> para agregarlo.<br>'.$MULTILANG_ReinicieWeb;
	$MULTILANG_ErrPDO=$MULTILANG_PHPSinSoporte.' para PDO activado.<br>'.$MULTILANG_ReinicieWeb;
	$MULTILANG_ErrDriverPDO=$MULTILANG_PHPSinSoporte.' para PDO activado. '.$MULTILANG_ReinicieWeb;
	$MULTILANG_ObjetoNoExiste='El objeto asociado a esta solicitud no existe.';
	$MULTILANG_ErrorDatos='Problema en los datos ingresados';

	//Asistente disenador aplicaciones
	$MULTILANG_TitDisenador='Dise&ntilde;ar la aplicaci&oacute;n, <b>es simple y r&aacute;pido:</b>';
	$MULTILANG_DefTablas='Definici&oacute;n de tablas';
	$MULTILANG_DesTablas='Las tablas son aquellas estructuras en las que ser&aacute; almacenada la informaci&oacute;n que sus usuarios diligencien por medio de formularios asociados a &eacute;stas.';
	$MULTILANG_DefForms='para ingreso y consulta de informaci&oacute;n';
	$MULTILANG_DesForms='Permiten al usuario ingresar informaci&oacute;n de acuerdo a ciertas validaciones o formatos, consultar registros o incluso eliminarlos. Permiten tambi&eacute;n desplegar otros elementos como p&aacute;ginas externas o informes predise&ntilde;ados.';
	$MULTILANG_DefInformes='(tablas o gr&aacute;ficos)';
	$MULTILANG_DesInformes='Presentan la informaci&oacute;n existente dentro de las tablas a los usuarios, bajo diferentes formatos y filtros definidos.  Se pueden crear informes tabulares o de tipo gr&aacute;fico y adem&aacute;s posteriormente ser embebidos en otros espacios.';
	$MULTILANG_DefMenus='para los usuarios';
	$MULTILANG_DesMenus='Enlaza objetos dise&ntilde;ados como formularios o informes con iconos gr&aacute;ficos y descripciones textuales que pueden ser seleccionadas por un usuario que posea ese permiso.  Tambi&eacute;n permite vincular funciones externas o ejecuci&oacute;n de comandos personalizados.';
	$MULTILANG_UsuariosPermisos='Usuarios y permisos';
	$MULTILANG_DefUsuarios='para acceder a su aplicaci&oacute;n';
	$MULTILANG_DesUsuarios='Establece las credenciales de acceso para cada usuario, as&iacute; como los permisos con que cuenta cada uno para accesar formularios, informes o cualquier opcion de menu previamente definida.';

	//Cierre de sesion
	$MULTILANG_SesionCerrada='Su sesi&oacute;n ha sido cerrada';
	$MULTILANG_TituloCierre='Esto puede ocasionarse por acciones ejecutadas por el usuario como';
	$MULTILANG_ExplicacionCierre='<li>Cerrar de manera voluntaria su sesi&oacute;n</li>
			<li>Dejar de usar el sistema durante un tiempo prolongado</li>
			<li>Tener abiertas varias ventanas del sistema al mismo tiempo en secciones restringidas por el administrador</li>
			<li>Su usuario o contrase&ntilde;a son inv&aacute;lidos para realizar alguna operaci&oacute;n</li>
			<li>Navegar utilizando enlaces o botones diferentes a los permitidos</li>
			<font color="#000000">
			<br><strong>Tambi&eacute;n por configuraciones o acciones de su equipo como:</strong><br>
			<font color="#808080">
			<li>Su navegador no est&aacute; soportando cookies</li>
			<li>Se ha lipiado la cach&eacute; cookies o sesiones del navegador mientras se usaba el sistema</li>
			<font color="#000000">
			<br><strong>Tambi&eacute;n por configuraciones del sistema como:</strong><br>
			<font color="#808080">
			<li>Haber finalizado un proceso de instalaci&oacute;n de la plataforma que requiere un reinicio de sesi&oacute;n</li>
			<li>La llave de paso de su usuario no corresponde a la llave solicitada por este sistema</li>
			<li>Las credenciales para firmar un registro de operaci&oacute;n no son v&aacute;lidas</li>';

	//Actualizacion de plataforma
	$MULTILANG_ActMsj1='ATENCION: Lea esta informaci&oacute;n antes de continuar';
	$MULTILANG_ActMsj2='Pr&aacute;ctico le ofrece este mecanismo para aplicar actualizaciones autom&aacute;ticas a su sistema mediante parches incrementales descargados desde la web oficial del proyecto o mediante el asistente para b&uacute;squeda de actualizaciones, sin embargo, antes de aplicar cualquier parche es fundamental que:<br><br><li>Haga una copia de seguridad de sus bases de datos. Algunas actualizaciones puede que requieran la modificaci&oacute;n de estructuras sobre la base de datos que pueden afectar la informaci&oacute;n.<li>Haga una copia de seguridad de sus archivos o carpeta de Pr&aacute;ctico.<li>LIMPIE la carpeta de trabajo de practico (ruta  tmp/), ser&aacute; utilizada por el asistente para descomprimir y analizar los archivos.';
	$MULTILANG_ActUsando='Actualmente usted utiliza la versi&oacute;n';
	$MULTILANG_ActPaquete='Paquete/Parche de actualizacion manual';
	$MULTILANG_ActSobreescritos='Archivos previos ser&aacute;n sobreescritos';
	$MULTILANG_CargarArchivo='Cargar el archivo';
	$MULTILANG_Adjuntando='Adjuntando un nuevo archivo al sistema';
	$MULTILANG_ErrorTamano='<b>ATENCION:</b> Proceso interrumpido.  El archivo excede el tama&ntilde;o permitido';
	$MULTILANG_ErrorFormato='<b>ATENCION:</b> Proceso interrumpido.  El formato del archivo cargado no es el solicitado';
	$MULTILANG_CargaCorrecta='El archivo ha sido cargado correctamente';
	$MULTILANG_ErrorDesconocido='<b>ATENCION:</b>  Ocurri&oacute; un error desconocido al cargar el archivo';
	$MULTILANG_ErrorDescomprimiendo='Descomprimiendo archivo';
	$MULTILANG_ContenidoParche='Contenido del parche';
	$MULTILANG_ErrorVerAct='Error cargando la versi&oacute;n actual de Pr&aacute;ctico.  No se encuentra el archivo';
	$MULTILANG_ErrorActualiza='El archivo cargado parece no ser un paquete de actualizacion v&aacute;lido.  No se encuentra el archivo';
	$MULTILANG_ErrorAntigua='El archivo de parche cargado hace referencia a una actualizaci&oacute;n mas antigua que su version actual';
	$MULTILANG_ErrorVersion='El archivo de parche cargado requiere la siguiente version';
	$MULTILANG_AvisoIncremental='Debe aplicar primero los parches incrementales requeridos hasta elevar su sistema a la versi&oacute;n minima que necesita el parche.';
	$MULTILANG_Integridad='Integridad';
	$MULTILANG_ResumenParche='Resumen de los cambios y funcionalidades suministradas por el parche';
	$MULTILANG_ResumenInstrucciones='Instrucciones a ser ejecutadas sobre las tablas de del sistema';
	$MULTILANG_FinRevision='PROCESO DE REVISION FINALIZADO';
	$MULTILANG_ActMsj3='Al aplicar los archivos listados arriba se actualizar&aacute; su sistema a la siguiente versi&oacute;n';
	$MULTILANG_ActErrGral='Archivo con estructura, tipo o versi&oacute;n no compatible';
	$MULTILANG_ActDesde='Actualizando desde la version';
	$MULTILANG_ErrLista='Error cargando lista de archivos para backup';
	$MULTILANG_HaciendoBkp='Haciendo backup de';
	$MULTILANG_ErrBkpBD='Ha ocurrido un error durante la copia de seguridad de la base de datos';
	$MULTILANG_ActMsj4='Si alguno de los archivos no ha podido ser escrito por este asistente por problemas de permisos el parche tambien puede ser aplicado manualmente por el administrador o escribiendo solamente los archivos faltantes';
	$MULTILANG_ActMsj5='Archivo con estructura o tipo no compatible';
	
	//Formularios
	$MULTILANG_ErrFrmDuplicado='Ha ocurrido un error de valor duplicado en el(los) campo(s): $campo . El valor ingresado ya existe en la base de datos.';
	$MULTILANG_ErrFrmDatos='Problema en los datos ingresados';
	$MULTILANG_ErrFrmCampo1='Debe indicar un t&iacute;tulo o etiqueta v&aacute;lida para el campo.';
	$MULTILANG_ErrFrmCampo2='Debe indicar un campo v&aacute;lido para vincular con la tabla de datos asociada al formulario.';
	$MULTILANG_ErrFrmCampo3='Debe indicar un t&iacute;tulo o etiqueta v&aacute;lida para el bot&oacute;n.';
	$MULTILANG_ErrFrmCampo4='Debe indicar una acci&oacute;n v&aacute;lido para ser ejecutada cuando se active el control.';
	$MULTILANG_FrmMsj1='Agregar un elemento al formulario';
	$MULTILANG_FrmTipoObjeto='Tipo de objeto que desea agregar';
	$MULTILANG_FrmTipoTit1='Controles de datos';
	$MULTILANG_FrmTipo1='Campo de texto corto';
	$MULTILANG_FrmTipo2='Campo de texto libre';
	$MULTILANG_FrmTipo3='Campo de texto con formato enriquecido';
	$MULTILANG_FrmTipo4='Campo de selecci&oacute;n (ComboBox o lista desplegable)';
	$MULTILANG_FrmTipo5='Campo de selecci&oacute;n (RadioButton)';
	$MULTILANG_FrmTipoTit2='Presentaci&oacute;n y otros contenidos';
	$MULTILANG_FrmTipo6='Texto enriquecido (como etiqueta)';
	$MULTILANG_FrmTipo7='URL embebida (IFrame)';
	$MULTILANG_FrmTipoTit3='Objetos internos';
	$MULTILANG_FrmTipo8='Informe predise&ntilde;ado (Tabla de datos o Gr&aacute;fico)';
	$MULTILANG_FrmTitulo='T&iacute;tulo o etiqueta';
	$MULTILANG_FrmDesTitulo='Texto que aparecer&aacute; al lado del indicando al usuario la informacion que debe ingresar.  Puede usar HTML b&aacute;sico para dar formato adicional.';
	$MULTILANG_FrmCampo='Campo enlazado';
	$MULTILANG_FrmCampoOb1='Campo obligatorio para controles de datos';
	$MULTILANG_FrmDesCampo='Campo de la tabla de datos al cual se vincular&aacute; la informaci&oacute;n';
	$MULTILANG_FrmValUnico='Campo de valor &uacute;nico';
	$MULTILANG_FrmTitUnico='Unicidad para los valores ingresados';
	$MULTILANG_FrmDesUnico='Indica si el campo puede almacenar o no valores repetidos en la base de datos.  Deber&iacute;a estar habilitado para campos que representen claves primarias en su dise&ntilde;o y deshabilitado para el resto';
	$MULTILANG_FrmPredeterminado='Valor predeterminado';
	$MULTILANG_FrmDesPredeterminado='Establece el valor que aparece diligenciado automaticamente en el campo al abrir la vista del formulario.  Este valor puede estar en contravia de la validaci&oacute;n de datos';
	$MULTILANG_FrmValida='Validacion de datos';
	$MULTILANG_FrmValida1='S&oacute;lo n&uacute;meros 0-9';
	$MULTILANG_FrmValida2='S&oacute;lo letras A-Z';
	$MULTILANG_FrmValida3='Letras y n&uacute;meros';
	$MULTILANG_FrmValida4='Campo de fecha';
	$MULTILANG_FrmValidaDes='Tipo de filtro a ser aplicado cuando el usuario ingresa informaci&oacute;n por teclado';
	$MULTILANG_FrmLectura='Campo de solo lectura';
	$MULTILANG_FrmTitLectura='Define si se puede cambiar su valor';
	$MULTILANG_FrmDesLectura='Propiedad util para campos o formuarios de consulta por parte del usuario donde se requiere visualizar el valor pero no permitir su modificacion';
	$MULTILANG_FrmAyuda='T&iacute;tulo de ayuda';
	$MULTILANG_FrmDesAyuda='Texto que aparecer&aacute; como encabezado para el texto de ayuda del campo explicando al usuario qu&eacute; debe ingresar';
	$MULTILANG_FrmTxtAyuda='Texto de ayuda';
	$MULTILANG_FrmDesTxtAyuda='Texto completo con la descripcion de funciones resumida para el campo.  Puede incluir instrucciones de formato, advertencias o cualquier otro mensaje para el usuario';
	$MULTILANG_FrmDesPeso='Posicion en la que aparece el campo dentro del formulario cuando este se despliega en pantalla. Orden.';
	$MULTILANG_FrmDesColumna='Columna para ubicar el campo cuando la vista del formulario tenga varias columnas. Aquellos campos en columnas superiores a las definidas en el formulario no ser&aacute;n dibujados';
	$MULTILANG_FrmObligatorio='Obligatorio';
	$MULTILANG_FrmVisible='Visible';
	$MULTILANG_FrmDesVisible='Determina si el control es visible o no para el usuario.  Si se deja como No el control es usado pero como un campo oculto';
	$MULTILANG_FrmLblBusqueda='Utilizar para b&uacute;squedas? Etiqueta';
	$MULTILANG_FrmTitBusqueda='Indica si el campo es usado para buscar registros';
	$MULTILANG_FrmDesBusqueda='Deje el espacio en blanco para indicar que es un campo normal o ingrese la etiqueta que debe ir en el boton de comando ubicado al lado derecho del campo para realizar la busqueda de registros';
	$MULTILANG_FrmAjax='Usar AJAX para buscar';
	$MULTILANG_FrmTitAjax='Modo de recuperaci&oacute;n de registros';
	$MULTILANG_FrmDesAjax='Cuando la casilla se encuentra activada Practico intenta recuperar la informaci&oacute;n del registro para el formulario mediante AJAX (Se recomienda habilitar), de lo contrario se utiliza el metodo est&aacute;ndar de envio de solicitud y recarga de la p&aacute;gina con los resultados.  Puede ser deshabilitado para mejorar compatibilidad con navegadores viejos.';
	$MULTILANG_FrmTeclado='Agregar teclado virtual';
	$MULTILANG_FrmTitTeclado='Ingreso de informaci&oacute;n sin teclado';
	$MULTILANG_FrmDesTeclado='Cuando es habilitado en el formulario se despliega un teclado virtual para el ingreso de informaci&oacute;n;.  Por ahora el uso del teclado puede violar las validaciones';
	$MULTILANG_FrmAncho='Ancho';
	$MULTILANG_FrmTitAncho='Cu&aacute;nto espacio de ancho debe ocupar el control';
	$MULTILANG_FrmDesAncho='IMPORTANTE: en n&uacute;mero de caracteres para texto simple o en pixeles para texto con formato. Indique un n&uacute;mero de columnas, sin embargo, tenga presente que el ancho en pixeles ser&aacute; variable de acuerdo al tipo de fuente utilizada por el tema actual';
	$MULTILANG_FrmDesAncho2='M&iacute;nimo recomendado en campos con formato: 350';
	$MULTILANG_FrmAlto='Alto (l&iacute;neas)';
	$MULTILANG_FrmTitAlto='Cu&aacute;ntas filas deben estar visibles en el control?';
	$MULTILANG_FrmDesAlto='IMPORTANTE: en n&uacute;mero de filas para texto simple o en pixeles para texto con formato.  En caso que el texto supere el n&uacute;mero de filas se agregar&aacute;n autom&aacute;ticamente barras de desplazamiento';
	$MULTILANG_FrmDesAlto2='M&iacute;nimo recomendado en campos con formato: 100';
	$MULTILANG_FrmBarra='Barra de edici&oacute;n';
	$MULTILANG_FrmBarraTipo1='B&aacute;sica: Documento, formato de caracter y p&aacute;rrafo';
	$MULTILANG_FrmBarraTipo2='Est&aacute;ndar: B&aacute;sica + Enlaces, estilos de fuente';
	$MULTILANG_FrmBarraTipo3='Extendida: Est&aacute;ndar + Portapapeles, buscar-reemplazar y ortograf&iacute;a';
	$MULTILANG_FrmBarraTipo4='Avanzada: Extendida + Insertar objetos y colores';
	$MULTILANG_FrmBarraTipo5='Completa: Avanzada +  Formularios y pantalla completa';
	$MULTILANG_FrmTitBarra='Tipo de editor utilizado';
	$MULTILANG_FrmDesBarra='Indica el tipo de barra de herramientas que aparecer&aacute; en la parte superior del control y que permitir&aacute; realizar al usuario las diferentes tareas de edici&oacute;n del texto. IMPORTANTE: Cada tipo de editor requiere un espacio diferente en el formulario ya que debe desplegar un n&uacute;mero de iconos y opciones diferentes';
	$MULTILANG_FrmFila='Fila &uacute;nica para este objeto?';
	$MULTILANG_FrmTitFila='Se debe utilizar una fila completa para el objeto?';
	$MULTILANG_FrmDesFila='Permite desplegar el objeto en una fila exclusiva de la tabla usada en el formulario';
	$MULTILANG_FrmLista='Lista de opciones';
	$MULTILANG_FrmTitLista='Qu&eacute; opciones aparecen para ser escogidas';
	$MULTILANG_FrmDesLista='Ingrese una lista de opciones separadas por coma.  Si requiere tomar las opciones din&aacute;micamente desde otra tabla de la aplicaci&oacute;n utilice los campos de Origen de datos para opciones.  En caso de llenar ambas opciones (lista fija y origen de datos) el resultado ser&aacute; su combinaci&oacute;n';
	$MULTILANG_FrmDesLista2='Separadas por coma';
	$MULTILANG_FrmOrigen='Origen de la lista de opciones';
	$MULTILANG_FrmTitOrigen='Debe especificar el mismo origen (tabla) de la lista de valores';
	$MULTILANG_FrmDesOrigen='Campo desde el cual se toman las opciones que despliega la lista';
	$MULTILANG_FrmTitOrigen2='Que es esto?';
	$MULTILANG_FrmOrigenVal='Origen de la lista de valores';
	$MULTILANG_FrmTitOrigenVal='Debe especificar el mismo origen (tabla) de la lista de opciones';
	$MULTILANG_FrmDesOrigenVal='Campo desde el cual se toman los valores internos (a ser procesados) para cada opcion de la lista';
	$MULTILANG_FrmEtiqueta='Valor de la etiqueta (ser&aacute; impresa en el formulario en formato HTML)';
	$MULTILANG_FrmURL='URL para IFrame';
	$MULTILANG_FrmDesURL='Ingrese la direcci&oacute;n de la p&aacute;gina que sera embebida en el marco';
	$MULTILANG_FrmInforme='Informe vinculado';
	$MULTILANG_FrmVentana='Ventana propia para el objeto?';
	$MULTILANG_FrmDesVentana='No se recomienda activar este campo cuando desee empotrar informes de tipo GRAFICA';
	$MULTILANG_FrmLongMaxima='Longitud m&aacute;xima';
	$MULTILANG_FrmTit1LongMaxima='Cu&aacute;ntos caracteres permite el campo?';
	$MULTILANG_FrmTit2LongMaxima='Valor entre 1 y N, 0 para deshabilitar el l&iacute;mite';
	$MULTILANG_FrmBtnGuardar='Agregar o actualizar el objeto/campo';
	$MULTILANG_FrmAgregaBot='Agregar botones y acciones al formulario';
	$MULTILANG_FrmTituloBot='T&iacute;tulo o etiqueta';
	$MULTILANG_FrmDesBot='Texto que aparecer&aacute; sobre el bot&oacute;n';
	$MULTILANG_FrmEstilo='Estilo';
	$MULTILANG_FrmEstilo1='Predeterminado - bot&oacute;n normal';
	$MULTILANG_FrmEstilo1b='Bot&oacute;n normal';
	$MULTILANG_FrmEstilo2='Boton de acci&oacute;n que requiere cuidado';
	$MULTILANG_FrmDesEstilo='Apariencia gr&aacute;fica del control';
	$MULTILANG_FrmTipoAccion='Tipo de acci&oacute;n';
	$MULTILANG_FrmAccionT1='Acciones internas';
	$MULTILANG_FrmAccionGuardar='Guardar datos';
	$MULTILANG_FrmAccionLimpiar='Limpiar datos';
	$MULTILANG_FrmAccionEliminar='Eliminar datos';
	$MULTILANG_FrmAccionRegresar='Regresar a escritorio';
	$MULTILANG_FrmAccionCargar='Cargar un objeto';
	$MULTILANG_FrmAccionT2='Definidas por el usuario';
	$MULTILANG_FrmAccionExterna='En personalizadas.php o cualquier otro m&oacute;dulo instalado';
	$MULTILANG_FrmAccionJS='Comando en JavaScript';
	$MULTILANG_FrmDesAccion='Comando que deber&aacute; ejecutar el control al ser pulsado.  Para acciones definidas es personalizadas.php los datos del formulario ser&aacute;n enviados a esa rutina para ser procesados';
	$MULTILANG_FrmAccionCMD='Comando del usuario';
	$MULTILANG_FrmAccionDesCMD='Nombre de la acci&oacute;n definida en el archivo de personalizaci&oacute;n que procesar&aacute; la informaci&oacute;n o comando en JavaScript a ser ejecutado de manera inmediata en la p&aacute;gina (si requiere par&aacute;metros dentro de su comando utilice comillas sencillas para encerrarlos). Para cargar objetos de Pr&aacute;ctico como formularios o informes puede usar la misma notaci&oacute;n de menus: frm:XX:Par1:Par2:ParN o inf:XX...  El comando javascript ImprimirMarco(\'seccion_impresion\') le permite imprimir el contenido del formulario';
	$MULTILANG_FrmDesPeso='Posicion en la que aparece el campo dentro de la barra de estado del formulario cuando este se despliega en pantalla. Orden de izquierda a derecha';
	$MULTILANG_FrmBotDesVisible='Determina si el control es visible o no para el usuario';
	$MULTILANG_FrmRetorno='T&iacute;tulo de retorno';
	$MULTILANG_FrmDesRetorno='Texto que aparecer&aacute; como encabezado en el escritorio despu&eacute;s de realizar la acci&oacute;n indicada por el usuario';
	$MULTILANG_FrmTxtRetorno='Texto de retorno';
	$MULTILANG_FrmTxtDesRetorno='Texto completo con la descripci&oacute;n de acci&oacute;n realizada o mensaje entregado al usuario despu&eacute;s de ejecutar el control';
	$MULTILANG_FrmConfirma='Texto de confirmaci&oacute;n';
	$MULTILANG_FrmDesConfirma='En caso de ser diligenciado: Texto que aparecer&aacute; como ventana emergente advirtiendo la ejecuci&oacute;n del control y esperando confirmaci&oacute;n del usuario para proceder';
	$MULTILANG_FrmBtnGuardar='Agregar acci&oacute;n/bot&oacute;n';
	$MULTILANG_FrmDisCampos='Dise&ntilde;o general de campos';
	$MULTILANG_FrmDesObliga='Tenga presente que los campos obligatorios deber&iacute;an estar visibles';
	$MULTILANG_FrmGuardaCol='Guardar columna';
	$MULTILANG_FrmAumentaPeso='Aumentar peso (bajar)';
	$MULTILANG_FrmDisminuyePeso='Disminuir peso (subir)';
	$MULTILANG_FrmHlpCambiaEstado='Cambiar estado';
	$MULTILANG_FrmAdvDelCampo='IMPORTANTE:  Al eliminar el campo los usuarios no podr&aacute;n verlo  y no podr&aacute; deshacer esta operaci&oacute;n.\nEst&aacute; seguro que desea continuar ?';
	$MULTILANG_FrmTitComandos='Definici&oacute;n general de acciones y comandos';
	$MULTILANG_FrmTipoAcc='Tipo de acci&oacute;n';
	$MULTILANG_FrmAccUsuario='Acci&oacute;n Usuario';
	$MULTILANG_FrmOrden='Orden';
	$MULTILANG_FrmAdvDelBoton='IMPORTANTE:  Al eliminar el bot&oacute;n/acci&oacute;n los usuarios no podr&aacute;n verlo o ejecutar el comando asociado a este y no podr&aacute; deshacer esta operaci&oacute;n luego.\nEst&aacute; seguro que desea continuar ?';
	$MULTILANG_FrmObjetos='Objetos y Campos de datos';
	$MULTILANG_FrmDesObjetos='Agregar un objeto o campo de datos';
	$MULTILANG_FrmDesCampos='Dise&ntilde;o general de campos';
	$MULTILANG_FrmAcciones='Acciones, botones y comandos';
	$MULTILANG_FrmDesBoton='Agregar bot&oacute;n o acci&oacute;n';
	$MULTILANG_FrmDesAcciones='Definici&oacute;n general de acciones';
	$MULTILANG_FrmVolverLista='Volver a lista de formularios';
	$MULTILANG_FrmErr1='Debe indicar un t&iacute;tulo v&aacute;lido para el formulario.';
	$MULTILANG_FrmErr2='Debe indicar un nombre v&aacute;lido para la tabla de datos asociada al formulario.';
	$MULTILANG_FrmAgregar='Agregar nuevo formulario';
	$MULTILANG_FrmDetalles='Defina los detalles del formulario';
	$MULTILANG_FrmTitVen='T&iacute;tulo de ventana';
	$MULTILANG_FrmDesTit='Texto que aparecer&aacute; en la parte superior de la ventana de formulario o barra de t&iacute;tulo';
	$MULTILANG_FrmHlp='T&iacute;tulo de ayuda';
	$MULTILANG_FrmDesHlp='Texto que aparecer&aacute; como encabezado para el texto de ayuda del formulario';
	$MULTILANG_FrmTxt='Texto de ayuda';
	$MULTILANG_FrmDesTxt='Texto completo con la descripcion de funciones resumida para el formulario.  Puede ser cualquier texto introductorio para el usuario';
	$MULTILANG_FrmImagen='Im&aacute;gen de ayuda';
	$MULTILANG_FrmNumeroCols='N&uacute;mero columnas';
	$MULTILANG_FrmDesNumeroCols='Indica en cuantas columnas deben desplegarse los campos cuando el formulario sea cargado';
	$MULTILANG_FrmCreaDisena='Crear y dise&ntilde;ar';
	$MULTILANG_FrmTitForms='Formularios ya definidos en el sistema';
	$MULTILANG_FrmCamposAcciones='Campos y acciones';
	$MULTILANG_FrmAdvDelForm='IMPORTANTE:  Al eliminar el formulario los usuarios no podr&aacute;n accesarlo nuevamente para operaciones de consulta o ingreso de datos definidas en &eacute;l y no podr&aacute; deshacer esta operaci&oacute;n. Esto tambien elimina cualquier dise&ntilde;o interno del formulario.\nEst&aacute; seguro que desea continuar ?';
	$MULTILANG_FrmAdvDelForm='Editar scripts (avanzado)';
	$MULTILANG_FrmHlpFunciones='Todas las funciones JavaScript definidas en este espacio ser&aacute;n inclu&iacute;das al formulario cada vez que sea cargado.<br>Si requiere comportamientos adicionales o eventos especificos lanzados por medio de botones o dem&aacute;s objetos<br> en su formulario este es el espacio para definirlos.<br><b>Al utilizar comillas en parametros y funciones estas deben ser siempre dobles</b>, no simples.<br>La funci&oacute;n FrmAutoRun siempre debe existir (aunque sea vac&iacute;a) pues ser&aacute; ejecutada autom&aacute;ticamente en cada carga del Formulario.';
	
	//Informes
	$MULTILANG_InfErr1='Se debe indicar los valores para los campos correspondientes al menos a una serie de datos.<br>Si no desea generar un gr&aacute;fico entonces debe cambiar el tipo de informe a tabla de datos';
	$MULTILANG_InfErr2='Debe indicar un t&iacute;tulo v&aacute;lido para el informe.';
	$MULTILANG_InfErr3='Debe indicar un nombre v&aacute;lido para la categor&iacute;a asociada al informe.';
	$MULTILANG_InfErrCondicion='La condici&oacute;n especificada no es v&aacute;lida o carece de al menos uno de sus lados de comparaci&oacute;n.';
	$MULTILANG_InfErrCampo='Debe indicar un nombre de campo v&aacute;lida para el origen de datos del informe.';
	$MULTILANG_InfErrTabla='Debe indicar un nombre de tabla v&aacute;lida para el origen de datos del informe.';
	$MULTILANG_InfErr4='Debe indicar un t&iacute;tulo o etiqueta v&aacute;lida para el bot&oacute;n.';
	$MULTILANG_InfErr5='Debe indicar una acci&oacute;n v&aacute;lido para ser ejecutada cuando se active el control.';
	$MULTILANG_InfAgregaTabla='Agregar una nueva tabla al informe';
	$MULTILANG_InfTablaManual='Especificar tabla manualmente';
	$MULTILANG_InfDesTablaManual='En caso de no seleccionar una tabla en la parte superior puede indicar aqu&iacute; el nombre de una tabla.  Esta opci&oacuten es &uacute;til cuando requiere acceder a informaci&oacute;n contenida en tablas internas de Pr&aacute;ctico o tablas creadas mediante otras aplicaciones';
	$MULTILANG_InfAliasManual='Especificar un alias manualmente';
	$MULTILANG_InfDesAliasManual='Util para definir el nombre de una tabla generada a partir de una subconsulta o indicada manualmente';
	$MULTILANG_InfBtnAgregaTabla='Agregar tabla';
	$MULTILANG_InfTablasDef='Tablas definidas en este informe';
	$MULTILANG_InfAlias='Alias';
	$MULTILANG_InfAdvBorrado='IMPORTANTE:  Al eliminar el objeto seleccionado la consulta o informe puede ser inconsistente.\nEst&aacute; seguro que desea continuar ?';
	$MULTILANG_InfAgregaCampo='Agregar un nuevo campo al informe';
	$MULTILANG_InfCampoDatos='Campo de datos';
	$MULTILANG_InfCampoManual='Especificar campo manualmente';
	$MULTILANG_InfDesCampoManual='En caso de no seleccionar un campo en la parte superior puede indicar aqu&iacute; el nombre de un campo.  Esta opci&oacuten es &uacute;til cuando requiere acceder a informaci&oacute;n contenida en campos internos de Pr&aacute;ctico o campos creadas mediante otras aplicaciones';
	$MULTILANG_InfDesAliasManual2='Util para definir el nombre de un campo generado a partir de una subconsulta de agrupaci&oacute;n o indicado manualmente';
	$MULTILANG_InfBtnAgregaCampo='Agregar campo';
	$MULTILANG_InfCamposDef='Campos definidos en este informe';
	$MULTILANG_InfAddCondicion='Agregar una nueva condici&oacute;n al informe';
	$MULTILANG_InfPrimer='Primer campo o valor';
	$MULTILANG_InfOperador='Operador de comparaci&oacute;n';
	$MULTILANG_InfSegundo='Segundo campo o valor';
	$MULTILANG_InfMayorQue='Mayor';
	$MULTILANG_InfMenorQue='Menor';
	$MULTILANG_InfMayorIgualQue='Mayor o Igual';
	$MULTILANG_InfMenorIgualQue='Menor o Igual';
	$MULTILANG_InfDiferenteDe='Diferente';
	$MULTILANG_InfIgualA='Igual';
	$MULTILANG_InfDesManual='En cualquiera de los campos manuales puede encerrar expresiones o valores tipo cadena de caracteres utilizando comillas dobles';
	$MULTILANG_InfOperador='Agregar un agrupador de expresiones o un operador l&oacute;gico ';
	$MULTILANG_InfOpParentesisA='Abrir par&eacute;ntesis';
	$MULTILANG_InfOpParentesisC='Cerrar par&eacute;ntesis';
	$MULTILANG_InfOpAND='Y L&oacute;gico';
	$MULTILANG_InfOpOR='O L&oacute;gico';
	$MULTILANG_InfOpNOT='Negaci&oacute;n';
	$MULTILANG_InfOpXOR='O Exclusivo';
	$MULTILANG_InfTitOp='Cu&aacute;ndo utilizar esta opci&oacute;n?';
	$MULTILANG_InfDesOp='Si usted requiere agregar m&aacute;s de una sentencia a su condici&oacute;n de filtrado de resultados o si requiere agrupar varias condiciones para tener precedencia sobre algunas operaciones entonces puede utilizar esta opci&oacute;n.  Trabaja de manera independiente y debe ser agregada como un registro aparte de la consulta';
	$MULTILANG_InfReco1='Recomendaci&oacute;n';
	$MULTILANG_InfReco2='No olvide agregar operadores AND seguidos de cada condici&oacute;n que relacione llaves for&aacute;neas entre las diferentes tablas del informe cuando aplique (generalmente cuando usa m&aacute;s de una tabla).';
	$MULTILANG_InfBtnAddCondic='Agregar condicion / operador';
	$MULTILANG_InfDefCond='Condiciones definidas en este informe';
	$MULTILANG_InfTitGrafico='Especifica tipos de gr&aacute;fico a generar por el informe';
	$MULTILANG_InfSeriesGrafico1='SERIES PARA EL GRAFICO';
	$MULTILANG_InfSeriesGrafico2='Gr&aacute;ficos con m&uacute;ltiples series deben devolver el mismo n&uacute;mero de etiquetas';
	$MULTILANG_InfNomSerie='Nombre de la Serie';
	$MULTILANG_InfCampoEtiqSerie='Campo de etiqueta';
	$MULTILANG_InfCampoValor='Campo de valor (debe ser num&eacute;rico)';
	$MULTILANG_InfVistaGrafico1='APARIENCIA y DISTRIBUCION';
	$MULTILANG_InfVistaGrafico2='Seleccione de acuerdo al n&uacute;mero de series deseadas';
	$MULTILANG_InfTipoGrafico='Tipo de gr&aacute;fico';
	$MULTILANG_InfGrafico1='Barras horizontales';
	$MULTILANG_InfGrafico2='Barras horizontales (multiples series)';
	$MULTILANG_InfGrafico3='Grafico de linea';
	$MULTILANG_InfGrafico4='Grafico de linea (multiples series)';
	$MULTILANG_InfGrafico5='Barras verticales';
	$MULTILANG_InfGrafico6='Barras verticales (multiples series)';
	$MULTILANG_InfGrafico6='Grafico de torta (solo una serie)';
	$MULTILANG_InfActGraf='Actualizar formato del gr&aacute;fico';
	$MULTILANG_InfAgrupa='Especifica criterios de agrupaci&oacute;n y ordenamiento';
	$MULTILANG_InfReco3='Utilice solamente campos definidos en su consulta.';
	$MULTILANG_InfCriterioAgrupa='Criterio de agrupamiento';
	$MULTILANG_InfCriterioOrdena='Criterio de ordenamiento';
	$MULTILANG_InfTitAgrupa='Como se agrupan los resultados?';
	$MULTILANG_InfDesAgrupa='Utilice esta opcion solamente si su informe maneja operaciones como suma, promedio o conteo dentro de los campos desplegados.  Ej. SUM(campo), AVG(campo), COUNT(*).  En esos casos indique por cu&aacute;l o cuales campos separados por coma se debe agrupar los resultados';
	$MULTILANG_InfTitOrdena='Como se ordenan los resultados?';
	$MULTILANG_InfDesOrdena='Permite ordenar los resultados por alguno de los desplegados.  Indique por cu&aacute;l o cuales campos separados por coma se debe ordenar los resultados, si lo desea despu&eacute;s de cada campo puede utilizar el modificador ASC o DESC para indicar si es ascedente o descendente';
	$MULTILANG_InfActCriterios='Actualizar criterios de agrupoaci&oacute;n y ordenamiento';
	$MULTILANG_InfTitBotones='Agregar botones y acciones a cada registro';
	$MULTILANG_InfDelReg='Eliminar registro';
	$MULTILANG_InfCargaForm='Cargar un formulario por ID';
	$MULTILANG_InfHlpAccion='Si desea cargar un formulario utilice la notaci&oacute;n  ID:1:CampoBusqueda<br>Si desea eliminar el registro asociado indique la tabla.campo usada para comparar';
	$MULTILANG_InfVinculo='Campo de v&iacute;nculo';
	$MULTILANG_InfDesVinculo='IMPORTANTE: Se asumir&aacute; el primer campo o columna como de valor &uacute;nico<br>
				para realizar las operaciones de eliminaci&oacute;n o apertura de<br>
				nuevos formularios.  Se recomienda utilizar campos que realmente sean de<br>
				valor &uacute;nico a menos que se deseen operaciones grupales.';
	$MULTILANG_InfDesPeso='Posicion en la que aparece el boton dentro de los creados al lado derecho de cada registro. Orden de izquierda a derecha.';

	//Proceso de instalacion
	$MULTILANG_Instalacion='Proceso de instalaci&oacute;n';
	$MULTILANG_SubtituloPractico1='Generador de Aplicaciones WEB';
	$MULTILANG_SubtituloPractico2='Libre y multiplataforma';
	$MULTILANG_InstaladorAplicacion='Instalador de aplicaci&oacute;n';
	$MULTILANG_BienvenidaInstalacion='Bienvenido al proceso de instalaci&oacute;n';
	$MULTILANG_BienvenidaDescripcion='Este asistente le guiar&aacute; en cada paso de las configuraciones iniciales para el uso de Pr&aacute;ctico como un entorno visual para el desarrollo de aplicaciones web';
	$MULTILANG_ResumenLicencia='Esta herramienta es liberada bajo licencia GNU-GPL v2';
	$MULTILANG_AmpliacionLicencia='Una copia en l&iacute;nea de esta licencia puede ser encontrada en diferentes formatos e idiomas en el <a href="http://www.gnu.org/licenses/gpl-2.0.html">sitio web de la GNU</a>';
	$MULTILANG_ChequeoPreprocesador='Chequeo configuraci&oacute;n de preprocesador';
	$MULTILANG_VistaPreprocesador='Una vista de su configuraci&oacute;n de PHP se encuentra disponible en <b><a target="_blank" href="paso_i.php">[este enlace]</a>';
	$MULTILANG_CumplirRequisitos='Debe cumplir con lo siguiente';
	$MULTILANG_CumplirPDO='Extensi&oacute;n PDO activada';
	$MULTILANG_CumplirDrivers='Driver PDO para el tipo de base de datos deseada';
	$MULTILANG_CumplirGD='Extensi&oacute;n GD 2+ para manipulaci&oacute;n de gr&aacute;ficos y su soporte para FreeType 2+';
	$MULTILANG_ChequeoDirectorios1='Chequeo de directorios';
	$MULTILANG_ChequeoDirectorios2='Los siguientes archivos y directorios deben contar con permisos de escritura para que el aplicativo	pueda operar correctamente';
	$MULTILANG_ErrorEscritura='<b>Se han encontrado errores al tratar de escribir en los directorios de instalaci&oacute;n !!!</b>:<br>Las rutas indicadas deben pertenecer al usuario del webserver que ejecuta los scripts de Pr&aacute;ctico (generalmente apache<br>www, www-data u otro similar) y contar con permisos 755 para el caso de carpetas y 644 para los archivos.<br>Una forma r&aacute;pida de actualizar estos permisos puede ser ejecutando desde la raiz de Pr&aacute;ctico los comandos:<li>find . -type d -exec chmod 755 {} \;  &nbsp;&nbsp;(cambiar&aacute; todos los permisos de carpetas)<li>find . -type f -exec chmod 644 {} \;  &nbsp;&nbsp;(cambiar&aacute; todos los permisos de archivos)<li>chown -R www-data *  &nbsp;&nbsp;(asumiendo que www-data es el usuario que corre el servicio web)';
	$MULTILANG_ProbarNuevamente='Probar de nuevo';
	$MULTILANG_ConfiguracionDescripcion='Indique la configuraci&oacute;n deseada para el almacenamiento de aplicaciones e informaci&oacute;n de usuario generada por Pr&aacute;ctico, as&iacute; como otras opciones importantes de la herramienta.  Esta ventana ser&aacute; presentada s&oacute;lo una vez as&iacute; que aseg&uacute;rese de diligenciar y confirmar toda la informaci&oacute;n requerida';
	$MULTILANG_PuertoNoPredeterminado='(si no es el predeterminado)';
	$MULTILANG_AyudaTitMotor='MySQL y MariaDB';
	$MULTILANG_AyudaDesMotor='Son los motores oficiales.  Sobre ellos se hace el desarrollo y pruebas de la herramienta y aunque gracias a PDO usted podr&aacute; utilizar la herramienta en otros motores es probable que deba hacer ajustes a operaciones espec&iacute;ficas de &eacute;stos.';
	$MULTILANG_AyudaTitBD='La base de datos debe existir previamente';
	$MULTILANG_AyudaDesBD='Para motores diferentes a SQLite usted debe haber creado primero la base de datos.  Para SQLite solamente requiere especificar el nombre del archivo asociado a la BD (ej. practico.sqlite3) y Practico intentara crearlo por usted siempre y cuando tenga los permisos adecuados sobre su servidor web.';
	$MULTILANG_PrefijoCore='Prefijo tablas internas de Pr&aacute;ctico';
	$MULTILANG_PrefijoApp='Prefijo tablas de Aplicaci&oacute;n';
	$MULTILANG_AyudaTitPreCore='Se recomienda NO vac&iacute;o Ni Mayusculas';
	$MULTILANG_AyudaDesPreCore='';
	$MULTILANG_AyudaTitPreApp='Importante';
	$MULTILANG_AyudaDesPreApp='El prefijo utilizado para las tablas de aplicaci&oacute;n puede ser utilizado para separar diferentes instalaciones de Pr&aacute;ctico sobre una misma base de datos o tambi&eacute;n puede ser dejado vac&iacute;o para enlazar/integrar a Pr&aacute;ctico con otras aplicaciones pre-existentes. No se recomienda mayusculas para compatibilidad entre motores.';
	$MULTILANG_AyudaLlave='valor para firmar cuentas de usuario';
	$MULTILANG_NotasImportantesInst1='<u>IMPORTANTE 1</u>: La base de datos debe existir previamente para que Pr&aacute;ctico pueda conectarse a ella y generar las estructuras requeridas.  Consulte con su proveedor de hosting o administrador de sistemas c&oacute;mo crear una base de datos con privilegios suficientes para trabajar con Pr&aacute;ctico.<br><br><u>IMPORTANTE 2</u>: El instalador eliminar&aacute; todas las tablas existentes sobre la base de datos indicada y que coincidan con los nombres de tablas que utilizar&aacute; Pr&aacute;ctico.  Si usted considera que puede tener informaci&oacute;n importante en ellas se recomienda realizar una copia de seguridad antes de continuar.  Si desea compartir una misma base de datos entre diferentes instalaciones de Pr&aacute;ctico puede cambiar los prefijos de tabla utilizados por cada una.';
	$MULTILANG_ParametrosApp='Par&aacute;metros para su primera aplicaci&oacute;n';
	$MULTILANG_ParamNombreEmpresa='Nombre corto de su Organizaci&oacute;n o empresa';
	$MULTILANG_ParamNombreApp='Nombre de su aplicaci&oacute;n';
	$MULTILANG_ParamVersionApp='Versi&oacute;n inicial de su aplicaci&oacute;n';
	$MULTILANG_AyudaTitNomEmp='Nombre a desplegar en la parte superior';
	$MULTILANG_AyudaDesNomEmp='Este texto ser&aacute; utilizado en informes y espacios de la aplicaci&oacute;n que requieran un nombre corto para identificar su organizaci&oacute;n.';
	$MULTILANG_AyudaTitNomApp='Nombre descriptivo';
	$MULTILANG_AyudaDesNomApp='El nombre especificado aparecer&aacute; siempre en la parte superior de su aplicaci&oacute;n.';
	$MULTILANG_NotasImportantesInst2='<u>IMPORTANTE</u>: Otros parametros como nombre largo y corto de su empresa, fecha de lanzamiento, textos de licencia y creditos podran ser modificados posteriormente mediante las opciones disponibles para el usuario administrador.';
	$MULTILANG_AyudaTitCaptcha='Longitud de la palabra';
	$MULTILANG_AyudaDesCaptcha='Indica el n&uacute;mero de s&iacute;mbolos utilizados en la palabra de seguridad que deben ingresar los usuarios para cada acceso al sistema.';
	$MULTILANG_ModoDepuracion='Activar modo de depuraci&oacute;n?';
	$MULTILANG_AyudaTitDebug='Presentar errores y advertencias';
	$MULTILANG_AyudaDesDebug='Para sitios en producci&oacute;n esta opci&oacute;n debe estar apagada.  Cuando se enciende ense&ntilde;a durante la ejecuci&oacute;n de la aplicaci&oacute;n todos los errores y mensajes que puedan ser generados por el preprocesador de hipertexto - PHP';
	$MULTILANG_MotorAuth='Motor de autenticaci&oacute;n';
	$MULTILANG_AuthPractico='Interno (Tablas propias de Pr&aacute;ctico usando MD5)';
	$MULTILANG_AuthLDAP='LDAP (Servidor de directorio)';
	$MULTILANG_AyudaDesAuth='El uso de un motor de autenticaci&oacute;n diferente a Pr&aacute;ctico no excluye la creaci&oacute;n de los usuarios sobre la herramienta.  El motor externo servira como metodo para validar el login y clave correspondiente como un m&eacute;todo de autenticaci&oacute;n centralizado; pero el resto de caracter&iacute;sticas del perfil ser&aacute;n tomadas desde el usuario Pr&aacute;ctico.  El cambio de contrase&ntilde;a en Pr&aacute;ctico ser&aacute; deshabilitado para que sea controlada solamente por el motor externo.  El usuario admin seguir&aacute; siendo siempre aut&oacute;nomo para no perder control de acceso por errores de configuraci&oacute;n.';
	$MULTILANG_AyudaTitCript='Tipo de encripcion de claves usado por el motor';
	$MULTILANG_AyudaDesCript='Especifique el tipo de encripcion utilizado por el sistema de autenticacion que va a utilizar.  Pr&aacute;ctico encriptar&aacute; el valor de clave ingresado por el usuario antes de enviarla al motor a verificaci&oacute;n.';
	$MULTILANG_AlgoritmoCripto='Algoritmo de encripci&oacute;n';
	$MULTILANG_Dominio='Dominio';
	$MULTILANG_UO='Unidad organizacional o contexto';
	$MULTILANG_AyudaDesLdapIP='Indique la direccion IP del servidor de directorio o su nombre en caso de poder ser resuelto.';
	$MULTILANG_AyudaDesLdapDominio='Dominio utilizado por el servidor. Ejemplo: midominio.com.co  Con esto sera creada la cadena interna dc=midominio,dc=com,dc=co';
	$MULTILANG_AyudaDesLdapUO='Contexto de conexion del usuario. Debe existir sobre el servidor LDAP, ej: people, ventas, mercadeo, etc';
	$MULTILANG_TitInsPaso3='Escribiendo configuraci&oacute;n y conectando Base de Datos';
	$MULTILANG_DesInsPaso3='Se esta escribiendo el archivo de configuracion.php ubicado en /core con los par&aacute;metros por usted indicados y se est&aacute; probando la conexi&oacute;n a la base de datos indicada.';
	$MULTILANG_ErrorEscribirConfig='<b>Se han encontrado errores al tratar de escribir el archivo de configuraci&oacute;n !!!</b>:<br>Si lo desea una alternativa puede ser cambiar usted mismo los valores por defecto incluidos en el archivo core/configuracion.php.<br><br>Tambi&eacute;n puede cambiar los permisos al archivo de configuraci&oacute;n y probar nuevamente con este asistente.';
	$MULTILANG_ErrorConexBD='<b>Se han encontrado errores al conectar con la Base de Datos !!!</b>:<br>Verifique los valores ingresados en el paso anterior e intente nuevamente.';
	$MULTILANG_InfoPaso3='<b>Todo parace estar bien con su configuraci&oacute;n b&aacute;sica de PDO.</b><br>El ultimo paso consiste en indicar al asistente de instalaci&oacute;n como tratar su base de datos:<br><br>
				<li><b>1.</b> Agregar datos de inicio a la base de datos, esto incluye el usuario inicial (admin), menues y dem&aacute;s registros sobre las tablas Core de Pr&aacute;ctico.  Esta es la mejor opci&oacute;n para las instalaciones nuevas.
				<li><b>2.</b> Dejar la base de datos como est&aacute;, lo que indica que no debe ser ejecutada ninguna operaci&oacute;n sobre la base de datos.  Esta opci&oacute;n es &uacute;til cuando se intenta hacer una instalaci&oacute;n sobre una base de datos existente que contiene aplicaciones dise&ntilde;adas y usuarios activos.  Tambi&eacute;n puede entenderse como una base de datos en blanco para instalaciones nuevas que no tendr&aacute; siquiera usuarios para accesar ni opciones para seleccionar.';
	$MULTILANG_BtnAplicarBD='1. Agregar info inicial a la BD';
	$MULTILANG_BtnNoAplicarBD='2. No modificar la BD conectada';
	$MULTILANG_ExeScripts='Ejecutando scripts de base de datos (si aplica)';
	$MULTILANG_ErrorScripts='Error ejecutando la consulta sobre la base de datos';
	$MULTILANG_IrInstalacion='Ir a su instalaci&oacute;n de Pr&aacute;ctico';
	$MULTILANG_Totalejecutado='Total consultas ejecutadas';
	$MULTILANG_MsjFinal1='Si esta es una instalaci&oacute;n nueva puede ingresar al sistema mediante las credenciales<b> admin/admin</b> y cambiarlas luego por las que usted desee.';
	$MULTILANG_MsjFinal2='Recuerde eliminar por completo el directorio de instalaci&oacute;n (carpeta /ins)</b></u> para evitar que otra persona ejecute nuevamente estos scripts sobre un sistema en producci&oacute;n pudiendo ocasionar alg&uacute;n tipo de da&ntilde;o.';
	$MULTILANG_MsjFinal2='Resumen de operaciones ejecutadas';
?>