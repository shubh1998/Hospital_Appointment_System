<?php
	    include 'connection.php';

        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $sql = "DELETE FROM master_service WHERE id = '$id';";

            if(mysqli_query($con , $sql)){
                echo '<script type="text/javascript"> alert("Deleted");</script>';
                echo '<script>window.location.href="service-master-view.php"</script>';
            }
            else{
                echo '<script type="text/javascript"> alert("Cant Delete");</script>';
                echo '<script>window.location.href="service-master-view.php"</script>';
            }
        }
        
    ?>

</body>
</html>