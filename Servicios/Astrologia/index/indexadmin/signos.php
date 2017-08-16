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
  <span class="style1">Signos</span></p>
  <form action="session.php" method="post" name="form4" target="bottomFrame" id="form4">
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><strong>Signo Solar</strong></td>
  </tr>
  <tr>
    <td width="10%">Entrante:</td>
    <td width="90%"><input type="text" name="solar_entrante" id="solar_entrante" /></td>
  </tr>
  <tr>
    <td>Saliente:</td>
    <td>
      <input type="text" name="solar_saliente" id="solar_saliente" /> </td>
  </tr>
  <tr>
    <td colspan="2">Comentario</td>
  </tr>
  <tr>
    <td colspan="2"><?php
    	$titulo_pensamiento=new FCKeditor('sig_sol_desc');
    	$titulo_pensamiento->BasePath= '../../../../clases/fckeditor/';
    	$titulo_pensamiento->Width='77%';
    	$titulo_pensamiento->Height='75';
		$titulo_pensamiento->ToolbarSet='Basic';
		$titulo_pensamiento->ToolbarStartExpanded=false;
    	$titulo_pensamiento->Create();
	?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><strong>Signo Lunar</strong></td>
  </tr>
  <tr>
    <td>Entrante</td>
    <td>
      <input type="text" name="lunar_entrante" id="lunar_entrante" /></td>
  </tr>
  <tr>
    <td>Saliente</td>
    <td>
      <input type="text" name="lunar_saliente" id="lunar_saliente" /> </td>
  </tr>
  <tr>
    <td colspan="2">Comentario</td>
  </tr>
  <tr>
    <td colspan="2"><?php
    	$titulo_pensamiento=new FCKeditor('sig_lun_desc');
    	$titulo_pensamiento->BasePath= '../../../../clases/fckeditor/';
    	$titulo_pensamiento->Width='77%';
    	$titulo_pensamiento->Height='75';
		$titulo_pensamiento->ToolbarSet='Basic';
		$titulo_pensamiento->ToolbarStartExpanded=false;
    	$titulo_pensamiento->Create();
	?></td>
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
