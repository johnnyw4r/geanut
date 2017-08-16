<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "login.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
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
<p align="left" class="style2">Selección de Energías</p>

  <?php
	
/* 	Librerias necesarias */
	include ("../../../../clases/var/variables.php");
	include ("../../../../clases/conector/clase_conector.php");
	
/* 	Desserializa el contenido del array lista_energias desde el la pagina energias_load.php
	con todas la energias que hay disponibles en la base de datos*/
	$lista_de_energias_disponibles_en_db=unserialize($_SESSION['lista_energias']); 
/* 	Recibe las variable del energia e porcentaje desde esta misma pagina para procesarla*/
	$id_energia=$_POST['id_energia'];
	$porcentaje=$_POST['porcentaje'];
	
/* 	Se pregunta si existe la variable de sesion "listado_barras_energias_serializado". Si no existe, se genera.
   	Esto se hace para que no se produsca un error por la ausencia de la variable */

	if(isset($_SESSION['lista_energias_seleccionadas_serializado']))
	{
/* 	Si existe la lista de las energias seleccionadas serializada, recarga la lista nuevamente*/
		$lista_energias_seleccionadas=unserialize($_SESSION['lista_energias_seleccionadas_serializado']);
	}

/****** Esta es la seccion que procesa los datos ingresados. 
		Las alternativas son:
			- Ingresa un dato nuevo: Lo agrega a la lista de energias seleccionadas
			- Ingresa un dato que ya existe en la lista: Reemplaza el valor antiguo de la energia por el nuevo
			- Elimina la energia seleccionada: Si no se introduce ningun porcentaje, elimina la energia seleccionada
/******
			
	/* Si se introdujo alguna energía con su porcentaje */
	if(($id_energia and $porcentaje))
	{
/* Si no existe el arreglo conlas energias seleccionadas */
		if(!isset($lista_energias_seleccionadas))
		{
/* Se inicializa el arreglo de las barras de energias seleccionadas con el primer valor*/
			$lista_energias_seleccionadas[$id_energia]=$porcentaje;
		}
/* Si existe la energia seleccionada en el arreglo, se procede e reemplazar el valor anterior*/
		else
		{
/* Se recorre el arreglo de las barras de energias en busqueda de la energia que se quiere procesar*/
			foreach($lista_energias_seleccionadas as $id_ener)
			{	
/* Si la energia que se encontro corresponde a la que se ingreso, se reemplaza el calor de su contenido*/
				if ($id_energia==$id_ener)
				{
/* Se reemplaza el porcentaje de la energia seleccionada por el nuevo porcentaje */
					$lista_energias_seleccionadas[$id_ener]=$porcentaje;
/* Se marca si se encuantra la energia seleccionada */
					$encontrado=1;
				}
			}
			
			if(!$encontrado)
			{
				$lista_energias_seleccionadas[$id_energia]=$porcentaje;
			}
		}
	}
/* Si no se ingresa el porcentaje de la energia, significa que se quiere borrar de la lista */
	else
	{
/* Si existe la lista de energias seleccionadas */
		if(isset($lista_energias_seleccionadas))
		{
/* Se recorre la lista buscando la lista que se quiere borrar */
			foreach($lista_energias_seleccionadas as $id_ener=>$porcent)
			{
/* Si la energia que se apunta es distinta a la que se busca, entonces se guarda en otro arreglo */
				if ($id_ener!=$id_energia)
				{
/* Se guarda la energia en la lista que se rescatara */
					$lista_traspaso_energia[$id_ener]=$lista_energias_seleccionadas[$id_ener];
				}
			}
/* Se vuelca el array de las energias rescatadas para hacerla oficial */
					$lista_energias_seleccionadas=$lista_traspaso_energia;
		}
	}
	
	$_SESSION['lista_energias_seleccionadas_serializado']=serialize($lista_energias_seleccionadas);
	?>
    
    
    
<form id="form1" name="form1" method="post" action="">
    <p><strong>Seleccione Energia:</strong> 
	<?php
	echo '<select name="id_energia">'; // Genera el listbox para desplegar las energias
	/* Llena el listbos con las energias */
	foreach($lista_de_energias_disponibles_en_db as $id_energia=>$nombre_energia)
	{
		echo "<option value='$id_energia'>$nombre_energia</option>";
	}
	echo "</select>";
	
	?>
    =
    <input name="porcentaje" type="text" id="porcentage" size="3" maxlength="3" />  
    <strong> % 
    <input type="submit" name="guardar" id="guardar" value="Aceptar" />
    </strong></p> 
</form>
    
<form action="session.php" method="post" name="form1" target="bottomFrame" id="form1">
	<?php

	if(isset($lista_energias_seleccionadas))
	{	
		echo "<strong>Las energias seleccionadas son:</strong><br>";
		echo "<table border='1' >";
    	
      
/* Determina cual es porcentaje mayor */
			$mayor=max($lista_energias_seleccionadas);		
		
/* Imprime la fila con las columnas de las energías */
			echo "<TR>";
			foreach($lista_energias_seleccionadas as $id_energia=>$porcent)
			{
				/* Ecuacion para determinar donde debe comenzar a imprimir el asterisco en el grafico*/
				/* Si el mayor es el mismo, entonces se queda como mayor el que esta solo */

					$resto=$mayor-(ceil($porcent/10)*10);
					
				echo "	<TD><div align='center'>";
				
				/* 	Para completar correctamente el grafico, se debe comenzar imprimiendo la columna más larga primero
					eso y luego se deben imprimir las demas en una posicion se determina por el mayor-largo_barra_actual*/
					for($punto=1;$punto<=$mayor;$punto=$punto+10)
					{
						if($punto<$resto) 
							echo ".<br>";
						else
							echo "*<br>";
					}
				echo "	</div></TD>";
			}
			echo "</TR>";

		/* Imprime la fila del nombre de las energias */
			echo "<TR>";
			foreach($lista_energias_seleccionadas as $id_energ=>$porcent)
			{
				echo "	<TD><div align='center'>";
				echo $lista_de_energias_disponibles_en_db[$id_energ];
				echo "	</div></TD>";
			}
			echo "</TR>";
		
			/*Imprime la fila con los porcentages de las energias */
			echo "<TR>";
			foreach($lista_energias_seleccionadas as $id_energia=>$porcent)
			{
				echo "	<TD><div align='center'>";
					echo $porcent."%";
				echo "	</div></TD>";
			}
			echo "</TR>";
	}
		
  echo "</table>";
  ?>
    <br />
     <input name="guardar" type="submit" value="Guardar" />
</form>


	
   </p>

</body>
</html>
