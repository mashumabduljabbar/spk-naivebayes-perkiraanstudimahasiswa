﻿<?php
$updated = date("Y-m-d H:i:s");
$updater = $_SESSION['username'];
	include "fungsi_koneksi.php";
	switch($_GET['act']){
		case 'add':
			mysql_query("INSERT INTO pertanyaan SET 
			id_gejala			= '$_POST[id_gejala]',
			pertanyaan			= '$_POST[pertanyaan]',
			fakta_ya			= '$_POST[fakta_ya]',
			fakta_tidak			= '$_POST[fakta_tidak]',
			updated				= '$updated',
			updater				= '$updater'");		
			echo "<meta http-equiv='refresh' content='0;url=?bayes=pertanyaan'>";
		break;
		case 'edit':
			$id_basis = $_POST['id_basis'];
			mysql_query("UPDATE pertanyaan SET 
			id_gejala			= '$_POST[id_gejala]',
			pertanyaan			= '$_POST[pertanyaan]',
			fakta_ya			= '$_POST[fakta_ya]',
			fakta_tidak			= '$_POST[fakta_tidak]',
			updated				= '$updated',
			updater				= '$updater'
			WHERE id_basis 		= '$id_basis'");
			echo "<meta http-equiv='refresh' content='0;url=?bayes=pertanyaan'>";			
		break;
		case 'delete':
			mysql_query("DELETE FROM pertanyaan WHERE id_basis = '$_GET[id]'");
			echo "<meta http-equiv='refresh' content='0;url=?bayes=pertanyaan'>";
		break;
	}
?>