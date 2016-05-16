<?php

//controller faisant appel a la validation d'un vin pour changer son état dans la base de donnée

require_once '../model/model_vin.php';

ModelVin::ValiderVin($_POST['id_vin']);

header("Location: ../controller/controller_gestion_vin.php");

?>