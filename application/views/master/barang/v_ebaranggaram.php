<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Barang Garam
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Data Master</a></li>
        <li><a href="<?php echo site_url('C_baranggaram'); ?>">Data Barang Garam</a></li>>
        <li class="active">Lihat Data Barang Garam</li>
      </ol>
    </section>

    <div class="box-body">
    <?php if ($this->session->flashdata('Sukses')) { ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fa fa-check"></i> Sukses!</h5>
          <?=$this->session->flashdata('Sukses')?>.
        </div>                 
      <?php } ?>
    </div>

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
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_baranggaram/editbarang')?>">
              <div class="box-body">
                <?php foreach ($barang as $barang) { ?>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="barang" name="barang" value="<?php echo $barang->barang ?>">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $barang->id_barang ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Barcode</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="barcode" name="barcode" value="<?php echo $barang->barcode ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Expaid</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" id="expaid" name="expaid" value="<?php echo date($barang->expaid)?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Gudang</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="gudang" name="gudang" style="width: 100%;">
                      <option value="<?php echo $barang->id_gudang ?>"><?php echo $barang->gudang ?></option>
                      <?php foreach ($gudang as $gudang) { ?>
                      <option value="<?php echo $gudang->id_gudang ?>"><?php echo $gudang->gudang?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Cabang</label>
                  <div class="col-sm-9">
                  <select class="form-control select2" id="namacabang" name="namacabang" style="width: 100%;">
                      <option value="<?php echo $barang->id_cabang ?>"><?php echo $barang->namacabang ?></option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Satuan</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="satuan" name="satuan" style="width: 100%;" onchange="hitung_konversi_satuan(this)">
                      <?php foreach ($satuan as $satuan) { ?>
                      <option value="<?php echo $satuan->id_satuan ?>" <?php if($satuan->id_satuan==$barang->id_satuan){echo 'selected';}else{echo '';}?>><?php echo $satuan->satuan ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="kategori" name="kategori" style="width: 100%;">
                      <?php foreach ($kategori as $kategori) { ?>
                      <option value="<?php echo $kategori->id_kategori; ?>" <?php if ($barang->id_kategori == $kategori->id_kategori ){ echo "selected"; } ?> ><?php echo $kategori->kategori ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Warna</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="warna" name="warna" style="width: 100%;">
                      <?php foreach ($warna as $warna) { ?>
                      <option value="<?php echo $warna->id_warna; ?>" <?php if ($barang->id_warna == $warna->id_warna ){ echo "selected"; } ?> ><?php echo $warna->warna ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Merk</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="merk" name="merk" value="<?php echo $barang->merk ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Stok</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok" value="<?php echo $barang->stok ?>" onkeyup="hitung_konversi_qty()">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Stok Min.</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="stokmin" name="stokmin" placeholder="Stok Minimal" value="<?php echo $barang->stokmin ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga Beli</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="rupiah" name="rupiah" value=" Rp. <?php echo number_format($barang->hargabeli,0,",","."); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Konversi Satuan</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="qttkonversi" name="qttkonversi" style="width: 100%;" onchange="hitung_konversi(this)">
                      <?php foreach ($konversi as $konversi) { ?>
                      <option value="<?php echo $konversi->id_konversi ?>" <?php if($konversi->id_konversi==$barang->id_konversi){echo 'selected';}else{echo '';}?>><?php echo $konversi->satuan_konversi ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hasil Konversi</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="hasil_konversi" name="hasil_konversi" readonly value="<?php echo $barang->hasil_konversi ?>">
                  </div>
                </div>

              </div>
              <?php } ?>
              <!-- /.box-body -->
              <div class="box-footer">
                  <div class="col-sm-10">
                    <a href="<?php echo site_url('C_baranggaram/index'); ?>" class="btn btn-default">Batal</a>
                    <button type="submit" class="btn btn-info">Simpan Data</button>
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

  <script>
  function hitung_konversi(row){
    var stok = parseFloat($('#stok').val());
    var qttkonversi = parseFloat($(row).find(':selected').data('qttkonversi'));
    var idsatuan=$(row).find(':selected').data('idsatuan');
    if($('#satuan').val()==idsatuan){
      var konversi=stok*qttkonversi;
    }else{
      var konversi=stok;
    }
    // alert(stok); alert(qttkonversi);
    
    $('#hasil_konversi').val(konversi);
  }
  function hitung_konversi_qty(){
    var stok = parseFloat($('#stok').val());
    var qttkonversi = parseFloat($('#qttkonversi').find(':selected').data('qttkonversi'));
    var idsatuan=$('#qttkonversi').find(':selected').data('idsatuan');
    if($('#satuan').val()==idsatuan){
      var konversi=stok*qttkonversi;
    }else{
      var konversi=stok;
    }
    
    $('#hasil_konversi').val(konversi);
  }
  function hitung_konversi_satuan(row){
    if($('#stok').val()!=''){
      var stok = parseFloat($('#stok').val());
    }else{
      var stok = 0;
    }
    var qttkonversi = parseFloat($('#qttkonversi').find(':selected').data('qttkonversi'));
    var idsatuan=$('#qttkonversi').find(':selected').data('idsatuan');
    if($(row).val()==idsatuan){
      var konversi=stok*qttkonversi;
    }else{
      var konversi=stok;
    }
    
    $('#hasil_konversi').val(konversi);
  }
  </script>