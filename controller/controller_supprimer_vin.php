<?php

//Controller faisant appel a la fonction permettant de supprimer un vin de la base de donnée

require_once '../model/model_vin.php';

ModelVin::SupprimerVin($_POST['id_vin']);

header("Location: ../controller/controller_affichage_vin.php");

?>