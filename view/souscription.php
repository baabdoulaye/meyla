<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Souscription - Meyla</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
            padding: 20px;
            font-family: 'fredoka one', cursive;
            text-align: center;
        }

        .container {
            border-radius: 30px;
            max-width: 400px;
            margin: 0 auto;
            width: 500px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            text-align: center;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center; color:#fff">Sousription</h1>
    <div class="container">
        <h2>Souscription à Meyla</h2>
        <form>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="telephone">Téléphone :</label>
            <input type="tel" id="telephone" name="telephone" required>

            <label for="carte">Numéro de carte bancaire :</label>
            <input type="text" id="carte" name="carte" required>

            <label for="expiration">Date d'expiration :</label>
            <input type="text" id="expiration" name="expiration" required>

            <label for="cvv">CVV :</label>
            <input type="text" id="cvv" name="cvv" required>

            <input type="submit" value="Souscrire">
        </form>
    </div>
</body>

</html>