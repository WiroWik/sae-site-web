
<?php
require("dbconnect.php");
if (isset($_POST['email'])){
    if (isset($_POST["password"])){
        
        $sql="SELECT COUNT(*) FROM utilisateurs"; 

        $connexion=dbconnect(); 
        if(!$connexion->query($sql)) {
            echo "Pb d'accès à la bdd"; 
        }
        else{
            
            /* Query Prepare */

            $sql="SELECT * FROM utilisateurs WHERE mail = :mail";

            $query = $connexion->prepare($sql);
            $query->bindValue(':mail', $_POST['email'], PDO::PARAM_STR);
            $query->execute();
            $members_array = $query->fetchAll();

            $row_count = count($members_array);

            // Check the number of rows that match the SELECT statement 
            if($row_count==1) 
            {
                header('Location: index.php?error=1');
                exit();
            } else {
                $sql = "INSERT INTO `utilisateurs` (`id_user`, `nom`, `prenom`, `mail`, `mdp`, `connexion_lvl`, `registration_date`) VALUES (NULL, :nom, :prenom, :email, :password, 0, NULL);";

                $query = $connexion->prepare($sql);
                $query->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
                $query->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
                $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
                $query->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
                $query->execute();
                header('Location: index.php?error=0');
                exit();
            }
            
            unset($_POST['nom']);
            unset($_POST['prenom']);
            unset($_POST['mail']);
            unset($_POST['password']);
            
        }

        $connexion=null;
    }
}
?>

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
                <label for="nom">Nom</label>
                <input name="nom" id="nom" class="input-form glass" type="text">
                <label for="prenom">Prénom</label>
                <input name="prenom" id="prenom" class="input-form glass" type="text">
                <label for="email">Adresse Mail</label>
                <input name="email" id="email" class="input-form glass" type="text">
                <label for="password">Mot de passe</label>
                <input name="password" id="password" class="input-form glass" type="password">
                <input type="submit" class="submit-form glass">
            </form>
        </div>
    </body>
</html>