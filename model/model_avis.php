<?php

class ModelAvis {

    //Fonction permettant d'ajouter un avis
    public static function AjouterAvis($tab){

    $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

    $req = $bdd->prepare('INSERT INTO notice(text_notice,id_user,id_wine) VALUES( :texte_notice, :id_user, :id_vin)');

    $req->execute($tab);
    
    }

    //Fonction permettant de supprimer un avis mais que je n'exploite pas encore
    public static function SupprimerAvis($id_avis){

    $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

    $req = $bdd->prepare('DELETE FROM notice WHERE id_notice = ?');

    $req->execute(array($id_avis));
    
    }


    //Focntion permettant de recuperer tout les avis associer a un vin
    public static function GetAllNotice($id_vin){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->query('SELECT * FROM notice WHERE id_wine = \'' . $id_vin . '\'');

        return $req -> fetchAll(PDO::FETCH_OBJ);

        
    }
}