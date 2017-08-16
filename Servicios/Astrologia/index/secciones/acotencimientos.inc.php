<?php 	session_start();?>
<?php if ( $_SESSION['aco']!=NULL) { ?>
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
                       <?php $x = unserialize($_SESSION['aco']);  ?>     
                       <?php foreach($x->get_fecha() as $valor){ ?>
                            <tr>
                              <td width="13" valign="top">
                              
                          
                              <img src="images/index_in_60.jpg" alt="M&aacute;s Informaci&oacute;n" width="13" height="12" class="General_Text">
                              
                              </td>
                              <td width="10"><img src="../images/spacer.gif" width="10" height="5"></td>
                              <td width="30" valign="top" class="General_Text"> 
							  <?php echo $valor['ano'] ?>
                              </td>
                              <td width="10" class="General_Text"><img src="../images/spacer.gif" width="10" height="5"></td>
                              <td width="706" class="General_Text">
						        <?php echo $valor['texto'] ?>
                               </td>
                            </tr>
                          
                             <?php if (++$i>4) break; }?>
                          </table></td>
                        </tr>
                        <tr>
                          <td><img src="../images/spacer.gif" width="1" height="10"></td>
                        </tr>
                        <tr>
                          <td align="right"><a href="/proyecto_nuevo/Servicios/Astrologia/index/secciones/mas.inc.php"><img src="../../../Images/+info_91.jpg" width="47" height="12"></a></td>
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
<?php }?>
