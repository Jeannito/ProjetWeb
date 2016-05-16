<?php

//ajout du type et de l'aoc par un administrateur en fonction des infos envoyé par le formulaire

require_once '../model/model_vin.php';

if(($_POST['des_aoc']==''))
{
	ModelVin::AddCat($_POST['des_cat']);
	header("Location: ../controller/controller_acceuil.php");
}
else if(($_POST['des_cat']=='')){

	ModelVin::AddAoc($_POST['des_aoc']);
	header("Location: ../controller/controller_acceuil.php");
}
else
{
	ModelVin::AddAoc($_POST['des_aoc']);
	ModelVin::AddCat($_POST['des_cat']);
	header("Location: ../controller/controller_acceuil.php");
}


?>