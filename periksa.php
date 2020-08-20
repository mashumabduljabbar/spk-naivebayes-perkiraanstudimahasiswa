<!doctype html>
<?php
	include('admin/fungsi_koneksi.php');
	
	if (!isset($_SESSION['user'])){
		header ('location:index.php?valid=0');
	}
?>
<html style="background:#000;">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Algoritma Naive Bayes Untuk Menentukan Perkiraan Studi Mahasiswa</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css"> 
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="css/animate.css" rel="stylesheet" type="text/css">
 
<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
 
</head>
<body>

<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li><a href="?act=user">Data User</a></li>
			  <li><a href="index.php">Kembali</a></li>
			   <li><a href="logout.php">Logout</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper" id="hero_periksa">
	  	<?php
		error_reporting(0);
		$simpan = $_GET['simpan'];
			if ($simpan==1){
				echo "<div class=\"alert alert-success\" style=\"position:fixed; width:100%;\">";
				echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
				echo "<strong>Penyimpanan Berhasil!</strong> Data berhasil disimpan.";
				echo "</div>";
			}
		?>
    <div class="container">
      <div class="hero_section">
        <div class="row">
			<?php if($_GET['act']=="quisioner"){?>
          <div class="col-lg-8 col-sm-7">
            <div class="top_left_cont animated">
			<h2>Quisioner</h2>
			<form action="?act=submit" method="POST">
				<table class="table table" style="color:white;">
					<tr>
						<td>NO</td>
						<td>PERTANYAAN</td>
						<td>JAWABAN</td>
					</tr>
					<?php 
					$no = 0;
					$query_pertanyaan = mysqli_query($con, "select * from pertanyaan");
					while($data_pertanyaan = mysqli_fetch_array($query_pertanyaan)){
					?>
					<tr>
						<td><?php echo $no+1;?></td>
						<td><?php echo $data_pertanyaan['pertanyaan'];?></td>
						<td>
						<input type="hidden" name="id_gejala[]" value="<?php echo $data_pertanyaan['id_gejala'];?>">
						<select name='quisioner<?php echo $no;?>' style="color:black;">
							<option style="color:black;">Pilih</option>
							<option style="color:black;" value='<?php echo $data_pertanyaan['fakta_ya'].",".$y1[$no].",".$y2[$no];?>'>YA</option>
							<option style="color:black;" value='<?php echo $data_pertanyaan['fakta_tidak'].",".$t1[$no].",".$t2[$no];?>'>TIDAK</option>
						</select>
						</td>
					</tr>
					<?php $no++;} ?>
				<tr><td></td><td colspan="2"><input type="submit" value="Submit" style="color:black;" class="btn btn-warning"></td></tr>
				</table>
				
			</form>
			
			 </div>
          </div>
          <div class="top_left_cont col-lg-4 col-sm-5">
			<h2>Data User</h2>
			<table class="table table" id="tabel_user">
				<tbody>
					<?php
						$ssql = "SELECT * FROM daftar_user WHERE id_user = '".$_SESSION['user']."'";
						$query = mysqli_query($con, $ssql);
						
						while ($record = mysqli_fetch_array($query)){
							
							$lahir = substr($record['tgl_lahir'], 0, 4);
							$now = date ('Y');
							$usia = $now - $lahir;
							
							echo "<tr>";
							echo "<td>Nama Lengkap</td>";
							echo "<td>".$record['nama_lengkap']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Jenis Kelamin</td>";
							echo "<td>".$record['jenis_kelamin']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Tanggal Lahir</td>";
							echo "<td>".$record['tgl_lahir']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Nama Perguruan Tinggi</td>";
							echo "<td>".$record['nama_perti']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Nama Program Studi</td>";
							echo "<td>".$record['nama_jurusan']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Tahun Masuk</td>";
							echo "<td>".$record['tahun_masuk']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Username</td>";
							echo "<td>".$record['nama']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Usia</td>";
							echo "<td>$usia tahun</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Tanggal diagnosa terakhir</td>";
							echo "<td>".$record['tgl_diagnosa']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Keterangan Waktu Lulus</td>";
							echo "<td>".$record['keterangan']."</td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
		  </div>
		  
			<?php } ?>
			
			<?php if($_GET['act']=="submit"){
				$id_gejala = count($_POST['id_gejala']); //Jumlah Quisioner
				for ($v = 0; $v < $id_gejala; $v++) {
					$q[$v] = explode(",",$_POST['quisioner'.$v]);
				}
				
				$hitung_tepat = $q[0][1]*$q[1][1]*$q[2][1]*$q[3][1]*$q[4][1]*$q[5][1]*$q[6][1]*$q[7][1]*$q[8][1]*$q[9][1]*$q[10][1]*$q[11][1]*$q[12][1]*$q[13][1];
				$hitung_terlambat = $q[0][2]*$q[1][2]*$q[2][2]*$q[3][2]*$q[4][2]*$q[5][2]*$q[6][2]*$q[7][2]*$q[8][2]*$q[9][2]*$q[10][2]*$q[11][2]*$q[12][2]*$q[13][2];
				
			?><div class="col-lg-12 col-sm-7">
            <div class="top_left_cont animated">
			<h3>TEPAT : <?php  echo round((float)($hitung_tepat/($hitung_tepat+$hitung_terlambat)) * 100 ) . '%'; ?> | 
			TERLAMBAT : <?php  echo round((float)($hitung_terlambat/($hitung_tepat+$hitung_terlambat)) * 100 ) . '%'; ?> | 
			PREDIKSI WAKTU LULUS : <?php  if($hitung_tepat>$hitung_terlambat){ $waktululus = "TEPAT"; }else{ $waktululus = "TERLAMBAT"; } echo $waktululus;?>
			
			</h3>
			<form action="pasca_periksa.php" method="POST">
				<input type="hidden" name="waktululus" value="<?php echo $waktululus;?>">
				<input type="submit" value="Simpan Hasil" style="color:black;" class="btn btn-warning">
			</form><br>
			<table class="table table" style="color:white;">
					<tr>
						<td>NO</td>
						<td>PERTANYAAN</td>
						<td>JAWABAN</td>
						<td>NILAI TEPAT</td>
						<td>NILAI TERLAMBAT</td>
					</tr>
					<?php 
					$nomor = 0;
					$query_pertanyaan = mysqli_query($con, "select * from pertanyaan");
					while($data_pertanyaan = mysqli_fetch_array($query_pertanyaan)){
					$jawab = explode(",",$_POST['quisioner'.$nomor]);
					?>
					<tr>
						<td><?php echo $nomor+1;?></td>
						<td><?php echo $data_pertanyaan['pertanyaan'];?></td>
						<td><?php echo $jawab[0];?></td>
						<td><?php echo $jawab[1];?></td>
						<td><?php echo $jawab[2];?></td>
					</tr>
					<?php $nomor++;} ?>
			</table>
			<br>
			<h3>SOLUSI</h3>
			<table class="table table" style="color:white;">
					<tr>
						<td>NO</td>
						<td>SOLUSI</td>
					</tr>
					<?php 
					$nomor = 1;
					$query_daftar_solusi = mysqli_query($con, "select * from daftar_solusi where waktu_kelulusan='$waktululus'");
					while($data_daftar_solusi = mysqli_fetch_array($query_daftar_solusi)){
					?>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $data_daftar_solusi['solusi'];?></td>
					</tr>
					<?php $nomor++;} ?>
			</table>
				</div>
				</div>
			<?php } ?>
			
			<?php if($_GET['act']=="user"){?>
			<div class="col-lg-12 col-sm-7">
            <div class="top_left_cont animated">
			<h3>DATA USER</h3>
			<table class="table table" style="color:white;">
			<?php
			$ssql = "SELECT * FROM daftar_user WHERE id_user = '".$_SESSION['user']."'";
						$query = mysqli_query($con, $ssql);
						
						while ($record = mysqli_fetch_array($query)){
							
							$lahir = substr($record['tgl_lahir'], 0, 4);
							$now = date ('Y');
							$usia = $now - $lahir;
							
							echo "<tr>";
							echo "<td>Nama Lengkap</td>";
							echo "<td>".$record['nama_lengkap']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Jenis Kelamin</td>";
							echo "<td>".$record['jenis_kelamin']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Tanggal Lahir</td>";
							echo "<td>".$record['tgl_lahir']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Nama Perguruan Tinggi</td>";
							echo "<td>".$record['nama_perti']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Nama Program Studi</td>";
							echo "<td>".$record['nama_jurusan']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Tahun Masuk</td>";
							echo "<td>".$record['tahun_masuk']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Username</td>";
							echo "<td>".$record['nama']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Usia</td>";
							echo "<td>$usia tahun</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Tanggal diagnosa terakhir</td>";
							echo "<td>".$record['tgl_diagnosa']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>Keterangan Waktu Lulus</td>";
							echo "<td>".$record['keterangan']."</td>";
							echo "</tr>";
						} ?>
						</table>
				</div>
				</div>
					<?php	} ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section--> 

<!--Footer-->
<footer class="footer_wrapper" id="contact_periksa">
  <div class="container">
    <section class="page_section contact" id="contact_periksa">
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2018 <a href="index.php">Algoritma Naive Bayes Untuk Menentukan Perkiraan Studi Mahasiswa</a>. </span> </div>
  </div>
</footer>

<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>