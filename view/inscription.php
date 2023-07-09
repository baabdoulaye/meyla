<!-- <form action="" method="post">
    <label for="nom">nom</label>
    <input type="text" name="nom" id="">
    <label for="">prenom</label>
    <input type="text" name="prenom" id="">
    <label for="">email</label>
    <input type="email" name="email" id="">
    <label for="">mot de passe</label>
    <input type="password" name="motdepasse" id="">
    <button>Envoyer</button>
</form> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/logo_meyla-favicon.png" type="image/x-icon">
    <title>Meyla - inscription</title>
    <link rel="stylesheet" href="/assets/inscription.css">
</head>

<body>
    <!-- ---------------------------------------------formulaire d'inscription------------------------------------- -->
    <div class="title">
    </div>
    <div class="container">
        <div class="left" id="avatarContainer"></div>
        <div style="overflow-y:scroll" class="right">
            <h2>Inscription</h2>
            <div class="formBox">
                <form method="post" action="/index.php?page=inscription">
                    <p>Nom</p>
                    <input type="text" required placeholder="Entrez votre nom ici" name="nom" id="nom">
                    <p>Prénom</p>
                    <input type="text" required placeholder="Entrez votre prénom ici" name="prenom" id="prenom">
                    <div>
                        <p id="hhh">Email</p>
                        <input type="email" required name="email" placeholder="Entrez votre email ici" id="email">
                        <p id="hhh">Mot de passe</p>
                        <input name="mot_de_passe" style="border-radius:100PX;" type="password">
                        <br>
                        <!-- avatar -->
                        <div>
                            <input type="radio" value="bart" name="avatar" id="avatar1">
                            <label for="avatar1">
                                <img src="/assets/photos_de_profil/bart.jpg" id="avatar" alt="">
                            </label>
                        </div>
                        <div>
                            <input type="radio" value="lisa" name="avatar" id="avatar2">
                            <label for="avatar2">
                                <img src="/assets/photos_de_profil/lisa.jpg" id="avatar" alt="">
                                <!-- lisa -->
                            </label>
                        </div>
                        <!-- avatar -->
                        <input type="submit" name="insert" id="bouton_valider" value="Valider">
                </form>
            </div>
        </div>
    </div>


</body>

</html>