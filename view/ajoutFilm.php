<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/assets/img/logo_meyla-favicon.png" type="image/x-icon" />
    <title>Admin - Meyla</title>
</head>
<style>
    body {
        /* background-color: black; */
        font-family: "fredoka one", cursive;
    }

    h1 {
        text-align: center;
        font-weight: 900;
        color: black;
        font-size: 50px;
    }

    h2 {
        text-align: center;
        color: #fff;
    }
</style>

<body>
    <h1>ADMIN - Meyla</h1>
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nom">nom</label>
            <input type="text" name="nom" id="nom">
            <label for="photos">photos</label>
            <input type="file" name="photos" id="photos">
            <label for="film">film</label>
            <input type="file" name="film" id="film">
            <label for="text">text</label>
            <input type="text" name="text" id="text">
            <button>Envoyer</button>
        </form>
    </div>
</body>

</html>