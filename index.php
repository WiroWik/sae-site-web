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
            if (isset($_GET['error'])) {
                echo  "<div class='container glass error-register'>";
                if ($_GET['error'] == 1) {
                    echo "<span color=red>Erreur : Cette adresse mail a déjà été enregistré<span>";
                } else if ($_GET['error'] == 0) {
                    echo "L'utilisateur à bien été enregistré";
                }
                echo "</div>";
            }
        ?>
    </body>
</html>