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
            <form method="post">
                <label for="email">Adresse Mail</label>
                <input name="email" id="email" class="input-form glass" type="text">

                <label for="password">Mot de passe</label>
                <input name="password" id="password" class="input-form glass" type="password">

                <input type="submit" class="submit-form glass">
                <a href=register.php>Register</a>
            </form>
        </div>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $inputEmail = $_POST["email"];
                $inputPassword = $_POST["password"];
                try {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "sddv_plongee";

                    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "SELECT * FROM utilisateurs WHERE mail = ? AND mdp = ?"; 
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([$inputEmail, $inputPassword]);
                    $user = $stmt->fetch();
                    session_start();

                    if ($stmt->rowCount() > 0) {
                        echo 'Connexion reussie';
                        $_SESSION["connected"] = true;
                        header("Location: index.php");
                    } 
                    else {
                        echo $stmt->rowCount()."<a class='text'><br>Identifiant ou mot de passe incorrect.</a>";
                    }
                } 
                catch (PDOException $e) {
                    echo "Erreur de connexion à la base de données : " . $e->getMessage();
                }
            }
        ?>
    </body>
</html>