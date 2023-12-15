  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah data lab
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $id_lab   = $_GET['id'];
        $query = mysqli_query($db, "SELECT * FROM is_siswa3 WHERE id_lab='$id_lab'") or die('Query Error : '.mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id_lab          = $data['id_lab'];
          $nama_lab  = $data['nama_lab'];
          
          $fasilitas = $data['fasilitas'];
          $kapasitas        = $data['kapasitas'];
          $gambar        = $data['gambar'];
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah-lab.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">Id_lab</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="id_lab" value="<?php echo $id_lab; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">nama_lab</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_lab" autocomplete="off" value="<?php echo $nama_lab; ?>" required>
              </div>
            </div>

          
            

             <div class="form-group">
              <label class="col-sm-2 control-label">fasilitas</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="fasilitas" autocomplete="off" value="<?php echo $fasilitas; ?>" required>
              </div>
            </div>

             <div class="form-group">
              <label class="col-sm-2 control-label">kapasitas</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="kapasitas" autocomplete="off" value="<?php echo $kapasitas; ?>" required>
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
