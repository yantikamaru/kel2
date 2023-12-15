
<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
    $id_lab          = mysqli_real_escape_string($db, trim($_POST['id_lab']));
    $nama_lab  = mysqli_real_escape_string($db, trim($_POST['nama_lab']));

    // $tanggal       = $_POST['tanggal_lahir'];
    // $tgl           = explode('-',$tanggal);
    // $tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];

    $fasilitas = $_POST['fasilitas'];
    $kapasitas        = mysqli_real_escape_string($db, trim($_POST['kapasitas']));
    $gambar    = $_POST['gambar'];

    // perintah query untuk menyimpan data ke tabel is_siswa
    $query = mysqli_query($db, "INSERT INTO is_siswa3(id_lab,
                                                     nama_lab,
                                                     fasilitas,
                                                     kapasitas,
                                                     gambar)    
                                              VALUES('$id_lab',
                                                     '$nama_lab',
                                                     '$fasilitas',
                                                     '$kapasitas',
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