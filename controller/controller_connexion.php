<?php

//controller permettant de verifier si la personne se connectant est bien un utilisateur et création des cookies

require_once '../model/model_utilisateur.php';


	if (ModelUtilisateur::ConnexionUtilisateur($_POST['login'], sha1($_POST['mdp'])))
	{
        $profil = ModelUtilisateur::GetInformation($_POST['login']);

        $ch_rdm = $profil['ch_rdm'];

		setcookie('pseudo', $_POST['login'], time()+3600, null, null, false, true);

		setcookie('ch_rdm', $ch_rdm, time()+3600, null, null, false, true);

		header("Location: ../controller/controller_acceuil.php");
	}
	else
	{
		echo 'Id ou mdp incorrect';
	}





?>