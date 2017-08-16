<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
/* Variables Locales de la Pagina Aplicación */
	
	$error;
	$estado;
	$conectar=NULL;
	
	/* Librerias necesarias */
	
	include ("../../../../clases/var/variables.php");
	include ("../../../../clases/conector/clase_conector.php");
	
	/* Crea la conexion nueva a la base de datos */
	$conectar= new dbconnect($HostName,$UserName,$Password, $DataBase);
	
	$estado= $conectar->insertar_datos("fechas","", "'default','$suceso_dia','$suceso_mes','$suceso_ano','$suceso_url','$suceso_desarrollo'");
	
	if ($estado)
	{
		$id_fechas= $conectar->recupera_id();	
		$estado= $conectar->insertar_datos("tipo_fechas","", "'default','$id_fechas','$sucesos_descripcion','$suceso_tipo'");
	}
	else
	{
		echo "Se produjo un error en estado";
	}
?>

</body>
</html>
