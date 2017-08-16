<?php/*
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
}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">

<?php 
	$image=imagecreate(10,10);
	include('../../../../clases/graphpico0.0.3/libfunciones.php');
	include('../../../../clases/graphpico0.0.3/libcolores.php');
	
	$total_colores= count($colores);
	
	for($elemento=5;$elemento<= ($total_colores-5);$elemento+=5)
	{
		echo ".".$colores[$elemento]."{\n";
		echo "	background-color	: ".$colores[$elemento+4].";\n";
		echo "	color			 	: #000000";
		
		/*.$colores[$elemento+2].";\n";*/
		echo "}\n";
	}
?>

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
	$energia_agregada		= $_POST["nueva_energia"];
	$color_energia_agregada	= $_POST["color_nueva_energia"];
	
	$energia_antigua		= $_POST["lista_antiguas_energias"];
	$color_energia_antigua	= $_POST["colores_energias_antiguas"];
	
	/* Desserializa el arreglo que contiene las energías que se iran agregando a la base de datos */
	if($_SESSION['lista_energias_nuevas_serial'])
	{
		$lista_energias_nuevas = unserialize($_SESSION['lista_energias_nuevas_serial']);
	}
	
	
	if($energia_agregada and $color_energia_agregada )
	{
		if(!isset($lista_energias_nuevas))
		{
			echo "<br> Entro al if cuando el arreglo no esta creado";
			$lista_energias_nuevas[$energia_agregada]=$color_energia_agregada;
		}
		else
		{
			echo "Entra aca porque el arreglo con las energias seleccionadas ya existe";
			foreach($lista_energias_nuevas as $energia => $color)
			{
				if($energia==$energia_agregada)
				{
					$lista_energias_nuevas[$energia_agregada]=$color_energia_agregada;
					$encontrado=1;
				}
				if($encontrado!=1)
				{
					$lista_energias_nuevas[$energia_agregada]=$color_energia_agregada;
				}
				
			}
		}
	}
	
	/* Librerias necesarias */
	include("../../../../clases/fckeditor/fckeditor.php");
	include ("../../../../clases/var/variables.php");
	include ("../../../../clases/conector/clase_conector.php");
	
	//$conectar= new dbconnect($HostName,$UserName,$Password,$DataBase);
	$conectar=mysql_connect($HostName,$UserName,$Password);
	mysql_select_db("geanut",$conectar);
	
	/* Ejecuta la consulta SQL para recuperar los tipos de energias de la baase de datos*/
	$result = mysql_query("SELECT idtipo_enegia,nombre_energia FROM tipo_energia order by nombre_energia", $conectar);
	
	/* Llena el listbos con los id de cada energia y los nombres de las energias */
	while($row = mysql_fetch_array($result))
	{	
		$list_energ[$row[0]]=$row[1];
	}
	/* Cierra la conexión a la base de datos*/
	mysql_close($conectar);
	
	
	/* Serializa los arreglos para enviarlos nuevamente a esta pagina por medio de una variable de sesion*/
	$_SESSION['lista_energias']= serialize($list_energ);
	$_SESSION['lista_energias_nuevas_serial']=serialize($lista_energias_nuevas);
?>

<p class="style1">Administrador de las Energías</p>
<form id="form1" name="form1" method="post" action="energias_admin.php">
  <table width="800" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="35%"><fieldset>
      <legend><strong>Nuevas Energias</strong></legend>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="66%"><div align="center">
              <?php
				$titulo_pensamiento=new FCKeditor('nueva_energia');
				$titulo_pensamiento->BasePath= '../../../../clases/fckeditor/';
				$titulo_pensamiento->Width='90%';
				$titulo_pensamiento->Height='35';
				$titulo_pensamiento->ToolbarSet='Pequenia';
				$titulo_pensamiento->ToolbarStartExpanded=FALSE;
				$titulo_pensamiento->Create();
			?>
            </div></td>
            <td width="34%"><div align="center">
            
