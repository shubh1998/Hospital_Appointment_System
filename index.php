<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BookMyDocter.com</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Main Container-->
<div class="container-fluid">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height: 180px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/c1.jpg" alt="c1">
    </div>
    <div class="item">
      <img src="images/img2.jpg" alt="img2">
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <br><br>
      <div class="row">
        <div class="col-lg-12 head">
          <h1> Appointment Website </h1>
        </div>
      </div>

	<?php
		include 'header.php'
	?>
      <!-- Web content block start -->


      <div class="row">
        <div class="col-lg-4 col-sm-3 col-md-3">
            <img src="images/side1.jpg" height="265px"/>
        </div>
        <div class="col-lg-8 col-sm-9 col-md-9 top-web-content">
            <p align="justify">
              <h1>Safety of your data is our</h1>
            </p>
            <ol>
                <li>top priority.</li>
                <li>Multi-level security checks</li>
                <li>Multiple data backups</li>
                <li>Stringent data privacy policies</li>
            </ol>
        </div>
      </div>

      <br/>
      <div class="row">
        <div class="col-lg-8 col-sm-9 col-md-9 bottom-web-content">
            <p align="justify">
              <h1>Get all your medicines.Everytime. On time.</h1>
            </p>
            <ol>
                <li> Guaranteed availability</li>
                <li> Over 130,000+ genuine medicines</li>
                <li> Home delivery in 24hrs</li>
            </ol>
        </div>
        <div class="col-lg-4 col-sm-3 col-md-3">
            <img src="images/side2.svg" width="200px" height="300px"/>
        </div>
      </div>

      <br/>
      <div class="row">
        <div class="col-lg-4 col-sm-3 col-md-3">
            <img src="images/side3.jpg" height="265px"/>
        </div>
        <div class="col-lg-8 col-sm-9 col-md-9 last-web-content">
            <p align="justify">
              <span style="font-size: 36px;">Leading Healthcare Providers</span>
              <h1>Trust us for Business</h1>
            </p>
            <ol>
                <li> Get seen by 25M+ patients on BookMyDocter.com</li>
                <li> The most advanced software for clinics and hospitals</li>
                <li> State of the art business analytics for enterprises</li>
            </ol>
        </div>
      </div>
      <!-- Web Content block end-->

      <?php include 'footer.php'?>
    </div>

    <!-- Main Container End-->
  </body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</html>