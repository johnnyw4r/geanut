<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	 function random_color()
	 {
       mt_srand((double)microtime()*1000000);
       $color = '#';
       while(strlen($color)<6){
             $color .= sprintf("%02X", mt_rand(0, 255));
       }
       return $color;
 	} 
	 
?>

<table width="30" border="1" cellspacing="0" cellpadding="0">
<?php
	
	for($col=1;$col<=254;$col++)
	{
		$color="#";
		$color.= sprintf("%02X",$col);
		$color.="0000";
		echo "<tr>";
		echo "<td bgcolor='$color'>$color</td>";
    	echo "</tr>";
		
	}
?>
</table>
</body>
</html>
