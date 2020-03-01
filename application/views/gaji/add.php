<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Gaji Kerja</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('gaji/add', 'role="form" class="form-horizontal"');
            ?>

            <div class="box-body">



                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Karyawan</label>

                    <div class="col-sm-9">
                    <select name="nama" <?php echo cmb_dinamis('karyawan', 'tbl_karyawan', 'nama', 'id_karyawan'), null ?></select>
                    </div>
                </div>      

                <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Gajian</label>

                      <div class="col-sm-9">
                        <input type="date" name="tanggal_penerimaan" class="form-control" placeholder="Gajian">
                      </div>
                  </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Nominal</label>

                    <div class="col-sm-9">
                    <select name="nominal" <?php echo cmb_dinamis('jabatan', 'tbl_jabatan', 'standar_gaji', 'id_jabatan'), null ?></select>
                    </div>
                </div>   

                    
                   
              

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('gaji', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
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

