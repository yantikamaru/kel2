<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['id'])) {

	$id_barang = $_GET['id'];
	
	// perintah query untuk menghapus data pada tabel is_siswa
	$query = mysqli_query($db, "DELETE FROM is_siswa1 WHERE id_barang='$id_barang'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location: index.php?alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=1');
	}	
}							
?>