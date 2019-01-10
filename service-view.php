<?php
	
	include 'connection.php';

	session_start();

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
 	<?php include 'admin-header.php'; ?>
 	<div class="container-fluid">
 	<div class="alert alert-info">
        <strong>Services View</strong>
    </div>
	 	<table border="1" class="table table-hover table-condensed">
	 	<thead>
			<tr>
				<th>ID</th>
				<th>Service Name</th>
				<th>Status</th>
				<th>Image</th>
			</tr>
		</thead>
			<tbody>
			<?php
				$sql = "SELECT * FROM master_service";
				$result = mysqli_query($con ,$sql);
				while ($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['ser_name']."</td>";
					echo "<td>".$row['status']."</td>";
					echo "<td><img src='upload/". $row['img_location']."' class='img-responsive img-thumbnail' style='width:150px;height:150px'></td>";
					echo "</tr>";
				}
				
			?>
			</tbody>
		</table>
	</div>
</body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</html>