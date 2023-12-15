<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$id_barang           = mysqli_real_escape_string($db, trim($_POST['id_barang']));
	$id_lab          = mysqli_real_escape_string($db, trim($_POST['id_lab']));
	$nama_barang  = mysqli_real_escape_string($db, trim($_POST['nama_barang']));

	// $tanggal       = $_POST['tanggal_lahir'];
	// $tgl           = explode('-',$tanggal);
	// $tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];

	$merek = $_POST['merek'];
	$ukuran         = $_POST['ukuran'];
	$jumlah        = mysqli_real_escape_string($db, trim($_POST['jumlah']));
	$keadaan    = $_POST['keadaan'];
	$gambar    = $_POST['gambar'];

	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO is_siswa1(id_barang,
													 id_lab,
													 nama_barang,
													 merek,
													 ukuran,
													 jumlah,
													 keadaan,
													 gambar)	
											  VALUES('$id_barang',
													 '$id_lab',
													 '$nama_barang',
													 '$merek',
													 '$ukuran',
													 '$jumlah',
													 '$keadaan',
													 '$gambar')");		

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: index.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=1');
	}	
}					
?>