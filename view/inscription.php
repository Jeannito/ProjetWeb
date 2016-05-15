<!DOCTYPE html>
<html lang="en">
<head>
<title>Inscritption</title>
<?php include 'includes/entete.php' ?>
</head>

 <body>
    <div class="container">
        <?php include 'includes/menu.php' ?>
    </div>
        
        <div class="box">
        <form action="../controller/controller_inscription.php"  name="inscription" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
                <h3>Veuillez remplir ces champs si vous desirez vous inscrire:<br /></h3>
                <div class="form-group">
                <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="login" placeholder="Idenfiant" class="form-control" type="text" id="Userlogin" required /></div>
                </div> 
                
                <div class="form-group">
                <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="mdp" placeholder="Mot de passe" class="form-control" type="password" id="UserPassword" required /></div>
                </div> 
    
                <div class="form-group">
                    <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="nom" placeholder="nom" class="form-control" type="text" id="Username" required /></div>
                </div> 
    
                <div class="form-group">
                    <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="prenom" placeholder="prénom" class="form-control" type="text" id="Userprenom" required /></div>
                </div> 
    
                <div class="form-group">
                    <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="mail" placeholder="email" class="form-control" type="email" id="Usermail" required /></div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-8"><input   class="btn btn-primary btn btn-primary" type="submit" value="Inscription" required /></div>
                </div>
                </form>
                </div>


<?php include 'includes/footer.php' ?>
</body>
</html>