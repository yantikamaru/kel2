  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Input data Lab
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan-lab.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">Id_lab</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="id_lab" maxlength="5" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">nama_lab</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_lab" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">fasilitas</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="fasilitas" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">kapasitas</label>
              <div class="col-sm-3">
              <input type="text" class="form-control" name="kapasitas" autocomplete="off" required>
              </div>
            </div>

         

                      <div class="form-group">
    <label class="col-sm-2 control-label">Gambar</label>
    <div class="col-sm-3">
        <input type="file" class="form-control" name="gambar" accept="image/*" required>
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