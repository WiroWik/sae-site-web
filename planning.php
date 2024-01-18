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
        <div class="container-compet glass">
            <?php require('display_planning.php') ?>
        </div>
        <?php
            require('footer.php');
        ?>
    </body>
</html>