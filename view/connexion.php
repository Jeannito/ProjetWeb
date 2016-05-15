<!DOCTYPE html>
<html lang="en">
<head>
<title>Connexion Utilisateur</title>
  <?php include 'includes/entete.php' ?>
</head>
 <body>
 <div>
    <?php include 'includes/menu.php' ?>
</div>
      <div class="box">
        <form action="../controller/controller_connexion.php"  name="connexion" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
                <div class="col-md-8 col-lg-8 col-lg-offset-2"><h3 class="form-signin-heading">Veuillez entrer vos informations</h3></div>
                <div class="form-group">
                <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="login" placeholder="Idenfiant" class="form-control" type="text" id="Userlogin" required /></div>
                </div> 

                <div class="form-group">
                    <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="mdp" placeholder="mot de passe" class="form-control" type="password" id="Userpassword"  required /></div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-8"><input   class="btn btn-primary btn btn-primary" type="submit" value="Connexion"/></div>
           </div>
</form>
</div>

    <footer>
      <?php include 'includes/footer.php' ?>
    </footer>
  </body>
</html>