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

		<h3 align="center">DATA WARGA</h3>
		
                <table width="100%" border="1">
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
	                    </tr>
	                    <?php } ?>
                    </tbody>
                </table>

	</body>
</html>
