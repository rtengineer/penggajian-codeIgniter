<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('karyawan/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">NIP</label>

                      <div class="col-sm-9">
                        <input type="text" name="NIP" class="form-control" placeholder="Masukkan NIP">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Karyawan</label>

                      <div class="col-sm-9">
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Guru">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Gender</label>

                      <div class="col-sm-5">
                        <?php
                          echo form_dropdown('jenis_kelamin', array('Pilih Gender', 'L'=>'Pria', 'P'=>'Wanita'), null, "class='form-control'");
                        ?>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Lahir</label>

                      <div class="col-sm-9">
                        <input type="date" name="tgl_lahir" class="form-control" placeholder="Kelahiran">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">No Handphone</label>

                      <div class="col-sm-9">
                        <input type="text" name="telp" class="form-control" placeholder="Masukkan Nomor">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Surel</label>

                      <div class="col-sm-9">
                        <input type="text" name="email" class="form-control" placeholder="Masukkan Surel Mail">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat</label>

                      <div class="col-sm-9">
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Masa Pekerjaan</label>

                      <div class="col-sm-9">
                        <input type="date" name="masa_kerja" class="form-control" placeholder="Masukkan Masa Nya">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('guru', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
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
