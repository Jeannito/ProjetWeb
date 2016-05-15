<?php

if (empty($_POST['motclef'])) {
	require_once '../view/recherche_vin.php';
}
else{

	require_once '../model/model_vin.php';

	require_once '../view/recherche_vin_motclef.php';
}



?>