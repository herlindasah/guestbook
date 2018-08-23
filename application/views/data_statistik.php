<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Data Statistik PGN COM</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/Chart.bundle.min.js"></script>
</head>
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

    <div class="container" style="margin-top: 80px; margin-bottom: 80px">
        <?php
            foreach($data_tamu as $data){
                $keperluan[] = $data->keperluan;
            }
        ?>
        <canvas id="myChart"></canvas>
        <!--Load chart js-->
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'bar',

                // The data for our dataset
                data: {
                    labels: <?php echo json_encode($keperluan) ?>,
                    datasets: [{
                        label: "Data",
                        backgroundColor: ['rgb(255, 99, 132)','rgb(255, 132, 99)','rgb(132, 255, 99)','rgb(132, 99, 255)','rgb(99, 255, 132)','rgb(99, 132, 255)',],
                        borderColor: 'rgb(255, 99, 132)',
                        data: <?php echo json_encode($row_data) ?>,
                    }]
                },

                // Configuration options go here
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
    </div>

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