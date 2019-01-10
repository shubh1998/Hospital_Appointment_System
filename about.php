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
        <div class="col-lg-4 col-sm-6 col-xs-6">
            <img src="images/side1.jpg" height="265px"/>
        </div>
        <div class="col-lg-8 col-sm-6 col-xs-6 top-web-content">
            <p align="justify">
              <h1>Safety of your data is our</h1>
            </p>
            <ol>
                <li>top priority.</li>
                <li>Multi-level security checks</li>
                <li>Multiple data backups</li>
                <li>Stringent data privacy policies</li>
            </ol>
        </div>
      </div>

      <br/><br/>

      <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
          <p allign="justify">
            BookMyDocter was founded in 2012 by Dr Ben Hurst, who saw the opportunity to streamline how GPs and patients communicate health information. Since that time, HotDoc has become Australia’s leading patient engagement platform, which is trusted by over 8,000 GPs.
            We help practices improve the depth of their relationships with patients and improve practice efficiency. Our core is in helping practices through tools like online appointments and SMART Recalls, but we’re always building new products and services.
            We want to become the technology used by patients and healthcare providers to coordinate care and empower patients to manage their health.
            We’re honoured to be trusted by GPs across Australia, ranging from Australia’s biggest practice groups (like Sonic Healthcare and Healthscope) to single-GP practices.
          </p>
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