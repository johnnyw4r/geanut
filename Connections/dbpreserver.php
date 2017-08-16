<?php


function conecta(){
	
	$user = "userGeanut";
	$pass = "geaNut";
	$serv = "localhost";
	$db   = "geanut";
	
	$con = mysql_connect( $serv, $user, $pass ) or die ("Error al conectar a la DB");
	
	mysql_select_db($db, $con);
	
	return $con;
	
}

?>