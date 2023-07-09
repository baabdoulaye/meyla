<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="/assets/img/logo_meyla-favicon.png" type="image/x-icon" />
  <title>Catalogue - Meyla</title>
  <link rel="stylesheet" href="/assets/catalogue.css" />
</head>

<body>


  <?php
  include_once("model/user_model.php");
  session_start();
  $avatar = isset($_SESSION['avatar']) ? $_SESSION['avatar'] : '';
  // Récupérer l'avatar de l'utilisateur connecté depuis la base de données

  // Assurez-vous d'adapter cette partie selon votre logique de récupération des données

  // $stmt = $bdd->prepare("SELECT avatar FROM utilisateurs WHERE id = :id_utilisateurs");
  // $stmt->bindParam(':id_utilisateurs', $id_utilisateurs);
  // $stmt->execute();
  // $user = $stmt->fetch(PDO::FETCH_ASSOC); a decommenter peut-être après

  // Afficher l'avatar dans le paragraphe
  echo '<p id="connected_username">';
  if ($user && isset($user['avatar'])) {
    echo '<img src="/assets/photos_de_profil/' . $user['avatar'] . '" alt="Avatar" class="avatar">';
  } else {
    echo 'Utilisateur non connecté';
  }
  echo '</p>';

  ?>

  <div id="root">
    <div id="topnav" class="topnav">
      <a href="/model/accueil.php">
        <img id="logo" src="/assets/img/logo_meyla-favicon.png" alt="" /></a>
      <a id="deconnexion">
        <button id="button_deco" event.preventDefault() onclick="modal_deconnexion()">
          Déconnexion
        </button>
      </a>
      <!-- afficher le nom de l'utilisateur connecté -->
      <p id="connected_username">
        <?php if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?>
      </p>

      <div>
        <img id="user_photo" src="" alt="">
      </div>
    </div>
    <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
      <!-- Some spans to act as a hamburger -->
      <span></span>
      <span></span>
      <span></span>
    </a>

    <!-- Responsive Menu -->
    <nav role="navigation" id="topnav_responsive_menu">
      <ul>
        <li><a href="">Accueil </a></li>
        <li><a href="">Derniers Ajouts </a></li>
        <li><a href="/">Offert </a></li>
        <li>
          <a href="/">Nouveautés </a>
        </li>
        <li><a href="/">Souscrire </a></li>
        <li><a href="/">Nous_joindre</a></li>
      </ul>
    </nav>
  </div>

  <div id="parent">
    <div id="popup">
      <p>Souhaitez-vous vraiment vous déconnecter ?</p>
      <div id="div_boutons">
        <a href=""><button>Non</button></a>
        <a onclick="modal_deconnexion()" href="index.php?page=deconnexion"><button>Se déconnecter</button></a>
      </div>
    </div>
  </div>
  <main>
    <h2>Derniers Ajouts</h2>
    <!-- Ajoutez autant d'éléments de carousel que nécessaire -->
    <div class="carousel">
      <div class="carousel-item">
        <img style="width:270px; height:150px" src="/assets/img/00d5ea63966b313d.jpg" alt="Image 1" />
        <div class="carousel-item-content">
          <h3>Titre de l'image 1</h3>
          <p>Description de l'image 1</p>
        </div>
      </div>
      <div class="carousel-item">
        <img style="width: 270px; height:150px" src="/assets/img/000276908_896x598_c.jpg" alt="Image 2" />
        <div class="carousel-item-content">
          <h3>Titre de l'image 2</h3>
          <p>Description de l'image 2</p>
        </div>
      </div>
      <!-- Ajoutez autant d'éléments de carousel que nécessaire -->
    </div>

    </div>
    <h2>Offert</h2>

    <!-- Ajoutez autant d'éléments de carousel que nécessaire -->
    <div class="carousel">
      <div class="carousel-item">
        <img style="width:270px; height:150px" src="/assets/img/00d5ea63966b313d.jpg" alt="Image 1" />
        <div class="carousel-item-content">
          <h3>Titre de l'image 1</h3>
          <p>Description de l'image 1</p>
        </div>
      </div>
      <div class="carousel-item">
        <img style="width: 270px; height:150px" src="/assets/img/000276908_896x598_c.jpg" alt="Image 2" />
        <div class="carousel-item-content">
          <h3>Titre de l'image 2</h3>
          <p>Description de l'image 2</p>
        </div>
      </div>
      <!-- Ajoutez autant d'éléments de carousel que nécessaire -->
    </div>

    </div>

    <h2>Nouveautés</h2>

    <!-- Ajoutez autant d'éléments de carousel que nécessaire -->
    <div class="carousel">
      <div class="carousel-item">
        <img style="width:270px; height:150px" src="/assets/img/00d5ea63966b313d.jpg" alt="Image 1" />
        <div class="carousel-item-content">
          <h3>Titre de l'image 1</h3>
          <p>Description de l'image 1</p>
        </div>
      </div>
      <div class="carousel-item">
        <img style="width: 270px; height:150px" src="/assets/img/000276908_896x598_c.jpg" alt="Image 2" />
        <div class="carousel-item-content">
          <h3>Titre de l'image 2</h3>
          <p>Description de l'image 2</p>
        </div>
      </div>
      <!-- Ajoutez autant d'éléments de carousel que nécessaire -->
    </div>

    </div>

  </main>
</body>
<script>
  function showResponsiveMenu() {
    var menu = document.getElementById("topnav_responsive_menu");
    var icon = document.getElementById("topnav_hamburger_icon");
    var root = document.getElementById("root");
    if (menu.className === "") {
      menu.className = "open";
      icon.className = "open";
      root.style.overflowY = "hidden";
    } else {
      menu.className = "";
      icon.className = "";
      root.style.overflowY = "";
    }
  }

  //afficher modal deconnexion

  function modal_deconnexion() {
    var modal_deco = document.getElementById("popup");
    modal_deco.style.display = "block";
  }
</script>

</html>