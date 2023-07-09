<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/main_accueil.css" />
    <title>Meyla</title>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Shrikhand&display=swap" rel="stylesheet"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link rel="shortcut icon" href="/assets/img/logo_meyla-favicon.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        .container.active {
            display: block;
        }
    </style>
    <meta name="keywords" content="Meyla, vod, streaming, films, meyla studios, meyla entertainment, series">
    <meta name="description" content="Bienvenue sur MEYLA, votre plateforme numérique de vidéo à la demande">
</head>

<body>
    <a id="hh" href="/index.php"> <img src="/assets/img/logo_meyla.jpg" alt=""></a>
    <div id="div_parent_parent">
        <div id="div_button">
            <a href="index.php?page=connexion" id="connexion"> <button id="btn_co" onclick="toggle()">Connexion</button> </a>
            <!-- <a href="index.php?page=inscription" id="inscription"> <button>Inscription</button> </a> -->
            <a href="view/inscription.php" id="inscription"> <button>Inscription</button> </a>

            <?php if (isset($_SESSION['nom'])) { ?>
                <a class="nav-link buttonAjoutArticle" href="index.php?page=ajoutFilm"><i class="fa-solid fa-pen-to-square"></i> Ajouter Un Film</a>
                <a class="nav-link" href="index.php?page=moncompte"><i class="fa-solid fa-user"></i> <?= $_SESSION['prenom'] ?> <?= $_SESSION['nom'] ?> </a>
                <a class="nav-link" href="index.php?page=deconnexion"><i class="fa-solid fa-right-from-bracket"></i> Deconnexion</a>
            <?php } else { ?>
                <li><a style="display:none;" id="bouton_valider" href="view/inscription.php">Inscription</a></li>
                <li><a style="display:none;" id="bouton_valider" href="index.php?page=connexion">connexion</a></li>
            <?php } ?>
        </div>
    </div>
    <video autoplay loop muted src="/assets/videos/intros_meyla1.mp4"></video>


    <h1>MEYLA</h1>
    <p id="intro">
        Bienvenue sur MEYLA <br />
        Votre plateforme numérique de vidéo à la demande
    </p>
    <a href="/view/catalogue.php">
        <div id="div_parent_btn_catalogue">
            <button id="button_catalogue">
                Accéder au catalogue ➪
            </button>
        </div>
    </a>

</body>

</html>

<script>
    AOS.init();
</script>