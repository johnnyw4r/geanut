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
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<p align="left" class="style1">Formulario de Registro de Acontecimientos</p>
<form action="fechas_guardar.php" method="post">

  <div align="left">
    <table width="46%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td rowspan="2">Tipo de Suceso:</td>
        <td><label>
          <input type="radio" name="suceso_tipo" value="1" id="RadioGroup1_0" />
            Acontecimiento</label>          </td>
        <td><input type="radio" name="suceso_tipo" value="2" id="RadioGroup1_1" />
        Nacimiento</td>
      </tr>
      <tr>
        <td><input type="radio" name="suceso_tipo" value="4" id="RadioGroup1_3" />
        Fiesta</td>
        <td><input type="radio" name="suceso_tipo" value="3" id="RadioGroup1_2" />
        Fallecimiento</td>
      </tr>
      
      <tr>
        <td width="11%"><div align="left">Día:</div></td>
        <td width="37%" colspan="2">
          <div align="left">
            <input name="suceso_dia" type="text" id="suceso_dia" size="2" maxlength="2" />
          </div></td>
      </tr>
      <tr>
        <td><div align="left">Mes:</div></td>
        <td colspan="2">
          <div align="left">
            <input name="suceso_mes" type="text" id="suceso_mes" size="2" maxlength="2" />
          </div></td>
      </tr>
      <tr>
        <td><div align="left">Año:</div></td>
        <td colspan="2">
          <div align="left">
            <input name="suceso_ano" type="text" id="suceso_ano" size="10" />
          </div></td>
      </tr>
      <tr>
        <td><div align="left">Url:</div></td>
        <td colspan="2"><div align="left">
            <input name="suceso_url" type="text" id="suceso_url" size="60" />
        </div></td>
      </tr>
      <tr>
        <td><div align="left">Descripción:</div></td>
        <td colspan="2"><div align="left">
            <input name="suceso_descripcion" type="text" id="suceso_descripcion" size="60" />
        </div></td>
      </tr>
      <tr>
        <td><div align="left">Suceso:</div></td>
        <td colspan="2"><textarea name="suceso_desarrollo" cols="50" rows="2" id="suceso_desarrollo"></textarea></td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">
            <input type="submit" name="Guardar" id="Guardar" value="Guardar" />
        </div></td>
        <td><div align="center">
            <input type="reset" name="Limpiar" id="Limpiar" value="Limpiar" />
        </div></td>
      </tr>
      </table>
  </div>
</form>
</body>
</html>
