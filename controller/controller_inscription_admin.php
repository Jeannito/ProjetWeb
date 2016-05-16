<?php

//Meme fonctionnement que l'inscription utilisateur mais pour la table des administrateur

require_once '../model/model_admin.php';


		if (ModelAdmin::Verifpseudo($_POST['login'])) {

			$login= $_POST['login'];
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$mail= $_POST['mail'];
			$mdp = sha1($_POST['mdp']);
			$length = 15;
			$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

			$tab=array(

		            'login' => htmlspecialchars($login),

		            'mdp' => htmlspecialchars($mdp),

		            'nom' => htmlspecialchars($nom),

		            'prenom' => htmlspecialchars($prenom),

		            'mail' => htmlspecialchars($mail),

		            'ch_rdm' => $randomString);

			ModelAdmin::InscrireAdmin($tab);
			header("Location: ../controller/controller_acceuil.php");
			

			}

			else {

				echo "Ce pseudo est deja utilisé";
				header("Location: ../view/inscription.php");

			}