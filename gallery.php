<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BookMyDocter.com</title>
    <!-- Bootstrap -->
    <link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
    <link href='css/demo.css' rel='stylesheet' type='text/css'>
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
        <?php include 'header.php'?>
        <div class="row">
            <div class="col-lg-12 head">
                <font size="7px"> Gallery </font>
            </div>
        </div>
        <div class="gallery">
            <a href="images/image1.jpg" class="big"><img src="images/thumbs/thumb1.jpg" alt="" title="Beautiful Image" /></a>
            <a href="images/image2.jpg"><img src="images/thumbs/thumb2.jpg" alt="" title=""/></a>
            <a href="images/image3.jpg"><img src="images/thumbs/thumb3.jpg" alt="" title="Beautiful Image"/></a>
            <a href="images/image4.jpg"><img src="images/thumbs/thumb4.jpg" alt="" title=""/></a>
            <div class="clear"></div>
            <a href="images/image5.jpg"><img src="images/thumbs/thumb5.jpg" alt="" title=""/></a>
            <a href="images/image6.jpg"><img src="images/thumbs/thumb6.jpg" alt="" title=""/></a>
            <a href="images/image7.jpg" class="big"><img src="images/thumbs/thumb7.jpg" alt="" title=""/></a>
            <a href="images/image8.jpg"><img src="images/thumbs/thumb8.jpg" alt="" title=""/></a>
            <div class="clear"></div>
            <a href="images/image9.jpg" class="big"><img src="images/thumbs/thumb9.jpg" alt="" title=""/></a>
            <a href="images/image10.jpg"><img src="images/thumbs/thumb10.jpg" alt="" title=""/></a>
            <a href="images/image11.jpg"><img src="images/thumbs/thumb11.jpg" alt="" title=""/></a>
            <a href="images/image12.jpg"><img src="images/thumbs/thumb12.jpg" alt="" title=""/></a>
            <div class="clear"></div>
        </div>
        <!-- Web Content block end-->
        <?php include 'footer.php'?>
    </div>
    <!-- Main Container End-->
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="js/simple-lightbox.js"></script>
<script>
$(function() {
    var $gallery = $('.gallery a').simpleLightbox();

    $gallery.on('show.simplelightbox', function() {
            console.log('Requested for showing');
        })
        .on('shown.simplelightbox', function() {
            console.log('Shown');
        })
        .on('close.simplelightbox', function() {
            console.log('Requested for closing');
        })
        .on('closed.simplelightbox', function() {
            console.log('Closed');
        })
        .on('change.simplelightbox', function() {
            console.log('Requested for change');
        })
        .on('next.simplelightbox', function() {
            console.log('Requested for next');
        })
        .on('prev.simplelightbox', function() {
            console.log('Requested for prev');
        })
        .on('nextImageLoaded.simplelightbox', function() {
            console.log('Next image loaded');
        })
        .on('prevImageLoaded.simplelightbox', function() {
            console.log('Prev image loaded');
        })
        .on('changed.simplelightbox', function() {
            console.log('Image changed');
        })
        .on('nextDone.simplelightbox', function() {
            console.log('Image changed to next');
        })
        .on('prevDone.simplelightbox', function() {
            console.log('Image changed to prev');
        })
        .on('error.simplelightbox', function(e) {
            console.log('No image found, go to the next/prev');
            console.log(e);
        });
});
</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</html>