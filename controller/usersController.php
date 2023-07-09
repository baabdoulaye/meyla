<?php
include_once('model/usersModel.php');

class UsersController extends UsersModel
{
    protected $id_utilisateur;
    protected $nom;
    protected $prenom;
    protected $email;
    protected $motdepasse;
    protected $id_roles;
    protected $avatar;

    public function formInsciption()
    {
        include('view/inscription.php');
    }
    public function formConnexion()
    {
        include('view/login.php');
    }
    public function formModifUtilisateur()
    {
        include('view/modifier.php');
    }


    public function inscription()
    {
        $this->nom = trim($_POST['nom']);
        $this->prenom = trim($_POST['prenom']);
        $this->email = trim($_POST['email']);
        $this->motdepasse = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT);
        $this->id_roles = 1;
        $this->avatar = 'test';


        if ($this->nom != '' && $this->prenom != '' && $this->email != '') {
            if ($this->setUser()) {
                echo '<h2 class="title_connection">inscription OK</h2>';
            }
        } else {
            $this->formInsciption();
        }
    }
    public function connexion()
    {
        $this->email = trim($_POST['email']);
        $this->motdepasse = trim($_POST['mot_de_passe']);
        if ($this->email != '' && $this->motdepasse != '') {
            $user = $this->getUserByEmail();
            // echo $this->motdepasse;
            if ($user) {
                if (password_verify($this->motdepasse, $user['mot_de_passe'])) {
                    $_SESSION['id_user'] = $user['id'];
                    $_SESSION['nom'] = $user['nom'];
                    $_SESSION['prenom'] = $user['prenom'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['id_roles'] = $user['id_roles'];
                    $_SESSION['avatar'] = $user['avatar'];
                    header('Location: view/catalogue.php');
                    echo '<h2 class="title_connection">Connexion OK</h2>';
                } else {
                    echo '<h2 class="title_connection">Mot de passe incorrect</h2>';
                    $this->formConnexion();
                }
            } else {
                echo '<h2 class="title_connection">Email incorrect</h2>';
                $this->formConnexion();
            }
        } else {
            $this->formConnexion();
        }
    }

    public function deconnexion()
    {
        $_SESSION = array();
        header('Location: index.php');
    }

    public function modifUtilisateur()
    {
        $this->id_utilisateur = $_SESSION['id_user'];
        $this->nom = trim($_POST['nom']);
        $this->prenom = trim($_POST['prenom']);
        $this->email = trim($_POST['email']);
        $this->motdepasse = password_hash($_POST["motdepasse"], PASSWORD_DEFAULT);
        $this->avatar = 'test';

        if ($this->nom != '' && $this->prenom != '' && $this->email != '') {
            if ($this->UpdateUser()) {
                echo '<h2 class="title_connection">Modification OK</h2>';
            }
        } else {
            $this->formModifUtilisateur();
        }
    }

    public function supprimerUtilisateur()
    {
        $this->id_utilisateur = $_SESSION['id_user'];
        if ($this->deleteUser()) {
            echo '<h2 class="title_connection">Suppression OK</h2>';
        }
    }
}
