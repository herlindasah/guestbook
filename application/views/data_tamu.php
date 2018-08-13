<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
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

    <div class="container" style="margin-top: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>buku/tambah/" class="btn btn-md btn-success">Tambah Tamu</a>
        <hr>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
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

    <div class="footer" align="center">
    <br>
     <p>Copyright by PGN COM</p>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
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