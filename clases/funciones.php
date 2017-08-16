<?php

/*  Autor: Daniel Faria
	Revisado por:Johnny Aracena
    Versión: 1.1
    Archivo: funciones.php
*/

//include("code/constantes.php");


function edicion_numero($dia,$mes,$ano)
{//Inicio de Funcion

$conexion=mysql_connect(g_server,g_user,g_pass) or 
  die("Problemas en la conexion");
  
mysql_select_db(g_database,$conexion) or
  die("Problemas en la selección de la base de datos");
  
$registros=mysql_query("select numero from edicion where dia = ".$dia." and mes = ".$mes." and ano = ".$ano.";") or
  die("Problemas en el select:".mysql_error());
 

if ($reg=mysql_fetch_array($registros))
{

$edicion = $reg['numero'];

}
else
{
  echo "No hay!!!!";
}
mysql_close($conexion);

return $edicion;
}//Final de la  Funcion


?>