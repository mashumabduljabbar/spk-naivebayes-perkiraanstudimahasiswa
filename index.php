<!doctype html>

<?php
	include('admin/fungsi_koneksi.php');
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Algoritma Naive Bayes Untuk Menentukan Perkiraan Studi Mahasiswa</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css"> 
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="css/animate.css" rel="stylesheet" type="text/css">
<script href="js/datepicker.js"></script>
 
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
      <div class="logo"></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
			  <li><a href="#tes_asma" class="scroll-link">Tes Kelulusan</a></li>
			  <li><a href="#contact" class="scroll-link">Metode</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper" style="background-color:black">
    	<?php
		if (isset($_GET['valid'])){
			echo "<div class=\"alert alert-danger\" style=\"position:fixed; width:100%;\">";
			echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
			echo "<strong>PERHATIAN!</strong> User ID atau Password Salah.Hanya User yang terdaftar yang dapat mengakses layanan.";
			echo "</div>";
		}
		
		if (isset($_GET['mail'])){
			$mail = $_GET['mail'];
			
			switch ($mail){
				case 'gagal':
				echo "<div class=\"alert alert-danger\" style=\"position:fixed; width:100%;\">";
				echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
				echo "<strong>EMAIL GAGAL TERKIRIM!</strong> cek kelengkapan pengisian";
				echo "</div>";
				break;
				
				case 'sukses':
				echo "<div class=\"alert alert-success\" style=\"position:fixed; width:100%;\">";
				echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
				echo "<strong>EMAIL TERKIRIM!</strong> email anda sudah terkirim ke database kami, terimakasih";
				echo "</div>";
				break;
			}
		} ?>
	<div class="container">
		<div class="hero_section">
			<div class="row">
			  <div class="col-lg-12 col-sm-7">
				<div class="top_left_cont zoomIn wow animated"> 
				  <h2>Selamat datang di <strong>Algoritma Naive Bayes Untuk Menentukan Perkiraan Studi Mahasiswa</strong> (Diagnosa Kelulusan melalui Internet)</h2>
				  
			  </div>
			</div>
			</div>
		</div>
    </div>
  </div>
</section>
<!--Hero_Section--> 

<!--TesAsma-->
<section id="tes_asma">
<div class="inner_wrapper">
  <div class="container">
    <h2><strong>TES KELULUSAN<strong></h2>
    <div class="inner_section">
	<div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="img/wisuda.png" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
      	<div class=" col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
        	<div class=" delay-01s animated fadeInDown wow animated">
				<h3><strong>Algoritma Naive Bayes Untuk Menentukan Perkiraan Studi Mahasiswa</strong> menyediakan layanan diagnosa secara mandiri apakah mahasiswa lulus tepat waktu atau tidak.</h3><br/> 
				<p>Keakuratan informasi yang diberikanpun tidak jauh berbeda dengan keadaan sebenarnya dikarenakan <strong>Algoritma Naive Bayes Untuk Menentukan Perkiraan Studi Mahasiswa</strong> bekerja sama dengan mengambil data dari sampel-sampel yang terkait. Untuk melakukan tes, anda akan diberikan beberapa pertanyaan tentang kondisi anda saat ini, dan di bagian akhir pertanyaan anda dapat melihat hasil dari kondisi tersebut.</p> <br/>
			</div>
			<?php
				if (!isset($_SESSION['user'])){
					include_once 'login-modal.php';
				}
				else if (isset($_SESSION['user'])){
					echo "<div class=\"work_bottom\"><a href=\"periksa.php?act=quisioner\" class=\"contact_btn\">MULAI</a> </div>";
				}
			?>
			<div class="work_bottom">	<a href="daftar.php" class="contact_btn">Daftar</a> </div>
	   </div>
	</div>
	   
    </div>
  </div> 
  </div>
</section>
<!--TesAsma----> 

<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>METODE</h2>
        <div class="row">
          <div class="col-lg-4">
            <h2 style="font-size:20pt;">Pengetahuan</h2>
			<p style="text-align:justify;">Langkah paling awal untuk membuat sistem pakar adalah dengan menggali informasi tentang suatu masalah yang akan dipecahkan dengan bantuan seorang pakar maupun sumber pengetahuan lainya seperti buku.</p>
          </div>
          <div class="col-lg-4">
			 <h2 style="font-size:20pt;">Naive-Bayes</h2>
			 <p style="text-align:justify;">Data yang didapatkan dari wawancara maupun pengamatan berupa probabilitas tentang berapa orang yang lulus, tidak lulus. Data ini kemudian digunakan untuk menentukan aturan sistem dalam menentukan keputusan.</p>
          </div>
          <div class="col-lg-4">
			 <h2 style="font-size:20pt;">Keakuratan</h2>
			 <p>Pada Sistem pakar ini (Algoritma Naive Bayes Untuk Menentukan Perkiraan Studi Mahasiswa), tingkat keakuratan masih belum maksimal karena data yang diperoleh masih sedikit sehingga masih belum dapat menggantikan pakar yang sesungguhnya.</p>
          </div>
        </div>
      </div>
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