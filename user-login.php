<?php
	include('admin/fungsi_koneksi.php');

		$name = $_POST['text_name'];
		$pass = $_POST['pass'];
		$query_user = mysql_query("SELECT * FROM daftar_user WHERE nama = '$name' AND password = '$pass'");
		if(mysql_num_rows($query_user)==1){ //jika berhasil akan bernilai 1
			$data_userportal = mysql_fetch_array($query_user);
			$_SESSION['user'] = $data_userportal['id_user'];
			header ('location:periksa.php?act=quisioner');
		}else{
			header ('location:index.php?valid=0');
		}
?>