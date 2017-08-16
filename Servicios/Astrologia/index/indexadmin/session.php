<?php session_start();  
      header("Location: http://www.geanut.com/Servicios/Astrologia/index/indexadmin/preview_index.php"); 
	  
/* Fecha de edicion */
	if ($_POST['dia_pub_index']!=NULL){
		$_SESSION['dia_pub_index']=$_POST['dia_pub_index'];
	}
	if ($_POST['mes_pub_index']!=NULL) {
		$_SESSION['mes_pub_index']=$_POST['mes_pub_index'];
	}
	if ($_POST['ano_pub_index']!=NULL) {
		$_SESSION['ano_pub_index']=$_POST['ano_pub_index'];
	}
/* Pensamiento */
	if ($_POST['titulo_pensamiento']!=NULL){
		$_SESSION['titulo_pensamiento']=$_POST['titulo_pensamiento'];
	}
	if ($_POST['pensamiento']!=NULL) {
		$_SESSION['pensamiento']=$_POST['pensamiento'];
	}
	if ($_POST['autor_pensamiento']!=NULL) {
		$_SESSION['autor_pensamiento']=$_POST['autor_pensamiento'];
	}
/* Index Especial */
	if ($_POST['titulo_index_especial']!=NULL){
		$_SESSION['titulo_index_especial']=$_POST['titulo_index_especial'];
	}
	if ($_POST['contenido_index_especial']!=NULL) {
		$_SESSION['contenido_index_especial']=$_POST['contenido_index_especial'];
	}
	
/* Signos */
	if ($_POST['solar_entrante']!=NULL) {
		$_SESSION['solar_entrante']=$_POST['solar_entrante'];
	}
	if ($_POST['solar_saliente']!=NULL) {
		$_SESSION['solar_saliente']=$_POST['solar_saliente'];
	}
	if ($_POST['sig_sol_desc']!=NULL) {
		$_SESSION['sig_sol_desc']=$_POST['sig_sol_desc'];
	}
	if ($_POST['lunar_entrante']!=NULL) {
		$_SESSION['lunar_entrante']=$_POST['lunar_entrante'];
	}
	if ($_POST['lunar_saliente']!=NULL) {
		$_SESSION['lunar_saliente']=$_POST['lunar_saliente'];
	}
	if ($_POST['sig_lun_desc']!=NULL) {
		$_SESSION['sig_lun_desc']=$_POST['sig_lun_desc'];
	}
	
/* Fasae Lunar */
	if ($_POST['titulo_fase_lunar']!=NULL) {
		$_SESSION['titulo_fase_lunar']=$_POST['titulo_fase_lunar'];
	}
	if ($_POST['contenido_fase_lunar']!=NULL) {
		$_SESSION['contenido_fase_lunar']=$_POST['contenido_fase_lunar'];
	}
	
/* Luna fuera de curso */
	if ($_POST['lun_fue_cur_ini']!=NULL) {
		$_SESSION['lun_fue_cur_ini']=$_POST['lun_fue_cur_ini'];
	}
	if ($_POST['lun_fue_cur_fin']!=NULL) {
		$_SESSION['lun_fue_cur_fin']=$_POST['lun_fue_cur_fin'];
	}
	if ($_POST['lun_fue_cur_ini_local']!=NULL) {
		$_SESSION['lun_fue_cur_ini_local']=$_POST['lun_fue_cur_ini_local'];
	}
	if ($_POST['lun_fue_cur_fin_local']!=NULL) {
		$_SESSION['lun_fue_cur_fin_local']=$_POST['lun_fue_cur_fin_local'];
	}
	
/* Formula del Index */
	if ($_POST['formula_index']!=NULL) {
		$_SESSION['formula_index']=$_POST['formula_index'];
	}
	if ($_POST['titulo_resultado_index']!=NULL) {
		$_SESSION['titulo_resultado_index']=$_POST['titulo_resultado_index'];
	}
	if ($_POST['resultado_index']!=NULL) {
		$_SESSION['resultado_index']=$_POST['resultado_index'];
	}
	
/* Comentario astral */
	if ($_POST['titulo_comentario_astral']!=NULL) {
		$_SESSION['titulo_comentario_astral']=$_POST['titulo_comentario_astral'];
	}
	if ($_POST['comentario_astral']!=NULL) {
		$_SESSION['comentario_astral']=$_POST['comentario_astral'];
	}
	
/* Mirando las Estrellas */
	if ($_POST['titulo_mirando_estrellas']!=NULL) {
		$_SESSION['titulo_mirando_estrellas']=$_POST['titulo_mirando_estrellas'];
	}
	if ($_POST['mirando_las_estrellas']!=NULL) {
		$_SESSION['mirando_las_estrellas']=$_POST['mirando_las_estrellas'];
	}
	if ($_POST['pie_mirando_las_estrellas']!=NULL) {
		$_SESSION['pie_mirando_las_estrellas']=$_POST['pie_mirando_las_estrellas'];
	}

/* Sabia usted? */
	if ($_POST['sabia_usted_titulo']!=NULL) {
		$_SESSION['sabia_usted_titulo']=$_POST['sabia_usted_titulo'];
	}
	if ($_POST['sabia_usted_contenido']!=NULL) {
		$_SESSION['sabia_usted_contenido']=$_POST['sabia_usted_contenido'];
	}
	if ($_POST['sabia_usted_url']!=NULL) {
		$_SESSION['sabia_usted_url']=$_POST['sabia_usted_url'];
	}
	
/* Semaforo */
	if ($_POST['semaforo_rojo']!=NULL) {
		$_SESSION['semaforo_rojo']=$_POST['semaforo_rojo'];
	}
	if ($_POST['semaforo_amarillo']!=NULL) {
		$_SESSION['semaforo_amarillo']=$_POST['semaforo_amarillo'];
	}
	if ($_POST['semaforo_verde']!=NULL) {
		$_SESSION['semaforo_verde']=$_POST['semaforo_verde'];
	}
	
	if ($_POST['semaforo_rojo_explicacion']!=NULL) {
		$_SESSION['semaforo_rojo_explicacion']=$_POST['semaforo_rojo_explicacion'];
	}
	if ($_POST['semaforo_amarillo_explicacion']!=NULL) {
		$_SESSION['semaforo_amarillo_explicacion']=$_POST['semaforo_amarillo_explicacion'];
	}
	if ($_POST['semaforo_verde_explicacion']!=NULL) {
		$_SESSION['semaforo_verde_explicacion']=$_POST['semaforo_verde_explicacion'];
	}
	
/* Energias */
		

		
?>