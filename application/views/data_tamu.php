<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Buku Tamu PGN COM</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/sweetalert.min.js"></script>
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

    <div class="container" style="margin-top: 80px; margin-bottom: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>buku/tambah/" class="btn btn-md btn-success">Tambah Tamu</a>
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
                    <th>Keperluan</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1; 
                    foreach($data_tamu as $hasil){ 
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
                    <td>
                        <div class="btn-group">
                            <a href="<?php echo base_url() ?>buku/edit/<?php echo $hasil->id_buku ?>" class="btn btn-sm btn-success">Edit</a>
                            <button class="btn confirm-delete btn-sm btn-danger" onclick="hapus_data(<?php echo $hasil->id_buku ?>)">Hapus</button>
                        </div>
                    </td>
                  </tr>

                <?php } ?>

                <!-- modal Hapus -->
                 <div id="modalHapus" tabindex="-1" role="dialog" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>Perhatian!</h3>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus data tamu ini?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="btnDel" class="btn btn-danger">Delete</a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true" class="btn secondary">Cancel</a>
                                    </div>
                                </div>
                </tbody>
              </table>
        </div>
    </div>

     <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Perhatian!</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah Anda yakin ingin menghapus data tamu ini?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
                                                <button type="button" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

    <div class="footer">
        <div class="container-fluid">
        <br>
        <p>Copyright by PGN COM</p>
    </div>

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

<!-- Function hapus -->
<script>
   $('#modalHapus').on('show', function() {
    var id = $(this).data('id'),
        removeData = $(this).find('.danger');
})

function hapus_data(id) {
    swal({
            title: "Apa Anda Yakin?",
            text: "Saat menghapusnya Anda tidak akan bisa mengembalikannya seperti semula!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = '<?php echo base_url() ?>buku/hapus/'+id;
            } else {
                swal("Data Anda berhasil diamankan!");
            }
        });
}
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