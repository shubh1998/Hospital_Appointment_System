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
  

      <?php 
        include 'header.php' 
      ?>
      <!-- Web content block start -->

      
      <div class="row">
        <div class="col-lg-6 contact">
          <h1>Get in touch</h1><br>
            <h4>Patient support</h4>
            <a href="#">help@BookMyDocter.com.au</a><br/><br/>

            <h4>Practice Support</h4>
            <a href="#">support@BookMyDocter.com.au</a><br/><br/>

            <h4>Tel: 1300 479 562</h4><br/><br/>

            <h4>Fax: 08 9873 6489</h4><br/><br/>

        </div>
        <div class="col-lg-6">
          <div class="formip">
            <h1>Mail Us</h1>
            <form>
              <input type="text" name="" placeholder="Enter your name">
              <input type="email" name="" placeholder="Enter your email">
              <input type="tel" name="" placeholder="Enter contact no">
              <textarea placeholder="Enter message"></textarea>
              <input type="submit" name="" value="Submit">
            </form> 
          </div>  
        </div>
       
      </div><br><br>
      <div class="row">
         <div class="col-lg-12 col-sm-12 col-xs-12 top-web-content">
            <h2>Address</h2>
            <p align="justify">
              
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.9218203765663!2d75.86433841453884!3d22.693954085120442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fce495ee903f%3A0xf0b46034bc2ce47c!2sApple+Hospital!5e0!3m2!1sen!2sin!4v1528869012733" height="400px;" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div>
      <?php 
        include 'footer.php' 
      ?>
    </div>

    <!-- Main Container End-->
  </body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</html>