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
      <?php
        include 'header.php';
        include 'connection.php';
      ?>
    <div class="container">
      <div class="row">
        <?php

        if(isset($_POST['submit-service']))
        {
          echo '<script> alert("appointement confirmed") </script>';
        }
    	   if(isset($_GET['id']))
    	   {
    		    $id = $_GET['id'];
            $sql = "SELECT * FROM master_service where id=$id";
            $result = mysqli_query($con ,$sql);
            if($row = mysqli_fetch_array($result)) {

        ?>
      <!-- Web content block start -->
 	<div class="col-lg-6">
  <img class="img-responsive img-thumbnail" src="upload/<?php echo $row['img_location'] ?>" alt="Card image" style="height:100%;width:100%;">
</div>
  <div class="col-lg-6" style="background-color: #f7f7f7;">
    <h1 class="text-center">book : <?php echo $row['ser_name'] ?></h1>
    <form class="form-horizontal" role="form" method="post" action="">
      <div class="form-group">
          <label class="control-label col-sm-2 col-lg-2" for="nm">Name:</label>
          <div class="col-sm-10 col-lg-6">
              <input type="text" class="form-control" id="nm" placeholder="Your Name" name="name" required>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-sm-2 col-lg-2" for="dt">Date:</label>
          <div class="col-sm-10 col-lg-6">
              <input type="date" class="form-control" id="dt" name="date" required>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-sm-2 col-lg-2" for="mail">Email:</label>
          <div class="col-sm-10 col-lg-6">
              <input type="email" class="form-control" id="mail" placeholder="Email" name="mail" required>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-sm-2 col-lg-2" for="ph">Phone:</label>
          <div class="col-sm-10 col-lg-6">
              <input type="tel" class="form-control" id="ph" placeholder="Phone" name="phone"required>
          </div>
      </div>
      
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10 col-lg-6">
              <button type="submit" class="btn btn-info btn-block" name="submit-service">Submit</button>
          </div>
      </div>
    </form>
  </div>
</div>
</div>
<!-- Card Regular -->
  <?php
  }
}
  ?>
</div>
<!-- Card -->

     
      <!-- Web Content block end-->

      <?php include 'footer.php'?>
  

    <!-- Main Container End-->
  </body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</html>