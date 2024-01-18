<?php
    require("dbconnect.php");
    
    $connexion=dbconnect();
    $sql="SELECT COUNT(*) FROM competitions"; 
    if(!$connexion->query($sql)) {
        echo "Pb d'accès à la bdd"; 
    }
    else {
        
        try {
            $sql = "SELECT * FROM participants WHERE id_participant =".$_SESSION['id'].";"; 
            $query = $connexion->prepare($sql);
            $query->execute();
            if ($query->rowCount() > 0) {

                foreach ($connexion->query($sql) as $row) {
                    $sql2 = "SELECT * FROM competitions LEFT JOIN participants ON participants.id_compet = competitions.id_compet WHERE competitions.id_compet =".$row['id_compet'].";"; 
                    $query2 = $connexion->prepare($sql2);
                    $query2->execute();
                    $compet = $query2->fetch(PDO::FETCH_LAZY);
                    echo "<div class='container-large compet glass'>".
                    "<span class='bold'>Nom Compétition : </span><br>".$compet->nom_compet."<br>".
                    "<span class='bold'>Score : </span><br>".$row['score']."<br>".
                    "<span class='bold'>Position : </span>".$row['position'].
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