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
        <div class="container glass" id="signup-form">
            <form action= method="post">
                <label for="email">Adresse Mail</label>
                <input name="email" id="email" class="input-form glass" type="text">
                <label for="password">Mot de passe</label>
                <input name="password" id="password" class="input-form glass" type="password">
                <input type="submit" class="submit-form glass">
                <a href=register.php>Register</a>
            </form>
        </div>
    </body>
</html>