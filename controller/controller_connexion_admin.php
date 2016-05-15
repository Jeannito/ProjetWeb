<?php

require_once '../model/model_admin.php';

if (ModelAdmin::ConnexionAdmin($_POST['login'], sha1($_POST['mdp'])))
{

    $profil = ModelAdmin::GetInformation($_POST['login']);

    $ch_rdm = $profil['ch_rdm_admin'];

	setcookie('ch_rdm', $ch_rdm, time()+3600, null, null, false, true);

	setcookie('pseudo', $_POST['login'], time()+3600, null, null, false, true);

	header("Location: ../controller/controller_acceuil.php");
}
else
{
	echo 'Id ou mdp admin incorrect';
}

?>