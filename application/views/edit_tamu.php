<!DOCTYPE html>
<html>

<head>
    <title>Buku Tamu PGN COM</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
         <a class="navbar-brand" href="<?php echo base_url() ?>dashboard">Buku Tamu PGN COM</a>
              <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url() ?>dashboard">Home</a></li>
                <li class="active"><a href="<?php echo base_url() ?>buku">Buku Tamu</a></li>
                <li><a href="<?php echo base_url('buku/statistik') ?>">Statistik & Report</a></li> 
                <li><a href="#">About</a></li>
              </ul>

        </div>
         <div class="navbar-form navbar-right">
                <a href="<?php echo base_url() ?>index.php/dashboard/logout" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
      </div>
    </nav>

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

     <div class="footer" align="center">
      <br>
     <p>Copyright by PGN COM</p>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>
