<?php


require_once '../model/model_utilisateur.php';


/*if (($_POST['login'] == '') OR ($_POST['mdp'] == '') OR ($_POST['nom'] == '') OR ($_POST['prenom'] == '') OR ($_POST['mail'] == ''))

	{
		echo "<p class='para'> Veuillez remplir tout les champs !!!</p>";
		//echo "<script type='text/javascript'>document.location.replace('../view/inscription.php');</script>";
	}

else
	{*/


		if (ModelUtilisateur::Verifpseudo($_POST['login'])) {

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

			ModelUtilisateur::InscrireUtilisateur($tab);
			header("Location: ../controller/controller_acceuil.php");
			


			}

			else {

				echo "Ce pseudo est deja utilisé";
				header("Location: ../view/inscription.php");

			}

			
		//}

/*if (isset($_POST['login']) AND isset($_POST['mdp']) AND isset($_POST['nom']) AND isset($_POST['prenom'])AND isset($_POST['mail']) )
{
	$login= $_POST['login'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mail= $_POST['mail'];
	$mdp = $_POST['mdp'];

	$tab=array(

            'login' => $login,

            'mdp' => $mdp,

            'nom' => $nom,

            'prenom' => $prenom,

            'mail' => $mail);

	ModelInscription::InscrireUtilisateur($tab);
	header('Location: http://localhost/webApp/view/acceuil.php');
	exit();
}

else
{
	echo "Vous avez mal rempli le formulaire";
	header('Location : http://localhost/webApp/view/inscription.php');
	exit();
}*/

//require_once '../view/acceuil.php';

 ?>