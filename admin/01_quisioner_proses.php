<?php
$updated = date("Y-m-d H:i:s");
$updater = $_SESSION['username'];
	include "fungsi_koneksi.php";
	switch($_GET['act']){
		case 'add':
			mysqli_query($con, "INSERT INTO 01_quisioner SET 
			nama_quisioner							= '$_POST[nama_quisioner]',
			`quisioner[0]`							= '$_POST[jalurprestasi_quisioner]',
			`quisioner[1]`							= '$_POST[pendidikanibuminimalsma_quisioner]',
			`quisioner[2]`							= '$_POST[ip1_328_quisioner]',
			`quisioner[3]`							= '$_POST[ip2_330_quisioner]',
			`quisioner[4]`							= '$_POST[ip3_332_quisioner]',
			`quisioner[5]`							= '$_POST[ip4_334_quisioner]',
			`quisioner[6]`							= '$_POST[ip5_336_quisioner]',
			`quisioner[7]`							= '$_POST[ip6_338_quisioner]',
			`quisioner[8]`							= '$_POST[sks1_21_quisioner]',
			`quisioner[9]`							= '$_POST[sks2_21_quisioner]',
			`quisioner[10]`							= '$_POST[sks3_21_quisioner]',
			`quisioner[11]`							= '$_POST[sks4_21_quisioner]',
			`quisioner[12]`							= '$_POST[sks5_21_quisioner]',
			`quisioner[13]`							= '$_POST[sks6_21_quisioner]',
			lulus_quisioner							= '$_POST[lulus_quisioner]',
			updated									= '$updated',
			updater									= '$updater'");		
			echo "<meta http-equiv='refresh' content='0;url=?bayes=01_quisioner'>";
		break;
		case 'edit':
			$id_quisioner = $_POST['id_quisioner'];
			mysqli_query($con, "UPDATE 01_quisioner SET 
			nama_quisioner							= '$_POST[nama_quisioner]',
			`quisioner[0]`							= '$_POST[jalurprestasi_quisioner]',
			`quisioner[1]`							= '$_POST[pendidikanibuminimalsma_quisioner]',
			`quisioner[2]`							= '$_POST[ip1_328_quisioner]',
			`quisioner[3]`							= '$_POST[ip2_330_quisioner]',
			`quisioner[4]`							= '$_POST[ip3_332_quisioner]',
			`quisioner[5]`							= '$_POST[ip4_334_quisioner]',
			`quisioner[6]`							= '$_POST[ip5_336_quisioner]',
			`quisioner[7]`							= '$_POST[ip6_338_quisioner]',
			`quisioner[8]`							= '$_POST[sks1_21_quisioner]',
			`quisioner[9]`							= '$_POST[sks2_21_quisioner]',
			`quisioner[10]`							= '$_POST[sks3_21_quisioner]',
			`quisioner[11]`							= '$_POST[sks4_21_quisioner]',
			`quisioner[12]`							= '$_POST[sks5_21_quisioner]',
			`quisioner[13]`							= '$_POST[sks6_21_quisioner]',
			lulus_quisioner							= '$_POST[lulus_quisioner]',
			updated									= '$updated',
			updater									= '$updater'
			WHERE id_quisioner 						= '$id_quisioner'");
			echo "<meta http-equiv='refresh' content='0;url=?bayes=01_quisioner'>";			
		break;
		case 'delete':
			mysqli_query($con, "DELETE FROM 01_quisioner WHERE id_quisioner = '$_GET[id]'");
			echo "<meta http-equiv='refresh' content='0;url=?bayes=01_quisioner'>";
		break;
	}
?>