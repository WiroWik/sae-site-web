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
        <h1 class="titre-medias">Partenaires du club</h1>
        <div id="partenaire-nav">
            <div class="partenaire-block glass clickable" id="desjardins">
                <img
                src="https://upload.wikimedia.org/wikipedia/fr/thumb/7/71/Logo-Desjardins-2018.svg/2560px-Logo-Desjardins-2018.svg.png"
                alt="La banque Desjardins">
            </div>
            <div class="partenaire-block glass clickable" id="buitoni">
                <img
                src="https://medias.reussir.fr/lesmarches/2023-06/lmmars23buitoni.png"
                alt="">
            </div>
            <div class="partenaire-block glass clickable" id="oracle">
                <img
                src="https://logos-world.net/wp-content/uploads/2020/09/Oracle-Logo-1995-Present.png"
                alt="">
            </div>
            <div class="partenaire-block glass clickable" id="heineken">
                <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Heineken_logo.svg/1280px-Heineken_logo.svg.png"
                alt="">
            </div>
        </div>
        <?php
            require('footer.php');
        ?>
        <script type="text/javascript" src="partenaires.js"></script>
    </body>
</html>