<?php 
	include 'connection.php';

	if(isset($_POST['Submit'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		 
            $picture = $_FILES['image']['name'];

	$SQL = "INSERT INTO admin_record(name,username,email,picture,password) VALUES('$name' ,'$username', '$email','$picture' ,'$password')";
	if(mysqli_query($con, $SQL)){	
		echo "<script> alert('record inserted') </script>";
	}
	else{
		echo "<script> alert('record not inserted') </script>";
	}
	
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Record</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		input{
			height: 40px;
			width: 50%;
			border-radius: 3px;
		}

		th{
			width: 20%;
		}
	</style>
</head>
<body>
	<div class="container" style="padding-top: 20px;">
	<form class="form" method="post" action="" enctype="multipart/form-data">
		<table class="table" border="1">
			<tr>
				<th>Name</th>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th>Username</th>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<th>Profile Pic</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><input type="submit" class="btn btn-info" name="Submit"></td>
			</tr>
		</table>
	</form>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</html>