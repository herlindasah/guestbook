<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-inverse fixed-top">
        <a class="navbar-brand text-white" href="<?php echo base_url() ?>dashboard">Buku Tamu PGN COM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav my-lg-0 ml-auto">
                <li class="nav-item"><a class="nav-link text-white" href="<?php echo base_url() ?>dashboard">Home</a></li>
                <li class="active nav-item"><a class="nav-link" href="<?php echo base_url() ?>buku">Buku Tamu</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Statistik & Report</a></li> 
                <li class="nav-item"><a class="nav-link text-white" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link text-white btn btn-success" href="<?php echo base_url() ?>index.php/dashboard/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
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
                            <a href="<?php echo base_url() ?>buku/hapus/<?php echo $hasil->id_buku ?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal">Hapus</a>
                            </div>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>
        </div>
    </div>

     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                </div>

<div class="footer navbar fixed-bottom navbar-expand-sm navbar-dark text-center bg-dark" align="center">
    <br>
    <center><p>Copyright by PGN COM</p></center>
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

<script type="text/javascript">
    var page = 1;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page++;
            loadMoreData(page);
        }
    });


    function loadMoreData(page){
      $.ajax(
            {
                url: '?page=' + page,
                type: "get",
                beforeSend: function()
                {
                    $('.ajax-load').show();
                }
            })
            .done(function(data)
            {
                if(data == " "){
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('.ajax-load').hide();
                $("#post-data").append(data);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                  alert('server not responding...');
            });
    }
    </script>
</body>
</html>