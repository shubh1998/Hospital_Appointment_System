<?php
	include 'connection.php';
	include 'admin-header.php';
?>
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
    <div class="alert alert-info">
        <strong>Update Details</strong>
    </div>
    <a href="service-master-view.php" class="btn btn-info">Back</a>
    <?php


        $id = '';
        $sername = '';
        $serimage = '';
         
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $sql = "SELECT * FROM master_service WHERE id=$id";
            $result = mysqli_query($con ,$sql);
            if($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                $sername = $row['ser_name'];
            }
        }
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $sername = $_POST['name'];
            $sql = "update master_service set ser_name = '$sername' where id = '$id' ";

            if(mysqli_query($con , $sql)){
                echo '<script type="text/javascript"> alert("Updated");</script>';
                echo '<script>window.location.href="service-master-view.php"</script>';
            }
            else{
                echo '<script type="text/javascript"> alert("record not Updated");</script>';
            }

        }
    ?>

	<center>
		<div class="row">
            <form class="form-horizontal" role="form" method="post" action="">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">ID:</label>
                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control" id="name" placeholder="Name"     value='<?php echo $id ?>' disabled>
                        <input type="hidden" class="form-control" id="name" placeholder="Name" name="id" value='<?php echo $id ?>'>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" value='<?php echo $sername ?>'>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10 col-lg-2">
                        <button type="submit" class="btn btn-info btn-block" name="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
	</center>
</body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</html>