<?php


require_once '../model/model_utilisateur.php';

		if (ModelUtilisateur::Verifpseudo($_POST['login'])) {

			$login= $_POST['login'];
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$mail= $_POST['mail'];
			$mdp = $_POST['mdp'];

			$tab=array(

		            'login' => htmlspecialchars($login),

		            'mdp' => htmlspecialchars($mdp),

		            'nom' => htmlspecialchars($nom),

		            'prenom' => htmlspecialchars($prenom),

		            'mail' => htmlspecialchars($mail));

			ModelUtilisateur::ModifierUtilisateur($tab);

			setcookie('pseudo', $tab['pseudo'], time()+3600, null, null, false, true);

			header("Location: ../controller/controller_profil_utilisateur.php");


			}

			else {

				echo "Ce pseudo est deja utilisé";

			}

 ?>