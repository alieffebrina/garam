<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Barang Garam
        <small>Tambah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Data Master</a></li>
        <li><a href="<?php echo site_url('C_baranggaram'); ?>">Data Barang Garam</a></li>>
        <li class="active">Tambah Data Barang Garam</li>
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
              <h3 class="box-title">Tambah Data Barang Garam</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_baranggaram/tambah')?>">
              <div class="box-body">
                
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="barang" name="barang" placeholder="Nama Barang">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Barcode</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Barcode Barang">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Expaid</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" id="expaid" name="expaid" value="<?php echo date('d-m-Y')?>">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Gudang</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="gudang" name="gudang" style="width: 100%;">
                      <option value="">--Pilih--</option>
                      <?php foreach ($gudang as $gudang) { ?>
                      <option value="<?php echo $gudang->id_gudang ?>"><?php echo $gudang->gudang ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Cabang</label>
                  <div class="col-sm-9">
                  <select class="form-control select2" id="namacabang" name="namacabang" style="width: 100%;">
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Satuan</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="satuan" name="satuan" style="width: 100%;" onchange="hitung_konversi_satuan(this)">
                      <option value="">--Pilih--</option>
                      <?php foreach ($satuan as $satuan) { ?>
                      <option value="<?php echo $satuan->id_satuan ?>"><?php echo $satuan->satuan ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
                  <div class="col-sm-9">
                  <div class="input-group input-group-sm">
                    <select class="form-control select2" id="modalkategori" name="kategori" style="width: 100%;">
                      <option value="">--Pilih--</option>
                      <?php foreach ($kategori as $kategori) { ?>
                      <option value="<?php echo $kategori->id_kategori?>"><?php echo $kategori->kategori ?></option>
                      <?php } ?>
                    </select>
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modaladdkategori">
                            Tambah
                          </button>
                        </span>
                  </div>
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Warna</label>
                  <div class="col-sm-9">
                  <div class="input-group input-group-sm">
                    <select class="form-control select2" id="modalwarna" name="warna" style="width: 100%;">
                      <option value="">--Pilih--</option>
                      <?php foreach ($warna as $warna) { ?>
                      <option value="<?php echo $warna->id_warna?>"><?php echo $warna->warna ?></option>
                      <?php } ?>
                    </select>
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modaladdwarna">
                            Tambah
                          </button>
                        </span>
                  </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Merk</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk barang">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Stok</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok" placeholder="Stok" onkeyup="hitung_konversi_qty()">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Stok Min.</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="stokmin" name="stokmin" placeholder="Stok Minimal">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga Beli</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="rupiah" name="rupiah" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Konversi Satuan</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="qttkonversi" name="qttkonversi" style="width: 100%;" onchange="hitung_konversi(this)">
                      <option value="">--Pilih--</option>
                      <?php foreach ($konversi as $konversi) { ?>
                      <option value="<?php echo $konversi->id_konversi ?>" data-idsatuan="<?php echo $konversi->id_satuan ?>" data-qttkonversi="<?php echo $konversi->qttkonversi ?>"><?php echo $konversi->satuan_konversi ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hasil Konversi</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="hasil_konversi" name="hasil_konversi" readonly>
                  </div>
                </div>
              </div>
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

