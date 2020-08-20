
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
                            UBAH PERTANYAAN
							</td>
							<td width="50%" align="right" >
                            ID : 
							<?php
							$id_basis = $_GET['id'];
							$query_data = mysqli_fetch_array(mysqli_query($con, "select * from pertanyaan where id_basis='$id_basis'"));
							$id_gejala = $query_data['id_gejala'];
							echo $id_gejala;?>
							</td>
						</tr>
						</table>
                        </div>
                        <div class="panel-body">
					<form class="form-horizontal" action="?bayes=pertanyaan_proses&act=edit" method="POST" enctype="multipart/form-data">
					<!--LEFT SECTION -->
					<div class="col-lg-10">
					<input type="hidden" name="id_basis" value="<?php echo $query_data['id_basis'];?>"/>	
						<div class="form-group">
							<label class="control-label col-lg-4">ID</label>
							<div class="col-lg-8">
								<input type="text" name="id_gejala" value="<?php echo $query_data['id_gejala'];?>" class="form-control" readonly />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">PERTANYAAN</label>
							<div class="col-lg-8">
								<input type="text" name="pertanyaan" value="<?php echo $query_data['pertanyaan'];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">FAKTA YA</label>
							<div class="col-lg-8">
								<input type="text" name="fakta_ya" value="<?php echo $query_data['fakta_ya'];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">FAKTA TIDAK</label>
							<div class="col-lg-8">
								<input type="text" name="fakta_tidak" value="<?php echo $query_data['fakta_tidak'];?>" class="form-control" />
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

