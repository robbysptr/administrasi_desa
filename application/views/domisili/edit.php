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
       <div class="box box-info">
            <div class="box-header with-border">
               <h3 class="box-title">Edit Data</h3>
            </div>
   <?php echo form_open('domisili/edit/'.$domisili['nik'], array("enctype" => 'multipart/form-data')); ?>
   <div class="box-body">
    <div class="row clearfix">
		<div class="col-md-12">
		 <label for="nama_warga" class="control-label"><span class="text-danger">*</span>Nama Lengkap</label>
		 <div class="form-group">
			<input type="text" name="nama_warga" value="<?php echo ($this->input->post('nama_warga') ? $this->input->post('nama_warga') : $domisili['nama_warga']); ?>" class="form-control" id="nama_warga" />
			<span class="text-danger"><?php echo form_error('nama_warga');?></span>
		 </div>
		</div>
     <div class="col-md-12">
      <label for="nik" class="control-label"><span class="text-danger">*</span>NIK</label>
      <div class="form-group">
       <input type="text" name="nik" value="<?php echo ($this->input->post('nik') ? $this->input->post('nik') : $domisili['nik']); ?>" class="form-control" id="nik" />
       <span class="text-danger"><?php echo form_error('nik');?></span>
      </div>
     </div>
		 <div class="col-md-12">
   		<label for="jenis_kelamin" class="control-label"><span class="text-danger">*</span>Jenis Kelamin</label>
   		<div class="form-group">
   			<input type="radio" name="jenis_kelamin" value="Laki" <?php if($domisili['jenis_kelamin']=='Laki'){echo "checked";} ?>/>Laki-laki<br/>
        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($domisili['jenis_kelamin']=='Perempuan'){echo "checked";} ?>/>Perempuan<br/>
   			<span class="text-danger"><?php echo form_error('jenis_kelamin');?></span>
   		</div>
   	</div>
     <div class="col-md-12">
      <label for="tempat_lahir" class="control-label"><span class="text-danger">*</span>Tempat Lahir</label>
      <div class="form-group">
       <input type="text" name="tempat_lahir" value="<?php echo ($this->input->post('tempat_lahir') ? $this->input->post('tempat_lahir') : $domisili['tempat_lahir']); ?>" class="form-control" id="tempat_lahir" />
       <span class="text-danger"><?php echo form_error('tempat_lahir');?></span>
      </div>
     </div>
      <div class="col-md-12">
       <label for="tanggal_lahir" class="control-label"><span class="text-danger">*</span>Tanggal Lahir</label>
       <div class="form-group">
        <input type="date" name="tanggal_lahir" value="<?php echo ($this->input->post('tanggal_lahir') ? $this->input->post('tanggal_lahir') : $domisili['tanggal_lahir']); ?>" class="form-control" id="tanggal_lahir" />
        <span class="text-danger"><?php echo form_error('tanggal_lahir');?></span>
       </div>
      </div>
			<div class="col-md-12">
       <label for="agama" class="control-label"><span class="text-danger">*</span>Agama</label>
       <div class="form-group">
        <input type="text" name="agama" value="<?php echo ($this->input->post('agama') ? $this->input->post('agama') : $domisili['agama']); ?>" class="form-control" id="agama" />
        <span class="text-danger"><?php echo form_error('agama');?></span>
       </div>
      </div>
			<div class="col-md-12">
       <label for="kewarganegaraan" class="control-label"><span class="text-danger">*</span>Kewarganegaraan</label>
       <div class="form-group">
        <input type="text" name="kewarganegaraan" value="<?php echo ($this->input->post('kewarganegaraan') ? $this->input->post('kewarganegaraan') : $domisili['kewarganegaraan']); ?>" class="form-control" id="kewarganegaraan" />
        <span class="text-danger"><?php echo form_error('kewarganegaraan');?></span>
       </div>
      </div>
			<div class="col-md-12">
      <label for="status" class="control-label"><span class="text-danger">*</span>Status Kawin</label>
      <div class="form-group">
       <input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $domisili['status']); ?>" class="form-control" id="status" />
       <span class="text-danger"><?php echo form_error('status');?></span>
      </div>
     </div>
     <div class="col-md-12">
      <label for="pekerjaan" class="control-label"><span class="text-danger">*</span>Pekerjaan</label>
      <div class="form-group">
       <input type="text" name="pekerjaan" value="<?php echo ($this->input->post('pekerjaan') ? $this->input->post('pekerjaan') : $domisili['pekerjaan']); ?>" class="form-control" id="pekerjaan" />
       <span class="text-danger"><?php echo form_error('pekerjaan');?></span>
      </div>
     </div>
		 <div class="col-md-12">
      <label for="pendidikan" class="control-label"><span class="text-danger">*</span>Pendidikan</label>
      <div class="form-group">
       <input type="text" name="pendidikan" value="<?php echo ($this->input->post('pendidikan') ? $this->input->post('pendidikan') : $domisili['pendidikan']); ?>" class="form-control" id="pendidikan" />
       <span class="text-danger"><?php echo form_error('pendidikan');?></span>
      </div>
     </div>
			<div class="col-md-12">
       <label for="alamat_asal" class="control-label"><span class="text-danger">*</span>Alamat Asal</label>
       <div class="form-group">
        <input type="text" name="alamat_asal" value="<?php echo ($this->input->post('alamat_asal') ? $this->input->post('alamat_asal') : $domisili['alamat_asal']); ?>" class="form-control" id="alamat_asal" />
        <span class="text-danger"><?php echo form_error('alamat_asal');?></span>
       </div>
      </div>
			<div class="col-md-12">
       <label for="pindah_ke" class="control-label"><span class="text-danger">*</span>Pindah Ke-</label>
       <div class="form-group">
        <input type="text" name="pindah_ke" value="<?php echo ($this->input->post('pindah_ke') ? $this->input->post('pindah_ke') : $domisili['pindah_ke']); ?>" class="form-control" id="pindah_ke" />
        <span class="text-danger"><?php echo form_error('pindah_ke');?></span>
       </div>
      </div>
			<div class="col-md-12">
       <label for="alasan_pindah" class="control-label"><span class="text-danger">*</span>Alasan Pindah</label>
       <div class="form-group">
        <input type="text" name="alasan_pindah" value="<?php echo ($this->input->post('alasan_pindah') ? $this->input->post('alasan_pindah') : $domisili['alasan_pindah']); ?>" class="form-control" id="alasan_pindah" />
        <span class="text-danger"><?php echo form_error('alasan_pindah');?></span>
       </div>
      </div>
			<div class="col-md-12">
       <label for="pengikut" class="control-label"><span class="text-danger">*</span>Pengikut</label>
       <div class="form-group">
        <input type="text" name="pengikut" value="<?php echo ($this->input->post('pengikut') ? $this->input->post('pengikut') : $domisili['pengikut']); ?>" class="form-control" id="pengikut" />
        <span class="text-danger"><?php echo form_error('pengikut');?></span>
       </div>
      </div>
			<div class="col-md-12">
       <label for="tgl_surat_dibuat" class="control-label"><span class="text-danger">*</span>Tanggal Surat Dibuat</label>
       <div class="form-group">
        <input type="text" name="tgl_surat_dibuat" value="<?php echo ($this->input->post('tgl_surat_dibuat') ? $this->input->post('tgl_surat_dibuat') : $domisili['tgl_surat_dibuat']); ?>" class="form-control" id="tgl_surat_dibuat" />
        <span class="text-danger"><?php echo form_error('tgl_surat_dibuat');?></span>
       </div>
      </div>
			<div class="col-md-12">
       <label for="tgl_surat_masuk" class="control-label"><span class="text-danger">*</span>Tanggal Surat Masuk</label>
       <div class="form-group">
        <input type="text" name="tgl_surat_masuk" value="<?php echo ($this->input->post('tgl_surat_masuk') ? $this->input->post('tgl_surat_masuk') : $domisili['tgl_surat_masuk']); ?>" class="form-control" id="tgl_surat_masuk" />
        <span class="text-danger"><?php echo form_error('tgl_surat_masuk');?></span>
       </div>
      </div>

		 <div class="col-md-12">
      <label for="ket" class="control-label"><span class="text-danger">*</span>Keterangan</label>
      <div class="form-group">
       <input type="text" name="ket" value="<?php echo ($this->input->post('ket') ? $this->input->post('ket') : $domisili['keterangan']); ?>" class="form-control" id="ket" />
       <span class="text-danger"><?php echo form_error('ket');?></span>
      </div>
     </div>
     <div class="col-md-12">
      <label for="scan" class="control-label"><span class="text-danger">*</span>Scan</label>
      <div class="form-group">
       <input type="file" name="scan" value="<?php echo ($this->input->post('scan') ? $this->input->post('scan') : $domisili['scan']); ?>" class="form-control" id="scan" />
       <span class="text-danger"><?php echo form_error('scan');?></span>
      </div>
     </div>

    </div>
   </div>
   <div class="box-footer">
             <button type="submit" class="btn btn-success" style="float:right;">
     <i class="fa fa-check"></i> Save
    </button>
         </div>
   <?php echo form_close(); ?>
  </div>
    </div>
</div>

</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->

</section>
<!-- /.content -->
