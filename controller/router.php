<?php

$page = @$_GET["page"];

switch ($page) {
    case 'inscription':
        include('controller/usersController.php');
        $user = new UsersController;
        if (isset($_POST['email'])) {
            $user->inscription();
        } else {
            $user->formInsciption();
        }
        break;
    case 'connexion':
        include('controller/usersController.php');
        $user = new UsersController;

        if (isset($_POST['email'])) {
            $user->connexion();
        } else {
            $user->formConnexion();
        }
        break;
    case "deconnexion":
        include('controller/usersController.php');
        $user = new UsersController;
        $user->deconnexion();
        break;
    case "moncompte":
        include('controller/usersController.php');
        $user = new UsersController;

        if (isset($_POST['email'])) {
            $user->updateUser();
        } else {
            $user->formModifUtilisateur();
        }
        break;
    case 'supprimer':
        include('controller/usersController.php');
        $user = new UsersController;
        $user->deleteUser();
        break;

    case 'ajoutFilm':
        include('controller/filmsController.php');
        $film = new FilmsController;
        if (isset($_POST['nom'])) {
            $film->ajoutFilm();
        } else {
            $film->formAjoutFilm();
        }
        break;
    case 'catalogue':
        include('view/catalogue.php');
        break;
}
