<?php 
	//require_once '/view/acceuil.php';
	//header("Location: controller/controller_acceuil.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Acceuil</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Jean Bruté de Rémur">
<link rel="icon" href="favicon.ico">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet">
<script src="assets/js/ie-emulation-modes-warning.js"></script>
<link rel="icon" type="image/png" href="assets/favicon.ico" />
<SCRIPT language="Javascript">
function cookie() { 
alert ('Ce site utilise des cookies, lors de votre naviguation il est possible que le navigateur enregistre des cookie sur votre ordinateur.');
}
</SCRIPT>
</head>
<body onload="cookie()">
<div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="controller/controller_acceuil.php">Amateur de vin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="controller/controller_acceuil.php">Home</a></li>
            <li><a href="controller/controller_contact.php">Contact</a></li>

              <li><a href="controller/controller_recherche_vin.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Catalogue Vin</a></li>
              <li class="compte">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Compte <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="controller/controller_communaute.php">Communauté</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Compte</li>
                <li><a href="view/inscription.php"><i class="glyphicon glyphicon-user"></i> S'incrire</a></li>
                <li><a href="controller/controller_view_connexion.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Se connecter</a></li>
                <li><a href="controller/controller_view_connexion_admin.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Connexion Admin</a></li>
              </ul>
        </div>
      </div>
    </nav>
</div>

<div class="box">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="assets/Vin1.jpg" alt="Vin">
    </div>

    <div class="item">
      <img src="assets/Vin2.jpg" alt="Vin">
    </div>

    <div class="item">
      <img src="assets/Vin4.png" alt="Vin">
    </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <footer>
        <div class="container paracontact">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; amateurdevin.fr 2016</p>
                </div>
            </div>
        </div>
    </footer>
</html>