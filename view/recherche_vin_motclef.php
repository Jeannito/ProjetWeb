<!DOCTYPE html>
<html lang="en">
<head>
<title>Catalogue Vin</title>
<?php include 'includes/entete.php' ?>
</head>

 <body>
    <div class="container">
        <?php include 'includes/menu.php' ?>
    </div>


    <div>
      <form action="../controller/controller_recherche_vin.php" name"recherche" class="navbar-form" role="search" method="post" accept-charset="utf-8">
        <div class="form-group">
          <input type="text" name="motclef" id="Userlogin" class="form-control" placeholder="Tapez le mot clé">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Recherche</button>
        </form>
    </div>


      <div class="box">
      <div class='container'>           
            <table class='table table-striped'>
              <thead>
              <tr>
                <th></th>
                <th>Nom</th>
                <th>Type</th>
                <th>AOC</th>
                <th>Descriptif</th>
                <th>Profil du Vin</th>
              </tr>
              </thead>
              <tbody>
    <?php

    require_once '../model/model_vin.php';
    
    $id_aoc_search = ModelVin::GetIdCat($_POST['motclef']);
    $id_cat_search = ModelVin::GetIdAoc($_POST['motclef']);

    echo $id_cat_search;
    echo $id_cat_search;

    $vin = ModelVin::GetAllWineSearch($_POST['motclef'], $id_aoc_search, $id_cat_search);
    foreach ($vin as $wine) {
      $name_vin = $wine -> name_wine;
      $id_cat = $wine -> id_cat;
      $id_aoc = $wine -> id_aoc;
      $desc = $wine -> text_wine;
      $id_vin = $wine -> id_wine;

      $cat = ModelVin::GetCat($id_cat);
      $aoc = ModelVin::GetAoc($id_aoc);
    ?>
          <tr>
           <td><img src='../assets/vinpres.jpg' alt='vin' title='vin'/></td>
           <td><?php echo $name_vin;?></td>
           <td><?php echo $cat;?></td>
           <td><?php echo $aoc;?></td>
           <td><?php echo $desc;?></td>
           <td>
            <form action="../controller/controller_profil_vin.php"  name="profil" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
            <input type="hidden" name="id_vin" value="<?php echo $id_vin;?>">
            <input   class="btn btn-primary btn btn-primary" type="submit" value="Profil"/>
            </form>
           </td>
          </tr>
      <?php }?>
      </tbody>
      </table>
      </div>



<nav>
  <ul class="pager">
    <li><a href="#">Previous</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</nav>
</div>


<div>
    <?php include 'includes/footer.php' ?> 
</div>
 
</body>
</html>