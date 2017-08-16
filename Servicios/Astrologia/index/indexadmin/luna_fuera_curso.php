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
-->
</style>
</head>

<body>
<p>
  	<?php
		include("../../../../clases/fckeditor/fckeditor.php");
	?> 
  <span class="style1">Luna fuera de curso</span></p>
  
<form action="session.php" method="post" name="form1" target="bottomFrame" id="form1">
  <table width="800" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>Hora de inicio:</td>
      <td><input type="text" name="lun_fue_cur_ini" id="hora_inicio" /></td>
    </tr>
    <tr>
      <td>Hora fin:</td>
      <td><input type="text" name="lun_fue_cur_fin" id="hora_fin" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><strong>En Venezuela</strong></td>
    </tr>
    <tr>
      <td>Hora de inicio:</td>
      <td><input type="text" name="lun_fue_cur_ini_local" id="lun_fue_cur_ini_local" /></td>
    </tr>
    <tr>
      <td width="13%">Hora fin:</td>
      <td width="87%"><input type="text" name="lun_fue_cur_fin_local" id="lun_fue_cur_fin_local" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>

    <tr>
      <td colspan="2"><input type="submit" name="guardar" id="guardar" value="Guardar" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
