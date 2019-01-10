<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Record</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	img{
    		width: 125px;
    		height: 125px;
    	}
    </style>
</head>
<body>
	<div class="container">
		<table class="table table-hover" border="1">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Photo</th>
				<th>Password</th>
			</thead>
			<?php
			$SQL = "SELECT * FROM admin_record;";
			$result = mysqli_query($con, $SQL);

			while($row = mysqli_fetch_array($result)){
				echo '<tbody>';
				echo '<td>'.$row["id"].'</td>';
				echo '<td>'.$row["name"].'</td>';
				echo '<td>'.$row["username"].'</td>';
				echo '<td>'.$row["email"].'</td>';
				$url = 'upload/'.$row["picture"];
				echo '<td><img class="img-responsive img-thumbnail	" src="'.$url.'"</td>';
				echo '<td>'.$row["password"].'</td>';
				echo '</tbody>';
			}
			?>
		</table>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</html>