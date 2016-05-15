<!DOCTYPE html>
<html lang="en">
<head>
<title>Supprimer Vin</title>
<?php include 'includes/entete.php' ?>
</head>

 <body>
<div class="container">
    <?php include 'includes/menu.php' ?>
</div>

<div class="box">
      <div class='container-fluid para'>           
            <table class='table table-striped'>
              <thead>
              <tr>
                <th></th>
                <th>Nom</th>
                <th>Type</th>
                <th>AOC</th>
                <th>Descriptif</th>
                <th>Validation</th>
              </tr>
              </thead>
              <tbody>
    <?php

    require_once '../model/model_vin.php';
    $vin = ModelVin::GetAllActiveWine();
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
            <form action="../controller/controller_supprimer_vin.php"  name="supprimer" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
            <input   class="btn btn-primary btn btn-primary" type="submit" value="Supprimer"/>
            <input type="hidden" name="id_vin" value="<?php echo $id_vin;?>">
            </form>
          </td>
          </tr>
      <?php }?>
      </tbody>
      </table>
      </div>
      </div>



<div>
  <?php include 'includes/footer.php' ?>
</div>

</body>
</html>