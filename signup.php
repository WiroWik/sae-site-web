<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Club Plongée</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="icons/logo.svg">
    </head>
    <body>
        <?php
            require('header.php');
        ?>
        <div class="container" id="signup-form">
            <form action= method="post">
                <label for="nom">Nom</label>
                <input name="nom" id="nom" type="text">
                <label for="prenom">Prénom</label>
                <input name="prenom" id="prenom" type="text">
                <label for="naissance">Date de naissance</label>
                <input name="naissance" id="naissance" type="date">
                <input type="submit">
            </form>
        </div>
    </body>
</html>