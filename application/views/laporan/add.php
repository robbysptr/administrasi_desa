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

<?php echo form_open('laporan/add',array("class"=>"form-horizontal" , "enctype" => 'multipart/form-data')); ?>

	<div class="row">
		<div class="col-md-3"></div>
    <div class="col-md-6">
       <div class="box box-info">
            <div class="box-header with-border">
							<h3>Laporan</h3>
            </div>
	<div class="form-group">
		<label for="data_warga" class="col-md-3 control-label"><span class="text-danger">*</span>Data Warga</label>
		<div class="col-md-8">
			<input type="file" name="data_warga" value="<?php echo $this->input->post('data_warga'); ?>" required class="form-control" id="data_warga" />
			<span class="text-danger"><?php echo form_error('data_warga');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="keterangan" class="col-md-3 control-label"><span class="text-danger">*</span>Keterangan</label>
		<div class="col-md-8">
			<input type="text" name="keterangan" value="<?php echo $this->input->post('keterangan'); ?>" class="form-control" id="keterangan" />
			<span class="text-danger"><?php echo form_error('keterangan');?></span>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-9 col-sm-3">
			<button type="submit" class="btn btn-success">Save</button>
			<br><br>
        </div>
	</div>
</div>
    </div>
</div>
<?php echo form_close(); ?>

</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->

</section>
<!-- /.content -->
