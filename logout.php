<?php
	include('admin/fungsi_koneksi.php');
?>
<?php
	unset ($_SESSION['user']);
	header ('location:index.php');
?>