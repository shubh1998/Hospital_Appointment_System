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
        <strong>Registration</strong>
    </div>
	<?php
		$name = '';
		$username = '';
		$email = '';
		$phone = '';
		$password = '';
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];

			$sql = "insert into registration(name,username,email,phone,password) values('".$name."','".$username."', '".$email."' , '".$phone."', '".$password."');";

			if(mysqli_query($con , $sql)){
				echo '<script type="text/javascript"> alert("Registered");</script>';
			}
			else{
				echo '<script type="text/javascript"> alert("Sorry ! Error Occured");</script>';
			}

		}
	?>
	<center>
		<div class="row">
            <form class="form-horizontal" role="form" method="post" action="">
                <div class="form-group">
                    <label class="control-label col-sm-2 col-lg-3" for="name">Name:</label>
                    <div class="col-sm-10 col-lg-5">
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 col-lg-3" for="name">Username:</label>
                    <div class="col-sm-10 col-lg-5">
                        <input type="text" class="form-control" id="name" placeholder="Username" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 col-lg-3" for="mail">Email:</label>
                    <div class="col-sm-10 col-lg-5">
                        <input type="email" class="form-control" id="mail" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 col-lg-3" for="ph">Phone:</label>
                    <div class="col-sm-10 col-lg-5">
                        <input type="tel" class="form-control" id="ph" placeholder="Phone" name="phone">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 col-lg-3" for="pass">Password:</label>
                    <div class="col-sm-10 col-lg-5">
                        <input type="password" class="form-control" id="pass" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10 col-lg-2">
                        <button type="submit" class="btn btn-info btn-block" name="submit">Submit</button>
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