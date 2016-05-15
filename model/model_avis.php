<?php

class ModelAvis {


    public static function AjouterAvis($tab){

    $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

    $req = $bdd->prepare('INSERT INTO notice(text_notice,id_user,id_wine) VALUES( :texte_notice, :id_user, :id_vin)');

    $req->execute($tab);
    
    }

    public static function SupprimerAvis($id_avis){

    $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');

    $req = $bdd->prepare('DELETE FROM notice WHERE id_notice = ?');

    $req->execute(array($id_avis));
    
    }

    /*public static function GetAllNotice($id){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->prepare('SELECT * FROM notice WHERE id_vin = ?');

        $res = $req -> execute(array($id));

        return $res -> fetchAll(PDO::FETCH_OBJ);
        
    }*/

        public static function GetAllNotice($id_vin){

        $bdd = new PDO('mysql:host=127.9.75.130:3306;dbname=amateurdevin;charset=utf8', 'adminGEm89Ak', 'btSPRKVIEHSw');
        
        $req = $bdd->query('SELECT * FROM notice WHERE id_wine = \'' . $id_vin . '\'');

        return $req -> fetchAll(PDO::FETCH_OBJ);

        
    }
}