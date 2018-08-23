<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="shortcut icon" href="<?php echo base_url('assets/img/pgn.jpg')?>"/>
  <title>Buku Tamu PGN COM</title>

    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/clockpicker.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-datepicker.css">

    <!-- development version, includes helpful console warnings -->
    <script src="<?php echo base_url()?>assets/js/polyfill.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    
    <!-- DataTables plugin start -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jszip.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/pdfmake.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/vfs_fonts.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/dataTables.bootstrap.js"></script>
    <!-- DataTables plugin end -->
    
    <!-- Other lugin start -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/clockpicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datepicker.id.min.js"></script>
    <!-- Other plugin end -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
</head>

<body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
         <a class="navbar-brand" href="<?php echo base_url() ?>dashboard">Buku Tamu PGN COM</a>
              <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url() ?>dashboard">Home</a></li>
                <li class="active"><a href="<?php echo base_url() ?>buku">Buku Tamu</a></li>
                <li><a href="#">Statistik & Report</a></li> 
                <li><a href="#">About</a></li>
              </ul>
        </div>

         <div class="navbar-form navbar-right">
                <a href="<?php echo base_url() ?>index.php/dashboard/logout" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
      </div>
    </nav>

<div class="input" align="center" class="responsive">
    <div class="container" style="margin-top: 80px">
        <div class="col-lg-8 offset-lg-2">

          <br>
          <br>
          <br>

            <?php echo form_open('buku/simpan') ?>
              <div class="form-group">
                <label for="text">No Telp</label>
                <div class="input-group" style="width: 650px">
                      <input type="number" class="form-control" name="no_telp" placeholder="Phone Number" required>
                      <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2"></span>
                  </div>
                    </div>
              </div>

              <div class="form-group">
                <label for="text">Nama Tamu</label>
                <div class="input-group" style="width: 650px">
                  <input type="text" class="form-control" name="nama_tamu" placeholder="Your Name" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="text">Instansi</label>
                <div class="input-group" style="width: 650px">
                  <input type="text" class="form-control" name="instansi" placeholder="Company" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"></span>
                  </div>
                </div>
              </div>

              <label for="text">Keperluan</label><br>
              <select class="form-control" name="keperluan" style="width: 650px">
                    <option value="">--Pilih Keperluan--</option>
                    <option value="PKL">PKL</option>
                    <option value="Magang (Internship)">Magang (Internship)</option>
                    <option value="Kerjasama">Kerjasama</option>
                    <option value="Interview">Interview</option>
                    <option value="Bisnis">Bisnis</option>
                    <option value="Lainnya">Lainnya</option>
                  </select><br>

              <div class="form-group">
                <label for="text">Bertemu</label>
                <div class="input-group" style="width: 650px">
                  <input type="text" class="form-control" name="bertemu" placeholder="Visit" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"></span>
                  </div>
                </div>
                <?php $pegawai = $this->model_buku->get_pegawai(); ?>
                <datalist id="pegawai">
                  <?php foreach ($pegawai as $bertemu): ?>
                    <option value="<?php echo $bertemu->bertemu ?>"><?php echo $bertemu->bertemu ?></option>
                  <?php endforeach ?>
                </datalist>
              </div>

              <button type="submit" class="btn btn-md btn-primary">Simpan</button>
              <button type="reset" class="btn btn-md btn-secondary btn-warning">Reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

</body>

<?php if (isset($_SESSION['error'])): ?>
            <script>
              swal({
              title: "Error!",
              text: "<?php echo $_SESSION['error'] ?>",
              icon: "error",
          });
            </script>
        <?php unset($_SESSION['error']) ?>
          <?php endif ?>
          <?php if (isset($_SESSION['success'])): ?>
            <script>
              swal({
              title: "Berhasil!",
              text: "<?php echo $_SESSION['success'] ?>",
              icon: "success",
          });
            </script>
        <?php unset($_SESSION['success']) ?>
          <?php endif ?>
</html>