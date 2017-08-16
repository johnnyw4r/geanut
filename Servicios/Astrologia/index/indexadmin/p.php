<?php session_start();
	session_register('listado_barras_energias');
	$energia_=$_POST['energia'];
	$porcentaje=$_POST['porcentaje'];
	$listado_barras_energias=$_SESSION['listado_barras_energias'];
	
	if($energia_)
	{
		if(!isset($listado_barras_energias))
		{
			$listado_barras_energias[$energia_]=$porcentaje;
		}
		else
		{
			foreach($listado_barras_energias as $ener=>$porcent)
			{
				if ($energia_==$ener)
				{
					$listado_barras_energias[$ener]=$porcentaje;
					$encontrado=1;
				}
			}
			if(!$encontrado)
			{
				$listado_barras_energias[$energia_]=$porcentaje;
			}
		}
	}
	$_SESSION['listado_barras_energias'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="p.php" method="post">
	<input name="energia" type="text" />
   	<input name="porcentaje" type="text" />
    <input name="guardar" type="submit" value="guardar" />
</form>
<?php
	if(isset($listado_barras_energias))
	{
		echo "Las energias seleccionadas son:<br>";
		
		foreach($listado_barras_energias as $ener=>$porcent)
		{
			echo $ener."= ".$porcent."<br>";
		}
	
	}
?>
</body>
</html>