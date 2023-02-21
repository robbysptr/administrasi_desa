<!-- Main content -->
	 <section class="content">
		 <!-- /.row -->
		 <!-- Main row -->
		 <div class="row">
			 <!-- Left col -->
			 <!-- <div class="col-lg-2"></div> -->
			 <section class="col-lg-12 connectedSortable">
				 <?php
				 echo $this->session->flashdata('msg');
				 ?>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan</h3>
             		<div class="box-tools">
									<?php if ($this->session->userdata('role')=='Bagian Pelayanan' OR $this->session->userdata('role')=='Admin'): ?>
									  <a href="<?php echo site_url('laporan/add'); ?>" class="btn btn-success btn-sm">Add</a>
									<?php endif; ?>
                </div>
            </div>
            <div class="box-body">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
											<tr>
									      <th>Data Warga</th>
									      <th>Keterangan</th>
												<th width="100"></th>
	                    </tr>
                    </thead>
                    <tbody>
											<?php foreach($laporan as $t){ ?>
	                    <tr>
										      <td>
										        <a href="<?php echo site_url('assets/uploads/'.$t['data_warga']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Unduh File </a><?php echo $t['data_warga']; ?></td>
										      <td><?php echo $t['keterangan']; ?></td>
										      <td align="center">
											<?php if ($this->session->userdata('role')=='Bagian Pelayanan' OR $this->session->userdata('role')=='Admin'){ ?>
	  													<a href="<?php echo site_url('laporan/edit/'.$t['id_laporan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
	                            <a href="<?php echo site_url('laporan/remove/'.$t['id_laporan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
											<?php }elseif ($this->session->userdata('role')=='sekdes'){
															if ($t['status']=='ACC') {?>
																<a href="<?php echo site_url('laporan/cek/'.$t['id_laporan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-close"></span> BATAL</a>
											<?php		}else{?>
																<a href="<?php echo site_url('laporan/cek/'.$t['id_laporan']); ?>" class="btn btn-success btn-xs"><span class="fa fa-check"></span> ACC?</a>
											<?php 	}
														} ?>
													</td>
	                    </tr>
	                    <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>



</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->

</section>
<!-- /.content -->
