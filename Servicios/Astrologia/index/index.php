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

$MM_restrictGoTo = "indexadmin/login.php";
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
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title class="General_Text">INDEX</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../../Css/Texto.css" rel="stylesheet" type="text/css">
<script src="../../../../../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body topmargin="0">
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="9" background="../../Images/index_10.gif">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="800" height="67"><table width="800" height="67" border="0" cellpadding="0" cellspacing="0" background="../images/index_in_02.jpg">
            <tr>
              <td><table width="100%" height="67"  border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="19%"><img src="../images/spacer.gif" width="151" height="10"></td>
                    <td width="81%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="151">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td valign="top" class="ENCABEZADO">INDEX</td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#ffbe00"><img src="../images/spacer.gif" width="1" height="1"></td>
  </tr>
  <tr>
    <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0','width','800','height','34','src','../../../SWF/barra','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','../../../SWF/barra' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="800" height="34">
      <param name="movie" value="../../../SWF/barra.swf">
      <param name="quality" value="high">
      <embed src="../../../SWF/barra.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="800" height="34"></embed>
    </object></noscript></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="37"><img src="../images/index_in_08.jpg" width="37" height="18"></td>
              <td width="155"><img src="../images/index_in_09.jpg" width="155" height="18"></td>
              <td width="17"><img src="../images/index_in_10.jpg" width="17" height="18"></td>
              <td width="99"><img src="../images/index_in_11.jpg" width="99" height="18"></td>
              <td width="20"><img src="images/index_in_12.jpg" width="20" height="18"></td>
              <td width="31"><img src="images/index_in_13.jpg" width="32" height="18"></td>
              <td width="22"><img src="images/index_in_14.jpg" width="22" height="18"></td>
              <td width="53"><a href="../coaching/coaching.htm"><img src="../images/index_in_15.jpg" width="53" height="18" border="0"></a></td>
              <td width="19"><img src="../images/index_in_16.jpg" width="19" height="18"></td>
              <td height="18" bgcolor="#c5cf68"><img src="../images/spacer.gif" width="1" height="1"></td>
            </tr>
        </table></td>
        <td width="9" rowspan="4">&nbsp;</td>
        <td width="210"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="95" bgcolor="#c5cf68"><img src="images/index_in_18.jpg" width="95" height="18"></td>
              <td width="70" bgcolor="#c5cf68">&nbsp;</td>
              <td width="10" bgcolor="#c5cf68" class="General_Text">#</td>
              <td width="10" bgcolor="#c5cf68"><img src="../images/spacer.gif" width="10" height="10"></td>
              <td width="58" bgcolor="#c5cf68" class="General_Text"><div align="right" class="TITULO_GRANDE">1000000</div></td>
              <td width="15" bgcolor="#c5cf68">&nbsp;</td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="../images/spacer.gif" width="8" height="8"></td>
            </tr>
            <tr>
              <td bgcolor="#ffbe00"><img src="../images/spacer.gif" width="1" height="1"></td>
            </tr>
            <tr>
              <td><img src="../images/spacer.gif" width="8" height="8"></td>
            </tr>
        </table></td>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="../images/spacer.gif" width="8" height="8"></td>
            </tr>
            <tr>
              <td bgcolor="#ffbe00"><img src="../images/spacer.gif" width="1" height="1"></td>
            </tr>
            <tr>
              <td><img src="../images/spacer.gif" width="8" height="8"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="23"><img src="images/index_in_22.jpg" width="23" height="15"></td>
              <td valign="middle" class="TITULO_GRANDE">EL PULSO DEL TIEMPO ... PRON&Oacute;STICO ENERG&Eacute;TICO</td>
            </tr>
            <tr>
              <td colspan="2"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><img src="../images/spacer.gif" width="20" height="8"></td>
                  </tr>
                  <tr>
                    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="37" bgcolor="#474746"><img src="../images/spacer.gif" width="37" height="4"></td>
                          <td bgcolor="#C5CF68"><img src="../images/spacer.gif" width="20" height="4"></td>
                          <td width="37" bgcolor="#474746"><img src="../images/spacer.gif" width="37" height="4"></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="../images/spacer.gif" width="20" height="8"></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                          <td width="409" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                          <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                        </tr>
                        <tr>
                          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="6" rowspan="3"><p><img src="../images/spacer.gif" width="6" height="6"></p></td>
                                <td><img src="../images/spacer.gif" width="6" height="6"></td>
                                <td width="6" rowspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                              </tr>
                              <tr>
                                <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td bgcolor="#E0E6A3"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td colspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                                          </tr>
                                          <tr>
                                            <td width="6">&nbsp;</td>
                                            <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                  <td class="PENSA_ENCABEZADO">&quot;MACRO VISI&Oacute;N PRESENCIA&quot; </td>
                                                </tr>
                                                <tr>
                                                  <td><img src="../images/spacer.gif" width="20" height="15"></td>
                                                </tr>
                                                <tr>
                                                  <td class="PENSA_CONTENIDO">&quot;EL TIEMPO NO ES SINO LA CORRIENTE EN LA QUE ESTOY PESCANDO&quot; </td>
                                                </tr>
                                                <tr>
                                                  <td><img src="../images/spacer.gif" width="20" height="5"></td>
                                                </tr>
                                                <tr>
                                                  <td class="PENSA_AUTOR">HENRRY DAVID THOREAU </td>
                                                </tr>
                                            </table></td>
                                            <td width="6">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td colspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td><img src="../images/spacer.gif" width="6" height="6"></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                        </tr>
                    </table></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td colspan="2"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><img src="../images/spacer.gif" width="20" height="8"></td>
                  </tr>
                  <tr>
                    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="37" bgcolor="#474746"><img src="../images/spacer.gif" width="37" height="4"></td>
                          <td bgcolor="#C5CF68"><img src="../images/spacer.gif" width="20" height="4"></td>
                          <td width="37" bgcolor="#474746"><img src="../images/spacer.gif" width="37" height="4"></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="../images/spacer.gif" width="20" height="8"></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
        <td rowspan="2"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0','width','210','height','180','src','../../../SWF/calendario','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','../../../SWF/calendario' ); //end AC code
