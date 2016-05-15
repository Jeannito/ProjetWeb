<?php

require_once '../model/model_vin.php';

ModelVin::ValiderVin($_POST['id_vin']);

header("Location: ../controller/controller_gestion_vin.php");

?>