<?php
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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrador del Index</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<p align="center" class="style1">Administrador del Index</p>
<table width="800" border="1" align="center" cellpadding="0" cellspacing="1">
  <tr>
    <td colspan="3"><div align="center"><strong>Administración relacionada con el Index diario</strong></div></td>
  </tr>
  <tr>
    <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="19%"><div align="center"><a href="fecha_edicion.php" target="mainFrame">Fecha de edición</a></div></td>
        <td width="15%"><div align="center"><a href="pensamiento.php" target="mainFrame">Pensamiento</a></div></td>
        <td width="15%"><div align="center"><a href="index_especial.php" target="mainFrame">Index especial</a></div></td>
        <td width="10%"><div align="center"><a href="signos.php" target="mainFrame">Signos</a></div></td>
        <td width="11%"><div align="center"><a href="fase_lunar.php" target="mainFrame">Fase lunar</a></div></td>
        <td width="18%"><div align="center"><a href="luna_fuera_curso.php" target="mainFrame">Luna fuera de curso</a></div></td>
        <td width="12%"><div align="center"><a href="energias_load.php" target="mainFrame">Energias</a></div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="20%"><div align="center"><a href="formula_resultado.php" target="mainFrame">Formula y Resultado</a></div>          
        <div align="center"></div></td>
        <td width="14%"><a href="comentario_astral.php" target="mainFrame">Comentario astral</a></td>
        <td width="20%"><div align="center"><a href="mirando_las_estrellas.php" target="mainFrame">Mirando las estrellas</a></div></td>
        <td width="16%"><div align="center">Efemerides</div></td>
        <td width="16%"><div align="center"><a href="sabia_usted.php" target="mainFrame">Sabia usted?</a></div></td>
        <td width="14%"><div align="center"><a href="semaforo.php" target="mainFrame">Semaforo</a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>Administración relacionada con el Index mensual</strong></div></td>
  </tr>
  <tr>
    <td width="356"><div align="center"></div></td>
    <td width="241" colspan="-1"><div align="center"><a href="efemeride_mes.php">Efemerides del mes</a></div></td>
    <td width="97" colspan="-1">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">&nbsp;</div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>Otros aspectos del Index</strong></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="acontecimientos.php" target="mainFrame">Acontecimientos</a></div></td>
    <td colspan="-1"><div align="center"><a href="energias_admin.php" target="mainFrame">Administrar Energias</a></div></td>
    <td colspan="-1">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
