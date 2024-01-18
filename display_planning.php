<?php
    require("dbconnect.php");
    
    $connexion=dbconnect();
    $sql="SELECT COUNT(*) FROM competitions"; 
    if(!$connexion->query($sql)) {
        echo "Pb d'accès à la bdd"; 
    }
    else {
        
        try {
            $sql = "SELECT * FROM competitions"; 
            $query = $connexion->prepare($sql);
            $query->execute();
            $compet = $query->fetch(PDO::FETCH_LAZY);
            if ($query->rowCount() > 0) {

                foreach ($connexion->query($sql) as $row) {
                    echo "<div class='container-inpage compet glass'>".
                    "<div class='container-large sidebar compet glass'>".
                    "<h2>".$row['nom_compet']."</h2>".
                    "<span class='bold'>Date : </span>". $row['date_compet'].
                    "<span class='bold'>Pays : </span>". $row['pays'].
                    "<span class='bold'>Ville : </span>". $row['ville'].
                    "<span class='bold'>Adresse : </span>". $row['adresse'].
                    "</div>".
                    "<img
                    class='img-compet'
                    src=".$row['image_compet']."
                    alt='Image de la compétition'/>".
                    "</div>";
                }
            } 
            else {
                echo "Aucune compétitions";
            }
        } 
        catch (PDOException $e) {
            echo "Erreur de connexion à la base de données : " . $e->getMessage();
        }
    }
    
?>