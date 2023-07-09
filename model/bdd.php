<?php
class Bdd
{
    public static function connexion()
    {
        try {
            $bdd = new PDO("mysql:host=localhost;port=3306;dbname=meyla", "root",  "");
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $bdd;
        } catch (\Throwable $th) {
            die('Probleme de connexion a la BDD : $th');
        }
    }
}

$db = Bdd::connexion();
