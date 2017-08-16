<?php require_once('../../../../Connections/dbpreserver.php');
	echo "login";?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['usuario'])) {
  $loginUsername=$_POST['usuario'];
  $password=$_POST['clave'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "homeindexadmin.php";
  $MM_redirectLoginFailed = "login.php";
  $MM_redirecttoReferrer = false;
  $con = conecta();
  //mysql_select_db($database_dbpreserver, $dbpreserver);
  
  $LoginRS__query=sprintf("SELECT usuario, clave FROM usuarios WHERE usuario=%s AND clave=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
.style2 {font-size: 16px}
-->
</style>
</head>

<body>
<div align="center" class="style1">Registro de autenticación de usuario</div>
<br />
<div align="center" class="style2">Para poder acceder a este recurso usted debe estar registrado. Ingrese su nombre de usuario y contraseña para continuar.</div><br />

<form action="<?php echo $loginFormAction; ?>" method="post"><center><table width="33%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="41%"><div align="left">Nombre de usuario:</div></td>
    <td width="59%"><label>
      <div align="left">
        <input name="usuario" type="text" id="usuario" size="15" />
        </div>
    </label></td>
  </tr>
  <tr>
    <td><div align="left">Contraseña:</div></td>
    <td><label>
      <div align="left">
        <input name="clave" type="password" id="clave" size="15" />
        </div>
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      
        <div align="left">
          <input type="submit" name="entrar" id="entrar" value="Entrar" />
        </div>
    </label></td>
  </tr>
</table>
</center>
</form>
</body>
</html>
