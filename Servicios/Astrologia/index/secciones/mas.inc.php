<?php 	session_start();?>
<?php include("../../../../gealib.php"); ?>
<?php if ( $_SESSION['aco']!=NULL) { ?>
<body bgcolor="#FFFFFF">
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
<tr>
  <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <?php $x = unserialize($_SESSION['aco']);  ?>
      <?php foreach($x->get_fecha() as $valor){ ?>
      <tr>
        <td width="13" valign="top"><img src="images/index_in_60.jpg" alt="M&aacute;s Informaci&oacute;n" width="13" height="12" class="General_Text"> </td>
        <td width="10"><img src="../images/spacer.gif" width="10" height="5"></td>
        <td width="30" valign="top"><?php echo $valor['ano'] ?> </td>
        <td width="10"><img src="../images/spacer.gif" width="10" height="5"></td>
        <td width="706"><?php echo $valor['texto'] ?> </td>
      </tr>
      <?php }?>
    </table>
    <?php }?>
