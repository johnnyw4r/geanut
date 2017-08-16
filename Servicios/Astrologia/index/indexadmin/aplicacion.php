<?php
/* 	Autor: Johnny Aracena Araya
	Revisado por:
    Versión: 1.0
    Archivo: aplicacion.php
*/
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "login.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	/* 	Autor: Johnny Aracena Araya
		Revisado por:
		Versión: 1.0
		Archivo: clase_conector.php
	*/
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
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
	
	/* Recuperación de el indice de la Tabla Edición */
	
	$id_edicion=$conectar->edicion_numero($dia_pub_index_,$mes_pub_index_,$ano_pub_index_);
	
	/* Inserta los datos a la tabla index_energetico */
	$estado= $conectar->insertar_datos("index_energetico","", "'default','$id_edicion','$titulo_pensamiento_','$pensamiento_','$autor_pensamiento_','','',''");
	
	/* recupera el ID de index_energéticos */
	$id_index_ener= $conectar->recupera_id();

	/* Inserta los datos del signo solar a la tabla signos */
	$estado= $conectar->insertar_datos("signos","", "'default','$id_index_ener','$id_edicion','$solar_entrante_','$solar_saliente_','$sig_sol_desc_','S'");
	
	/* Inserta los datos del signo lunar a la tabla signos */
	$estado= $conectar->insertar_datos("signos","", "'default','$id_index_ener','$id_edicion','$lunar_entrante_','$lunar_saliente_','$sig_lun_desc_','L'");
	
	/* Inserta los datos a la tabla fase_lunar */
	$estado= $conectar->insertar_datos("fase_lunar","", "'default','$id_index_ener','$id_edicion','$titulo_fase_lunar_','$contenido_fase_lunar_',''");
	
	/* Inserta los datos a la tabla luna_fuera_curso */
	$estado= $conectar->insertar_datos("luna_fuera_curso","", "'default','$id_index_ener','$id_edicion','$lun_fue_sur_ini_','$lun_fue_cur_fin_','$lun_fue_cur_ini_local_','$lun_fue_cur_fin_local_'");
	
	/* Inserta los datos a la tabla comentario_astral */
	$estado= $conectar->insertar_datos("comentario_astral","", "'default','$id_index_ener','$id_edicion','$titulo_comentario_astral_','$comentario_astral_'");	
	
	/* Inserta los datos a la tabla formula - resultado */
	
			/*Inserta los datos a la tabla formula*/
			$estado= $conectar->insertar_datos("formula","", "'default','$id_index_ener','$id_edicion','$formula_index_',''");
	
			/* recupera el ID de formula_index */
			$id_formula= $conectar->recupera_id();
			
			/*Inserta los datos a la tabla resultado_energetico*/
			$estado= $conectar->insertar_datos("resultado_energetico","","'default','$id_index_ener','$id_edicion','$id_formula','$titulo_resultado_index_','$resultado_index_'");
	
	/* Inserta los datos a la tabla articulos  index_especial*/
	$estado= $conectar->insertar_datos("articulos","tipo,titulo,contenido","'index_especial','$titulo_index_especial_','$contenido_index_especial_'");
	
	/* Inserta los datos a la tabla articulos  mirnado las estrellas*/
	$estado= $conectar->insertar_datos("articulos","tipo,titulo,contenido,titulo_enlace","'mirando_las_estrellas','$titulo_mirando_estrellas_','$mirando_las_estrellas_','$pie_mirando_las_estrellas_'");
	
	/* Inserta los datos a la tabla articulos  saia_usted*/
	$estado= $conectar->insertar_datos("articulos","tipo,titulo,contenido,titulo_enlace","'sabia_usted','$sabia_usted_titulo_','$sabia_usted_contenido_','$sabia_usted_url_'");
		
	/* Inserta los datos a la tabla semaforo */
	$estado= $conectar->insertar_datos("semaforo","", "'default','$id_index_ener','$id_edicion','$semaforo_rojo_','$semaforo_amarillo_','$semaforo_verde_','$semaforo_rojo_explicacion_','$semaforo_amarillo_explicacion_','$semaforo_verde_explicacion_',''");
	
	
?>
<body>
</body>
</html>
