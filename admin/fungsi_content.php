<?php
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
	include "fungsi_koneksi.php";
	switch($_GET['bayes']){
	    case '':
			include("home.php");		
		break;
		case 'Home':
			include("home.php");		
		break;
		case 'Logout':
			include("fungsi_logout.php");		
		break;
		case '01_quisioner':
			include("01_quisioner.php");		
		break;
		case '01_quisioner_add':
			include("01_quisioner_add.php");		
		break;
		case '01_quisioner_edit':
			include("01_quisioner_edit.php");		
		break;
		case '01_quisioner_proses':
			include("01_quisioner_proses.php");		
		break;
		case '02_probabilitas_atribut':
			include("02_probabilitas_atribut.php");		
		break;
		case 'pertanyaan':
			include("pertanyaan.php");		
		break;
		case 'pertanyaan_add':
			include("pertanyaan_add.php");		
		break;
		case 'pertanyaan_edit':
			include("pertanyaan_edit.php");		
		break;
		case 'pertanyaan_proses':
			include("pertanyaan_proses.php");		
		break;
		case 'daftar_solusi':
			include("daftar_solusi.php");		
		break;
		case 'daftar_solusi_add':
			include("daftar_solusi_add.php");		
		break;
		case 'daftar_solusi_edit':
			include("daftar_solusi_edit.php");		
		break;
		case 'daftar_solusi_proses':
			include("daftar_solusi_proses.php");		
		break;
		case 'daftar_user':
			include("daftar_user.php");		
		break;
		case 'daftar_user_add':
			include("daftar_user_add.php");		
		break;
		case 'daftar_user_edit':
			include("daftar_user_edit.php");		
		break;
		case 'daftar_user_proses':
			include("daftar_user_proses.php");		
		break;
		case 'tbl_admin':
			include("tbl_admin.php");		
		break;
		case 'tbl_admin_add':
			include("tbl_admin_add.php");		
		break;
		case 'tbl_admin_edit':
			include("tbl_admin_edit.php");		
		break;
		case 'tbl_admin_proses':
			include("tbl_admin_proses.php");		
		break;
		
		
	};
?>	