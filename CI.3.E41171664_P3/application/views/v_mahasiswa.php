<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | DB Rencana Studi tabel Mahasiswa</h1>
	<table border="1">
		<tr>
			<th>NIM</th>
			<th>Nama Mahasiswa</th>
			<th>Jenis Kelamnin</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Kota</th>
			<th>NIP</th>
		</tr>
		<?php foreach($mahasiswa as $m){ ?>
		<tr>
			<td><?php echo $m->NIM ?></td>
			<td><?php echo $m->Nama_mahasiswa ?></td>
			<td><?php echo $m->jenis_kelamin ?></td>
			<td><?php echo $m->tanggal_lahir ?></td>
			<td><?php echo $m->Alamat ?></td>
			<td><?php echo $m->Kota ?></td>
			<td><?php echo $m->NIP ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>