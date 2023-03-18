<?php 
//kita koneksikan dulu file function dengan database

	$koneksi = mysqli_connect("localhost", "root", "", "infowisata");

//kita buat query data ke database

	function query($query){
		global $koneksi;
		$ambil = mysqli_query($koneksi, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($ambil)) {
			$rows[] = $row;
		}
		return $rows;
	}

//kita buat fungsi tambah
	function simpan($data){
		global $koneksi;

		$objekwisata = htmlspecialchars($data["objekwisata"]);
		$lokasi = htmlspecialchars($data["lokasi"]);
		$jamoperasional = htmlspecialchars($data["jamoperasional"]);
		$deskripsi = htmlspecialchars($data["deskripsi"]);
		$tarif = htmlspecialchars($data["tarif"]);

		$query = "INSERT INTO tb_wisata
			values
		('','$objekwisata','$lokasi','$jamoperasional','$deskripsi','$tarif')";

		mysqli_query($koneksi, $query);
		
		return mysqli_affected_rows($koneksi);
	}

//untuk edit data
	function ubah($data){
		global $koneksi;

		$id = $data["id"];
		$objekwisata = htmlspecialchars($data["objekwisata"]);
		$lokasi = htmlspecialchars($data["lokasi"]);
		$jamoperasional = htmlspecialchars($data["jamoperasional"]);
		$deskripsi = htmlspecialchars($data["deskripsi"]);
		$tarif = htmlspecialchars($data["tarif"]);

		$query = "UPDATE tb_wisata SET
		objekwisata = '$objekwisata',
		lokasi = '$lokasi',
		jamoperasional = '$jamoperasional',
		deskripsi = '$deskripsi',
		tarif = '$tarif'
		WHERE id = $id
		";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);

	}


//untuk hapus data
	function hapus($id){
		global $koneksi;

		mysqli_query($koneksi, "DELETE FROM tb_wisata where id = $id");

		return mysqli_affected_rows($koneksi);
	}
 ?>