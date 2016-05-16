<?php

//Controller faisant appel a la fonction permettant de supprimer un utilisateur de la base de donnée

require_once '../model/model_utilisateur.php';

ModelUtilisateur::SupprimerUtilisateur($_POST['id_user']);

header("Location: ../controller/controller_gestion_utilisateur.php");

?>