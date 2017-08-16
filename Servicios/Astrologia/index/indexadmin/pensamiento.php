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

<?php
	include("../../../../clases/fckeditor/fckeditor.php");
?>
<span class="style1">Pensamiento</span>
<form action="session.php" method="post" name="form1" target="bottomFrame" id="form1">
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="left"></div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>Titulo</strong></div></td>
  </tr>
  <tr>
    <td><div align="left">
    <?php
		$titulo_pensamiento=new FCKeditor('titulo_pensamiento');
		$titulo_pensamiento->BasePath= '../../../../clases/fckeditor/';
		$titulo_pensamiento->Width='77%';
		$titulo_pensamiento->Height='50';
		$titulo_pensamiento->ToolbarSet='Basic';
		$titulo_pensamiento->ToolbarStartExpanded=FALSE;
		$titulo_pensamiento->Create();
    ?>
    <!--  <input name="titulo_pensamiento" type="text" id="titulo_pensamiento" size="30" /> -->
    </div></td>
  </tr>
  <tr>
    <td><div align="left">&nbsp;</div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>Pensamiento</strong></div></td>
  </tr>
  <tr>
    <td><div align="left">
<?php
	$titulo_pensamiento=new FCKeditor('pensamiento');
    $titulo_pensamiento->BasePath= '../../../../clases/fckeditor/';
    $titulo_pensamiento->Width='77%';
    $titulo_pensamiento->Height='100';
	$titulo_pensamiento->ToolbarSet='Basic';
	$titulo_pensamiento->ToolbarStartExpanded=false;
    $titulo_pensamiento->Create();
?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left">&nbsp;</div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>Autor</strong></div></td>
  </tr>
  <tr>
    <td>
	<?php
    	$titulo_pensamiento=new FCKeditor('autor_pensamiento');
    	$titulo_pensamiento->BasePath= '../../../../clases/fckeditor/';
    	$titulo_pensamiento->Width='77%';
    	$titulo_pensamiento->Height='50';
		$titulo_pensamiento->ToolbarSet='Basic';
		$titulo_pensamiento->ToolbarStartExpanded=false;
    	$titulo_pensamiento->Create();
	?>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input type="submit" name="guardar" id="guardar" value="Guardar" /></td>
  </tr>
  <tr>
    <td width="800"></td>
  </tr>
</table>
</form>
<p>&nbsp; </p>
</body>
</html>
