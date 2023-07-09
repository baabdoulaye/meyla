<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <title>Meyla</title>
  <link rel="shortcut icon" href="assets/img/logo_meyla-favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="/assets/main.css" />
  <meta name="description" content="Bienvenue sur MEYLA, votre plateforme numérique de vidéo à la demande" />
  <meta name="keywords" content="Meyla, vod, streaming, films, meyla studios, meyla entertainment, series" />
  <style>
    body {
      margin: 0;
    }

    #jj {
      width: 450px;
      height: 300px;
    }

    #k {
      display: flex;
      justify-content: center;
      margin-top: 50px;
    }

    p {
      text-align: center;
      color: white;
      font-size: 20px;
      font-family: "Lato";
      font-weight: 900;
      letter-spacing: 1cap;
      margin-top: -5px;
    }

    #superdiv {
      width: 100%;
      height: 100%;
      margin-top: -38px;
      background-color: black;
      position: absolute;
    }
  </style>
</head>

<body>
  <div id="superdiv">
    <div id="k">
      <img id="jj" src="/assets/img/upscaler-logo_meyla-2x.jpg" alt="" />
    </div>

    <div id="q">
      <p>
        <span>M</span>
        <span>E</span>
        <span>Y</span>
        <span>L</span>
        <span>A</span>
      </p>
    </div>
  </div>
</body>

</html>

<script>
  // changer la couleur du border des avatars en vert lorsque l'on clique dessus

  function change_color_avatar(element) {
    var avatars = document.getElementsByClassName("avatar");

    for (var i = 0; i < avatars.length; i++) {
      avatars[i].style.opacity = 1;
    }

    element.style.opacity = 0.5;
  }
  //animation de l'apparition du logo et du titre

  anime({
    targets: "#jj",
    opacity: [0, 1],
    duration: 2150,
    direction: "alternate",
    delay: 900,
  });

  anime({
    targets: "span",
    opacity: [0, 1],
    translateY: 2,
    delay: anime.stagger(100, {
      start: 2000,
    }), // increase delay by 100ms for each elements.
    direction: "alternate",
    duration: 1000,
  });

  // fonction redirigeant vers l'accueil après 3 secondes
  setTimeout(function rediriger_vers_page_daccueil() {
    window.location.href = "/vue/accueil.php";
  }, 5500);
</script>