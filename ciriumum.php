<!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Anatomi ciri umum <?php echo $namamah ?></h3>
                <!-- form start -->
                <form role="form" method="post" action="input/inputciriumum.php">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nim">NIM</label>
                      <input type="text" class="form-control" name="nimm" id="nimm" value="<?php echo $nimmah ?>" style="width: 450px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tinggi Badan</label>
                      <input type="text" class="form-control" id="tinggibadankuku" name="tinggibadanku" placeholder="Detail warna kulit badan" style="width: 450px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Berat Badan</label>
                      <input type="text" class="form-control" id="beratbadanku" name="beratbadanku" placeholder="Deskripsi Singkat Bentuk Dada" style="width: 450px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Usia</label>
                      <input type="text" class="form-control" id="usiaku" name="usiaku" placeholder="Deskripsi Detail bentuk perut" style="width: 450px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Warna Kulit</label>
                      <input type="text" class="form-control" id="warnakulitku" name="warnakulitku" placeholder="Detail Panjang Badan" style="width: 450px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Ras</label>
                      <input type="text" class="form-control" id="rasku" name="rasku" placeholder="Deskripsi Ciri cacat" style="width: 450px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Agama</label>
                      <input type="text" class="form-control" id="agamaku" name="agamaku" placeholder="Deskripsi Ciri Punggung" style="width: 450px;">
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
</div>

          </div><!-- /.box -->