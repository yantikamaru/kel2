
<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['id_barang'])) {
		$id_barang          = mysqli_real_escape_string($db, trim($_POST['id_barang']));
		$id_lab          = mysqli_real_escape_string($db, trim($_POST['id_lab']));
		$nama_barang  = mysqli_real_escape_string($db, trim($_POST['nama_barang']));

		$merek = $_POST['merek'];
		$ukuran         = $_POST['ukuran'];
		$jumlah        = mysqli_real_escape_string($db, trim($_POST['jumlah']));
		$keadaan    = $_POST['keadaan'];
		$gambar    = $_POST['gambar'];

		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysqli_query($db, "UPDATE is_siswa1 SET id_lab			= '$id_lab',
														nama_barang 	= '$nama_barang',
														merek 			= '$merek',
														ukuran		 	= '$ukuran',
														jumlah 			= '$jumlah',
														keadaan 		= '$keadaan',
														gambar 			= '$gambar'
												  WHERE id_barang 		= '$id_barang'");		

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