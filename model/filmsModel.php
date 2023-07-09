<?php
include_once('bdd.php');

class FilmsModel
{
    private $db;
    public function __construct()
    {
        $this->db = Bdd::connexion();
    }

    public function ajoutFilm($nom, $film, $photos, $text, $date_ajout, $id_utilisateurs)
    {
        echo "$nom, $film, $photos, $text, $date_ajout, $id_utilisateurs";
        $query = $this->db->prepare("INSERT INTO films (nom, film, photos, text, date_ajout, id_utilisateurs) VALUES (?, ?, ?, ?, ?, ?)");
        return $query->execute([$nom, $film, $photos, $text, $date_ajout, $id_utilisateurs]);
    }
}