</script>
        <noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="210" height="180">
            <param name="movie" value="../../../SWF/calendario.swf">
            <param name="quality" value="high">
            <embed src="../../../SWF/calendario.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="210" height="180"></embed>
        </object></noscript></td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="../images/spacer.gif" width="8" height="8"></td>
      </tr>
      <tr>
        <td bgcolor="#ffbe00"><img src="../images/spacer.gif" width="1" height="1"></td>
      </tr>
      <tr>
        <td><img src="../images/spacer.gif" width="8" height="8"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="119" height="15" align="left" bgcolor="#C5CF68"><img src="images/index_esp_56.jpg" width="119" height="15"></td>
        <td bgcolor="#c5cf68"><img src="../images/spacer.gif" width="1" height="1"></td>
      </tr>
      <tr>
        <td colspan="2"><img src="../images/spacer.gif" width="1" height="6"></td>
      </tr>
      <tr>
        <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                  <td width="409" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                  <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                </tr>
                <tr>
                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="6" rowspan="3"><p><img src="../images/spacer.gif" width="6" height="6"></p></td>
                        <td><img src="../images/spacer.gif" width="6" height="6"></td>
                        <td width="6" rowspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                      </tr>
                      <tr>
                        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td valign="top" class="General_Text"><table width="120" border="0" align="left" cellpadding="0" cellspacing="0" style="position:static ">
                                <!--DWLayoutTable-->
                                <tr>
                                  <td><table width="112" height="84" border="0" align="left" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="118" height="86" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                            <tr bgcolor="#FFBE00">
                                              <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                            </tr>
                                            <tr>
                                              <td width="1" bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                              <td width="87%"><table width="112" height="84" border="0" cellpadding="0" cellspacing="0">
                                                  <tr>
                                                    <td><img src="images/muestra.jpg" width="112" height="84" hspace="2" vspace="2" align="absmiddle"></td>
                                                  </tr>
                                              </table></td>
                                              <td width="1" bgcolor="#FFBE00">&nbsp;</td>
                                            </tr>
                                            <tr bgcolor="#FFBE00">
                                              <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                  </table></td>
                                  <td width="8" rowspan="2"><img src="../images/spacer.gif" width="8" height="8"></td>
                                </tr>
                                <tr>
                                  <td><img src="../images/spacer.gif" width="1" height="8"></td>
                                </tr>
                              </table>
                              <table width="100%"  border="0" cellspacing="0" cellpadding="0" style="position:static ">
                                <tr>
                                  <td class="titulo">EL FENOMENO </td>
                                </tr>
                                <tr>
                                  <td><img src="../images/spacer.gif" width="20" height="5"></td>
                                </tr>
                              </table>
                              El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto .El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto. El loco El fenomeno<img src="image/spacer.gif" width="1" height="1"> del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto. El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto. El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o. pues aparentemente esto no se va a mover para nada bueno eso es lo que espero que se quede alli y no se mueba, de todas maneras voy a ver como estan los otros en el archivo este que dice a&ntilde;o nuevo chono y urgare para conseguir lo que necesite. </td>
                          </tr>
                          <tr>
                            <td><img src="../images/spacer.gif" width="1" height="10"></td>
                          </tr>
                          <tr>
                            <td align="right"><img src="../../../Images/+info_91.jpg" alt="M&aacute;s Informaci&oacute;n" width="47" height="12" class="General_Text"></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="../images/spacer.gif" width="6" height="6"></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="../images/spacer.gif" width="8" height="8"></td>
        </tr>
        <tr>
          <td bgcolor="#ffbe00"><img src="../images/spacer.gif" width="1" height="1"></td>
        </tr>
        <tr>
          <td><img src="../images/spacer.gif" width="8" height="8"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
              <td width="409" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
              <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
            </tr>
            <tr>
              <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="100%" colspan="3"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="380"><table width="380" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td bgcolor="#C5CF68"><img src="images/index_new_59.jpg" width="107" height="15"></td>
                          </tr>
                          <tr>
                            <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <th colspan="3" scope="col"><img src="../images/spacer.gif" width="6" height="6"></th>
                                      </tr>
                                      <tr>
                                        <td width="5">&nbsp;</td>
                                        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td width="124"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                  <tr>
                                                    <td><table width="40" height="40" border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                          <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                              <tr bgcolor="#FFBE00">
                                                                <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                                              </tr>
                                                              <tr>
                                                                <td bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                                                <td width="87%"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                      <td colspan="3"><img src="image/spacer.gif" width="2" height="2"></td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td width="1">&nbsp;</td>
                                                                      <td><table width="40" height="40" border="0" cellpadding="0" cellspacing="0">
                                                                          <tr>
                                                                            <td><img src="images/muestra.jpg" width="40" height="40" hspace="2" vspace="2" align="absmiddle"></td>
                                                                          </tr>
                                                                      </table></td>
                                                                      <td width="1">&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td colspan="3"><img src="image/spacer.gif" width="2" height="2"></td>
                                                                    </tr>
                                                                </table></td>
                                                                <td bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                                              </tr>
                                                              <tr bgcolor="#FFBE00">
                                                                <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                                              </tr>
                                                          </table></td>
                                                        </tr>
                                                    </table></td>
                                                    <td width="8">&nbsp;</td>
                                                    <td><table width="40" height="40" border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                          <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                              <tr bgcolor="#FFBE00">
                                                                <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                                              </tr>
                                                              <tr>
                                                                <td bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                                                <td width="87%"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                      <td colspan="3"><img src="image/spacer.gif" width="2" height="2"></td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td width="1">&nbsp;</td>
                                                                      <td><table width="40" height="40" border="0" cellpadding="0" cellspacing="0">
                                                                          <tr>
                                                                            <td><img src="images/muestra.jpg" width="40" height="40" hspace="2" vspace="2" align="absmiddle"></td>
                                                                          </tr>
                                                                      </table></td>
                                                                      <td width="1">&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td colspan="3"><img src="image/spacer.gif" width="2" height="2"></td>
                                                                    </tr>
                                                                </table></td>
                                                                <td bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                                              </tr>
                                                              <tr bgcolor="#FFBE00">
                                                                <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                                              </tr>
                                                          </table></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                              <td width="10">&nbsp;</td>
                                              <td width="350" valign="top" class="General_Text">ACUARIO... VISI&Oacute;N... AVANT GARDE </td>
                                            </tr>
                                            <tr>
                                              <td colspan="3"><img src="../images/spacer.gif" width="8" height="8"></td>
                                            </tr>
                                        </table></td>
                                        <td width="4">&nbsp;</td>
                                      </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td bgcolor="#C5CF68"><img src="images/index_new_67.jpg" width="107" height="15"></td>
                                </tr>
                                <tr>
                                  <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <th colspan="3" scope="col"><img src="../images/spacer.gif" width="6" height="6"></th>
                                      </tr>
                                      <tr>
                                        <td width="5">&nbsp;</td>
                                        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td width="124"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                  <tr>
                                                    <td><table width="40" height="40" border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                          <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                              <tr bgcolor="#FFBE00">
                                                                <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                                              </tr>
                                                              <tr>
                                                                <td bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                                                <td width="87%"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                      <td colspan="3"><img src="image/spacer.gif" width="2" height="2"></td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td width="1">&nbsp;</td>
                                                                      <td><table width="40" height="40" border="0" cellpadding="0" cellspacing="0">
                                                                          <tr>
                                                                            <td><img src="images/muestra.jpg" width="40" height="40" hspace="2" vspace="2" align="absmiddle"></td>
                                                                          </tr>
                                                                      </table></td>
                                                                      <td width="1">&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td colspan="3"><img src="image/spacer.gif" width="2" height="2"></td>
                                                                    </tr>
                                                                </table></td>
                                                                <td bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                                              </tr>
                                                              <tr bgcolor="#FFBE00">
                                                                <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                                              </tr>
                                                          </table></td>
                                                        </tr>
                                                    </table></td>
                                                    <td width="8">&nbsp;</td>
                                                    <td><table width="40" height="40" border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                          <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                              <tr bgcolor="#FFBE00">
                                                                <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                                              </tr>
                                                              <tr>
                                                                <td bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                                                <td width="87%"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                      <td colspan="3"><img src="image/spacer.gif" width="2" height="2"></td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td width="1">&nbsp;</td>
                                                                      <td><table width="40" height="40" border="0" cellpadding="0" cellspacing="0">
                                                                          <tr>
                                                                            <td><img src="images/muestra.jpg" width="40" height="40" hspace="2" vspace="2" align="absmiddle"></td>
                                                                          </tr>
                                                                      </table></td>
                                                                      <td width="1">&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td colspan="3"><img src="image/spacer.gif" width="2" height="2"></td>
                                                                    </tr>
                                                                </table></td>
                                                                <td bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                                              </tr>
                                                              <tr bgcolor="#FFBE00">
                                                                <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                                              </tr>
                                                          </table></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                              <td width="10">&nbsp;</td>
                                              <td width="350" valign="top" class="General_Text">LIBRA HASTA LAS 10:00 AM, HORA EN LA QUE ENTRA EN EL SIGNO DE ESCORPIO. </td>
                                            </tr>
                                            <tr>
                                              <td colspan="3"><img src="../images/spacer.gif" width="8" height="8"></td>
                                            </tr>
                                        </table></td>
                                        <td width="5">&nbsp;</td>
                                      </tr>
                                  </table></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td bgcolor="#C5CF68"><img src="images/index_new_62.jpg" width="102" height="15"></td>
                          </tr>
                          <tr>
                            <td><table width="380"  border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><table width="380" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td colspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                                      </tr>
                                      <tr>
                                        <td width="5"><img src="../images/spacer.gif" width="5" height="6"></td>
                                        <td valign="top"><table width="10" border="0" align="left" cellpadding="0" cellspacing="0">
                                            <tr>
                                              <td><table width="40" height="40" border="0" cellpadding="0" cellspacing="0">
                                                  <tr>
                                                    <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                        <tr bgcolor="#FFBE00">
                                                          <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                                        </tr>
                                                        <tr>
                                                          <td bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                                          <td width="87%"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                              <tr>
                                                                <td colspan="3"><img src="image/spacer.gif" width="2" height="2"></td>
                                                              </tr>
                                                              <tr>
                                                                <td width="1">&nbsp;</td>
                                                                <td><table width="40" height="40" border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                      <td><img src="images/muestra.jpg" width="40" height="40" hspace="2" vspace="2" align="absmiddle"></td>
                                                                    </tr>
                                                                </table></td>
                                                                <td width="1">&nbsp;</td>
                                                              </tr>
                                                              <tr>
                                                                <td colspan="3"><img src="image/spacer.gif" width="2" height="2"></td>
                                                              </tr>
                                                          </table></td>
                                                          <td bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                                        </tr>
                                                        <tr bgcolor="#FFBE00">
                                                          <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                              <td><img src="../images/spacer.gif" width="5" height="6"></td>
                                            </tr>
                                          </table>
                                            <table width="100"  border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td class="titulo">EL FENOMENO </td>
                                              </tr>
                                            </table>
                                            <span class="General_Text">Durante esta fase lunar podemos hacer aquellas actividades que nos cuestan m&aacute;s esfuerzo, es tiempo para terminar todo lo que se tiene pendiente, sirve para limpiar, depurar y cancelar. este espacio aqui es porsi las moscas, se pasa el texto de arrriba, esten pendiente de esto. </span></td>
                                        <td width="5"><img src="../images/spacer.gif" width="5" height="6"></td>
                                      </tr>
                                      <tr>
                                        <td colspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                                      </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td bgcolor="#C5CF68"><img src="images/index_new_70.jpg" width="174" height="15"></td>
                                </tr>
                                <tr>
                                  <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <th colspan="3" scope="col"><img src="../images/spacer.gif" width="6" height="6"></th>
                                      </tr>
                                      <tr>
                                        <td width="5">&nbsp;</td>
                                        <td class="General_Text">DE 06:38 AM A 10:10 AM EST (EN VENEZUELA DESDE LAS 07:38 AM A 11:10 AM) </td>
                                        <td width="5">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td colspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                                      </tr>
                                  </table></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table></td>
                        <td width="1" rowspan="2" bgcolor="#878786"><img src="../images/spacer.gif" width="1" height="1"></td>
                        <td width="415" valign="top"><table width="415"  border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="center" valign="top" bgcolor="#E0E6A3"><table width="400" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td bgcolor="#e0e6a3"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td colspan="3"><img src="image/spacer.gif" width="2" height="2"></td>
                                      </tr>
                                      <tr>
                                        <td width="1">&nbsp;</td>
                                        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td align="center"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                  <tr>
                                                    <td><img src="../images/spacer.gif" width="10" height="6"></td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top"><table width="30" border="0" cellspacing="3" cellpadding="0">
                                                      <tr>
                                                        <td height="130" bgcolor="#0066CC">&nbsp;</td>
                                                      </tr>
                                                      <tr>
                                                        <td bgcolor="#CBCBE9">&nbsp;</td>
                                                      </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td valign="top">&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td><table width="100%"  border="0" cellpadding="0" cellspacing="3" class="BARRAS">
                                                  <tr>
                                                    <td width="20" height="5" bgcolor="#CBCBE9">&nbsp;</td>
                                                    <td width="5">&nbsp;</td>
                                                    <td width="50" align="center">300%</td>
                                                    <td width="5" class="BARRAS">&nbsp;</td>
                                                    <td width="250">ELECTRO-MAGNETISMO</td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                            </tr>
                                        </table></td>
                                        <td width="1">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td colspan="3"><img src="image/spacer.gif" width="2" height="2"></td>
                                      </tr>
                                  </table></td>
                                </tr>
                            </table>                              </td>
                          </tr>
                          <tr>
                            <td align="center" valign="top" bgcolor="#474746"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="right"><img src="images/index_in_64.jpg" alt="Imprimir" width="26" height="12"></td>
                                <td width="10"><img src="../images/spacer.gif" width="1" height="1"></td>
                              </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="6" rowspan="3"><p><img src="../images/spacer.gif" width="6" height="6"></p></td>
                                <td><img src="../images/spacer.gif" width="6" height="6"></td>
                                <td width="6" rowspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                              </tr>
                              <tr>
                                <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                  <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                                                  <td width="409" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                                                  <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                                                </tr>
                                                <tr>
                                                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td width="6" rowspan="3"><p><img src="../images/spacer.gif" width="6" height="6"></p></td>
                                                        <td><img src="../images/spacer.gif" width="6" height="6"></td>
                                                        <td width="6" rowspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="titulo">porcentage de informaci&Oacute;N EN EL AMBIENTE 99% ... SI BUSCA RESPUESTAS LAS ENCONTRAR&Aacute;. continua aparentemente contradicci&Oacute;N EN EL INDEX DEL D&Iacute;A ... LE RECUERDO QUE EL INDEX ES COMO EL &quot;MEN&Uacute; DE UN RESTAURANTE&quot; ... USTED DECIDe</td>
                                                      </tr>
                                                      <tr>
                                                        <td><img src="../images/spacer.gif" width="6" height="6"></td>
                                                      </tr>
                                                  </table></td>
                                                </tr>
                                                <tr>
                                                  <td bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td><img src="../images/spacer.gif" width="6" height="6"></td>
                              </tr>
                            </table></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td width="380" valign="top" bgcolor="#878786"><img src="../images/spacer.gif" width="1" height="1"></td>
                        <td valign="top" bgcolor="#878786"><img src="../images/spacer.gif" width="1" height="1"></td>
                      </tr>
                      <tr>
                        <td colspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="6" rowspan="3"><p><img src="../images/spacer.gif" width="6" height="6"></p></td>
                            <td><img src="../images/spacer.gif" width="6" height="6"></td>
                            <td width="6" rowspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                          </tr>
                          <tr>
                            <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td class="titulo">el sol en el signo de acuario</td>
                                </tr>
                                <tr>
                                  <td><img src="../images/spacer.gif" width="8" height="8"></td>
                                </tr>
                                <tr>
                                  <td class="General_Text"> La fuerza y la debilidad de este signo es el �Intelecto�. Acuario abre nuestra mente a nuevas y frescas perspectivas que nos revelan �la realidad�, liber &aacute;ndonos de limitaciones y creando nuevas opciones a futuro. Pero la raz&oacute;n puede bloquear nuestro instinto�. Raz&oacute;n llamada por muchos �Objetividad�. El Sol en Acuario nos invita a arrullar nuestro intelecto con el Coraz&oacute;n (Inteligencia Emocional) Por las pr&oacute;ximas 4 semanas tendremos la oportunidad de salirnos de la rutina , de lo cotidiano, de lo predecible para entrar en un panorama mas amplio de nuestra propia vida y de nuestro propio mundo. Acuario necesita entender y m&aacute;s que entender �comprender� los patrones sociales que definen la cultura para poder as&iacute; reformarlos y modernizarlos. Acuario abre ventanas y puertas, hace caer barreras, pero recuerde � solo aquellos que HACEN �LOGRAN </td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td><img src="../images/spacer.gif" width="6" height="6"></td>
                          </tr>
                        </table></td>
                        </tr>
                      <tr>
                        <td colspan="3" valign="top" bgcolor="#878786"><img src="../images/spacer.gif" width="1" height="1"></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td colspan="3" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><img src="../images/spacer.gif" width="8" height="8"></td>
                      </tr>
                      <tr>
                        <td bgcolor="#ffbe00"><img src="../images/spacer.gif" width="1" height="1"></td>
                      </tr>
                      <tr>
                        <td><img src="../images/spacer.gif" width="8" height="8"></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td width="399" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td bgcolor="#C5CF68"><img src="images/index_new_72.jpg" width="175" height="15"></td>
                      </tr>
                      <tr>
                        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th colspan="3" scope="col"><img src="../images/spacer.gif" width="6" height="6"></th>
                          </tr>
                          <tr>
                            <td width="5">&nbsp;</td>
                            <td class="General_Text">Luna menguando en Acuario junto a Kiron y Neptuno (reflexi&oacute;n) + Saturno opuesto a Neptuno (Karma colectivo) + J&uacute;piter enfrentado a Urano y a el Nodo Lunar (alteraci&oacute;n del orden) + Mercurio retrogrado junto a Urano (alteraci&oacute;n en las ondas atmosf&eacute;ricas)</td>
                            <td width="5">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table>                      </td>
                    <td width="1" rowspan="2" valign="top" bgcolor="#878786"><img src="../images/spacer.gif" width="1" height="1"></td>
                    <td width="399" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td bgcolor="#C5CF68"><img src="images/index_in_85.jpg" width="105" height="15"></td>
                      </tr>
                      <tr>
                        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <th colspan="3" scope="col"><img src="../images/spacer.gif" width="6" height="6"></th>
                            </tr>
                            <tr>
                              <td width="5" rowspan="3">&nbsp;</td>
                              <td class="titulo">Transici&Oacute;n + desintegraci&Oacute;n + rebeld&Iacute;a</td>
                              <td width="5" rowspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="General_Text"><img src="../images/spacer.gif" width="6" height="6"></td>
                            </tr>
                            <tr>
                              <td class="General_Text">Descarga el&eacute;ctrica que pueden alterar simult&aacute;neamente el sistema nervioso y el sistema digestivo, el secreto esta en el &eacute;ter, por lo tanto no debe alterar la frecuencia con su ansiedad, por el contrario se recomienda ejercicio de respiraci&oacute;n, relajamiento y meditaci&oacute;n durante toda la semana.</td>
                            </tr>
                            <tr>
                              <td colspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                            </tr>
                        </table></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td align="right" valign="bottom"><img src="../../../Images/+info_91.jpg" width="47" height="12"></td>
                    <td width="399" align="right" valign="bottom"><img src="../../../Images/+info_91.jpg" width="47" height="12"></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="../images/spacer.gif" width="8" height="8"></td>
      </tr>
      <tr>
        <td bgcolor="#ffbe00"><img src="../images/spacer.gif" width="1" height="1"></td>
      </tr>
      <tr>
        <td><img src="../images/spacer.gif" width="8" height="8"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="119" height="15" align="left" bgcolor="#C5CF68"><img src="images/index_in_88.jpg" width="168" height="15"></td>
        <td bgcolor="#c5cf68"><img src="../images/spacer.gif" width="1" height="1"></td>
      </tr>
      <tr>
        <td colspan="2"><img src="../images/spacer.gif" width="1" height="6"></td>
      </tr>
      <tr>
        <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                    <td width="409" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                    <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="6" rowspan="3"><p><img src="../images/spacer.gif" width="6" height="6"></p></td>
                          <td><img src="../images/spacer.gif" width="6" height="6"></td>
                          <td width="6" rowspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                        </tr>
                        <tr>
                          <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td valign="top" class="General_Text"><table width="120" border="0" align="left" cellpadding="0" cellspacing="0">
                                        <!--DWLayoutTable-->
                                        <tr>
                                          <td><table width="112" height="84" border="0" align="left" cellpadding="0" cellspacing="0">
                                              <tr>
                                                <td width="118" height="86" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                    <tr bgcolor="#FFBE00">
                                                      <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                                    </tr>
                                                    <tr>
                                                      <td width="1" bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                                      <td width="87%"><table width="112" height="84" border="0" cellpadding="0" cellspacing="0">
                                                          <tr>
                                                            <td><img src="images/muestra.jpg" width="112" height="84" hspace="2" vspace="2" align="absmiddle"></td>
                                                          </tr>
                                                      </table></td>
                                                      <td width="1" bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                                    </tr>
                                                    <tr bgcolor="#FFBE00">
                                                      <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                                    </tr>
                                                </table></td>
                                              </tr>
                                          </table></td>
                                          <td width="8" rowspan="2"><img src="../images/spacer.gif" width="8" height="8"></td>
                                        </tr>
                                        <tr>
                                          <td><img src="../images/spacer.gif" width="1" height="8"></td>
                                        </tr>
                                      </table>
                                        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td class="titulo">EL FENOMENO </td>
                                          </tr>
                                          <tr>
                                            <td><img src="../images/spacer.gif" width="20" height="5"></td>
                                          </tr>
                                        </table>
                                        El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o. </td>
                                  </tr>
                                  <tr>
                                    <td><img src="../images/spacer.gif" width="1" height="10"></td>
                                  </tr>
                                  <tr>
                                    <td align="right"><img src="../../../Images/+info_91.jpg" width="47" height="12"></td>
                                  </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td><img src="../images/spacer.gif" width="20" height="10"></td>
                              </tr>
                              <tr>
                                <td class="General_Text"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                  <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                                                  <td width="409" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                                                  <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                                                </tr>
                                                <tr>
                                                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                      <td width="6" rowspan="2"><p><img src="../images/spacer.gif" width="6" height="6"></p></td>
                                                      <td><img src="../images/spacer.gif" width="6" height="6"></td>
                                                      <td width="6" rowspan="2"><img src="../images/spacer.gif" width="6" height="6"></td>
                                                    </tr>
                                                    <tr>
                                                      <td class="General_Text">CUANTAS VECES USTED SE DETIENE A OBSERVAR LO QUE EL CIELO CADA NOCHE COLOCA EN CARTELERA?</td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                                                      </tr>
                                                  </table></td>
                                                </tr>
                                                <tr>
                                                  <td bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                </table></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td><img src="../images/spacer.gif" width="6" height="6"></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="../images/spacer.gif" width="8" height="8"></td>
      </tr>
      <tr>
        <td bgcolor="#ffbe00"><img src="../images/spacer.gif" width="1" height="1"></td>
      </tr>
      <tr>
        <td><img src="../images/spacer.gif" width="8" height="8"></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="119" height="15" align="left" bgcolor="#C5CF68"><img src="images/index_in_25.jpg" width="102" height="15"></td>
                <td bgcolor="#c5cf68"><img src="../images/spacer.gif" width="1" height="1"></td>
              </tr>
              <tr>
                <td colspan="2"><img src="../images/spacer.gif" width="1" height="6"></td>
              </tr>
              <tr>
                <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                            <td width="409" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                            <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                          </tr>
                          <tr>
                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="6" rowspan="3"><p><img src="../images/spacer.gif" width="6" height="6"></p></td>
                                  <td><img src="../images/spacer.gif" width="6" height="6"></td>
                                  <td width="6" rowspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                                </tr>
                                <tr>
                                  <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td valign="top" class="General_Text"><p>El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o.</p>
                                          <p>ESTO TIENE QUE IR LA INFORMACION COMPLETA DE CADA MES, OSEA MAS CON MAS INFORMACION</p></td>
                                      </tr>
                                      <tr>
                                        <td><img src="../images/spacer.gif" width="1" height="10"></td>
                                      </tr>
                                      <tr>
                                        <td align="right"><img src="../../../Images/+info_91.jpg" width="47" height="12"></td>
                                      </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td><img src="../images/spacer.gif" width="6" height="6"></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                          </tr>
                      </table></td>
                    </tr>
                </table></td>
              </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="../images/spacer.gif" width="8" height="8"></td>
            </tr>
            <tr>
              <td bgcolor="#ffbe00"><img src="../images/spacer.gif" width="1" height="1"></td>
            </tr>
            <tr>
              <td><img src="../images/spacer.gif" width="8" height="8"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" bgcolor="#C5CF68"><img src="images/index_in_28.jpg" width="131" height="15"></td>
              <td bgcolor="#c5cf68"><img src="../images/spacer.gif" width="1" height="1"></td>
            </tr>
            <tr>
              <td colspan="2"><img src="../images/spacer.gif" width="1" height="6"></td>
            </tr>
            <tr>
              <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                          <td width="409" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                          <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                        </tr>
                        <tr>
                          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="6" rowspan="3"><p><img src="../images/spacer.gif" width="6" height="6"></p></td>
                                <td><img src="../images/spacer.gif" width="6" height="6"></td>
                                <td width="6" rowspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                              </tr>
                              <tr>
                                <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="13" valign="top"><img src="images/index_in_60.jpg" alt="M&aacute;s Informaci&oacute;n" width="13" height="12" class="General_Text"></td>
                                            <td width="10"><img src="../images/spacer.gif" width="10" height="5"></td>
                                            <td width="30" valign="top" class="General_Text">1597</td>
                                            <td width="10" class="General_Text"><img src="../images/spacer.gif" width="10" height="5"></td>
                                            <td width="706" class="General_Text"> Segismundo del Sacro Imperio Romano Germ&aacute;nico. </td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td><img src="../images/spacer.gif" width="1" height="10"></td>
                                    </tr>
                                    <tr>
                                      <td align="right"><img src="../../../Images/+info_91.jpg" width="47" height="12"></td>
                                    </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td><img src="../images/spacer.gif" width="6" height="6"></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                        </tr>
                    </table></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="../images/spacer.gif" width="8" height="8"></td>
            </tr>
            <tr>
              <td bgcolor="#ffbe00"><img src="../images/spacer.gif" width="1" height="1"></td>
            </tr>
            <tr>
              <td><img src="../images/spacer.gif" width="8" height="8"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" bgcolor="#C5CF68"><img src="images/index_in_47.jpg" width="106" height="15"></td>
              <td bgcolor="#c5cf68"><img src="../images/spacer.gif" width="1" height="1"></td>
            </tr>
            <tr>
              <td colspan="2"><img src="../images/spacer.gif" width="1" height="6"></td>
            </tr>
            <tr>
              <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                          <td width="409" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                          <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                        </tr>
                        <tr>
                          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="6" rowspan="3"><p><img src="../images/spacer.gif" width="6" height="6"></p></td>
                                <td><img src="../images/spacer.gif" width="6" height="6"></td>
                                <td width="6" rowspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                              </tr>
                              <tr>
                                <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="13" valign="top"><img src="images/index_in_60.jpg" alt="M&aacute;s Informaci&oacute;n" width="13" height="12" class="General_Text"></td>
                                            <td width="10"><img src="../images/spacer.gif" width="10" height="5"></td>
                                            <td width="30" valign="top" class="General_Text">1597</td>
                                            <td width="10" class="General_Text"><img src="../images/spacer.gif" width="10" height="5"></td>
                                            <td width="706" class="General_Text"> Segismundo del Sacro Imperio Romano Germ&aacute;nico. </td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td><img src="../images/spacer.gif" width="1" height="10"></td>
                                    </tr>
                                    <tr>
                                      <td align="right"><img src="../../../Images/+info_91.jpg" width="47" height="12"></td>
                                    </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td><img src="../images/spacer.gif" width="6" height="6"></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                        </tr>
                    </table></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="../images/spacer.gif" width="8" height="8"></td>
            </tr>
            <tr>
              <td bgcolor="#ffbe00"><img src="../images/spacer.gif" width="1" height="1"></td>
            </tr>
            <tr>
              <td><img src="../images/spacer.gif" width="8" height="8"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" bgcolor="#C5CF68"><img src="images/index_in_50.jpg" width="122" height="15"></td>
              <td bgcolor="#c5cf68"><img src="../images/spacer.gif" width="1" height="1"></td>
            </tr>
            <tr>
              <td colspan="2"><img src="../images/spacer.gif" width="1" height="6"></td>
            </tr>
            <tr>
              <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                          <td width="409" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                          <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                        </tr>
                        <tr>
                          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="6" rowspan="3"><p><img src="../images/spacer.gif" width="6" height="6"></p></td>
                                <td><img src="../images/spacer.gif" width="6" height="6"></td>
                                <td width="6" rowspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                              </tr>
                              <tr>
                                <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="13" valign="top"><img src="images/index_in_60.jpg" alt="M&aacute;s Informaci&oacute;n" width="13" height="12" class="General_Text"></td>
                                            <td width="10"><img src="../images/spacer.gif" width="10" height="5"></td>
                                            <td width="30" valign="top" class="General_Text">1597</td>
                                            <td width="10" class="General_Text"><img src="../images/spacer.gif" width="10" height="5"></td>
                                            <td width="706" class="General_Text"> Segismundo del Sacro Imperio Romano Germ&aacute;nico. </td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td><img src="../images/spacer.gif" width="1" height="10"></td>
                                    </tr>
                                    <tr>
                                      <td align="right"><img src="../../../Images/+info_91.jpg" width="47" height="12"></td>
                                    </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td><img src="../images/spacer.gif" width="6" height="6"></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                        </tr>
                    </table></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="../images/spacer.gif" width="8" height="8"></td>
            </tr>
            <tr>
              <td bgcolor="#ffbe00"><img src="../images/spacer.gif" width="1" height="1"></td>
            </tr>
            <tr>
              <td><img src="../images/spacer.gif" width="8" height="8"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" bgcolor="#C5CF68"><img src="images/index_in_53.jpg" width="80" height="15"></td>
              <td bgcolor="#c5cf68"><img src="../images/spacer.gif" width="1" height="1"></td>
            </tr>
            <tr>
              <td colspan="2"><img src="../images/spacer.gif" width="1" height="6"></td>
            </tr>
            <tr>
              <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                          <td width="409" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                          <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                        </tr>
                        <tr>
                          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="6" rowspan="3"><p><img src="../images/spacer.gif" width="6" height="6"></p></td>
                                <td><img src="../images/spacer.gif" width="6" height="6"></td>
                                <td width="6" rowspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                              </tr>
                              <tr>
                                <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="13" valign="top"><img src="images/index_in_60.jpg" alt="M&aacute;s Informaci&oacute;n" width="13" height="12" class="General_Text"></td>
                                            <td width="10"><img src="../images/spacer.gif" width="10" height="5"></td>
                                            <td width="30" valign="top" class="General_Text">1597</td>
                                            <td width="10" class="General_Text"><img src="../images/spacer.gif" width="10" height="5"></td>
                                            <td width="706" class="General_Text"> Segismundo del Sacro Imperio Romano Germ&aacute;nico. </td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td><img src="../images/spacer.gif" width="1" height="10"></td>
                                    </tr>
                                    <tr>
                                      <td align="right"><img src="../../../Images/+info_91.jpg" width="47" height="12"></td>
                                    </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td><img src="../images/spacer.gif" width="6" height="6"></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                        </tr>
                    </table></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="../images/spacer.gif" width="8" height="8"></td>
            </tr>
            <tr>
              <td bgcolor="#ffbe00"><img src="../images/spacer.gif" width="1" height="1"></td>
            </tr>
            <tr>
              <td><img src="../images/spacer.gif" width="8" height="8"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="119" height="15" align="left" bgcolor="#C5CF68"><img src="images/index_in_56.jpg" width="109" height="15"></td>
              <td bgcolor="#c5cf68"><img src="../images/spacer.gif" width="1" height="1"></td>
            </tr>
            <tr>
              <td colspan="2"><img src="../images/spacer.gif" width="1" height="6"></td>
            </tr>
            <tr>
              <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                          <td width="409" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                          <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                        </tr>
                        <tr>
                          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="6" rowspan="3"><p><img src="../images/spacer.gif" width="6" height="6"></p></td>
                                <td><img src="../images/spacer.gif" width="6" height="6"></td>
                                <td width="6" rowspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
                              </tr>
                              <tr>
                                <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td valign="top" class="General_Text"><table width="120" border="0" align="left" cellpadding="0" cellspacing="0">
                                                <!--DWLayoutTable-->
                                                <tr>
                                                  <td><table width="112" height="84" border="0" align="left" cellpadding="0" cellspacing="0">
                                                      <tr>
                                                        <td width="118" height="86" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                            <tr bgcolor="#FFBE00">
                                                              <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                                            </tr>
                                                            <tr>
                                                              <td width="1" bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                                              <td width="87%"><table width="112" height="84" border="0" cellpadding="0" cellspacing="0">
                                                                  <tr>
                                                                    <td><img src="images/muestra.jpg" width="112" height="84" hspace="2" vspace="2" align="absmiddle"></td>
                                                                  </tr>
                                                              </table></td>
                                                              <td width="1" bgcolor="#FFBE00"><img src="image/spacer.gif" width="1" height="1"></td>
                                                            </tr>
                                                            <tr bgcolor="#FFBE00">
                                                              <td colspan="3"><img src="image/spacer.gif" width="1" height="1"></td>
                                                            </tr>
                                                        </table></td>
                                                      </tr>
                                                  </table></td>
                                                  <td width="8" rowspan="2"><img src="../images/spacer.gif" width="8" height="8"></td>
                                                </tr>
                                                <tr>
                                                  <td><img src="../images/spacer.gif" width="1" height="8"></td>
                                                </tr>
                                              </table>
                                                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                  <tr>
                                                    <td class="titulo">EL FENOMENO </td>
                                                  </tr>
                                                  <tr>
                                                    <td><img src="../images/spacer.gif" width="20" height="5"></td>
                                                  </tr>
                                                </table>
                                                El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o todo esta aqui y no son como pence nada podra detenlo es panparinto.El loco y no son como pence nada podra detenlo es panparinto.El loco El fenomeno del A&ntilde;o. </td>
                                          </tr>
                                          <tr>
                                            <td><img src="../images/spacer.gif" width="1" height="10"></td>
                                          </tr>
                                          <tr>
                                            <td align="right"><p><img src="../../../Images/+info_91.jpg" alt="M&aacute;s Informaci&oacute;n" width="47" height="12" class="General_Text"></p>                                              </td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td><img src="../images/spacer.gif" width="10" height="5"></td>
                                    </tr>
                                    <tr>
                                      <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                          <tr bgcolor="#474746">
                                            <td colspan="3"><img src="images/vease_tam_60.jpg" alt="Vease Tambi&eacute;n" width="89" height="12"></td>
                                          </tr>
                                          <tr>
                                            <td colspan="3"><span><img src="../images/spacer.gif" width="8" height="8"></span></td>
                                          </tr>
                                          <tr>
                                            <td width="15"><img src="images/index_in_60.jpg" alt="M&aacute;s Informaci&oacute;n" width="13" height="12" class="General_Text"></td>
                                            <td width="10"><img src="../images/spacer.gif" width="10" height="2"></td>
                                            <td width="755" class="General_Text">AQU&Iacute; VA EL LINK QUE QUIERAN COLOCAR AL TAMA&Ntilde;O QUE QUIERAN EN FORMA DE TEXTO Y QUE SE VALLAN POR EL BOTON QUE ESTA AL LADO </td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td><img src="../images/spacer.gif" width="6" height="6"></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                        </tr>
                    </table></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="../images/spacer.gif" width="8" height="8"></td>
          </tr>
          <tr>
            <td bgcolor="#ffbe00"><img src="../images/spacer.gif" width="1" height="1"></td>
          </tr>
          <tr>
            <td><img src="../images/spacer.gif" width="8" height="8"></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="64%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                    <td width="409" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                    <td width="1" rowspan="3" bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="3"><img src="../../../Images/spacer.gif" width="3" height="3"></td>
                                            <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                  <td colspan="3" align="left" valign="bottom"><img src="../../../Images/spacer.gif" width="3" height="8"></td>
                                                </tr>
                                                <tr>
                                                  <td width="50" height="8" align="left" valign="bottom"><img src="images/semaforo_01.jpg" width="50" height="8"></td>
                                                  <td width="14" rowspan="8">&nbsp;</td>
                                                  <td width="430" height="8"><img src="../../../Images/spacer.gif" width="1" height="8"></td>
                                                </tr>
                                                <tr>
                                                  <td background="image/semaforo_03.jpg"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td width="50" valign="top"><img src="images/semaforo_02.jpg" width="50" height="16"></td>
                                                      </tr>
                                                  </table></td>
                                                  <td rowspan="2" valign="top" class="General_Text"><p class="General_Text">a ver como se ve la letras </p></td>
                                                </tr>
                                                <tr>
                                                  <td width="50"><img src="../../../Images/index/semaforo_03.jpg" width="50" height="5"></td>
                                                </tr>
                                                <tr>
                                                  <td background="image/semaforo_03.jpg"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td><img src="images/semaforo_04.jpg" width="50" height="16"></td>
                                                      </tr>
                                                  </table></td>
                                                  <td rowspan="2" valign="top" class="General_Text"><p class="General_Text">esta es la luz amarilla  lo que entre Es del </p></td>
                                                </tr>
                                                <tr>
                                                  <td><img src="../../../Images/index/semaforo_03.jpg" width="50" height="5"></td>
                                                </tr>
                                                <tr>
                                                  <td background="image/semaforo_03.jpg"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td><img src="images/semaforo_06.jpg" width="50" height="16"></td>
                                                      </tr>
                                                  </table></td>
                                                  <td rowspan="2" valign="top" class="General_Text"><p class="General_Text">y esta es la luz verde  Verde, que bien </p></td>
                                                </tr>
                                                <tr>
                                                  <td><img src="images/index/semaforo_03.jpg" width="50" height="5"></td>
                                                </tr>
                                                <tr>
                                                  <td valign="top"><img src="images/semaforo_08.jpg" width="50" height="10"></td>
                                                  <td><img src="../../../Images/spacer.gif" width="1" height="8"></td>
                                                </tr>
                                                <tr>
                                                  <td colspan="3" valign="top"><img src="../../../Images/spacer.gif" width="3" height="3"></td>
                                                </tr>
                                            </table></td>
                                            <td width="3"><img src="../../../Images/spacer.gif" width="3" height="3"></td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                </table></td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td bgcolor="#878786"><img src="image/spacer.gif" width="1" height="1"></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
        <td width="288" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="6" rowspan="3"><p><img src="../images/spacer.gif" width="6" height="6"></p></td>
            <td><img src="../images/spacer.gif" width="6" height="6"></td>
            <td width="6" rowspan="3"><img src="../images/spacer.gif" width="6" height="6"></td>
          </tr>
          <tr>
            <td width="287" height="50" bgcolor="#000099" class="TITULO_GRANDE"><div align="center" class="style1">aqui va el resumen del mes anterior </div></td>
          </tr>
          <tr>
            <td><img src="../images/spacer.gif" width="6" height="6"></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="../images/spacer.gif" width="10" height="10"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
