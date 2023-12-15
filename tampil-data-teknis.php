
<?php 
if (isset($_POST['cari'])) {
  $cari = $_POST['cari'];
} else {
  $cari = "";
}
?>

   <div class="row mb-3"> <!-- Menambahkan margin-bottom untuk memberikan ruang antara elemen -->
    <div class="col-md-6">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-user"></i> Data Teknisi
            </h4>
        </div>
    </div>
    <div class="col-md-6 text-right"> <!-- Menggunakan kelas text-right untuk membuat posisi ke kanan -->.
        <a class="btn btn-info" href="?page=tambah">
            <i class="glyphicon glyphicon-plus"></i> +Tambah data teknisi
        </a>
    </div>
</div>

  <?php  
  if (empty($_GET['alert'])) {
    echo "";
  } elseif ($_GET['alert'] == 1) {
    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
          </div>";
  } elseif ($_GET['alert'] == 2) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data Barang berhasil disimpan.
          </div>";
  } elseif ($_GET['alert'] == 3) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data Barang berhasil diubah.
          </div>";
  } elseif ($_GET['alert'] == 4) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data Barang berhasil dihapus.
          </div>";
  }
  ?>

     
 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


            

          

                    <!-- Page Heading -->
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
              <thead>
                <tr>
                  <th>No</th>
                  <th>Id_teknisi</th>
                  <th>Nama</th>
                  <th>alamat</th>
                  <th>no_telp</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
              </thead>  
               <tbody>
              <?php
              /* Pagination */
             $batas = 5; // Jumlah data per halaman

if (isset($cari)) {
    $jumlah_record = mysqli_query($db, "SELECT * FROM teknisi
                                        WHERE id_teknisi LIKE '%$cari%' OR id_teknisi LIKE '%$cari%'")
                                        or die('Ada kesalahan pada query jumlah_record: '.mysqli_error($db));
} else {
    $jumlah_record = mysqli_query($db, "SELECT * FROM teknisi")
                                        or die('Ada kesalahan pada query jumlah_record: '.mysqli_error($db));
}

$jumlah  = mysqli_num_rows($jumlah_record);
$halaman = ceil($jumlah / $batas);
$page    = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
$mulai   = ($page - 1) * $batas; // Perhitungan nilai awal data yang ditampilkan

if (isset($cari)) {
    $query = mysqli_query($db, "SELECT * FROM teknisi
                                WHERE id_teknisi LIKE '%$cari%' OR id_teknisi LIKE '%$cari%' 
                                ORDER BY id_teknisi DESC LIMIT $mulai, $batas") 
                                or die('Ada kesalahan pada query : '.mysqli_error($db));
} else {
    $query = mysqli_query($db, "SELECT * FROM teknisi
                                ORDER BY id_teknisi DESC LIMIT $mulai, $batas")
                                or die('Ada kesalahan pada query : '.mysqli_error($db));
}

              $no = 1;
              while ($data = mysqli_fetch_assoc($query)) {
                
                echo "  <tr>
                <td width='50' class='center'>$no</td>
                      <td width=''>$data[id_teknisi]</td>
                      <td width=''>$data[nama]</td>
                      <td width=''>$data[alamat]</td>
                      <td width=''>$data[no_telp]</td>
                      <td ><img src='Gambar/{$data['gambar']}' style=' width='100' height='100'></td>






                      <td width='100'>
                        <div class=''>

                         
                          </a>";

                          ?>
                        <a data-toggle='tooltip' data-placement='top' title='ubah' 
   style='margin-right:5px' class='btn btn-info btn-sm' href='?page=ubah&id=<?php echo $data['id_teknisi']; ?>'>
   <i class="fas fa-edit"></i> 
</a>

              
                          <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="proses-hapus-teknisi.php?id=<?php echo $data['id_teknisi'];?>" onclick="return confirm('Anda yakin ingin menghapus Id_teknisi <?php echo $data['id_teknisi']; ?>?');">
                          <i class="fas fa-trash-alt"></i>

                          </a>


              <?php
                
                echo "
                        </div>
                      </td>
                    </tr>";
                $no++;
              }
              ?>
              </tbody>           
            </table>
            <?php 
            if (empty($_GET['hal'])) {
              $halaman_aktif = '1';
            } else {
              $halaman_aktif = $_GET['hal'];
            }
            ?>

            <a>
              Halaman <?php echo $halaman_aktif; ?> dari <?php echo $halaman; ?> | 
              Total <?php echo $jumlah; ?> data
            </a>

            <nav>
              <ul class="pagination pull-right">
              <!-- Button untuk halaman sebelumnya -->
              <?php 
              if ($halaman_aktif<='1') { ?>
                <li class="disabled">
                  <a href="" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
              <?php
              } else { ?>
                <li>
                  <a href="?hal=<?php echo $page -1 ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
              <?php
              }
              ?>

              <!-- Link halaman 1 2 3 ... -->
              <?php 
              for($x=1; $x<=$halaman; $x++) { ?>
                <li class="">
                  <a href="?hal=<?php echo $x ?>"><?php echo $x ?></a>
                </li>
              <?php
              }
              ?>

              <!-- Button untuk halaman selanjutnya -->
              <?php 
              if ($halaman_aktif>=$halaman) { ?>
                <li class="disabled">
                  <a href="" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              <?php
              } else { ?>
                <li>
                  <a href="?hal=<?php echo $page +1 ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              <?php
              }
              ?>
              </ul>
            </nav>
          </div>
        </div>
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
 

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
            