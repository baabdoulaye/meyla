<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>A propos - Meyla</title>
  <style>
    body {
      background-color: #000000;
      text-align: center;
    }

    h1 {
      color: #ffffff;
      text-align: center;
      font-size: 50px;
      font-family: "fredoka one", cursive;
    }

    button {
      width: 200px;
      height: 40px;
      font-size: 17px;
      font-weight: 600;
      font-size: 12px;
      color: #fff;
      cursor: pointer;
      text-align: center;
      border: none;
      background-size: 300% 100%;
      border-radius: 50px;
      transition: all 0.4s ease-in-out;
      background-image: linear-gradient(to right,
          #f16c00,
          #764ba2,
          #d0ff00,
          #f16c00);
      box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
    }

    button:hover {
      background-position: 100%;
      transition: all 0.4s ease-in-out;
    }

    video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0.5;
      z-index: -1
    }

    P {
      color: #ffffff;
      text-align: center;
      font-size: 20px;
      font-family: 'fredoka one', cursive;
    }
  </style>
</head>

<body>
  <h1>A propos de Meyla</h1>
  <p>
    Meyla est une plateforme de vidéo à la demande. L’objectif principal de Meyla est de fournir aux utilisateurs une plateforme
    conviviale et attrayante afin de regarder du
    contenu et des programmes divertissants.</p>
  <P>Le site proposera des films ainsi
    que des films d’animation et offrira une expérience utilisateur fluide et agréable.</P>
  <P>Le site est conçu pour offrir une expérience
    utilisateur intuitive et immersive. Les clients sont des utilisateurs de tout âge
    et de tous horizons à la recherche de programmes divertissants.</P>
  <a href="/view/souscription.php"> <button>Souscrire à Meyla</button></a>
  <video autoplay muted loop src="/assets/videos/intros_meyla_2.mp4"></video>
</body>

</html>