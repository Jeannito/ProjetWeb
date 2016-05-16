<?php 
require_once '../model/model_admin.php';
if (empty($_COOKIE['ch_rdm'])){
  echo "Vous n'etes pas autorisé à accéder à cette page";
}
else if (ModelAdmin::IsAdmin($_COOKIE['ch_rdm'])){
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Gestion des utilisateur</title>
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
                <th>Pseudo</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
    <?php

    require_once '../model/model_utilisateur.php';
    $utilisateur = ModelUtilisateur::GetAllUsers();
    foreach ($utilisateur as $user) {
      $pseudo = $user -> pseudo_user;
      $nom = $user-> name_user;
      $prenom = $user -> firstname_user;
      $mail = $user -> mail_user;
      $id_user = $user -> id_user;

    ?>
          <tr>
           <td><img src='../assets/utilisateur.png' alt='utilisateur' title='utilisateur'/></td>
           <td><?php echo $pseudo;?></td>
           <td><?php echo $nom;?></td>
           <td><?php echo $prenom;?></td>
           <td><?php echo $mail;?></td>
           <td>
            <form action="../controller/controller_supprimer_utilisateur.php"  name="supprimer" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
            <input   class="btn btn-primary btn btn-primary" type="submit" value="Supprimer"/>
            <input type="hidden" name="id_user" value="<?php echo $id_user;?>">
            </form>
          </td>
          </tr>
      <?php }?>
      </tbody>
      </table>
      </div>
</div>
</body>


<div>
	<?php include 'includes/footer.php' ?>
</div>

</body>
</html>

<?php
}
?>