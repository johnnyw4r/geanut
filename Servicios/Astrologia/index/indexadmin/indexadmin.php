<?php
/*	Autor: Johnny Aracena Araya
	Revisado por:
    Versión: 1.0
    Archivo: indexadmin.php
*/
/*
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
<title>Formulario de ingreso de datos para el Index</title>
</head>
<body>
<label><strong><center>
	  <h1 align="center"><strong>Formulario para generar un nuevo Index</strong></h1>
	  <p>&nbsp;</p>
      <form action="preview_index.php" method="post" name="form1">
      </p>
      <strong>Fecha que será publicado este Index:</strong>
      <input name="dia_pub_index" type="text" id="dia_pub_index" size="2" maxlength="2" />
      /
      <input name="mes_pub_index" type="text" id="mes_pub_index" size="2" maxlength="2" />
      /
      <input name="ano_pub_index" type="text" id="ano_pub_index" size="4" maxlength="4" />
      <table width="800" height="1625" border="1" align="center">
        <tr>
          <td width="115"><strong>Pensamiento:</strong></td>
          <td width="160">
          <div align="center">
            <p>Título            </p>
            <p>
              <input name="titulo_pensamiento" type="text" id="titulo_pensamiento" size="20" />
            </p>
            <p>&nbsp;</p>
          </div>          </td>
          <td width="229">            
            <div align="center">
              <textarea name="pensamiento" cols="30" rows="5" id="pensamiento"></textarea>
            </div>
          <div align="left"></div></td>
<td width="129">
              <div align="center">
                <p>Autor                </p>
                <p>
                  <input name="autor_pensamiento" type="text" id="autor_pensamiento" value="" size="15" />
                </p>
                <p>&nbsp;</p>
          </div>		</td><td width="133">&nbsp;</td>
        </tr>
        <tr>
          <td height="183"><strong>Index Especial:</strong></td>
          <td colspan="3"><label>
            <table width="100%" border="1" cellspacing="0" cellpadding="0">
              <tr>
                <td width="27%"><label>
                  <div align="center">
                    <p>&nbsp;                    </p>
                    <p>
                      <input name="titulo_index_especial" type="text" id="titulo_index_especial" size="20" />
                    </p>
                    <p>&nbsp;</p>
                  </div>
                </label></td>
                <td width="73%"><label>
                  <div align="center">
                    <textarea name="contenido_index_especial" cols="30" rows="5" id="contenido_index_especial"></textarea>
                  </div>
                </label></td>
              </tr>
            </table>
            <div align="left"></div>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="39"><strong>Signo Solar:</strong></td>
          <td colspan="3"><table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="16%" height="81"><label>
                </label>
              <div align="center"></div></td>
              <td width="16%">                <p align="center">Entrante:
                <input name="solar_entrante" type="text" id="solar_entrante" size="7" />
              </p></td>
              <td width="15%"><label>
              <div align="center"></div></td>
              <td width="16%">                <p align="center">Saliente:
                <input name="solar_saliente" type="text" id="solar_saliente" size="7" />
              </p></td>
              <td width="37%"><label>
                <p align="center">
                  <input name="sig_sol_desc" type="text" id="sig_sol_desc" size="25" />
              </p>                </label></td>
            </tr>
          </table></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="38"><strong>Signo Lunar:</strong></td>
          <td colspan="3"><table width="100%" height="32" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="16%" height="30"><label></label>
              <div align="center"></div></td>
              <td width="16%"><div align="center">Entrante:
                <input name="lunar_entrante" type="text" id="lunar_entrante" size="7" />
              </div></td>
              <td width="15%"><label>
              <div align="center"></div></td>
              <td width="16%">                <p align="center">Saliente:
                  <input name="lunar_saliente" type="text" id="lunar_saliente" size="7" />
                                </p></td>
              <td width="37%">
                <div align="center">
                  <input name="sig_lun_desc" type="text" id="sig_lun_desc" size="25" />
                </div></td>
            </tr>
          </table>          <label></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Fase Lunar:</strong></td>
          <td colspan="3"><table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td width="27%"><label>
                <div align="center">
                  <p>&nbsp;</p>
                  <p>
                    <input name="titulo_fase_lunar" type="text" id="titulo_fase_lunar" size="20" />
                  </p>
                  <p>&nbsp;</p>
                </div>
              </label></td>
              <td width="73%"><label>
                
                <div align="center">
                    <textarea name="contenido_fase_lunar" cols="30" rows="5" id="contenido_fase_lunar"></textarea>
                </div>
              </label></td>
            </tr>
          </table></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p><strong>Luna Fuera de Curso:</strong></p>          </td>
          <td colspan="3"><table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td width="22%"><label>
                <div align="center">Inicio:
                  <input name="lun_fue_cur_ini" type="text" id="lun_fue_cur_ini" size="7" />
                  </label>
              </div></td>
              <td width="20%"><label>
                <div align="center">Fin:
                  <input name="lun_fue_cur_fin" type="text" id="lun_fue_cur_fin" size="7" />                
                  </label>
              </div></td>
              <td width="58%">&nbsp; (Venezuela:
                <label>
                Inicio
                <input name="lun_fue_cur_ini_local" type="text" id="lun_fue_cur_ini_local" size="7" />
                </label>
                <label>
                Fin:
                <input name="lun_fue_cur_fin_local" type="text" id="lun_fue_cur_fin_local" size="7" />
                </label>
              ) </td>
            </tr>
          </table></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Comentario Astral:</strong></td>
          <td colspan="3"><table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td width="28%"><label>
                <div align="center">
                  <input name="titulo_comentario_astral" type="text" id="titulo_comentario_astral" size="20" />
                  </label>
                </div>                </td>
              <td width="72%"><textarea name="comentario_astral" cols="30" rows="5" id="comentario_astral"></textarea></td>
            </tr>
          </table>            
          <label></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Formula del Index:</strong></td>
          <td colspan="3"><label>
            <textarea name="formula_index" cols="50" rows="5" id="formula_index"></textarea>
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Resultado:</strong></td>
          <td colspan="3"><table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td width="28%"><label>
                <div align="center">
                  <input name="titulo_resultado_index" type="text" id="titulo_resultado_index" size="20" />
                </div>
              </label></td>
              <td width="72%"><textarea name="resultado_index" cols="30" rows="5" id="resultado_index"></textarea></td>
            </tr>
          </table>            <label></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Mirando las Estrellas</strong></td>
          <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="28%"><label>
                
              <div align="center">
                Titulo
                <input name="titulo_mirando_estrellas" type="text" id="titulo_mirando_estrellas" size="20" />
              </div>
              </label></td>
              <td width="40%"><textarea name="mirando_las_estrellas" cols="30" rows="5" id="mirando_las_estrellas"></textarea></td>
              <td width="32%"><label>
                <div align="center">Pie de página
                  <input type="text" name="pie_mirando_las_estrellas" id="pie_mirando_las_estrellas" />
                </div>
              </label></td>
            </tr>
          </table></td>
          <!-- 
            
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Efemérides:</strong></td>
          <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="47%"><div align="center">
                Efemeride del Mes:
                <textarea name="efemeride_mes" cols="25" rows="3" id="efemeride_mes"></textarea>
              </div></td>
              <td width="39%"><label></label>
              <div align="center">
                <p>Efeméride del Día:
                  <textarea name="efemeride_dia" cols="25" rows="3" id="efemeride_dia"></textarea>
                </p>
                </div></td>
              <td width="14%">&nbsp;</td>
            </tr>
          </table>            
          <label></label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Acontecimientos:</strong></td>
          <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="9%"><label>
                <div align="center">Día:<br />
                  <input name="acontecimiento_dia" type="text" id="acontecimiento_dia" size="3" />
                </div>
              </label></td>
              <td width="11%"><label>
                <div align="center">Mes:<br />
                  <input name="acontecimiento_mes" type="text" id="acontecimiento_mes" size="3" />
                </div>
              </label></td>
              <td width="10%"><label>
                <div align="center">Año:<br />
                  <input name="acontecimiento_ano" type="text" id="acontecimiento_ano" size="3" />
                </div>
              </label></td>
              <td width="39%"><label>
              <div align="center">Acontecimiento:
                <textarea name="acontecimiento" cols="20" rows="3" id="acontecimiento"></textarea>              
                </div>
              </label></td>
              <td width="31%"><label>
                <div align="center">Orígen o url:
                  <textarea name="acontecimiento_url" cols="20" rows="3" id="acontecimiento_url"></textarea>
                  </div>
              </label></td>
            </tr>
          </table></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Nacimientos:</strong></td>
          <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="9%"><label>
                
              <div align="center">Día:<br />
                <input name="nacimientos_dia" type="text" id="nacimientos_dia" size="3" />
              </div>
              </label></td>
              <td width="11%"><label>
                <div align="center">Mes:<br />
                  <input name="nacimiento_mes" type="text" id="nacimiento_mes" size="3" />
                </div>
              </label></td>
              <td width="10%"><label>
                <div align="center">Año:
                  <br />
                  <input name="nacimiento_año" type="text" id="nacimiento_año" size="3" />
                </div></label></td>
              <td width="39%"><label>
              <div align="center">Nacimiento:
                <textarea name="nacimiento" cols="20" rows="3" id="nacimiento"></textarea>
              </div>
              </label></td>
              <td width="31%"><label>
                <div align="center">Origen o url:
                  <textarea name="nacimiento_url" cols="20" rows="3" id="nacimiento_url"></textarea>
                </div>
              </label></td>
            </tr>
          </table></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Fallecimientos:</strong></td>
          <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="9%"><label>
                  <div align="center">Día:<br />
                    <input name="fallecimiento_dia" type="text" id="fallecimiento_dia" size="3" />
                  </div>
                </label></td>
                <td width="11%"><label>
                <div align="center">Mes:<br />
                    <input name="fallecimiento_mes" type="text" id="fallecimiento_mes" size="3" />
                </div>
                </label></td>
              <td width="10%"><label>
                <div align="center">Año:<br />
                    <input name="fallecimiento_ano" type="text" id="fallecimiento_ano" size="3" />
                </div>
              </label></td>
                <td width="39%"><label>
                  <div align="center">Fallecimiento:
                    <textarea name="fallecimiento" rows="3" id="fallecimiento"></textarea>
                  </div>
                </label></td>
                <td width="31%"><label>
                  <div align="center">Origen o url:
                    <textarea name="fallecimiento_url" rows="3" id="fallecimiento_url"></textarea>
                  </div>
                </label></td>
            </tr>
            </table></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Fiestas:</strong></td>
          <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="9%"><label>
                <div align="center">Día:<br />
                  <input name="fiestas_dia" type="text" id="fiestas_dia" size="3" />
                </div>
              </label></td>
              <td width="11%"><label>
                <div align="center">Mes:<br />
                  <input name="fiestas_mes" type="text" id="fiestas_mes" size="3" />
                </div>
              </label></td>
              <td width="10%"><label>
                <div align="center">Año:<br />
                  <input name="fiestas_ano" type="text" id="fiestas_ano" size="3" />
                </div>
              </label></td>
              <td width="39%"><label>
                <div align="center">Fiesta:<br />
                  <textarea name="fiestas" rows="3" id="fiestas"></textarea>
                </div>
              </label></td>
              <td width="31%"><label>
                <div align="center">Origen o url:
                  <textarea name="fiestas_url" rows="3" id="fiestas_url"></textarea>
                </div>
              </label></td>
            </tr>
          </table></td>
          <td>&nbsp;</td> -->
        </tr>
        <tr>
          <td><strong>Sabía Usted?:</strong></td>
          <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="30%"><label>
                <div align="center">Título:<br />
                  <input type="text" name="sabia_usted_titulo" id="sabia_usted_titulo" />
                </div>
              </label></td>
              <td width="28%"><div align="center">Contenido:
                  <textarea name="sabia_usted_contenido" cols="20" rows="3" id="sabia_usted_contenido"></textarea>
              </div></td>
              <td width="42%"><div align="center">
                <label>Origen o url:<br />
                <input type="text" name="sabia_usted_url" id="sabia_usted_url" />
                </label>
              </div></td>
            </tr>
          </table></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Semaforo:</strong></td>
          <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="9%"><label>
                <input type="image" name="luz_roja" id="luz_roja" src="../../../../images/index/semaforo_02.jpg" />
              </label></td>
              <td width="28%"><label>
                <input type="text" name="semaforo_rojo" id="semaforo_rojo" />
              </label></td>
              <td width="63%"><label>
                <input type="text" name="semaforo_rojo_explicacion" id="semaforo_rojo_explicacion" />
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
                <input type="text" name="semaforo_amarillo_explicacion" id="semaforo_amarillo_explicacion" />
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
                <input type="text" name="semaforo_verde_explicacion" id="semaforo_verde_explicacion" />
              </label></td>
            </tr>
          </table></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="3"><div align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="20%"><div align="center"></div></td>
                <td width="17%"><div align="center">
                  <input type="submit" name="enviar" id="enviar" value="Previsualizar" />
                </div></td>
                <td width="63%"><div align="center">
                  <input type="reset" name="limpiar" id="limpiar" value="Limpiar" />
                </div></td>
              </tr>
            </table>
            </div></td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <p>&nbsp;</p>
</form>
</body>
</html>
