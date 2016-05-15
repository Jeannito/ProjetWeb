<!DOCTYPE html>
<html lang="en">
<head>
<title>Acceuil</title>
  <?php include 'includes/entete.php' ?>
</head>
<body>

<?php include 'includes/menu.php' ?>

<div class="box">
<div class="para box"><h4> Vous etes bien connecté</h4></div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../assets/Vin1.jpg" alt="Vin">
    </div>

    <div class="item">
      <img src="../assets/Vin2.jpg" alt="Vin">
    </div>

    <div class="item">
      <img src="../assets/Vin4.png" alt="Vin">
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
</body>

<?php include 'includes/footer.php' ?>
</html>