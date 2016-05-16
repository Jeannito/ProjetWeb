<?php


require_once '../model/model_utilisateur.php';


/*if (($_POST['login'] == '') OR ($_POST['mdp'] == '') OR ($_POST['nom'] == '') OR ($_POST['prenom'] == '') OR ($_POST['mail'] == ''))

	{
		echo "<p class='para'> Veuillez remplir tout les champs !!!</p>";
		//echo "<script type='text/javascript'>document.location.replace('../view/inscription.php');</script>";
	}

else
	{*/


		//verification du pseudo
		if (ModelUtilisateur::Verifpseudo($_POST['login'])) {

			$login= $_POST['login'];
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$mail= $_POST['mail'];
			$mdp = sha1($_POST['mdp']);
			$length = 15;
			//association d'une chaine d'une longueur de  caracteres a chaque nouvel adhérent
			$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

			//création d'un tableau pour inserer les données du formulaire dans la base de donné
			$tab=array(

		            'login' => htmlspecialchars($login),

		            'mdp' => htmlspecialchars($mdp),

		            'nom' => htmlspecialchars($nom),

		            'prenom' => htmlspecialchars($prenom),

		            'mail' => htmlspecialchars($mail),

		            'ch_rdm' => $randomString);

			ModelUtilisateur::InscrireUtilisateur($tab);
			header("Location: ../controller/controller_acceuil.php");
			


			}

			else {

				echo "Ce pseudo est deja utilisé";

				//redirection car mauvais pseudo
				header("Location: ../view/inscription.php");

			}

 ?>