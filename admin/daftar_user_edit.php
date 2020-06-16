
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
                            UBAH DAFTAR USERS
							</td>
							<td width="50%" align="right" >
                            ID : 
							<?php
							$id_user = $_GET['id'];
							$query_data = mysql_fetch_array(mysql_query("select * from daftar_user where id_user='$id_user'"));
							$id_user = $query_data['id_user'];
							echo $id_user;?>
							</td>
						</tr>
						</table>
                        </div>
                        <div class="panel-body">
					<form class="form-horizontal" action="?bayes=daftar_user_proses&act=edit" method="POST" enctype="multipart/form-data">
					<!--LEFT SECTION -->
					<div class="col-lg-10">
					<input type="hidden" name="id_user" value="<?php echo $query_data['id_user'];?>"/>
						
						<div class="form-group">
							<label class="control-label col-lg-4">NAMA LENGKAP</label>
							<div class="col-lg-8">
								<input type="text" name="nama_lengkap" value="<?php echo $query_data['nama_lengkap'];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">NAMA PERTI</label>
							<div class="col-lg-8">
								<input type="text" name="nama_perti" value="<?php echo $query_data['nama_perti'];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">NAMA JURUSAN</label>
							<div class="col-lg-8">
								<input type="text" name="nama_jurusan" value="<?php echo $query_data['nama_jurusan'];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">TAHUN MASUK</label>
							<div class="col-lg-8">
								<input type="text" name="tahun_masuk" value="<?php echo $query_data['tahun_masuk'];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4" for="dp2">JENIS KELAMIN</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="jenis_kelamin">
									<option value="<?php echo $query_data['jenis_kelamin'];?>"><?php echo $query_data['jenis_kelamin'];?></option>
								
									<option value="pria">Pria</option>
									<option value="wanita">Wanita</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">TANGGAL LAHIR</label>
							<div class="col-lg-8">
								<input type="date" name="tgl_lahir" value="<?php echo $query_data['tgl_lahir'];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">USERNAME</label>
							<div class="col-lg-8">
								<input type="text" name="nama" value="<?php echo $query_data['nama'];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">PASSWORD</label>
							<div class="col-lg-8">
								<input type="password" name="password" value="<?php echo $query_data['password'];?>" class="form-control" />
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

