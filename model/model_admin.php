
<?php

class ModelAdmin {


    /*public static function ConnexionAdmin($login, $mdp){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->prepare("SELECT * FROM `administrator` WHERE `pseudo_admin` LIKE 'PhilippeB2R' AND `psswd_admin` LIKE 'pbrute'");

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
    }*/

        public static function ConnexionAdmin($login, $mdp){

        $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

        $req = $bdd->prepare('SELECT COUNT(*) FROM administrator WHERE pseudo_admin = ? AND psswd_admin = ?');

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

    public static function InscrireAdmin($tab){

    $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

    $req = $bdd->prepare('INSERT INTO administrator(name_admin,firstname_admin,pseudo_admin,psswd_admin,mail_admin, ch_rdm_admin) VALUES( :nom, :prenom, :login, :mdp, :mail, :ch_rdm)');

    $req->execute($tab);
    
    //echo "<div class='para'> Vous vous etes bien inscrit et vous allez donc etre redirigé vers l'acceuil </div>";
    }

    public static function Verifpseudo($pseudo){

        $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');


        $req = $bdd->prepare('SELECT COUNT(*) FROM administrator WHERE pseudo_admin = ? ');

        $req -> execute(array($pseudo));

        $resultat = $req->fetch();

        if($resultat[0]!=0)
        {
            return false;
        }
        else
        {
            return true;
        }

    }

    public static function IsAdmin($ch_rdm){

        $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

        $req = $bdd->prepare('SELECT COUNT(*) FROM administrator WHERE ch_rdm_admin = ? ');

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

    public static function GetInformation($pseudo){

        $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

        $req = $bdd->prepare('SELECT * from administrator WHERE pseudo_admin = ? ');

        $req->execute(array($pseudo));

        return $req -> fetch();

    }

}