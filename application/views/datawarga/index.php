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
                <h3 class="box-title">Data Warga</h3>
             <div class="box-tools">
                    <a href="<?php echo site_url('datawarga/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
											<tr>
	                      <th>No.</th>
	                      <th>NIK</th>
	                      <th>No KK</th>
	                      <th>Nama Lengkap</th>
	                      <th>Alamat</th>
	                      <th>RT</th>
	                      <th>RW</th>
	                      <th>Jenis Kelamin</th>
	                      <th>Tempat Tanggal Lahir</th>
	                      <th>No Telp</th>
	                      <th>Agama</th>
	                      <th>Pendidikan</th>
	                      <th>Pekerjaan</th>
	                      <th>Status</th>
	                      <th>Hubungan Keluarga</th>
	                      <th>Scan</th>
	                      <th>Keterangan</th>
	                      <th></th>
	                    </tr>
                    </thead>
                    <tbody>
											<?php
	                    $no=1;
	                    foreach($datawarga as $t){ ?>
	                    <tr>
	                        <th><?php echo $no++; ?>.</th>
	                        <td><?php echo $t['nik']; ?></td>
	                        <td><?php echo $t['no_kk']; ?></td>
	                        <td><?php echo $t['nama_lengkap']; ?></td>
	                        <td><?php echo $t['alamat']; ?></td>
	                        <td><?php echo $t['rt']; ?></td>
	                        <td><?php echo $t['rw']; ?></td>
	                        <td><?php echo $t['jenis_kelamin']; ?></td>
	                        <td><?php echo $t['tempat_lahir']; ?>, <?php echo $t['tanggal_lahir']; ?></td>
	                        <td><?php echo $t['no_telp']; ?></td>
	                        <td><?php echo $t['agama']; ?></td>
	                        <td><?php echo $t['pendidikan']; ?></td>
	                        <td><?php echo $t['pekerjaan']; ?></td>
	                        <td><?php echo $t['status']; ?></td>
	                        <td><?php echo $t['hubungan_keluarga']; ?></td>
	                        <td><?php echo $t['scan']; ?></td>
	                        <td><?php echo $t['ket']; ?></td>
	                        <td>
	                            <a href="<?php echo site_url('datawarga/edit/'.$t['nik']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
	                            <a href="<?php echo site_url('datawarga/remove/'.$t['nik']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
