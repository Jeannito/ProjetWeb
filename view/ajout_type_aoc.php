<!DOCTYPE html>
<html lang="en">
<head>
<title>Valider Vin</title>
<?php include 'includes/entete.php' ?>
</head>

 <body>
<div class="container">
    <?php include 'includes/menu.php' ?>
</div>

      <div class="box">
        <form action="../controller/controller_ajout_type_aoc.php"  name="ajout type aoc" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
                <div class="col-md-8 col-lg-8 col-lg-offset-2"><h3 class="form-signin-heading">Veuillez entrer le nouveau AOC :</h3></div>
                <div class="form-group">
                <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="des_aoc" placeholder="Nom de l'AOC" class="form-control" type="text"/></div>
                </div> 

                <div class="col-md-8 col-lg-8 col-lg-offset-2"><h3 class="form-signin-heading">Veuillez entrer la nouvelle categorie :</h3></div>
                <div class="form-group">
                    <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="des_cat" placeholder="Nom de la categorie" class="form-control" type="text"/></div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-8"><input   class="btn btn-primary btn btn-primary" type="submit" value="Ajouter"/></div>
           </div>
</form>
</div>



<div>
	<?php include 'includes/footer.php' ?>
</div>

</body>
</html>