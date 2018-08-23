<!DOCTYPE html>
<html>

<head>
    <title>Buku Tamu PGN COM</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>

<body>
  <div class="nav-wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top">
          <nav class="navbar bottom-color light-bg">
            <div class="container">
            <a class="navbar-brand" href="<?php echo base_url() ?>dashboard">Buku Tamu PGN COM</a>
           
           <!-- <div class="logo">
              <img src="<?php echo base_url() ?>assets/img/pgascom.png" /></div> -->

              <div class="navbar-form navbar-right">
                <a href="<?php echo base_url() ?>index.php/dashboard/logout" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
          </nav>


          <div class="container">
        <div class="navbar-header">

         <!-- <a class="navbar-brand" href="<?php echo base_url() ?>dashboard">Buku Tamu PGN COM</a> --> 
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url() ?>dashboard">Home</a></li>
                <li><a href="<?php echo base_url() ?>buku">Buku Tamu</a></li>
                <li><a href="<?php echo base_url('buku/statistik') ?>">Statistik & Report</a></li> 
                <li><a href="#">About</a></li>
              </ul>

        </div>
      </div>
    </nav>

   <div class="container">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active" class="responsive">
        <img src="<?php echo base_url(); ?>assets/img/p.jpg" alt="PGN COM" style="width:100%; height:660px;">
      </div>

      <div class="item">
        <img src="<?php echo base_url(); ?>assets/img/p1.jpg" alt="PGN COM1" style="width:100%; height:660px;">
      </div>
    
      <div class="item">
        <img src="<?php echo base_url(); ?>assets/img/p2.jpg" alt="PGN COM2" style="width:100%; height:660px;">
      </div>
    </div>
  </div>
</div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</div>

<div class="footer">
  <br>
  <p>Copyright by PGN COM</p>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>