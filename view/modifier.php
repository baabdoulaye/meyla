<form class="Formulaire" action="" method="post">
    <label for="nom">Entrez votre nom : </label>
    <input type="text" name="nom" id="nom" value="<?= $_SESSION['nom'] ?>" />
    <label for="prenom">Entrez votre prénom : </label>
    <input type="text" name="prenom" id="prenom" value="<?= $_SESSION['prenom'] ?>" />
    <label for="mail">Entrez votre mail : </label>
    <input type="email" name="email" id="mail" value="<?= $_SESSION['email'] ?>" />
    <button>
        Modification
    </button>
</form>