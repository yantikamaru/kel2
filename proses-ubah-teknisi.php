
<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['id_teknisi'])) {
		
		$id_teknisi          = mysqli_real_escape_string($db, trim($_POST['id_teknisi']));
		$nama  = mysqli_real_escape_string($db, trim($_POST['nama']));

		$alamat = $_POST['alamat'];

		$no_telp        = mysqli_real_escape_string($db, trim($_POST['no_telp']));
		
		$gambar    = $_POST['gambar'];

		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysqli_query($db, "UPDATE teknisi SET id_teknisi			= '$id_teknisi',
														nama 	= '$nama',
														
													alamat 			= '$alamat',
													no_telp		= '$no_telp',
														gambar 			= '$gambar'
												  WHERE id_teknisi 		= '$id_teknisi'");		

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