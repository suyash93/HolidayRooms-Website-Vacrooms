<?php 
if(isset($_COOKIE["latestfive"])){}
  else{setcookie("latestfive[1st]", "product6", time()+60*60*24*7);}
  if(isset($_COOKIE["latestfive"])&&$_COOKIE["latestfive"]["1st"]!="product6"){
    switch (count($_COOKIE["latestfive"])) {
      case 1:
        setcookie("latestfive[1st]", "product6", time()+60*60*24*7);
        setcookie("latestfive[2nd]", $_COOKIE['latestfive']['1st'], time()+60*60*24*7);
        break;
      case 2:
        if($_COOKIE["latestfive"]['2nd']=="product6"){
          setcookie("latestfive[1st]", "product6", time()+60*60*24*7);
          setcookie("latestfive[2nd]", $_COOKIE['latestfive']['1st'], time()+60*60*24*7);
        }else{
          setcookie("latestfive[1st]", "product6", time()+60*60*24*7);
          setcookie("latestfive[2nd]", $_COOKIE['latestfive']['1st'], time()+60*60*24*7);
          setcookie("latestfive[3rd]", $_COOKIE['latestfive']['2nd'], time()+60*60*24*7);
        }
        break;
      case 3:
        if($_COOKIE["latestfive"]['2nd']=="product6"){
          setcookie("latestfive[1st]", "product6", time()+60*60*24*7);
          setcookie("latestfive[2nd]", $_COOKIE['latestfive']['1st'], time()+60*60*24*7);
        }else if($_COOKIE["latestfive"]['3rd']=="product6"){
          setcookie("latestfive[1st]", "product6", time()+60*60*24*7);
          setcookie("latestfive[2nd]", $_COOKIE['latestfive']['1st'], time()+60*60*24*7);
          setcookie("latestfive[3rd]", $_COOKIE['latestfive']['2nd'], time()+60*60*24*7);
        }else{
          setcookie("latestfive[1st]", "product6", time()+60*60*24*7);
          setcookie("latestfive[2nd]", $_COOKIE['latestfive']['1st'], time()+60*60*24*7);
          setcookie("latestfive[3rd]", $_COOKIE['latestfive']['2nd'], time()+60*60*24*7);
          setcookie("latestfive[4th]", $_COOKIE['latestfive']['3rd'], time()+60*60*24*7);
        }
        break;
      case 4:
        if($_COOKIE["latestfive"]['2nd']=="product6"){
          setcookie("latestfive[1st]", "product6", time()+60*60*24*7);
          setcookie("latestfive[2nd]", $_COOKIE['latestfive']['1st'], time()+60*60*24*7);
        }else if($_COOKIE["latestfive"]['3rd']=="product6"){
          setcookie("latestfive[1st]", "product6", time()+60*60*24*7);
          setcookie("latestfive[2nd]", $_COOKIE['latestfive']['1st'], time()+60*60*24*7);
          setcookie("latestfive[3rd]", $_COOKIE['latestfive']['2nd'], time()+60*60*24*7);
        }else if($_COOKIE["latestfive"]['4th']=="product6"){
          setcookie("latestfive[1st]", "product6", time()+60*60*24*7);
          setcookie("latestfive[2nd]", $_COOKIE['latestfive']['1st'], time()+60*60*24*7);
          setcookie("latestfive[3rd]", $_COOKIE['latestfive']['2nd'], time()+60*60*24*7);
          setcookie("latestfive[4th]", $_COOKIE['latestfive']['3rd'], time()+60*60*24*7);
        }else{
          setcookie("latestfive[1st]", "product6", time()+60*60*24*7);
          setcookie("latestfive[2nd]", $_COOKIE['latestfive']['1st'], time()+60*60*24*7);
          setcookie("latestfive[3rd]", $_COOKIE['latestfive']['2nd'], time()+60*60*24*7);
          setcookie("latestfive[4th]", $_COOKIE['latestfive']['3rd'], time()+60*60*24*7);
          setcookie("latestfive[5th]", $_COOKIE['latestfive']['4th'], time()+60*60*24*7);
        }
        break;
      case 5:
        if($_COOKIE["latestfive"]['2nd']=="product6"){
          setcookie("latestfive[1st]", "product6", time()+60*60*24*7);
          setcookie("latestfive[2nd]", $_COOKIE['latestfive']['1st'], time()+60*60*24*7);
        }else if($_COOKIE["latestfive"]['3rd']=="product6"){
          setcookie("latestfive[1st]", "product6", time()+60*60*24*7);
          setcookie("latestfive[2nd]", $_COOKIE['latestfive']['1st'], time()+60*60*24*7);
          setcookie("latestfive[3rd]", $_COOKIE['latestfive']['2nd'], time()+60*60*24*7);
        }else if($_COOKIE["latestfive"]["4th"]=="product6"){
          setcookie("latestfive[1st]", "product6", time()+60*60*24*7);
          setcookie("latestfive[2nd]", $_COOKIE['latestfive']['1st'], time()+60*60*24*7);
          setcookie("latestfive[3rd]", $_COOKIE['latestfive']['2nd'], time()+60*60*24*7);
          setcookie("latestfive[4th]", $_COOKIE['latestfive']['3rd'], time()+60*60*24*7);
        }else{
          setcookie("latestfive[1st]", "product6", time()+60*60*24*7);
          setcookie("latestfive[2nd]", $_COOKIE['latestfive']['1st'], time()+60*60*24*7);
          setcookie("latestfive[3rd]", $_COOKIE['latestfive']['2nd'], time()+60*60*24*7);
          setcookie("latestfive[4th]", $_COOKIE['latestfive']['3rd'], time()+60*60*24*7);
          setcookie("latestfive[5th]", $_COOKIE['latestfive']['4th'], time()+60*60*24*7);
        }
        break;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Product6|Vacrooms</title>

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
        <li class="active"><a href="new.html">Home</a></li>
        <li><a href="About.html">About</a> </li>
        <li><a href="product.html">Find a Vacroom</a> </li>
                <li><a href="secure.html">Secure</a> </li>

        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="users.php">USERS</a></li>
        <li><a href="contacts.php">Contacts</a></li>
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
        <h1 class="text-center">ZOSTELS</h1>
<img src="/zostel.jpg" alt="" class="img-responsive"> </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row"> </div>
</div>
<hr>
<hr>
<div class="container">
  <div class="row">
<div class="col-sm-12 col-lg-12">
<p>Want to live your childhood once again, then go for the ZOSTEL Vacroom!!!!</p>
<p>Vacroom gives an opportunity to relive the school and college days with hostel kind of apartments.</p>
<p>A 2 BHK apartment with a hostel kind of interior if a best pick for people looking for reunion trips and meeting.  </p>

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
