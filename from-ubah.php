  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah data barang
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $id_barang   = $_GET['id'];
        $query = mysqli_query($db, "SELECT * FROM is_siswa1 WHERE id_barang='$id_barang'") or die('Query Error : '.mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id_barang          = $data['id_barang'];
          $id_lab          = $data['id_lab'];
          $nama_barang  = $data['nama_barang'];
          
          $merek = $data['merek'];
          $ukuran         = $data['ukuran'];
          $jumlah    = $data['jumlah'];
          $keadaan        = $data['keadaan'];
          $gambar        = $data['gambar'];
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">Id_Barang</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="id_barang" value="<?php echo $id_barang; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Id_Lab</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="id_lab" autocomplete="off" value="<?php echo $id_lab; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Barang</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_barang" autocomplete="off" value="<?php echo $nama_barang; ?>" required>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Merek</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="merek" autocomplete="off" value="<?php echo $merek; ?>" required>
              </div>
            </div>

             <div class="form-group">
              <label class="col-sm-2 control-label">Ukuran</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="ukuran" autocomplete="off" value="<?php echo $ukuran; ?>" required>
              </div>
            </div>

             <div class="form-group">
              <label class="col-sm-2 control-label">Jumlah</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="jumlah" autocomplete="off" value="<?php echo $jumlah; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Keadaan</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="keadaan" autocomplete="off" value="<?php echo $keadaan; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Gambar</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="gambar" autocomplete="off" value="<?php echo $gambar; ?>" required>
              </div>
            </div>
            
            
            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
