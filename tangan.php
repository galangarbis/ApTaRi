<!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Anatomi Tangan <?php echo $namamah ?></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="input/inputtangan.php">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nim">NIM</label>
                      <input type="text" class="form-control" name="nimm" id="nimm" value="<?php echo $nimmah ?>" style="width: 450px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jumlah Tangan</label>
                      <input type="text" class="form-control" id="jumlahtanganku" name="jumlahtanganku" placeholder="Detail warna kulit badan" style="width: 450px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Lebar Lengan</label>
                      <input type="text" class="form-control" id="lebarlenganku" name="lebarlenganku" placeholder="Deskripsi Singkat Bentuk Dada" style="width: 450px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Panjang Lengan</label>
                      <input type="text" class="form-control" id="panjanglenganku" name="panjanglenganku" placeholder="Deskripsi Detail bentuk perut" style="width: 450px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Ciri Jari</label>
                      <input type="text" class="form-control" id="cirijariku" name="cirijariku" placeholder="Deskripsi Ciri cacat" style="width: 450px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jumlah Jari</label>
                      <input type="text" class="form-control" id="jumlahjariku" name="jumlahjariku" placeholder="Deskripsi Ciri Punggung" style="width: 450px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tanda Khusus</label>
                      <input type="text" class="form-control" id="tandakhususku" name="tandakhususku" placeholder="Deskripsi Bentuk Tulang Belakang" style="width: 450px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ciri Cacat</label>
                      <input type="text" class="form-control" id="ciricacat3ku" name="ciricacat3ku" placeholder="Lebar Bahu" style="width: 450px;">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Rumus Sidik Jari</label>
                      <input type="text" class="form-control" id="rumussidikjariku" name="rumussidikjariku" placeholder="Lebar Pinggang" style="width: 450px;">
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
</div>

          </div><!-- /.box -->