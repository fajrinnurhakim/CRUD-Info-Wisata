<?php 
include 'koneksi.php';

if (isset($_POST['tambah'])) {
	if (simpan ($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil di tambahkan');
				document.location.href = 'Tampil.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal di tambahkan');
				document.location.href = 'Tampil.php';
			</script>
		";
	}
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form tambah data</title>
</head>
<body>
	<div class="menu">
			
			<a href="tampil.php">Info Wisata</a>
			<a class="dipakai" href="#">Tambah info</a>
			<a href="kontak.php">Kontak</a>
	</div>
	<form action="" method="POST">
		<table align="center" width="25%" border="0">
			<tr>
				<th colspan="2">Input Data wisata</th>
			</tr>
			<tr>
				<td width="30%">Nama Objek Wisata</td>
				<td><input type="text" name="objekwisata"></td>
			</tr>
			<tr>
			<tr>
				<td>Lokasi</td>
				<td><textarea rows="5" cols="30" name="lokasi"></textarea></td>
			</tr>
						<tr>
				<td width="30%">Jam Operasional</td>
				<td><input type="text" name="jamoperasional"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><textarea rows="5" cols="30" name="deskripsi"></textarea></td>
			</tr>
			<tr>
				<td width="30%">Tarif</td>
				<td><input type="text" name="tarif"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="tambah" value="tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>