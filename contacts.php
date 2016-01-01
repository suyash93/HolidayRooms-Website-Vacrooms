<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contacts|Vacrooms</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <p><a class="navbar-brand" href="#">Vacrooms</a></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a><a href="#"><span class="sr-only">(current)</span></a></li>
        <li><a href="About.html">About</a> </li>
        <li><a href="product.html">Find a Vacroom</a> </li>
        <li><a href="secure.html">Secure</a> </li>
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="presentusers.php">PRESENT USERS</a></li>
       <li><a href="users.php">USERS</a></li>
        <li><a href="contacts.php">Contacts</a> </li>
        <li><a href="news.html">News</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <h1 class="text-center">Contacts</h1>
<img src="img/house2.jpg" alt="" class="img-responsive"> </div>
    </div>
  </div>
</div>
<div class="container">
<div class="container">
  <div class="row"> </div>
</div>
<hr>
<hr>
<div class="container">
  <div class="row">
<div class="col-md-6 col-sm-6 col-lg-12">
      <div class="media">
        <?php
           $myfile = fopen("Contact.txt", "r") or die("Unable to open file!");
        while(!feof($myfile)) {
        echo fgets($myfile). "<br />";
       }
        fclose($myfile);
         ?>
          <h4 class="media-heading">&nbsp;</h4>
          <div class="col-lg-4 col-md-6 col-sm-6">
      <h2>Contact Us</h2>
      <address>
      <strong>Vacrooms</strong><br>
San Jose State University, 4th Street, San Jose-95112<br>
<abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
      <h4>Social</h4>
      <div class="row">
      	<div class="col-xs-2"><img class="img-circle" src="img/facebook.png" alt=""></div>
      	<div class="col-xs-2"><img class="img-circle" src="img/gmail.png" alt=""></div>
      	<div class="col-xs-2"><img class="img-circle" src="img/linkedin.png" alt=""></div>
      	<div class="col-xs-2"><img class="img-circle" src="img/twitter (1).png" alt=""></div>        
      </div>
    </div>
</div>
      </div>
      <div class="media">
        <div class="media-right"> <a href="#"> <img class="media-object" src="img/35X35.gif" alt="..."> </a> </div>
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
           </div>
      </div>
    </div>
</div>
</div>
  <hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © Vacrooms. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>