<?php


require_once '../model/model_vin.php';


$nom= $_POST['nom'];
$prix = $_POST['prix'];
$desc = $_POST['description'];
$id_aoc = $_POST['id_aoc'];
$id_cat = $_POST['id_cat'];

$tab=array(
    'nom' => $nom,
    'prix' => $prix,
    'description' => $desc,
    'id_aoc' => $id_aoc,
    'id_cat' => $id_cat);

ModelVin::AjoutVin($tab);
header("Location: ../controller/controller_acceuil.php");

?>