<?php 
	include 'koneksi.php';

	$ambil = query("SELECT * FROM tb_wisata");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Tampil Data</title>
</head>
<body>
	<div class="menu">
			<a class="dipakai" href="#">Info Wisata</a>
			<a href="tambah.php">Tambah info</a>
			<a href="kontak.php">Kontak</a>
	</div>
	<br>
	<br>
	<form action="tambah.php" method="POST">
	<table border="1" width="70%" align="center">
		<tr>
			<td colspan="7"><h3 align="center">Info Wisata</h3></td>
		</tr>
		<tr>
			<td align="center">No</td>
			<td align="center">Nama Objek Wisata</td>
			<td align="center">Lokasi</td>
			<td align="center">Jam Operasional</td>
			<td align="center">Deskripsi</td>
			<td align="center">Tarif</td>
			<td align="center">Aksi</td>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($ambil as $row):?>

			<tr>
				<td align="center"><?php echo $i; ?></td>
				<td><?php echo $row["objekwisata"]; ?></td>
				<td align="center"><?php echo $row["lokasi"]; ?></td>
				<td align="center"><?php echo $row["jamoperasional"]; ?></td>
				<td align="center"><?php echo $row["deskripsi"]; ?></td>
				<td align="center"><?php echo $row["tarif"]; ?></td>
				<td align="center">
					<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
					<a href="hapus.php?id=<?php echo $row["id"]?>" onclick = "return confirm('anda yangkin menghapus data ini?');">Hapus</a>
				</td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
		<tr>
			<td colspan="7" align="center"><input type="submit" name="Tambah" value="Tambah"></td>
		</tr>
	</table>
	</form>
</body>
</html>