<?php
$updated = date("Y-m-d H:i:s");
$updater = $_SESSION['username'];
	include "fungsi_koneksi.php";
	switch($_GET['act']){
		case 'add':
			mysqli_query($con, "INSERT INTO daftar_solusi SET 
			id_solusi					= '$_POST[id_solusi]',
			solusi						= '$_POST[solusi]',
			waktu_kelulusan				= '$_POST[waktu_kelulusan]',
			updated						= '$updated',
			updater						= '$updater'");		
			echo "<meta http-equiv='refresh' content='0;url=?bayes=daftar_solusi'>";
		break;
		case 'edit':
			$id_daftarsolusi = $_POST['id_daftarsolusi'];
			mysqli_query($con, "UPDATE daftar_solusi SET 
			id_solusi				= '$_POST[id_solusi]',
			solusi					= '$_POST[solusi]',
			waktu_kelulusan			= '$_POST[waktu_kelulusan]',
			updated					= '$updated',
			updater					= '$updater'
			WHERE id_daftarsolusi	= '$id_daftarsolusi'");
			echo "<meta http-equiv='refresh' content='0;url=?bayes=daftar_solusi'>";			
		break;
		case 'delete':
			mysqli_query($con, "DELETE FROM daftar_solusi WHERE id_daftarsolusi = '$_GET[id]'");
			echo "<meta http-equiv='refresh' content='0;url=?bayes=daftar_solusi'>";
		break;
	}
?>