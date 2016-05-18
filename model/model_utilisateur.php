<?php

class ModelUtilisateur {


    public static function InscrireUtilisateur($tab){

    $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

    $req = $bdd->prepare('INSERT INTO user(name_user,firstname_user,pseudo_user,psswd_user,mail_user, ch_rdm) VALUES( :nom, :prenom, :login, :mdp, :mail, :ch_rdm)');

    $req->execute($tab);
    
    //echo "<div class='para'> Vous vous etes bien inscrit et vous allez donc etre redirigé vers l'acceuil </div>";
    }

    public static function Verifpseudo($pseudo){

        $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');


    	$req = $bdd->prepare('SELECT COUNT(*) FROM user WHERE pseudo = ? ');

    	$req -> execute(array($pseudo));

        $resultat = $req->fetch();

        echo "$resultat[0]";

    	if($resultat[0]!=0)
    	{
    		return false;
    	}
    	else
    	{
    		return true;
    	}

    }


    public static function ConnexionUtilisateur($login, $mdp){

        $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

        $req = $bdd->prepare('SELECT COUNT(*) FROM user WHERE pseudo_user = ? AND psswd_user = ?');

        $req->execute(array($login, $mdp));

        $resultat = $req->fetch();


        if ($resultat[0]!= 1)
        {
            return false;
            
        }
        else
        {
            return true;
        }
    }

    public static function ModifierUtilisateur($tab){

        $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

        $sup = $bdd->prepare('DELETE FROM user WHERE pseudo_user= ?');

        $sup->execute(array($_COOKIE['pseudo']));

        $req = $bdd->prepare('INSERT INTO user(name_user,firstname_user,pseudo_user,psswd_user,mail_user) VALUES( :nom, :prenom, :login, :mdp, :mail)');

        $req->execute($tab);
        
    }

    public static function SupprimerUtilisateur($id){

        $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

        $req = $bdd->prepare('DELETE from user WHERE id_user= ? ');

        $req->execute(array($id));

    }

        public static function GetAllUsers(){

        $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

        $req = $bdd->query('SELECT * FROM user');

        return $req -> fetchAll(PDO::FETCH_OBJ);

    }

    public static function GetInformation($pseudo){

        $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

        $req = $bdd->prepare('SELECT * from user WHERE pseudo_user = ? ');

        $req->execute(array($pseudo));

        return $req -> fetch();

    }

    public static function GetNameUser($id){

        $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

        $req = $bdd->prepare('SELECT pseudo_user FROM user WHERE id_user = ? ');

        $req->execute(array($id));

        $res = $req -> fetch();

        return $res['pseudo_user'];
    }

    public static function GetIdUser($pseudo){

        $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

        $req = $bdd->query('SELECT id_user FROM user WHERE pseudo_user = \'' . $pseudo . '\'');

        return $req -> fetch();
    }

    public static function IsUser($ch_rdm){

        $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

        $req = $bdd->prepare('SELECT COUNT(*) FROM user WHERE ch_rdm = ? ');

        $req -> execute(array($ch_rdm));

        $resultat = $req->fetch();

        if($resultat[0]!=0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}