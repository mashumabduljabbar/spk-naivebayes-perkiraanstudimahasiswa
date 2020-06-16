<?php
	include('admin/fungsi_koneksi.php');

			$now = date ('Y-m-d');
			$ssql = "UPDATE daftar_user SET tgl_diagnosa = '$now', keterangan = '$_POST[waktululus]' WHERE id_user ='". $_SESSION['user']."'";
			$query = mysql_query($ssql);
			header ('location:periksa.php?act=user&simpan=1');

?>