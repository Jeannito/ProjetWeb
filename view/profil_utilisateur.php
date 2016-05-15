<!DOCTYPE html>
<html lang="en">
<head>
<title>Modification Profil</title>
<?php include 'includes/entete.php' ?>
</head>

 <body>
    <div class="container">
        <?php include 'includes/menu.php' ?>
    </div>

        <?php require_once '../model/model_utilisateur.php'; 

        $profil = ModelUtilisateur::GetInformation($_COOKIE['pseudo']);

        $nom = $profil['name_user'];
        $prenom = $profil['firstname_user'];
        $mail = $profil['mail_user'];

        ?>
        <div class="box">
        <form action="../controller/controller_modification_profil_utilisateur.php"  name="login1" role="form" class="form-horizontal para" method="post" accept-charset="utf-8">
                <div class="form-group">
                <h3> Renseignez ici toutes vos nouvelles informations :</h3>
                <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="login" placeholder="<?php echo $_COOKIE['pseudo'];?>" class="form-control" type="text" id="Userlogin" required /></div>
                </div> 
                
                <div class="form-group">
                <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="mdp" placeholder="Mot de passe" class="form-control" type="password" id="UserPassword" required /></div>
                </div> 
    
                <div class="form-group">
                    <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="nom" placeholder="<?php echo $nom;?>" class="form-control" type="text" id="Username" required /></div>
                </div> 
    
                <div class="form-group">
                    <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="prenom" placeholder="<?php echo $prenom;?>" class="form-control" type="text" id="Userprenom" required /></div>
                </div> 
    
                <div class="form-group">
                    <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="mail" placeholder="<?php echo $mail;?>" class="form-control" type="email" id="Usermail" required /></div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-8"><input   class="btn btn-primary btn btn-primary" type="submit" value="Modification" required /></div>
                </div>
                </form>
                </div>


<?php include 'includes/footer.php' ?>
</body>
</html>
</html>