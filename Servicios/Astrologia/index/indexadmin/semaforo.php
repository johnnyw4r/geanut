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



<span class="style1">Semaforo</span> <br />
  <br />
<form id="form1" name="form1" method="post" action="session.php" target="bottomFrame">
  <table width="800" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="9%"><label>
        <input type="image" name="luz_roja" id="luz_roja" src="../../../../images/index/semaforo_02.jpg" />
      </label></td>
      <td width="21%"><label>
        <input type="text" name="semaforo_rojo" id="semaforo_rojo" />
      </label></td>
      <td width="70%"><label>
	  <?php
			$titulo_pensamiento=new FCKeditor('semaforo_rojo_explicacion');
			$titulo_pensamiento->BasePath= '../../../../clases/fckeditor/';
			$titulo_pensamiento->Width='77%';
			$titulo_pensamiento->Height='75';
			$titulo_pensamiento->ToolbarSet='Basic';
			$titulo_pensamiento->ToolbarStartExpanded=false;
			$titulo_pensamiento->Create();
		?>
      <!--  <input type="text" name="semaforo_rojo_explicacion" id="semaforo_rojo_explicacion" /> -->
      </label></td>
    </tr>
    <tr>
      <td><label>
        <input type="image" name="luz_amarilla" id="luz_amarilla" src="../../../../images/index/semaforo_04.jpg" />
      </label></td>
      <td><label>
        <input type="text" name="semaforo_amarillo" id="semaforo_amarillo" />
      </label></td>
      <td><label>
      <?php
			$titulo_pensamiento=new FCKeditor('semaforo_amarillo_explicacion');
			$titulo_pensamiento->BasePath= '../../../../clases/fckeditor/';
			$titulo_pensamiento->Width='77%';
			$titulo_pensamiento->Height='75';
			$titulo_pensamiento->ToolbarSet='Basic';
			$titulo_pensamiento->ToolbarStartExpanded=false;
			$titulo_pensamiento->Create();
		?>
        <!-- <input type="text" name="semaforo_amarillo_explicacion" id="semaforo_amarillo_explicacion" /> -->
      </label></td>
    </tr>
    <tr>
      <td><label>
        <input type="image" name="luz_verde" id="luz_verde" src="../../../../images/index/semaforo_06.jpg" />
      </label></td>
      <td><label>
        <input type="text" name="semaforo_verde" id="semaforo_verde" />
      </label></td>
      <td><label>
      <?php
			$titulo_pensamiento=new FCKeditor('semaforo_verde_explicacion');
			$titulo_pensamiento->BasePath= '../../../../clases/fckeditor/';
			$titulo_pensamiento->Width='77%';
			$titulo_pensamiento->Height='75';
			$titulo_pensamiento->ToolbarSet='Basic';
			$titulo_pensamiento->ToolbarStartExpanded=false;
			$titulo_pensamiento->Create();
		?>
        <!-- <input type="text" name="semaforo_verde_explicacion" id="semaforo_verde_explicacion" /> -->
      </label></td>
    </tr>
  </table>
  <input type="submit" name="guardar" id="guardar" value="Guardar" />
  <br />

</form>
<p>&nbsp; </p>
</body>
</html>
