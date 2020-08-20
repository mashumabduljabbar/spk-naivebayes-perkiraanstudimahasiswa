        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
				<!--BLOCK SECTION -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <table width="100%">
						<tr>
							<td width="50%">
                            PROBABILITAS ATRIBUT
							</td>
						</tr>
						</table>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

<table width="100%" class="table table-striped table-bordered table-hover">
<tr>
	<td style="text-align: center;">
        KETERANGAN WAKTU KELULUSAN
	</td>
	<td style="text-align: center;">
        JUMLAH KELULUSAN
	</td>
</tr>
<?php
	$jumlah_kelulusan = mysqli_fetch_array(mysqli_query($con, "select 
count(CASE
    WHEN lulus_quisioner='TEPAT' THEN lulus_quisioner
END) as tepat,
count(CASE
    WHEN lulus_quisioner='TERLAMBAT' THEN lulus_quisioner
END) as terlambat
from `01_quisioner`"));
?>
<tr>
	<td style="text-align: center;">
		TEPAT WAKTU
	</td>
	<td style="text-align: center;">
        <?php echo $jumlah_kelulusan['tepat'];?>
	</td>
</tr>
<tr>
	<td style="text-align: center;">
		TERLAMBAT
	</td>
	<td style="text-align: center;">
        <?php echo $jumlah_kelulusan['terlambat'];?>
    </td>
</tr>
</table>							
<table width="100%">
<tr>
	<td width="50%">
        RUMUS TEPAT : 
		<ol>
			<li>Jumlah JAWABAN YA pada Atribut Reguler yang lulus TEPAT WAKTU / Jumlah kelulusan TEPAT WAKTU pada Atribut Class (Contoh : 22/31 = 0.71 atau 71%) </li>
			<li>Jumlah JAWABAN TIDAK pada Atribut Reguler yang lulus TEPAT WAKTU / Jumlah kelulusan TEPAT WAKTU pada Atribut Class (Contoh : 9/31 = 0.29 atau 29%)</li>
			<li>Jumlah JAWABAN YA dan TIDAK pada Atribut Reguler yang lulus TEPAT WAKTU harus sama dengan 100% (Contoh : 71% + 29% = 100%</li>
		</ol>
        RUMUS TERLAMBAT : 
		<ol>
			<li>Jumlah JAWABAN YA pada Atribut Reguler yang lulus TERLAMBAT / Jumlah kelulusan TERLAMBAT pada Atribut Class (Contoh : 6/19 = 0.32 atau 32%) </li>
			<li>Jumlah JAWABAN TIDAK pada Atribut Reguler yang lulus TERLAMBAT / Jumlah kelulusan TERLAMBAT pada Atribut Class (Contoh : 13/19 = 0.68 atau 68%)</li>
			<li>Jumlah JAWABAN YA dan TIDAK pada Atribut Reguler yang lulus TERLAMBAT harus sama dengan 100% (Contoh : 32% + 68% = 100%</li>
		</ol>
	</td>
</tr>
</table>
						
<table class="table table-striped table-bordered table-hover" id="datatabel">
<tr>
	<td colspan="2" style="text-align: center;">ATRIBUT REGULER</td>
	<td colspan="2" style="text-align: center;">ATRIBUT CLASS</td>
</tr>
<tr>
	<td style="text-align: center;">PERTANYAAN</td>
	<td style="text-align: center;">JAWABAN</td>
	<td style="text-align: center;">TEPAT</td>
	<td style="text-align: center;">TERLAMBAT</td>
</tr>
<?php
$no = 0;
$query_basis = mysqli_query($con, "select * from pertanyaan");
while($data_basis=mysqli_fetch_array($query_basis)){
	
$quisioner = mysqli_fetch_array(mysqli_query($con, "select 
ROUND(count(CASE
    WHEN `quisioner[$no]`='YA' and lulus_quisioner='TEPAT' THEN `quisioner[$no]`
END)/count(CASE
    WHEN lulus_quisioner='TEPAT' THEN `quisioner[$no]`
END),2) as ya_tepat,
ROUND(count(CASE
    WHEN `quisioner[$no]`='TIDAK' and lulus_quisioner='TEPAT' THEN `quisioner[$no]`
END)/count(CASE
    WHEN lulus_quisioner='TEPAT' THEN `quisioner[$no]`
END),2) as tidak_tepat,
ROUND(count(CASE
    WHEN `quisioner[$no]`='YA' and lulus_quisioner='TERLAMBAT' THEN `quisioner[$no]`
END)/count(CASE
    WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[$no]`
END),2) as ya_terlambat,
ROUND(count(CASE
    WHEN `quisioner[$no]`='TIDAK' and lulus_quisioner='TERLAMBAT' THEN `quisioner[$no]`
END)/count(CASE
    WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[$no]`
END),2) as tidak_terlambat

from `01_quisioner`"));
?>
<tr>
	<td rowspan="2"><?php echo $data_basis['pertanyaan'];?></td>
	<td>YA</td>
	<td style="text-align: center;">
	<?php 
	echo round((float)$quisioner['ya_tepat'] * 100 ) . '%';
	?></td>
	<td style="text-align: center;">
	<?php
	echo round((float)$quisioner['ya_terlambat'] * 100 ) . '%';
	?>
	</td>
</tr>
<tr>
	<td>TIDAK</td>
	<td style="text-align: center;">
	<?php 
	echo round((float)$quisioner['tidak_tepat'] * 100 ) . '%';
	?></td>
	<td style="text-align: center;">
	<?php
	echo round((float)$quisioner['tidak_terlambat'] * 100 ) . '%';
	?>
	</td>
</tr>
<?php 
$no++;
} ?>

</table>
<br>
<table width="100%">
<tr>
	<td width="50%">
        RUMUS MENCARI PREDIKSI SUATU KASUS : 
		<ol>
			<li>Setiap Nilai Ya dan Tidak pada Atribut Class TEPAT dikalikan pada masing-masing Nilai Atribut Regulernya<br>(Contoh : 0.71*0.55*0.39*0.45*0.61*0.42*0.55*0.55*0.39*0.35*0.61*0.68*0.48*0.48).</li>
			<li>Setiap Nilai Ya dan Tidak pada Atribut Class TERLAMBAT dikalikan pada masing-masing Nilai Atribut Regulernya<br>(Contoh : 0.32*0.79*0.26*0.53*0.16*0.58*0.37*0.53*0.21*0.63*0.11*0.11*0.63*0.21).</li>
			<li>Jika Total Nilai Perhitungan Atribut TEPAT lebih tinggi daripada Nilai Perhitungan Atribut TERLAMBAT, maka Prediksi nya adalah TEPAT WAKTU.</li>
			<li>Jika Total Nilai Perhitungan Atribut TEPAT lebih rendah daripada Nilai Perhitungan Atribut TERLAMBAT, maka Prediksi nya adalah TERLAMBAT.</li>
		</ol>
	</td>
</tr>
</table>
<br>
<table class="table table-striped table-bordered table-hover" id="datatabel">
<tr>
	<th style="text-align: center;">NAMA</th>
	<th style="text-align: center;">A</th>
	<th style="text-align: center;">B</th>
	<th style="text-align: center;">C</th>
	<th style="text-align: center;">D</th>
	<th style="text-align: center;">E</th>
	<th style="text-align: center;">F</th>
	<th style="text-align: center;">G</th>
	<th style="text-align: center;">H</th>
	<th style="text-align: center;">I</th>
	<th style="text-align: center;">J</th>
	<th style="text-align: center;">K</th>
	<th style="text-align: center;">L</th>
	<th style="text-align: center;">M</th>
	<th style="text-align: center;">N</th>
	<th style="text-align: center;" colspan="2">CLASS REGULER</th>
	<th style="text-align: center;">CLASS PREDICTION</th>
</tr>
<tr>
	<td style="text-align: center;">SAMPEL</td>
	<td style="text-align: center;">Y</td>
	<td style="text-align: center;">T</td>
	<td style="text-align: center;">Y</td>
	<td style="text-align: center;">T</td>
	<td style="text-align: center;">Y</td>
	<td style="text-align: center;">T</td>
	<td style="text-align: center;">Y</td>
	<td style="text-align: center;">T</td>
	<td style="text-align: center;">Y</td>
	<td style="text-align: center;">T</td>
	<td style="text-align: center;">Y</td>
	<td style="text-align: center;">Y</td>
	<td style="text-align: center;">T</td>
	<td style="text-align: center;">Y</td>
	<td style="text-align: center;">RUMUS</td>
	<td style="text-align: center;">%</td>
	<td style="text-align: center;">PREDIKSI</td>
</tr>
<?php 
$hitung_tepat = 0.71*0.55*0.39*0.45*0.61*0.42*0.55*0.55*0.39*0.35*0.61*0.68*0.48*0.48;
$hitung_terlambat = 0.32*0.79*0.26*0.53*0.16*0.58*0.37*0.53*0.21*0.63*0.11*0.11*0.63*0.21;
?>
<tr>
	<td style="text-align: center;">TEPAT</td>
	<td style="text-align: center;">0.71</td>
	<td style="text-align: center;">0.55</td>
	<td style="text-align: center;">0.39</td>
	<td style="text-align: center;">0.45</td>
	<td style="text-align: center;">0.61</td>
	<td style="text-align: center;">0.42</td>
	<td style="text-align: center;">0.55</td>
	<td style="text-align: center;">0.55</td>
	<td style="text-align: center;">0.39</td>
	<td style="text-align: center;">0.35</td>
	<td style="text-align: center;">0.61</td>
	<td style="text-align: center;">0.68</td>
	<td style="text-align: center;">0.48</td>
	<td style="text-align: center;">0.48</td>
	<td style="text-align: center;">
	<?php 
	echo $hitung_tepat;
	?>
	</td>
	<td style="text-align: center;">
	<?php 
	echo round((float)($hitung_tepat/($hitung_tepat+$hitung_terlambat)) * 100 ) . '%';
	?>
	</td>
	<td rowspan="2" style="text-align: center; vertical-align:middle;">
	<?php
	if($hitung_tepat>$hitung_terlambat){
		echo "TEPAT WAKTU";
	}else{
		echo "TERLAMBAT";
	}
	?>
	</td>
</tr>
<tr>
	<td style="text-align: center;">TERLAMBAT</td>
	<td style="text-align: center;">0.32</td>
	<td style="text-align: center;">0.79</td>
	<td style="text-align: center;">0.26</td>
	<td style="text-align: center;">0.53</td>
	<td style="text-align: center;">0.16</td>
	<td style="text-align: center;">0.58</td>
	<td style="text-align: center;">0.37</td>
	<td style="text-align: center;">0.53</td>
	<td style="text-align: center;">0.21</td>
	<td style="text-align: center;">0.63</td>
	<td style="text-align: center;">0.11</td>
	<td style="text-align: center;">0.11</td>
	<td style="text-align: center;">0.63</td>
	<td style="text-align: center;">0.21</td>
	<td style="text-align: center;">
	<?php 
	echo $hitung_terlambat;
	?>
	</td>
	<td style="text-align: center;">
	<?php 
	echo round((float)($hitung_terlambat/($hitung_tepat+$hitung_terlambat)) * 100 ) . '%';
	?>
	</td>
</tr>
</table>
</div>
                           
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
       <!--END PAGE CONTENT -->
<script src="assets/plugins/jquery-2.0.3.min.js"></script>
<script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
<script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {
		$('#datatabel').DataTable();
	});
</script>