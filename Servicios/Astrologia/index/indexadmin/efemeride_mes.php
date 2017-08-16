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
<p><span class="style1">Efemeride del Mes<br />
</span></p>
<?php
	function recupera_descripcion($mes)
	{
		/* Variables Locales de la Pagina Aplicación */
	
	$error;
	$estado;
	$conectar=NULL;
	
	/* Librerias necesarias */
	
	include ("../../../../clases/var/variables.php");
	include ("../../../../clases/conector/clase_conector.php");

	/* Crea la conexion nueva a la base de datos */
	$conectar= new dbconnect($HostName,$UserName,$Password, $DataBase);

	//$conectar= new dbconnect($HostName,$UserName,$Password,$DataBase);
	$conectar=mysql_connect($HostName,$UserName,$Password);
	mysql_select_db("geanut",$conectar);

	$mes_actual=date("m");
	$result = mysql_query("SELECT descripcion FROM efemeride_mes where mes='$mes_actual' order by descripcion", $conectar);

	return $result;	
	}
?>

<form id="form1" name="form1" method="post" action="">
  <?php
	
	

	if($_POST["descripción"]!=NULL)
	{
		
	}
	else
	{
	?>
    
  <table width="800" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="17%"><strong>Seleccione el mes:</strong></td>
      <td width="75%">
	<?php
	
		echo '<select name="mes_efemeride" id="mes">';
        	$mes_=1;
			$mes_predet= date("m");
			
			for($mes_;$mes_<=12;$mes_=$mes_+1)
				if ($mes_predet==$mes_)
					echo "<option selected value='$mes_'>$mes_";
				else
					echo "<option value='$mes_'>$mes_";	
      	echo '</select>';
		
		$record=recupera_descripcion($mes_predet);
		
		while ($row = mysql_fetch_row($record))
		{
			echo $row[0];
		}
		
		
	}
?></td>
      <td width="8%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<form id="form2" name="form2" method="post" action="">
</form>
<p>&nbsp;</p>
</body>
</html>
