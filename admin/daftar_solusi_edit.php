
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
                            UBAH DAFTAR SOLUSI
							</td>
							<td width="50%" align="right" >
                            ID : 
							<?php
							$id_daftarsolusi = $_GET['id'];
							$query_data = mysqli_fetch_array(mysqli_query($con, "select * from daftar_solusi where id_daftarsolusi='$id_daftarsolusi'"));
							$id_solusi = $query_data['id_solusi'];
							echo $id_solusi;?>
							</td>
						</tr>
						</table>
                        </div>
                        <div class="panel-body">
					<form class="form-horizontal" action="?bayes=daftar_solusi_proses&act=edit" method="POST" enctype="multipart/form-data">
					<!--LEFT SECTION -->
					<div class="col-lg-10">
					<input type="hidden" name="id_daftarsolusi" value="<?php echo $query_data['id_daftarsolusi'];?>"/>
						<div class="form-group">
							<label class="control-label col-lg-4">ID</label>
							<div class="col-lg-8">
								<input type="text" name="id_solusi" value="<?php echo $id_solusi;?>" class="form-control" readonly />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">SOLUSI</label>
							<div class="col-lg-8">
								<input type="text" name="solusi" value="<?php echo $query_data['solusi'];?>" class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4" for="dp2">WAKTU KELULUSAN</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="waktu_kelulusan">
									<option value="<?php echo $query_data['waktu_kelulusan'];?>"><?php echo $query_data['waktu_kelulusan'];?></option>
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

