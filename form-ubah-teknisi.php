  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah data teknisi
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $id_lab   = $_GET['id'];
        $query = mysqli_query($db, "SELECT * FROM teknisi WHERE id_teknisi='$id_teknisi'") or die('Query Error : '.mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id_teknisi          = $data['id_teknisi'];
          $nama  = $data['nama'];
          
          $alamat = $data['alamat'];
          $no_telp        = $data['no_telp'];
          $gambar        = $data['gambar'];
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah-teknisi.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">Id_teknisi</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="id_lab" value="<?php echo $id_teknisi; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">nama</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $nama; ?>" required>
              </div>
            </div>

          
            

             <div class="form-group">
              <label class="col-sm-2 control-label">alamat</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="alamat" autocomplete="off" value="<?php echo $fasilitas; ?>" required>
              </div>
            </div>

             <div class="form-group">
              <label class="col-sm-2 control-label">No_telp</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="kapasitas" autocomplete="off" value="<?php echo $no_telp; ?>" required>
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
