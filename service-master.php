<?php
        include 'connection.php';
        $id = '';
        $service = '';
        $max = '';

        $sql = "select max(id) from master_service";
        $result = mysqli_query($con , $sql);
        if($row = mysqli_fetch_array($result))
        {
            $max = $row['max(id)'] + 1;
        }
        else
        {
            $max =1;
        }

    
        if(isset($_POST['submit'])){
            move_uploaded_file($_FILES['image']['tmp_name'], "upload/".$_FILES['image']['name']);
            $img_location = $_FILES['image']['name'];
            $service = $_POST['service'];
            $sql = "insert into master_service values('$max','$service','Active','$img_location')";

            if(mysqli_query($con , $sql)){
                echo '<script type="text/javascript"> alert("Service Added");</script>';
                echo '<script>window.location.href="service-master-view.php"</script>';

            }
            else{
                echo '<script type="text/javascript"> alert("Sorry ! Error Occured");</script>';
            }

        }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Dashboard</title>
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
    <!-- Navbar Start -->
        <?php include 'admin-header.php'; ?>
    <!-- Navbar End -->
        <div class="alert alert-info">
            <strong>Add Services</strong>
        </div>
        <br>
        <br>
        <div class="row">
            <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="id">ID:</label>
                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control" id="id" placeholder="ID" name="id" value="<?php echo $max ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Service Name:</label>
                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control" id="name" placeholder="Name" name="service">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="img">Service Image:</label>
                    <div class="col-sm-10 col-lg-6">
                        <input type="file" class="form-control" id="img" name="image">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10 col-lg-6">
                        <button type="submit" class="btn btn-info btn-block" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</html>