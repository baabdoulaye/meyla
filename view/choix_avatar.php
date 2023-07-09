<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix avatar - Meyla</title>
    <link rel="stylesheet" href="/assets/choix_avatar.css">
    <link rel="shortcut icon" href="/assets/img/logo_meyla-favicon.png" type="image/x-icon">
</head>


<?php
$servername = "localhost";
$dbname = "meyla";
$username = "root";
$password = "";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "CONNEXION REUSSIE";
} catch (PDOException $e) {
    echo "La Connection a échoué : " . $e->getMessage();
}


if (isset($_POST['insert'])) {
    $avatar = $_POST['avatar'];

    $sql = "INSERT INTO `utilisateurs` (`avatar`) VALUES (:avatar)";
    $stmt = $bdd->prepare($sql);

    $stmt->bindParam(':avatar', $avatar);

    $stmt->execute();
}
?>

<body>
    <div class="container">
        <!-- div contenant le tableau js des différents avatars -->
        <div class="left" id="avatarContainer">
            <form method="post" action="/vue/catalogue.php">
        </div>
        <div class="right">
            <!-- div gerant la validation de l'avatar -->
            <h2>Choisis ton avatar</h2>
            <div class="formBox">
                <input type="submit" name="insert" id="bouton_valider" value="insert" />
            </div>
            </form>
        </div>
    </div>

</body>

<script>
    //tableau contenant les differents avatars grâce à une boucle for

    var avatars = [
        "/assets/photos_de_profil/judy.jpg",
        "/assets/photos_de_profil/bart.jpg",
        "/assets/photos_de_profil/connor.jpg",
        "/assets/photos_de_profil/homer.jpeg",
        "/assets/photos_de_profil/hal.jpg",
        "/assets/photos_de_profil/lisa.jpg",
        "/assets/photos_de_profil/tag.jpg",
        "/assets/photos_de_profil/milhouse.jpg",
        "/assets/photos_de_profil/vaiana.jpg",
        "/assets/photos_de_profil/maggie.jpg",
    ];

    var container = document.getElementById("avatarContainer");

    for (var i = 0; i < avatars.length; i++) {
        var label = document.createElement("label");
        var radio = document.createElement("input");
        radio.type = "radio";
        radio.name = "avatar";
        radio.id = "avatar";
        radio.value = avatars[i]; // a modifier si besoin
        if (i === 0) {
            radio.checked = true;
        }

        var img = document.createElement("img");
        img.src = avatars[i];
        img.alt = "Avatar";
        img.className = "avatar";
        img.onclick = function() {
            change_color_avatar(this);
        };

        label.appendChild(radio);
        label.appendChild(img);
        container.appendChild(label);
    }


    // changer l'opacité des avatars lorsqu'on clique dessus

    function change_color_avatar(element) {
        var avatars = document.getElementsByClassName("avatar");

        for (var i = 0; i < avatars.length; i++) {
            avatars[i].style.opacity = 1;
        }

        element.style.opacity = 0.5;
    }

    window.addEventListener('DOMContentLoaded', function() {
        var avatars = document.getElementsByClassName("avatar");
        var index = 0;
        var interval = setInterval(function() {
            avatars[index].style.opacity = 1;
            index++;
            if (index === avatars.length) {
                clearInterval(interval);
            }
        }, 160);
    });
</script>

</html>