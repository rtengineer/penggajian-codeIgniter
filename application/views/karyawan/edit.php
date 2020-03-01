<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('karyawan/edit', 'role="form" class="form-horizontal"');
                echo form_hidden('id_karyawan', $karyawan['id_karyawan']);
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">NIP</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $karyawan['NIP']; ?>" name="NIP" class="form-control" placeholder="Edit NIP">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Karyawan</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $karyawan['nama']; ?>" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap ">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Gender</label>

                      <div class="col-sm-5">
                        <?php
                          echo form_dropdown('jenis_kelamin', array('Pilih Gender', 'L'=>'Pria', 'P'=>'Wanita'), $karyawan['jenis_kelamin'], "class='form-control'");
                        ?>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Lahir</label>

                      <div class="col-sm-9">
                        <input type="date" value="<?php echo $karyawan['tgl_lahir']; ?>" name="tgl_lahir" class="form-control" placeholder="Kelahiran">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">No Handphone</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $karyawan['telp']; ?>" name="telp" class="form-control" placeholder="Masukan Nomor">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Surel</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $karyawan['email']; ?>" name="email" class="form-control" placeholder="Masukan Surel Mail">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $karyawan['alamat']; ?>" name="alamat" class="form-control" placeholder="Masukan Alamat">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Masa Pekerjaan</label>

                      <div class="col-sm-9">
                        <input type="date" value="<?php echo $karyawan['masa_kerja']; ?>" name="masa_kerja" class="form-control" placeholder="Masanya">
                      </div>
                  </div>


                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('karyawan', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
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
