<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu PGASCOM</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a class="navbar-brand" href="<?php echo base_url() ?>dashboard">Buku Tamu PGASCOM</a>
          <style type="text/css">
            .navbar-inverse{
              background-color: #3e4d66
            }
          </style>
          <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url() ?>dashboard">Home</a></li>
                <li><a href="<?php echo base_url() ?>buku">Buku Tamu</a></li>
                <li><a href="#">Statistik & Report</a></li> 
                <li><a href="#">About</a></li> 
              </ul>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-form navbar-right">
                <a href="<?php echo base_url() ?>index.php/dashboard/logout" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
      </div>
    </nav>
<div class="container" style="margin-top: 80px">
    <div class="row">

        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-dashboard"></i>Dashboard</h3>
              </div>
              <div class="panel-body">
                Selamat datang <b><?php echo $this->session->userdata("user_nama") ?></b> di halaman Administrator System
              </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>