<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

<link rel="shortcut icon" href="<?php echo base_url('assets/img/pgn.jpg')?>"/>
    <title>Guest-Book PGASCOM</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/sweetalert.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url() ?>welcome">Guest-Book PGASCOM</a>
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url() ?>tamu">Buku Tamu</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <br>

    <div class="container" style="margin-top: 80px; margin-bottom: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>tamu/tambah/" class="btn btn-md btn-success">Tambah Tamu</a>
        <hr>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-responsive table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>No Telp</th>
                    <th>Nama Tamu</th>
                    <th>Instansi</th>
                    <th>Tanggal Berkunjung</th>
                    <th>Jam Datang</th>
                    <th>Bertemu Dengan</th>
                    <th style="width: 10.5%">Keperluan</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1; 
                    foreach($v_tamu as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->no_telp ?></td>
                    <td><?php echo $hasil->nama_tamu ?></td>
                    <td><?php echo $hasil->instansi ?></td>
                    <td><?php echo $hasil->tanggal_berkunjung ?></td>
                    <td><?php echo $hasil->jam_datang ?></td>
                    <td><?php echo $hasil->bertemu ?></td>
                    <td><?php echo $hasil->keperluan ?></td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>
        </div>
    </div>

<!--
    <div class="footer1" align="center">
        <br>
        <p>Copyright by PGN COM</p>
    </div>
-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script>
    $('#table').DataTable( {
        autoFill: true
    } );
</script>

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

</body>
</html>