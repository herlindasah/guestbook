<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('buku/update') ?>

              <div class="form-group">
                <label for="text">No Telp</label>
                <input type="text" name="no_telp" value="<?php echo $data_tamu->no_telp ?>" class="form-control" placeholder="Masukkan No. Telp">
                <input type="hidden" value="<?php echo $data_tamu->id_buku ?>" name="id_buku">
              </div>

              <div class="form-group">
                <label for="text">Nama Tamu</label>
                <input type="text" name="nama_tamu" value="<?php echo $data_tamu->nama_tamu ?>" class="form-control" placeholder="Masukkan Nama Tamu">
              </div>

              <div class="form-group">
                <label for="text">Instansi</label>
                <input type="text" name="instansi" value="<?php echo $data_tamu->instansi ?>" class="form-control" placeholder="Masukkan Nama Instansi">
              </div>

              <div class="form-group">
                <label for="text">Tanggal Berkunjung</label>
                <input type="date" name="tanggal_berkunjung" value="<?php echo $data_tamu->tanggal_berkunjung ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">Keperluan</label>
                <input type="text" name="keperluan" value="<?php echo $data_tamu->keperluan ?>" class="form-control" >
              </div>

              <button type="submit" class="btn btn-md btn-success">Update</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>
