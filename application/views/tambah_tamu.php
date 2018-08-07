<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('buku/simpan') ?>

              <div class="form-group">
                <label for="text">No Telp</label>
                <input type="text" name="no_telp" class="form-control" placeholder="Masukkan No. Telp">
              </div>

              <div class="form-group">
                <label for="text">Nama Tamu</label>
                <input type="text" name="nama_tamu" class="form-control" placeholder="Masukkan Nama Tamu">
              </div>

              <div class="form-group">
                <label for="text">Instansi</label>
                <input type="text" name="instansi" class="form-control" placeholder="Masukkan Nama Instansi">
              </div>

              <div class="form-group">
                <label for="text">Tanggal Berkunjung</label>
                <input type="date" name="tanggal_berkunjung" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">Keperluan</label>
                <input type="text" name="keperluan" class="form-control" >
              </div>

              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>