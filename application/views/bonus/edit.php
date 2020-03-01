<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('bonus/edit', 'role="form" class="form-horizontal"');
                echo form_hidden('id_aturan_gj', $jabatan['id_aturan_gj']);
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Jabatan</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $bonus['jabatan']; ?>" name="jabatan" class="form-control" placeholder="Edit Jabatan">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Masa Kerja</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $bonus['masa_kerja']; ?>" name="masa_kerja" class="form-control" placeholder="Masa Kerja">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Insentif</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $bonus['insentif']; ?>" name="insentif" class="form-control" placeholder="Insentif Kerja">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Bonus</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $bonus['bonuss']; ?>" name="bonuss" class="form-control" placeholder="Bonus Kerja">
                      </div>
                  </div>


                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('bonus', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
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
