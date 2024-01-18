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
        <h1 class="titre-medias">Photos du club</h1>
        <div class="container-larger media-container glass" style="margin : 0 auto; margin-bottom : 50px">
            <img
            src="medias/photo1.jpg"
            alt="Photo plongée"
            class="photo-media">
            <img
            src="medias/photo2.jpg"
            alt="Photo plongée"
            class="photo-media">
            <img
            src="medias/photo3.jpg"
            alt="Photo plongée"
            class="photo-media">
            <img
            src="medias/photo4.jpg"
            alt="Photo plongée"
            class="photo-media">
            <img
            src="medias/photo5.jpg"
            alt="Photo plongée"
            class="photo-media">
        </div>
        <?php
            require('footer.php');
        ?>
    </body>
</html>