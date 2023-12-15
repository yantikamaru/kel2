<div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Input data siswa
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">Id_Barang</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="id_barang" maxlength="5" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Id_Lab</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="id_lab" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Barang</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_barang" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Merek</label>
              <div class="col-sm-3">
              <input type="text" class="form-control" name="merek" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Ukuran</label>
              <div class="col-sm-3">
              <input type="text" class="form-control" name="ukuran" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Jumlah</label>
              <div class="col-sm-3">
              <input type="text" class="form-control" name="jumlah" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Keadaan</label>
              <div class="col-sm-3">
              <input type="text" class="form-control" name="keadaan" autocomplete="off" required>
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