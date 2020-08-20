
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
                            TAMBAH DAFTAR SOLUSI
							</td>
							<td width="50%" align="right" >
                            ID : 
							<?php
							$id_daftarsolusi = $_GET['id'];
							$query_data = mysqli_fetch_array(mysqli_query($con, "select SUBSTR(id_solusi,2) as id from daftar_solusi order by id_daftarsolusi DESC limit 1"));
							$id_solusi = $query_data['id']+1;
							echo $id_solusi;?>
							</td>
						</tr>
						</table>
                        </div>
                        <div class="panel-body">
					<form class="form-horizontal" action="?bayes=daftar_solusi_proses&act=add" method="POST" enctype="multipart/form-data">
					<!--LEFT SECTION -->
					<div class="col-lg-10">
						<div class="form-group">
							<label class="control-label col-lg-4">ID</label>
							<div class="col-lg-8">
								<input type="text" name="id_solusi" value="s<?php echo $id_solusi;?>" class="form-control" readonly />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">SOLUSI</label>
							<div class="col-lg-8">
								<input type="text" name="solusi" placeholder="Solusi untuk hasil dari keterangan kelulusan tersebut" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4" for="dp2">NAMA KELULUSAN</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="waktu_kelulusan">
									<option value="">Pilih Waktu Kelulusan</option>
									<option value="TEPAT">TEPAT</option>
									<option value="TERLAMBAT">TERLAMBAT</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4"></label>
							<div class="col-lg-7">
								<button class="btn btn-warning"><i class="icon-arrow-right icon-white"></i> Simpan </button>
							</div>
						</div>
					</div>
					<!--RIGHT SECTION -->
					</form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
       <!--END PAGE CONTENT -->
