<?php
	include('admin/fungsi_koneksi.php');
?>
<?php
	$valid = 0;
	
	$nama_lengkap = $_POST['nama_lengkap'];
	$nama_perti = $_POST['nama_perti'];
	$nama_jurusan = $_POST['nama_jurusan'];
	$tahun_masuk = $_POST['tahun_masuk'];
	$user = $_POST['text_namesignup'];
	$lahir = $_POST['text_lahirsignup'];
	$gender = $_POST['sel_gender'];
	$pass = $_POST['pass_signup'];
	
	for ($counter = 0; $counter < 2; $counter++){
		
		if ($counter == 0){
			$comp = $user;
			$param = "nama";
		}
		else if ($counter > 0){
			$comp = $pass;
			$param = "password";
		}
		
		$ssql = "SELECT * FROM daftar_user WHERE $param = '$comp'";
		$query = mysqli_query($con, $ssql);
		$result = mysqli_num_rows($query);
	
		if ($result > 0){
			$valid += 1;
		}
	}
	
	if ($valid >= 2){
		header ('location:daftar.php?berhasil=0');
	}
	else {
		$defdate = date ('Y-m-d');
		$ssql = "INSERT INTO daftar_user (nama_lengkap, nama_perti, nama_jurusan, tahun_masuk, nama, password, jenis_kelamin, tgl_lahir, tgl_diagnosa, keterangan) VALUES ('$nama_lengkap', '$nama_perti', '$nama_jurusan', '$tahun_masuk', '$user', '$pass', '$gender', '$lahir','$defdate','-')";
		$query = mysqli_query($con, $ssql);
		header ('location:daftar.php?berhasil=1');
		
	}
?>