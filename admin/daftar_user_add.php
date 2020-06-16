
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
                            TAMBAH DAFTAR USERS
							</td>
						</tr>
						</table>
                        </div>
                        <div class="panel-body">
					<form class="form-horizontal" action="?bayes=daftar_user_proses&act=add" method="POST" enctype="multipart/form-data">
					<!--LEFT SECTION -->
					<div class="col-lg-10">
						<div class="form-group">
							<label class="control-label col-lg-4">NAMA LENGKAP</label>
							<div class="col-lg-8">
								<input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">NAMA PERTI</label>
							<div class="col-lg-8">
								<input type="text" name="nama_perti" placeholder="Nama Perti" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">NAMA JURUSAN</label>
							<div class="col-lg-8">
								<input type="text" name="nama_jurusan" placeholder="Nama Jurusan" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">TAHUN MASUK</label>
							<div class="col-lg-8">
								<input type="text" name="tahun_masuk" placeholder="Tahun Masuk" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4" for="dp2">JENIS KELAMIN</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="jenis_kelamin">
									<option value="">Pilih Jenis Kelamin</option>
									<option value="pria">Pria</option>
									<option value="wanita">Wanita</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">TANGGAL LAHIR</label>
							<div class="col-lg-8">
								<input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">USERNAME</label>
							<div class="col-lg-8">
								<input type="text" name="nama" placeholder="Username" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">PASSWORD</label>
							<div class="col-lg-8">
								<input type="password" name="password" placeholder="Password" class="form-control" />
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
