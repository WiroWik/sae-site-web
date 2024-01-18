
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
                $sql = "INSERT INTO `utilisateurs` (`id_user`, `nom`, `prenom`, `mail`, `date_naissance`, `mdp`, `connexion_lvl`, `registration_date`) VALUES (NULL, :nom, :prenom, :email, :naissance,:password, 0, :registration_date);";

                $dateTime = new DateTime();

                $currentDate = $dateTime->format('Y-m-d'); 

                $query = $connexion->prepare($sql);
                $query->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
                $query->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
                $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
                $query->bindValue(':naissance', $_POST['naissance'], PDO::PARAM_STR);
                $query->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
                $query->bindValue(':registration_date', $currentDate, PDO::PARAM_STR);
                $query->execute();
                header('Location: index.php?error=0');
                exit();
            }
            
            unset($_POST['nom']);
            unset($_POST['prenom']);
            unset($_POST['mail']);
            unset($_POST['naissance']);
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
        <h1 class="form-title">Inscription</h1>
        <div class="container glass" id="signup-form">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="member-form">
                <label for="nom">Nom</label>
                <input name="nom" id="nom" class="input-form glass" type="text">
                <label for="prenom">Prénom</label>
                <input name="prenom" id="prenom" class="input-form glass" type="text">
                <label for="email">Adresse Mail</label>
                <input name="email" id="email" class="input-form glass" type="text">
                <label for="naissance">Date de naissance</label>
                <input name="naissance" id="naissance" class="input-form glass" type="date">
                <label for="password">Mot de passe</label>
                <input name="password" id="password" class="input-form glass" type="password">
                <input type="submit" class="submit-form glass">
            </form>
        </div>
        <div class="download-button glass" id="download-register">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cloud-download-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.5a.5.5 0 0 1 1 0V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0m-.354 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V11h-1v3.293l-2.146-2.147a.5.5 0 0 0-.708.708z"/>
            </svg>
        </div>
        <script type="text/javascript" src="main.js"></script>
        <?php
            require('footer.php');
        ?>
    </body>
</html>