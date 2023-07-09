<?php
include_once('bdd.php');

class UsersModel
{
    private $db;
    private $email; // Ajoutez cette ligne pour définir la propriété $email
    //la methode construct est une injection de dependance qui permet de se connecter à la base de données
    public function __construct()
    {
        $this->db = Bdd::connexion();
    }

    public function setUser()
    {
        $query = $this->db->prepare("INSERT INTO Utilisateurs (nom, prenom, email, mot_de_passe, id_roles , avatar) VALUES (?, ?, ?, ? , ? , ?)");
        return $query->execute([$this->nom, $this->prenom, $this->email, $this->motdepasse, $this->id_roles, $this->avatar]);
    }

    public function getUserByEmail()
    {
        $query = $this->db->prepare("SELECT * FROM Utilisateurs WHERE email = ?");
        $query->execute([$this->email]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function UpdateUser()
    {
        $query = $this->db->prepare("UPDATE Utilisateurs SET nom = ?, prenom = ?, email = ? WHERE id_utilisateurs = ?");
        return $query->execute([$this->nom, $this->prenom, $this->email, $_SESSION['id_user']]);
    }

    public function deleteUser()
    {
        $query = $this->db->prepare("DELETE FROM Utilisateurs WHERE id_utilisateurs = ?");
        return $query->execute([$_SESSION['id_user']]);
    }
}
// alex a modifié les requêtes afin de les rendre plus sécurisées et d'éviter les injections SQL
