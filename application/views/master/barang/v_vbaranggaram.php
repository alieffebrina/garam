<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Barang Garam
        <small>Lihat</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Data Master</a></li>
        <li><a href="<?php echo site_url('C_baranggaram'); ?>">Data Barang Garam</a></li>>
        <li class="active">Lihat Data Barang Garam</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Lihat Data Barang Garam</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_baranggaram')?>">
              <div class="box-body">
                <?php foreach ($barang as $barang) { ?>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Foto Barang</label>
                  <div class="col-sm-9">
                    <img src="<?php echo base_url().'/uploadgambar/'.$barang->fotobarang?>" class='img-thumbnail' style='width:150px;height:200px;'>
                    <p><?php echo $barang->fotobarang?></p>
                    <!-- <input type="text" class="form-control" id="fotobarang" name="fotobarang" value="<?//php echo $barang->fotobarang?>" readonly> -->
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="barang" name="barang" value="<?php echo $barang->barang ?>" readonly>
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Barcode</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="barcode" name="barcode" value="<?php echo $barang->barcode?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Expaid</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="expaid" name="expaid" value="<?php echo $barang->expaid?>" readonly>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Gudang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="barang" name="barang" value="<?php echo $barang->gudang ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Cabang</label>
                  <div class="col-sm-9"><input type="text" class="form-control" id="barang" name="barang" value="<?php echo $barang->namacabang ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Satuan</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="satuan" name="satuan" value="<?php echo $barang->nama_satuan ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $barang->kategori ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Warna</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="warna" name="warna" value="<?php echo $barang->warna ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Merk</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="merk" name="merk" value="<?php echo $barang->merk ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Stok</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $barang->stok ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Stok Min.</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="stokmin" name="stokmin" value="<?php echo $barang->stokmin ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga Beli</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="rupiah" name="rupiah" value=" Rp. <?php echo number_format($barang->hargabeli,0,",","."); ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Konversi</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="qttkonversi" name="qttkonversi" value="<?php echo $barang->satuan_konversi ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Hasil Konversi</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="hasil_konversi" name="hasil_konversi" value="<?php echo $barang->hasil_konversi ?>" readonly>
                  </div>
                </div>
              </div>
              <?php } ?>
              <!-- /.box-body -->
              <div class="box-footer">
                  <div class="col-sm-10">
                    <a href="<?php echo site_url('C_baranggaram/index'); ?>" class="btn btn-default">Kembali</a>
                  </div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>