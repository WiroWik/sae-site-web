<div class="container-page glass">
    <div class="container-large glass sidebar">
        <div class="container-large glass">
            <span class="bold">Prénom :</span><br> <?php echo $_SESSION['prenom']?><br>
            <span class="bold">Nom :</span><br> <?php echo $_SESSION['nom']?><br>
            <span class="bold">Adresse Mail :</span><br> <?php echo $_SESSION['mail']?><br>
            <span class="bold">Date d'inscription :</span><br> <?php echo $_SESSION['registration_date']?><br>
        </div>
        <div class="container" id="signup-form">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <label for="document">Envoyer un document</label>
                <input name="document" id="document" class="input-form glass" type="file">
                <input type="submit" class="submit-form glass" value="Envoyer le document">
            </form>
        </div>
    </div>
    <div class="container-inpage glass">
        <h1>Espace Membre</h1>
        <p>Bienvenue dans votre espace membre dédié. Nous sommes ravis de vous accueillir dans cette plateforme pour consulter vos résultats de tournois et simplifier l'envoi de vos documents.</p>
        <div class="container-inpage">
            <h2 class="bold">Compétitions</h2>
            <?php require('display_compet.php') ?>
        </div>
    </div>
</div>
<script type="text/javascript" src="logged.js"></script>
