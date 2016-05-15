<?php

class ModelVin {

    public static function AjoutVin($tab){

    $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

    $req = $bdd->prepare('INSERT INTO wine(name_wine,price,text_wine,id_aoc,id_cat) VALUES( :nom, :prix, :description, :id_aoc, :id_cat)');

    $req->execute($tab);

    }

    /*public static function ModifierVin($tab){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $sup = $bdd->prepare('INSERT FROM wine WHERE');

        $sup->execute();

        $req = $bdd->prepare('INSERT INTO user(name_user,firstname_user,pseudo_user,psswd_user,mail_user) VALUES( :nom, :prenom, :login, :mdp, :mail)');

        $req->execute($tab);
        
    }*/

    public static function GetAllActiveWine(){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->query('SELECT * FROM wine WHERE etat = 1');

        return $req -> fetchAll(PDO::FETCH_OBJ);

        
    }

    public static function GetAllInactiveWine(){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->query('SELECT * FROM wine WHERE etat = 0');

        return $req -> fetchAll(PDO::FETCH_OBJ);

        
    }




    public static function GetCat($id){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->prepare('SELECT des_cat FROM category WHERE id_cat = ? ');

        $req->execute(array($id));

        $res = $req -> fetch();

        return $res['des_cat'];

    }

    public static function GetAoc($id){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->prepare('SELECT des_aoc FROM aoc WHERE id_aoc = ? ');

        $req->execute(array($id));

        $res = $req -> fetch();

        return $res['des_aoc'];

    }

    public static function GetIdCat($des_cat){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->prepare('SELECT id_cat FROM category WHERE des_cat LIKE ? ');

        $req->execute(array($des_cat));

        $res = $req -> fetch();

        return $res['id_cat'];

    }

    public static function GetIdAoc($des_aoc){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->prepare('SELECT id_aoc FROM aoc WHERE des_aoc LIKE ? ');

        $req->execute(array($des_aoc));

        $res = $req -> fetch();

        return $res['id_aoc'];

    }

    public static function ValiderVin($id){


        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->prepare('UPDATE wine SET etat = 1 WHERE id_wine = ?');

        $req->execute(array($id));

    }

    public static function SupprimerVin($id){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->prepare('DELETE from wine WHERE id_wine = ? ');

        $req->execute(array($id));
    }

    public static function GetInformation($id){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->prepare('SELECT * FROM wine WHERE id_wine = ? ');

        $req->execute(array($id));

        return $req -> fetch();

    }

        public static function GetAllWineSearch($motclef, $id_cat, $id_aoc){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->prepare('SELECT * FROM wine WHERE etat = 1 AND id_wine = (SELECT id_wine FROM wine WHERE name_wine = ? OR id_aoc = ? OR id_cat = ? )');

        $req->execute(array($motclef,
                            $id_aoc,
                            $id_cat));

        return $req -> fetchAll(PDO::FETCH_OBJ);
    }

    public static function GetAllCat(){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->query('SELECT * FROM category');

        return $req -> fetchAll(PDO::FETCH_OBJ);

        }

    public static function GetAllAoc(){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->query('SELECT * FROM aoc');

        return $req -> fetchAll(PDO::FETCH_OBJ);

        }

    public static function AddAoc($des_aoc){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->prepare('INSERT INTO aoc(des_aoc) VALUES(?)');

        $req->execute(array($des_aoc));

    }

    public static function AddCat($des_cat){

        $bdd = new PDO('mysql:host=localhost;dbname=amateur_vin_bd;charset=utf8', 'root', '');

        $req = $bdd->prepare('INSERT INTO category(des_cat) VALUES(?)');

        $req->execute(array($des_cat));

    }
}