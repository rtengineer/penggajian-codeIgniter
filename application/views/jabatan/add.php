<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data Jabatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('jabatan/add', 'role="form" class="form-horizontal"');
            ?>

            
            <div class="box-body">

            <div class="form-group">
                <label class="col-sm-2 control-label">Jabatan</label>

                <div class="col-sm-9">
                  <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
                </div>
            </div>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Jabatan</label>

                      <div class="col-sm-9">
                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Gaji Pokok</label>

                      <div class="col-sm-9">
                        <input type="text" name="standar_gaji" class="form-control" placeholder="Gaji Pokok">
                      </div>
                  </div>
                  
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Informasi</label>

                      <div class="col-sm-9">
                        <input type="text" name="keterangan" class="form-control" placeholder="Informasi Jabatan">
                      </div>
                  </div>
              

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('jabatan', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
                        ?>
                      </div>
                  </div>

                </div>
                <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
