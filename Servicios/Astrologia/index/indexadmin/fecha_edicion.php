<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<span class="style2">Fecha de edición</span>
<br />
<br />
<form action="session.php" method="post" target="bottomFrame"><table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="33%">Seleccione la fecha para esta Edición:</td>
    <td width="6%">
      
        <div align="center">
          <select name="dia_pub_index" id="dia">
            <?php
			$dia_=1;
			$dia_predet= date("d");
			
			for($dia_;$dia_<=31;$dia_=$dia_+1)
				if ($dia_predet==$dia_)
					echo "<option selected value='$dia_'>$dia_";
				else
					echo "<option value='$dia_'>$dia_";	
		?>
          </select>
      </div></td>
    <td width="2%">&nbsp;de&nbsp;</td>
    <td width="5%"><div align="center">
      <select name="mes_pub_index" id="mes">
        <?php
        	$mes_=1;
			$mes_predet= date("m");
			
			for($mes_;$mes_<=12;$mes_=$mes_+1)
				if ($mes_predet==$mes_)
					echo "<option selected value='$mes_'>$mes_";
				else
					echo "<option value='$mes_'>$mes_";	
		?>
      </select>
    </div></td>
    <td width="2%"><div align="center">&nbsp;de&nbsp;</div></td>
    <td width="52%">
      <div align="left">
        <select name="ano_pub_index" id="ano">
          <?php
			$ano_=2000;
			$ano_predet=date("Y");
			
			for($ano_;$ano_<=2020;$ano_=$ano_+1)
				if ($ano_predet==$ano_)
					echo "<option selected value='$ano_'>$ano_";
				else
					echo "<option value='$ano_'>$ano_";	
		?>    
          </select>
      </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
  <p>
    <input type="submit" name="guardar" id="guardar" value="Guardar" />
  </p>
</form>

</body>
</html>
