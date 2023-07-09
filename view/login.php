<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/logo_meyla-favicon.png" type="image/x-icon">
    <title>Meyla connexion</title>
    <link rel="stylesheet" href="/assets/connexion.css">
</head>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form class="Formulaire" action="index.php?page=connexion" method="post">

    <label for="mail">Entrez votre mail : </label>
    <input type="email" name="email" id="mail" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
    <label for="sujet">Entrez votre mot de passe : </label>
    <input type="password" name="mot_de_passe" id="password" placeholder="Password" required />
    <input type="submit" name="insert" id="bouton_valider" value="Valider">

</form>
</div>

<!-- <body>
<div id="div_parent_form_co">
    <div class="title">
    </div>
    <div class="container">
        <div class="left"></div>
        <div class="right">
            <h2>Connexion</h2>
            <div class="formBox">
                <form method="post">
                    <p id="hhh">Email</p>
                    <input type="email" required name="email" placeholder="Entrez votre email ici" id="email">
                    <p id="hhh">Mot de passe</p>
                    <input style="border-radius:100PX;" type="password" name="mot_de_passe">
                    <br>
                    <br>
                    <input type="submit" name="insert" id="bouton_valider" value="Valider">
                </form>
            </div>
        </div>
    </div>
</div>
</body> -->

</html>