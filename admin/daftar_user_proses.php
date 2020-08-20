<?php
$updated = date("Y-m-d H:i:s");
$updater = $_SESSION['username'];
	include "fungsi_koneksi.php";
	switch($_GET['act']){
		case 'add':
			mysqli_query($con, "INSERT INTO daftar_user SET 
			nama_lengkap				= '$_POST[nama_lengkap]',
			nama_perti					= '$_POST[nama_perti]',
			nama_jurusan				= '$_POST[nama_jurusan]',
			tahun_masuk					= '$_POST[tahun_masuk]',
			nama						= '$_POST[nama]',
			password					= '$_POST[password]',
			jenis_kelamin				= '$_POST[jenis_kelamin]',
			tgl_lahir					= '$_POST[tgl_lahir]',
			updated						= '$updated',
			updater						= '$updater'");		
			echo "<meta http-equiv='refresh' content='0;url=?bayes=daftar_user'>";
		break;
		case 'edit':
			$id_user = $_POST['id_user'];
			mysqli_query($con, "UPDATE daftar_user SET 
			nama_lengkap				= '$_POST[nama_lengkap]',
			nama_perti					= '$_POST[nama_perti]',
			nama_jurusan				= '$_POST[nama_jurusan]',
			tahun_masuk					= '$_POST[tahun_masuk]',
			nama						= '$_POST[nama]',
			password					= '$_POST[password]',
			jenis_kelamin				= '$_POST[jenis_kelamin]',
			tgl_lahir					= '$_POST[tgl_lahir]',
			updated						= '$updated',
			updater						= '$updater'
			WHERE id_user				= '$id_user'");
			echo "<meta http-equiv='refresh' content='0;url=?bayes=daftar_user'>";			
		break;
		case 'delete':
			mysqli_query($con, "DELETE FROM daftar_user WHERE id_user = '$_GET[id]'");
			echo "<meta http-equiv='refresh' content='0;url=?bayes=daftar_user'>";
		break;
	}
?>