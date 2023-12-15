
<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
    $id_teknisi          = mysqli_real_escape_string($db, trim($_POST['id_teknisi']));
    $nama  = mysqli_real_escape_string($db, trim($_POST['nama']));

    // $tanggal       = $_POST['tanggal_lahir'];
    // $tgl           = explode('-',$tanggal);
    // $tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];

    $no_telp = $_POST['no_telp'];
    // $alamat        = mysqli_real_escape_string($db, trim($_POST['alamat']));
    $gambar    = $_POST['gambar'];

    // perintah query untuk menyimpan data ke tabel is_siswa
    $query = mysqli_query($db, "INSERT INTO teknisi(id_teknisi,
                                                     nama,
                                                     alamat,
                                                     no_telp,
                                                     gambar)    
                                              VALUES('$id_teknisi',
                                                     '$nama',
                                                      '$alamat',
                                                     '$no_telp',
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