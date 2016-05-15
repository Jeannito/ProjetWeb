<!DOCTYPE html>
<html lang="en">
<head>
<title>Proposer vin</title>
<?php include 'includes/entete.php' ?>
</head>

 <body>
    <div >
        <?php include 'includes/menu.php'; ?>
    </div>

        <?php require_once'../model/model_vin.php'; ?>

    <div class="box">
       <form action="../controller/controller_ajout_vin.php"  name="Vin" role="form" class="form-horizontal para" method="post" accept-charset="utf-8">
        <div class="col-md-8 col-lg-8 col-lg-offset-2"><h3 class="form-signin-heading">Entrez les informations du vin que vous souhaitez proposer :</h3></div>
                <div class="form-group">
                <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="nom" placeholder="Nom du vin" class="form-control" type="text" id="WineName" required /></div>
                </div> 
                
                <div class="form-group">
                <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="description" placeholder="Description du vin" class="form-control" type="text" id="WineText" required /></div>
                </div> 
    
                <div class="form-group">
                <div class="col-md-4 col-lg-2 col-lg-offset-2"><input name="prix" placeholder="Prix du vin en €" class="form-control" type="number" id="WinePrice" required max="20" min="0" /></div>
                </div>

                <!--<div class="form-group">
                <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="aoc" placeholder="AOC du vin" class="form-control" type="text" id="WineAOC" required /></div>
                </div>-->

                <h6>Selectionnez la catégorie :</h6>
                <select class="col-md-8 col-lg-8 col-lg-offset-2 " name="id_cat">
                <?php
                require_once '../model/model_vin.php';
                $categorie = ModelVin::GetAllCat();
                foreach ($categorie as $cat) {
                  $des_cat = $cat -> des_cat;
                  $id_cat = $cat -> id_cat;
                  ?>
                <option value="<?php echo $id_cat;?>"><?php echo $des_cat;?></option>
                <?php } ?>
                </select><br />

                <h6>Selectionnez l'aoc :</h6>
                <select class="col-md-8 col-lg-8 col-lg-offset-2" name="id_aoc">
                <?php
                $aoc = ModelVin::GetAllAoc();
                foreach ($aoc as $nomaoc) {
                  $des_aoc = $nomaoc -> des_aoc;
                  $id_aoc = $nomaoc -> id_aoc;
                ?>
                <option value="<?php echo $id_aoc;?>"><?php echo $des_aoc;?></option>
                <?php }?>
                </select><br />
                
                <!--<div class="form-group para1">
                    <div class="col-md-8 col-lg-8 col-lg-offset-2"><input name="cat" placeholder="Categorie du vin" class="form-control" type="text" id="Category" required /></div>
                </div>-->

                <div class="form-group boutton para1">
                    <div class="col-md-offset-2 col-md-8"><input   class="btn btn-primary btn btn-primary" type="submit" value="Proposition" required /></div>
                </div>
                </form>
            </div>


<div>
	<?php include 'includes/footer.php' ?>
</div>

</body>
</html>