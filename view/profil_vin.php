<!DOCTYPE html>
<html lang="en">
<head>
<title>Profil Vin</title>
<?php include 'includes/entete.php' ?>
</head>

<body>
<div class="container">
    <?php include 'includes/menu.php' ?>
</div>
        <div class="box">
        <div class="row">
        <?php
        require_once '../model/model_vin.php';
        $vin = ModelVin::GetInformation($_POST['id_vin']);

        $nom = $vin['name_wine'];
        $prix = $vin['price'];
        $type = ModelVin::GetCat($vin['id_wine']);
        $aoc = ModelVin::GetAoc($vin['id_wine']);
        $texte = $vin['text_wine'];
        $id_vin = $vin['id_wine'];

        ?>


            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Informations Vin :</h2>
                    <hr class="visible-xs">
                    <p class='p1'>Nom : <?php echo $nom;?></p>
                    <p class='p1'>Prix : <?php echo $prix;?> € </p>
                    <p class='p1'>Type : <?php echo $type;?></p>
                    <p class='p1'>AOC : <?php echo $aoc;?></p>
                    <p class='p1'>Description : <?php echo $texte;?></p>
                </div>
            </div>
        </div>

        <?php  if (ModelUtilisateur::IsUser($_COOKIE['ch_rdm'])){?>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"> Postez un avis :</h2>
                    <h6 class="p1">*Vous ne pouvez poster qu'un seul avis par vin</h6>
                    <hr class="visible-xs">

                    <form method="post" action="../controller/controller_ajout_avis.php">
                    <div class="form-group textarea">
                    <label for="comment">Avis:</label>
                    <textarea class="form-control" rows="5" id="comment" name="text_avis"></textarea>
                    <input type="hidden" name="id_vin" value="<?php echo $id_vin;?>">
                    </div>
                    <div class="form-group">
                    <div class="col-md-offset-2 col-md-8"><input   class="btn btn-primary btn btn-primary" type="submit" value="Poster" required /></div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php  }?>

      <div class='container'>           
            <table class='table table-striped'>
              <thead>
              <tr>
                <th></th>
                <th>Utilisateur</th>
                <th>Avis</th>
              </tr>
              </thead>
              <tbody>


    <?php
    require_once '../model/model_avis.php';
    require_once '../model/model_utilisateur.php';

    $avis = ModelAvis::GetAllNotice($vin['id_wine']);

    foreach ($avis as $notice) {
      $id_avis = $notice -> id_notice;
      $text_avis = $notice -> text_notice;
      $id_utilisateur = $notice -> id_user;

      $nom_utilisateur = ModelUtilisateur::GetNameUser($id_utilisateur);
    ?>
          <tr>
           <td><img src='../assets/avis.jpg' alt='avis' title='avs'/></td>
           <td><?php echo $nom_utilisateur;?></td>
           <td><?php echo $text_avis;?></td>
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