<?php

require_once '../model/model_utilisateur.php';

ModelUtilisateur::SupprimerUtilisateur($_POST['id_user']);

header("Location: ../controller/controller_gestion_utilisateur.php");

?>