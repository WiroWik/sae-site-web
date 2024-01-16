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
        <?php
            if ($_SESSION["connected"]) {
                require("member/logged.php");
            } else {
                require("member/guest.php");
            }
        ?>
    </body>
</html>