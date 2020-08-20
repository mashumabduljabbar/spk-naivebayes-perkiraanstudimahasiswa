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
                            PERTANYAAN
							</td>
							<td width="50%" align="right" >
								<a href="?bayes=pertanyaan_add" target="_blank" title="Tambah Basis Aturan"><button class="btn btn-success btn-xs"><i class="icon-plus icon-white"></i></button></a>
							</td>
						</tr>
						</table>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="datatabel">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID</th>
                                            <th>PERTANYAAN</th>
                                            <th>FAKTA YA</th>
                                            <th>FAKTA TIDAK</th>
                                            <th>RUTE</th>
                                            <th>ACT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
									$query = mysqli_query($con, "SELECT * FROM pertanyaan order by id_basis ASC");
									$no = 1;
									while ($data = mysqli_fetch_array($query)){
									?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $data['id_gejala'];?></td>
                                            <td><?php echo $data['pertanyaan'];?></td>
                                            <td><?php echo $data['fakta_ya'];?></td>
                                            <td><?php echo $data['fakta_tidak'];?></td>
                                            <td class="center" width="50px">
											<a href="?bayes=pertanyaan_edit&id=<?php echo $data['id_basis'];?>" target="_blank"><button class="btn btn-info btn-xs"><i class="icon-pencil icon-white"></i></button></a>
											<a href="?bayes=pertanyaan_proses&act=delete&id=<?php echo $data['id_basis'];?>" target="_blank"><button class="btn btn-danger btn-xs"><i class="icon-trash icon-white"></i></button></a>
											</td>
                                        </tr>
									<?php 
									$no++;
									} ?>
                                    </tbody>
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
        
