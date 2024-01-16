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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <label for="email">Adresse Mail</label>
                <input name="email" id="email" class="input-form glass" type="text">

                <label for="password">Mot de passe</label>
                <input name="password" id="password" class="input-form glass" type="password">

                <input type="submit" class="submit-form glass">
                <a href=register.php>Register</a>
            </form>
        </div>
        <?php
            require("dbconnect.php");
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $connexion=dbconnect();
                $sql="SELECT COUNT(*) FROM utilisateurs"; 
                if(!$connexion->query($sql)) {
                    echo "Pb d'accès à la bdd"; 
                }
                else {
                    
                    try {
                        $sql = "SELECT * FROM utilisateurs WHERE mail = :mail AND mdp = :password"; 
                        $query = $connexion->prepare($sql);
                        $query->bindValue(':mail', $_POST['email'], PDO::PARAM_STR);
                        $query->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
                        $query->execute();
                        $user = $query->fetch();

                        if ($query->rowCount() > 0) {
                            echo 'Connexion reussie';
                            $_SESSION["connected"] = true;
                            header("Location: membre.php");
                        } 
                        else {
                            echo $query->rowCount()."<a class='text'><br>Identifiant ou mot de passe incorrect.</a>";
                        }
                    } 
                    catch (PDOException $e) {
                        echo "Erreur de connexion à la base de données : " . $e->getMessage();
                    }
                }
            }
        ?>
    </body>
</html>