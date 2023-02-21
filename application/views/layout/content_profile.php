<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Profile</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

 <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-lg-3"></div>
        <section class="col-lg-6 connectedSortable">
          <?php
          echo $this->session->flashdata('msg');
          ?>
          <!-- Custom tabs (Charts with tabs)-->
          <?php echo form_open('home/profile',array("class"=>"form-horizontal")); ?>
          	<div class="row">
              <div class="col-md-12">
                 <div class="box box-info">
                      <div class="box-header with-border">
                        <h3>Profile</h3>
                      </div>
                      <br>
                    	<div class="form-group">
                    		<label for="username" class="col-md-3 control-label"><span class="text-danger">*</span>Username</label>
                    		<div class="col-md-8">
                    			<input type="text" name="username" value="<?php echo $this->session->userdata('username'); ?>" placeholder="Username" class="form-control" id="username" />
                    			<span class="text-danger"><?php echo form_error('username');?></span>
                    		</div>
                    	</div>
                    	<div class="form-group">
                    		<label for="password" class="col-md-3 control-label"><span class="text-danger">*</span>Password</label>
                    		<div class="col-md-8">
                    			<input type="password" name="password" value="" class="form-control" id="password" placeholder="Password"/>
                    			<span class="text-danger"><?php echo form_error('password');?></span>
                    		</div>
                    	</div>
                      <div class="form-group">
                    		<label for="password" class="col-md-3 control-label"><span class="text-danger">*</span>Re-Password</label>
                    		<div class="col-md-8">
                    			<input type="password" name="password2" value="" class="form-control" id="password2" placeholder="Repeat Password"/>
                    			<span class="text-danger"><?php echo form_error('password2');?></span>
                    		</div>
                    	</div>

                    	<div class="form-group">
                    		<div class="col-sm-offset-9 col-sm-2">
                    			<button type="submit" name="btnsimpan" class="btn btn-success">Save</button>
                        </div>
                    	</div>
                      <br>
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
