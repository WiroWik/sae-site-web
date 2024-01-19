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
        <h1 class="form-title">Se connecter</h1>
        <div class="container glass" id="signup-form">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <label for="email">Adresse Mail</label>
                <input name="email" id="email" class="input-form glass" type="text">

                <label for="password">Mot de passe</label>
                <input name="password" id="password" class="input-form glass" type="password">

                <?php
                    if (isset($_GET['isAuthValid'])) {
                        if ($_GET['isAuthValid']) {
                            echo "<p style='font-size : 13px;'>Mot de passe ou adresse mail invalide</p>";
                        }
                    }
                ?>
                <input type="submit" class="submit-form glass clickable">
                <a href=register.php></a>
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
                        $user = $query->fetch(PDO::FETCH_LAZY);

                        if ($query->rowCount() > 0) {
                            echo 'Connexion reussie';
                            $_SESSION['id'] = $user->id_user;
                            $_SESSION['prenom'] = $user->prenom;
                            $_SESSION['nom'] = $user->nom;
                            $_SESSION['naissance'] = $user->date_naissance;
                            $_SESSION['mail'] = $user->mail;
                            $_SESSION['registration_date'] = $user->registration_date;
                            $_SESSION["connected"] = true;
                            header("Location: membre.php");
                        } 
                        else {
                            header("Location: login.php?isAuthValid=false");
                        }
                    } 
                    catch (PDOException $e) {
                        echo "Erreur de connexion à la base de données : " . $e->getMessage();
                    }
                }
            }
        ?>
        <?php
            require('footer.php');
        ?>
    </body>
</html>