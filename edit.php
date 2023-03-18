<?php 

include 'koneksi.php';

$id=$_GET["id"];

$data= query("SELECT * FROM tb_wisata WHERE id = $id")[0];



if (isset($_POST["edit"])) {

	if (ubah($_POST) > 0) {
		echo "

		<script>
			alert('data berhasil di edit');
			document.location.href = 'tampil.php';
		</script>

		";
	}
	else {
		echo "
		<script>
			alert('data gagal di edit');
			document.location.href = 'tampil.php';
		</script>

		";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data </title>
</head>
<body>
	<div class="header">
	<form action="" method="POST">
		<table align="center">
			<tr>
				<input type="hidden" name="id" value="<?php echo $data["id"] ?>">
			</tr>
			<tr>
				<td colspan="2" align="center"><h3>SILAHKAN EDIT DATA</h3><hr></td>
			</tr>
			<tr>
				<td>Objek Wisata</td>
				<td><input type="text" name="objekwisata" required="" value="<?php echo $data["objekwisata"] ?>"></td>
			</tr>
			<tr>
				<td>Asal</td>
				<td><input type="text" name="lokasi" required="" value="<?php echo $data["lokasi"] ?>"></td>
			</tr>
			<tr>
				<td>Tujuan</td>
				<td><input type="text" name="jamoperasional" required="" value="<?php echo $data["jamoperasional"] ?>"></td>
			</tr>
			<tr>
				<td>deskripsi</td>
				<td><input type="text" name="deskripsi" required="" value="<?php echo $data["deskripsi"] ?>"></td>
			</tr>
			<tr>
				<td>tarif</td>
				<td><input type="text" name="tarif" required="" value="<?php echo $data["tarif"] ?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><hr><input type="submit" name="edit" value="EDIT"></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>