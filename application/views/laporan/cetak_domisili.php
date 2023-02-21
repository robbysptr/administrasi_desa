<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <base href="<?php echo base_url();?>"/>
    <style>
    table {
        border-collapse: collapse;
    }
    thead > tr{
      background-color: #0070C0;
      color:#f1f1f1;
    }
    thead > tr > th{
      background-color: #0070C0;
      color:#fff;
      padding: 10px;
      border-color: #fff;
    }
    th, td {
      padding: 2px;
      font-size: 12px;
    }

    th {
        color: #222;
    }
    body{
      font-family:Calibri;
    }
    </style>
  </head>
  <body onload="window.print()">

		<h3 align="center">DATA DOMISILI</h3>

                <table width="100%" border="1">
                    <thead>
											<tr>
                        <th>No.</th>
									      <th>Nama Warga</th>
									      <th>NIK</th>
									      <th>Jenis Kelamin</th>
									      <th>Tempat Tanggal Lahir</th>
									      <th>Agama</th>
									      <th>Kewarganegaraan</th>
									      <th>Status</th>
									      <th>Pekerjaan</th>
									      <th>Pendidikan</th>
									      <th>Alamat Asal</th>
									      <th>Pindah Ke-</th>
									      <th>Alasan Pindah</th>
									      <th>Pengikut</th>
									      <th>Tanggal Surat Dibuat</th>
									      <th>Tanggal Surat Masuk</th>
									      <th>Keterangan</th>
									      <th>Scan</th>
	                    </tr>
                    </thead>
                    <tbody>
											<?php
	                    $no=1;
	                    foreach($domisili as $t){ ?>
	                    <tr>
                        <th><?php echo $no++; ?>.</th>
                          <td><?php echo $t['nama_warga']; ?></td>
                          <td><?php echo $t['nik']; ?></td>
                          <td><?php echo $t['jenis_kelamin']; ?></td>
                          <td><?php echo $t['tempat_lahir']; ?>, <?php echo $t['tanggal_lahir']; ?></td>
                          <td><?php echo $t['agama']; ?></td>
                          <td><?php echo $t['kewarganegaraan']; ?></td>
                          <td><?php echo $t['status']; ?></td>
                          <td><?php echo $t['pekerjaan']; ?></td>
                          <td><?php echo $t['pendidikan']; ?></td>
                          <td><?php echo $t['alamat_asal']; ?></td>
                          <td><?php echo $t['pindah_ke']; ?></td>
                          <td><?php echo $t['alasan_pindah']; ?></td>
                          <td><?php echo $t['pengikut']; ?></td>
                          <td><?php echo $t['tgl_surat_dibuat']; ?></td>
                          <td><?php echo $t['tgl_surat_masuk']; ?></td>
                          <td><?php echo $t['keterangan']; ?></td>
                          <td><?php echo $t['scan']; ?></td>
	                    </tr>
	                    <?php } ?>
                    </tbody>
                </table>

	</body>
</html>
