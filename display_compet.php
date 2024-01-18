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
            $compet = $query->fetch(PDO::FETCH_LAZY);
            if ($query->rowCount() > 0) {

                foreach ($connexion->query($sql) as $row) {
                    $sql2 = "SELECT nom_compet FROM competitions LEFT JOIN participants ON participants.id_compet = competitions.id_compet WHERE participants.id_participant = ".$_SESSION['id'].";"; 
                    $query2 = $connexion->prepare($sql);
                    $query2->execute();
                    $compet = $query->fetch();
                    echo "<div class='container-large compet glass'>".
                    "<span class='bold'>Nom Compétition : </span><br>".$compet."<br>".
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