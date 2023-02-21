 <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="alert alert-success alert-dismissible" role="alert">
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
						 </button>
						 <strong>Selamat datang <?php echo ucwords($this->session->userdata('username')); ?></strong>, di Aplikasi Data Kependudukan.
					</div>

          <?php if ($this->session->userdata('role') == 'Kepala Desa'): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">

                        <div class="box-header">
                            <h3 class="box-title"><b>Notifikasi</b> </h3>
                            <hr>
                            <?php echo $this->session->flashdata('msg');?>
                         <div class="box-tools">
                          </div>
                        </div>
                        <div class="box-body">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th width="1">No.</th>
                                    <th>Pesan</th>
                                    <th width="140">Tanggal</th>
                                    <th width="50">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no=1;
                                   foreach($query->result_array() as $t){ ?>
                                  <tr>
                                      <th><?php echo $no++; ?>.</th>
                                      <td><?php echo $t['event']; ?> - <?php echo $t['pesan']; ?></td>
                                      <td><?php echo $t['tgl_notifikasi']; ?></td>
                                      <td>
                                          <a href="<?php echo site_url('home/h_notif/'.$t['id_notif']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                      </td>
                                  </tr>
                                  <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

          <?php endif; ?>
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
