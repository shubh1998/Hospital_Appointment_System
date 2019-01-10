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
        $sql = "SELECT * FROM master_service";
        $result = mysqli_query($con ,$sql);
        while ($row = mysqli_fetch_array($result)) {

    ?>
      <!-- Web content block start -->
      <div class="col-lg-4 col-sm-12 col-md-6">
  <div class="card" style="padding:20px; background-color:#dddddd; margin:5px; border-radius:5px;">
  <img class="card-img-top img-responsive img-thumbnail" src="upload/<?php echo $row['img_location'] ?>" alt="Card image" style="height:250px;width:100%;">
  <div class="card-body">
    <h3 class="card-title text-center" ><?php echo $row['ser_name'] ?></h3>
    <center><a href="service-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-info ">View Service</a></center>
  </div>
</div>
</div>
<!-- Card Regular -->
  <?php
  }
  ?>
</div>
</div>
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