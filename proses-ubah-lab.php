
<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['id_lab'])) {
		
		$id_lab          = mysqli_real_escape_string($db, trim($_POST['id_lab']));
		$nama_lab  = mysqli_real_escape_string($db, trim($_POST['nama_lab']));

		$fasilitas = $_POST['fasilitas'];

		$kapasitas        = mysqli_real_escape_string($db, trim($_POST['kapasitas']));
		
		$gambar    = $_POST['gambar'];

		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysqli_query($db, "UPDATE is_siswa3 SET id_lab			= '$id_lab',
														nama_lab 	= '$nama_lab',
														
													fasilitas 			= '$fasilitas',
													kapasitas		= '$kapasitas',
														gambar 			= '$gambar'
												  WHERE id_lab 		= '$id_lab'");		

		// cek query
		if ($query) {
			// jika berhasil tampilkan pesan berhasil update data
			header('location: index.php?alert=3');
		} else {
			// jika gagal tampilkan pesan kesalahan
			header('location: index.php?alert=1');
		}	
	}
}					
?>