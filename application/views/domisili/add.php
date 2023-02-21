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

<?php echo form_open('domisili/add',array("class"=>"form-horizontal" , "enctype" => 'multipart/form-data')); ?>

	<div class="row">
    <div class="col-md-12">
       <div class="box box-info">
            <div class="box-header with-border">
							<h3>Input Domisili</h3>
            </div>
            <div class="box-body">
	<div class="form-group">
		<label for="nama_warga" class="col-md-2 control-label"><span class="text-danger">*</span>Nama Lengkap</label>
		<div class="col-md-10">
			<input type="text" name="nama_warga" value="<?php echo $this->input->post('nama_warga'); ?>" class="form-control" id="nama_warga" />
			<span class="text-danger"><?php echo form_error('nama_warga');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="nik" class="col-md-2 control-label"><span class="text-danger">*</span>NIK</label>
		<div class="col-md-10">
			<input type="text" name="nik" value="<?php echo $this->input->post('nik'); ?>" class="form-control" id="nik" />
			<span class="text-danger"><?php echo form_error('nik');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="jenis_kelamin" class="col-md-2 control-label"><span class="text-danger">*</span>Jenis Kelamin</label>
		<div class="col-md-10">
			<input type="radio" name="jenis_kelamin" value="Laki" <?php if($this->input->post('jenis_kelamin')=='Laki'){echo "checked";} ?>/>Laki-laki<br/>
						 <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($this->input->post('jenis_kelamin')=='Perempuan'){echo "checked";} ?>/>Perempuan<br/>
			<span class="text-danger"><?php echo form_error('jenis_kelamin');?></span>
		</div>
	</div>
		<div class="form-group">
			<label for="tempat_lahir" class="col-md-2 control-label"><span class="text-danger">*</span>Tempat Lahir</label>
			<div class="col-md-10">
				<input type="text" name="tempat_lahir" value="<?php echo $this->input->post('tempat_lahir'); ?>" class="form-control" id="tempat_lahir" />
				<span class="text-danger"><?php echo form_error('tempat_lahir');?></span>
			</div>
		</div>
		<div class="form-group">
			<label for="tanggal_lahir" class="col-md-2 control-label"><span class="text-danger">*</span>Tanggal Lahir</label>
			<div class="col-md-10">
				<input type="date" name="tanggal_lahir" value="<?php echo $this->input->post('tanggal_lahir'); ?>" class="form-control" id="tanggal_lahir" />
				<span class="text-danger"><?php echo form_error('tanggal_lahir');?></span>
			</div>
		</div>
    <div class="form-group">
        <label for="agama" class="col-md-2 control-label"><span class="text-danger">*</span>Agama</label>
        <div class="col-md-10">
					<select class="form-control" id="sel1" name="agama">
							<option <?php if($this->input->post('agama')=='Islam'){echo "selected";} ?>>Islam</option>
							<option <?php if($this->input->post('agama')=='Kristen'){echo "selected";} ?>>Kristen</option>
							<option <?php if($this->input->post('agama')=='Katholik'){echo "selected";} ?>>Katholik</option>
							<option <?php if($this->input->post('agama')=='Hindu'){echo "selected";} ?>>Hindu</option>
							<option <?php if($this->input->post('agama')=='Budha'){echo "selected";} ?>>Budha</option>
							<option <?php if($this->input->post('agama')=='Konghucu'){echo "selected";} ?>>Konghucu</option>
							<option <?php if($this->input->post('agama')=='Lainnya'){echo "selected";} ?>>Lainnya</option>
						</select>
            <span class="text-danger"><?php echo form_error('agama');?></span>
        </div>
    </div>
	<div class="form-group">
		<label for="kewarganegaraan" class="col-md-2 control-label"><span class="text-danger">*</span>Kewarganegaraan</label>
		<div class="col-md-10">
			<input type="text" name="kewarganegaraan" value="<?php echo $this->input->post('kewarganegaraan'); ?>" class="form-control" id="kewarganegaraan" />
			<span class="text-danger"><?php echo form_error('kewarganegaraan');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="status" class="col-md-2 control-label"><span class="text-danger">*</span>Status Kawin</label>
		<div class="col-md-10">
			 <input type="radio" name="status" value="Kawin" <?php if($this->input->post('status')=='Kawin'){echo "checked";} ?>/>Kawin<br/>
						 <input type="radio" name="status" value="Belum" <?php if($this->input->post('status')=='Belum'){echo "checked";} ?>/>Belum Kawin<br/>
			<span class="text-danger"><?php echo form_error('status');?></span>
		</div>
	</div>
    <div class="form-group">
        <label for="pekerjaan" class="col-md-2 control-label"><span class="text-danger">*</span>Pekerjaan</label>
        <div class="col-md-10">
					<select class="form-control" id="sel1" name="pekerjaan">
							<option <?php if($this->input->post('pekerjaan')=='Akuntan'){echo "selected";} ?>>Akuntan</option>
							<option <?php if($this->input->post('pekerjaan')=='Anggota Kabinet Kementrian'){echo "selected";} ?>>Anggota Kabinet Kementrian</option>
							<option <?php if($this->input->post('pekerjaan')=='Anggota Legislatif'){echo "selected";} ?>>Anggota Legislatif</option>
							<option <?php if($this->input->post('pekerjaan')=='Anggota Mahkamah Konstitusi'){echo "selected";} ?>>Anggota Mahkamah Konstitusi</option>
							<option <?php if($this->input->post('pekerjaan')=='Apoteker'){echo "selected";} ?>>Apoteker</option>
							<option <?php if($this->input->post('pekerjaan')=='Arsitektur/Desainer'){echo "selected";} ?>>Arsitektur/Desainer</option>
							<option <?php if($this->input->post('pekerjaan')=='Belum Bekerja'){echo "selected";} ?>>Belum Bekerja</option>
							<option <?php if($this->input->post('pekerjaan')=='Bidan Swasta'){echo "selected";} ?>>Bidan Swasta</option>
							<option <?php if($this->input->post('pekerjaan')=='Bupati'){echo "selected";} ?>>Bupati</option>
							<option <?php if($this->input->post('pekerjaan')=='Buruh Harian Lepas'){echo "selected";} ?>>Buruh Harian Lepas</option>
							<option <?php if($this->input->post('pekerjaan')=='Buruh Jasa Perdagangan Hasil Bumi'){echo "selected";} ?>>Buruh Jasa Perdagangan Hasil Bumi</option>
							<option <?php if($this->input->post('pekerjaan')=='Buruh Migran'){echo "selected";} ?>>Buruh Migran</option>
							<option <?php if($this->input->post('pekerjaan')=='Buruh Tani'){echo "selected";} ?>>Buruh Tani</option>
							<option <?php if($this->input->post('pekerjaan')=='Buruh Usaha Hotel dan Penginapan lainnya'){echo "selected";} ?>>Buruh Usaha Hotel dan Penginapan lainnya</option>
							<option <?php if($this->input->post('pekerjaan')=='Buruh Usaha Jasa Hiburan dan Pariwisata'){echo "selected";} ?>>Buruh Usaha Jasa Hiburan dan Pariwisata</option>
							<option <?php if($this->input->post('pekerjaan')=='Buruh Usaha Jasa Informasi dan Komunikasi'){echo "selected";} ?>>Buruh Usaha Jasa Informasi dan Komunikasi</option>
							<option <?php if($this->input->post('pekerjaan')=='Buruh Usaha Jasa Transportasi dan Perhubungan'){echo "selected";} ?>>Buruh Usaha Jasa Transportasi dan Perhubungan</option>
							<option <?php if($this->input->post('pekerjaan')=='Dokter Swasta'){echo "selected";} ?>>Dokter Swasta</option>
							<option <?php if($this->input->post('pekerjaan')=='Dosen Swasta'){echo "selected";} ?>>Dosen Swasta</option>
							<option <?php if($this->input->post('pekerjaan')=='Dukun Tradisional'){echo "selected";} ?>>Dukun Tradisional</option>
							<option <?php if($this->input->post('pekerjaan')=='Dukun/Paranormal/Supranatural'){echo "selected";} ?>>Dukun/Paranormal/Supranatural</option>
							<option <?php if($this->input->post('pekerjaan')=='Duta Besar'){echo "selected";} ?>>Duta Besar</option>
							<option <?php if($this->input->post('pekerjaan')=='Gubernur'){echo "selected";} ?>>Gubernur</option>
							<option <?php if($this->input->post('pekerjaan')=='Guru'){echo "selected";} ?>>Guru</option>
							<option <?php if($this->input->post('pekerjaan')=='Ibu Rumah Tangga'){echo "selected";} ?>>Ibu Rumah Tangga</option>
							<option <?php if($this->input->post('pekerjaan')=='Jasa Konsultasi'){echo "selected";} ?>>Jasa Konsultasi</option>
							<option <?php if($this->input->post('pekerjaan')=='Jasa Pengobatan Alternatif'){echo "selected";} ?>>Jasa Pengobatan Alternatif</option>
							<option <?php if($this->input->post('pekerjaan')=='Jasa Penyewaan Alat Pesta'){echo "selected";} ?>>Jasa Penyewaan Alat Pesta</option>
							<option <?php if($this->input->post('pekerjaan')=='Juru Masak'){echo "selected";} ?>>Juru Masak</option>
							<option <?php if($this->input->post('pekerjaan')=='Karyawan Honorer'){echo "selected";} ?>>Karyawan Honorer</option>
							<option <?php if($this->input->post('pekerjaan')=='Karyawan Perusahaan Pemerintah'){echo "selected";} ?>>Karyawan Perusahaan Pemerintah</option>
							<option <?php if($this->input->post('pekerjaan')=='Karyawan Swasta'){echo "selected";} ?>>Karyawan Swasta</option>
							<option <?php if($this->input->post('pekerjaan')=='Kepala Daerah'){echo "selected";} ?>>Kepala Daerah</option>
							<option <?php if($this->input->post('pekerjaan')=='Konsultan Manajemen dan Teknis'){echo "selected";} ?>>Konsultan Manajemen dan Teknis</option>
							<option <?php if($this->input->post('pekerjaan')=='Kontraktor'){echo "selected";} ?>>Kontraktor</option>
							<option <?php if($this->input->post('pekerjaan')=='Montir'){echo "selected";} ?>>Montir</option>
							<option <?php if($this->input->post('pekerjaan')=='Nelayan'){echo "selected";} ?>>Nelayan</option>
							<option <?php if($this->input->post('pekerjaan')=='Notaris'){echo "selected";} ?>>Notaris</option>
							<option <?php if($this->input->post('pekerjaan')=='Pedagang barang kelontong'){echo "selected";} ?>>Pedagang barang kelontong</option>
							<option <?php if($this->input->post('pekerjaan')=='Pedagang Keliling'){echo "selected";} ?>>Pedagang Keliling</option>
							<option <?php if($this->input->post('pekerjaan')=='Pegawai Negeri Sipil'){echo "selected";} ?>>Pegawai Negeri Sipil</option>
							<option <?php if($this->input->post('pekerjaan')=='Pelajar'){echo "selected";} ?>>Pelajar</option>
							<option <?php if($this->input->post('pekerjaan')=='Pelaut'){echo "selected";} ?>>Pelaut</option>
							<option <?php if($this->input->post('pekerjaan')=='Pembantu rumah tangga'){echo "selected";} ?>>Pembantu rumah tangga</option>
							<option <?php if($this->input->post('pekerjaan')=='Pemilik perusahaan'){echo "selected";} ?>>Pemilik perusahaan</option>
							<option <?php if($this->input->post('pekerjaan')=='Pemulung'){echo "selected";} ?>>Pemulung</option>
							<option <?php if($this->input->post('pekerjaan')=='Pemuka Agama'){echo "selected";} ?>>Pemuka Agama</option>
							<option <?php if($this->input->post('pekerjaan')=='Pemulung'){echo "selected";} ?>>Pemulung</option>
							<option <?php if($this->input->post('pekerjaan')=='Pengacara'){echo "selected";} ?>>Pengacara</option>
							<option <?php if($this->input->post('pekerjaan')=='Pengrajin'){echo "selected";} ?>>Pengrajin</option>
							<option <?php if($this->input->post('pekerjaan')=='Pengrajin industri rumah tangga lainnya'){echo "selected";} ?>>Pengrajin industri rumah tangga lainnya</option>
							<option <?php if($this->input->post('pekerjaan')=='Pengusaha kecil, menengah dan besar'){echo "selected";} ?>>Pengusaha kecil, menengah dan besar</option>
							<option <?php if($this->input->post('pekerjaan')=='Penyiar radio'){echo "selected";} ?>>Penyiar radio</option>
							<option <?php if($this->input->post('pekerjaan')=='Perangkat Desa'){echo "selected";} ?>>Perangkat Desa</option>
							<option <?php if($this->input->post('pekerjaan')=='Perawat'){echo "selected";} ?>>Perawat</option>
							<option <?php if($this->input->post('pekerjaan')=='Petani'){echo "selected";} ?>>Petani</option>
							<option <?php if($this->input->post('pekerjaan')=='Peternak'){echo "selected";} ?>>Peternak</option>
							<option <?php if($this->input->post('pekerjaan')=='Pilot'){echo "selected";} ?>>Pilot</option>
							<option <?php if($this->input->post('pekerjaan')=='POLRI'){echo "selected";} ?>>POLRI</option>
							<option <?php if($this->input->post('pekerjaan')=='Presiden'){echo "selected";} ?>>Presiden</option>
							<option <?php if($this->input->post('pekerjaan')=='Pskiater/Psikolog'){echo "selected";} ?>>Pskiater/Psikolog</option>
							<option <?php if($this->input->post('pekerjaan')=='Pensiunan'){echo "selected";} ?>>Pensiunan</option>
							<option <?php if($this->input->post('pekerjaan')=='Satpam/Security'){echo "selected";} ?>>Satpam/Security</option>
							<option <?php if($this->input->post('pekerjaan')=='Seniman/artis'){echo "selected";} ?>>Seniman/artis</option>
							<option <?php if($this->input->post('pekerjaan')=='Sopir'){echo "selected";} ?>>Sopir</option>
							<option <?php if($this->input->post('pekerjaan')=='Tidak Mempunyai Pekerjaan Tetap'){echo "selected";} ?>>Tidak Mempunyai Pekerjaan Tetap</option>
							<option <?php if($this->input->post('pekerjaan')=='TNI'){echo "selected";} ?>>TNI</option>
							<option <?php if($this->input->post('pekerjaan')=='Walikota'){echo "selected";} ?>>Walikota</option>
							<option <?php if($this->input->post('pekerjaan')=='Wakil Walikota'){echo "selected";} ?>>Wakil Walikota</option>
							<option <?php if($this->input->post('pekerjaan')=='Wakil bupati'){echo "selected";} ?>>Wakil bupati</option>
							<option <?php if($this->input->post('pekerjaan')=='Wakil Gubernur'){echo "selected";} ?>>Wakil Gubernur</option>
							<option <?php if($this->input->post('pekerjaan')=='Wakil Presiden'){echo "selected";} ?>>Wakil Presiden</option>
							<option <?php if($this->input->post('pekerjaan')=='Wartawan'){echo "selected";} ?>>Wartawan</option>
							<option <?php if($this->input->post('pekerjaan')=='Wiraswasta'){echo "selected";} ?>>Wiraswasta</option>
						</select>
            <span class="text-danger"><?php echo form_error('pekerjaan');?></span>
        </div>
    </div>
    <div class="form-group">
        <label for="pendidikan" class="col-md-2 control-label"><span class="text-danger">*</span>Pendidikan</label>
        <div class="col-md-10">
					<select class="form-control" id="sel1" name="pendidikan">
							<option <?php if($this->input->post('pendidikan')=='Belum/Tidak Sekolah'){echo "selected";} ?>>Belum/Tidak Sekolah</option>
							<option <?php if($this->input->post('pendidikan')=='Sedang TK/Kelompok Bermain'){echo "selected";} ?>>Sedang TK/Kelompok Bermain</option>
							<option <?php if($this->input->post('pendidikan')=='Sedang SD/Sederajat'){echo "selected";} ?>>Sedang SD/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Sedang SMP/Sederajat'){echo "selected";} ?>>Sedang SMP/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Sedang SMA/Sederajat'){echo "selected";} ?>>Sedang SMA/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Sedang D-1/Sederajat'){echo "selected";} ?>>Sedang D-1/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Sedang D-2/Sederajat'){echo "selected";} ?>>Sedang D-2/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Sedang D-3/Sederajat'){echo "selected";} ?>>Sedang D-3/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Sedang S-1/Sederajat'){echo "selected";} ?>>Sedang S-1/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Sedang S-2/Sederajat'){echo "selected";} ?>>Sedang S-2/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Sedang S-3/Sederajat'){echo "selected";} ?>>Sedang S-3/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Tamat SD/Sederajat'){echo "selected";} ?>>Tamat SD/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Tamat SMP/Sederajat'){echo "selected";} ?>>Tamat SMP/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Tamat SMA/Sederajat'){echo "selected";} ?>>Tamat SMA/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Tamat D-1/Sederajat'){echo "selected";} ?>>Tamat D-1/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Tamat D-2/Sederajat'){echo "selected";} ?>>Tamat D-2/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Tamat D-3/Sederajat'){echo "selected";} ?>>Tamat D-3/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Tamat S-1/Sederajat'){echo "selected";} ?>>Tamat S-1/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Tamat S-2/Sederajat'){echo "selected";} ?>>Tamat S-2/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Tamat S-3/Sederajat'){echo "selected";} ?>>Tamat S-3/Sederajat</option>
							<option <?php if($this->input->post('pendidikan')=='Tidak Pernah Sekolah'){echo "selected";} ?>>Tidak Pernah Sekolah</option>
							<option <?php if($this->input->post('pendidikan')=='Tidak Tamat SD/Sederajat'){echo "selected";} ?>>Tidak Tamat SD/Sederajat</option>
						</select>
            <span class="text-danger"><?php echo form_error('pendidikan');?></span>
        </div>
    </div>
	<div class="form-group">
		<label for="alamat_asal" class="col-md-2 control-label"><span class="text-danger">*</span>Alamat Asal</label>
		<div class="col-md-10">
			<input type="text" name="alamat_asal" value="<?php echo $this->input->post('alamat_asal'); ?>" class="form-control" id="alamat_asal" />
			<span class="text-danger"><?php echo form_error('alamat_asal');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="pindah_ke" class="col-md-2 control-label"><span class="text-danger">*</span>Pindah Ke-</label>
		<div class="col-md-10">
			<input type="text" name="pindah_ke" value="<?php echo $this->input->post('pindah_ke'); ?>" class="form-control" id="pindah_ke" />
			<span class="text-danger"><?php echo form_error('pindah_ke');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="alasan_pindah" class="col-md-2 control-label"><span class="text-danger">*</span>Alasan Pindah</label>
		<div class="col-md-10">
			<input type="text" name="alasan_pindah" value="<?php echo $this->input->post('alasan_pindah'); ?>" class="form-control" id="alasan_pindah" />
			<span class="text-danger"><?php echo form_error('alasan_pindah');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="pengikut" class="col-md-2 control-label"><span class="text-danger">*</span>Pengikut</label>
		<div class="col-md-10">
			<input type="text" name="pengikut" value="<?php echo $this->input->post('pengikut'); ?>" class="form-control" id="pengikut" />
			<span class="text-danger"><?php echo form_error('pengikut');?></span>
		</div>
	</div>
    <div class="form-group">
        <label for="tgl_surat_dibuat" class="col-md-2 control-label"><span class="text-danger">*</span>Tanggal Surat Dibuat</label>
        <div class="col-md-10">
            <input type="text" name="tgl_surat_dibuat" value="<?php echo $this->input->post('tgl_surat_dibuat'); ?>" class="form-control" id="tgl_surat_dibuat" />
            <span class="text-danger"><?php echo form_error('tgl_surat_dibuat');?></span>
        </div>
    </div>
    <div class="form-group">
        <label for="tgl_surat_masuk" class="col-md-2 control-label"><span class="text-danger">*</span>Tanggal Surat Masuk</label>
        <div class="col-md-10">
            <input type="text" name="tgl_surat_masuk" value="<?php echo $this->input->post('tgl_surat_masuk'); ?>" class="form-control" id="tgl_surat_masuk" />
            <span class="text-danger"><?php echo form_error('tgl_surat_masuk');?></span>
        </div>
    </div>
    <div class="form-group">
        <label for="ket" class="col-md-2 control-label"><span class="text-danger">*</span>Keterangan</label>
        <div class="col-md-10">
            <input type="text" name="ket" value="<?php echo $this->input->post('ket'); ?>" class="form-control" id="ket" />
            <span class="text-danger"><?php echo form_error('ket');?></span>
        </div>
    </div>
	<div class="form-group">
		<label for="scan" class="col-md-2 control-label"><span class="text-danger">*</span>Scan</label>
		<div class="col-md-10">
			<input type="file" name="scan" value="<?php echo $this->input->post('scan'); ?>" required class="form-control" id="scan" />
			<span class="text-danger"><?php echo form_error('scan');?></span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-11 col-sm-1">
			<button type="submit" class="btn btn-success">Save</button>
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