<?php /* Completa la lista de seleccion que despliega los colores disponibles para agregar a cada energía */ ?>
              <select name="color_nueva_energia" id="color_nueva_energia">
              <?php
				  /* Recorre la lista de colores y las va agregando a la lista de seleccion*/
					for($elemento=5;$elemento<=$total_colores-5;$elemento+=5)
					{
						echo "<option value='".$colores[$elemento+4]."' class='".$colores[$elemento]."'>".$colores[$elemento]."</option>";
					}
				?>
              </select>
            </div></td>
          </tr>
        </table>
      </fieldset>
      </td>
      <td width="65%"><fieldset>
      <legend><strong>Antiguas Energias</strong></legend>
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="40%"><div align="center">
              <select name="lista_antiguas_energias" id="lista_antiguas_energias">
               <?php
					/* Llena el listbox con las energias */
					foreach($list_energ as $id_energia=>$nombre_energia)
					{
						echo "<option value='$id_energia'>$nombre_energia</option>";
					}
				?>
              </select>
            </div></td>
            <td width="18%"><?php
								$titulo_pensamiento=new FCKeditor('cambiar_energia_antigua');
								$titulo_pensamiento->BasePath= '../../../../clases/fckeditor/';
								$titulo_pensamiento->Width='90%';
								$titulo_pensamiento->Height='35';
								$titulo_pensamiento->ToolbarSet='Pequenia';
								$titulo_pensamiento->ToolbarStartExpanded=FALSE;
								$titulo_pensamiento->Create();
							?>
            </td>
            <td width="21%"><div align="center">
              <select name="colores_energias_antiguas" id="colores_energias_antiguas">
                <?php
				  /* Recorre la lista de colores y las va agregando a la lista de seleccion*/
					for($elemento=5;$elemento<=$total_colores-5;$elemento+=5)
					{
						echo "<option value='".$colores[$elemento+4]."' class='".$colores[$elemento]."'>".$colores[$elemento]."</option>";
					}
				?>
              </select>
            </div></td>
            <td width="21%"><label><div align="center">
              <div align="center">
                <input name="acciones_energias_antiguas" type="radio" id="acciones_energias_antiguas_0" value="radio" checked="checked" />
                Actualizar</div>
            </div></td>
          </tr>
        </table>
      </fieldset>
      </td>
    </tr>
    <tr>
      <td><br />
		<input type="submit" name="actualizar" id="actualizar" value="Actualizar Datos" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>    
     </fieldset>
<form id='form1' name='form1' method='post' action='energias_admin.php'>    
	<table width="800" border="0" cellspacing="0" cellpadding="0">
	  <tr>
    	<td width="398">
		  <div align="center">
		    <?php
	 	
			if($lista_energias_nuevas!= NULL)
			{
		 		echo "<br>";
				echo "<strong>Nuevas Energias para guardar: </strong>";
				echo "<br>";
				echo "<br><table border='1'>";
			
				foreach ($lista_energias_nuevas as $nue_energia=>$nue_energia_color)
				{
					$palabra = str_replace("<p>"," ",$nue_energia);
					$palabra = str_replace("</p>"," ",$palabra);
					echo "<tr>";
						echo "<TD width='179' height='20'>";
							echo $palabra;
						echo "</TD>";
						echo "<TD width='54' height='20' bgcolor='$nue_energia_color'>";
							echo "&nbsp;&nbsp;";
						echo "</TD>";
					echo "	</tr>";
				}
		
				echo "<tr>";
				echo "<td></td>";
				echo "<td><input type='submit' name='actualizar' id='actualizar' value='Actualizar Datos' /></td>";
				echo "</table>";
			}
		
		?>        
        </div></td>
    	<td width="402"><div align="center">
    	  <?php
	 	
			if($lista_energias_nuevas!= NULL)
			{
		 		echo "<br>";
				echo "<strong>Energias que se van a Modificar: </strong>";
				echo "<br>";
				echo "<br><table border='1'>";
			
				foreach ($lista_energias_nuevas as $nue_energia=>$nue_energia_color)
				{
					$palabra = str_replace("<p>"," ",$nue_energia);
					$palabra = str_replace("</p>"," ",$palabra);
					echo "<tr>";
						echo "<TD width='179' height='20'>";
							echo $palabra;
						echo "</TD>";
						echo "<TD width='54' height='20' bgcolor='$nue_energia_color'>";
							echo "&nbsp;&nbsp;";
						echo "</TD>";
					echo "	</tr>";
				}
		
				echo "<tr>";
				echo "<td></td>";
				echo "<td><input type='submit' name='actualizar' id='actualizar' value='Actualizar Datos' /></td>";
				echo "</table>";
			}
		
		?>    	
  	  </div></td>
  	</tr>
  	  <tr>
  	    <td colspan="2">&nbsp;</td>
      </tr>
  	  <tr>
   	  <td colspan="2"><div align="center">
    	  <input type='submit' name='actualizar' id='actualizar' value='Actualizar Datos' />
  	  </div></td>
    </tr>
	</table>
</form>
</body>
</html>
