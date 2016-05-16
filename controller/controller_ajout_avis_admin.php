<?php

//insertion d'un avis dans la table des avis en recuperant les données necessaires

require_once '../model/model_avis.php';
require_once '../model/model_admin.php';

$id_vin = $_POST['id_vin'];
$reqId = ModelUtilisateur::GetIdUser($_COOKIE['pseudo']);

$id_user = $reqId['id_user'];
$text = $_POST['text_avis'];

$tab=array(
        'texte_notice' => $text,
        'id_user' => $id_user,
        'id_vin' => $id_vin);

ModelAvis::AjouterAvis($tab);

/*
test
echo $id_user;
echo $text;
echo $id_vin;
*/

header("Location: ../controller/controller_recherche_vin.php");

?>			