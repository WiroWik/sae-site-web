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
        <?php
            if (isset($_GET['error'])) {
                echo  "<div class='container glass error-register'>";
                if ($_GET['error'] == 1) {
                    echo "<span color=red>Erreur : Cette adresse mail a déjà été enregistré<span>";
                } else if ($_GET['error'] == 0) {
                    echo "L'utilisateur à bien été enregistré";
                }
                echo "</div>";
            }
            if (isset($_GET['disconnected'])) {
                $_SESSION['connected'] = false;
                unset($_SESSION['id']);
                unset($_SESSION['prenom']);
                unset($_SESSION['nom']);
                unset($_SESSION['naissance']);
                unset($_SESSION['mail']);
                unset($_SESSION['registration_date']);
                header("Location: index.php");
            }
        ?>
        <div class="container-page">
            <div class="container-desc glass">
                <p>
                    Bienvenue chez Saint-Dié-des-Vosges Plongée, le club de plongée passionné basé au cœur de Saint-Dié-des-Vosges ! Nous sommes fiers de vous offrir une expérience inoubliable de plongée sous-marine au sein de notre communauté dynamique.<br><br>

                    <span class="bold">À propos de nous :</span><br><br>

                    Vosges Subaquatiques a été fondé avec la mission de partager notre amour pour la plongée sous-marine et de promouvoir la préservation des richesses aquatiques de la région. Notre club accueille des plongeurs de tous niveaux, des débutants curieux aux plongeurs expérimentés.<br><br>

                    <span class="bold">Ce que nous offrons :</span><br><br>
                    <ul>
                        <li>Formation certifiée : Que vous soyez novice ou plongeur confirmé, notre équipe de moniteurs certifiés propose des cours adaptés à tous les niveaux. Obtenez vos certifications PADI et explorez de nouveaux horizons sous-marins en toute sécurité.</li><br>

                        <li>Sorties régulières : Profitez de nos sorties régulières en eaux douces pour explorer les magnifiques sites de plongée de la région des Vosges. Des lacs aux rivières, découvrez la diversité des fonds marins à quelques pas de Saint-Dié.</li><br>

                        <li>Événements sociaux : Partagez votre passion avec d'autres plongeurs lors de nos événements sociaux mensuels. Rencontrez de nouveaux amis, échangez des expériences et célébrez vos aventures sous-marines autour d'un bon repas.</li><br>

                        <li>Engagement écologique : En tant qu'amoureux de la nature, nous nous engageons à préserver l'environnement marin. Participons ensemble à des initiatives de nettoyage des fonds marins et contribuons à la préservation de notre patrimoine subaquatique.</li><br>
                    </ul>
                    <br>
                    Rejoignez-nous pour une aventure inédite dans le monde subaquatique ! Que vous soyez débutant ou plongeur chevronné, le Club de Plongée de Saint-Dié-des-Vosges vous offre une communauté chaleureuse et des opportunités de plongée exceptionnelles.

                </p>
            </div>
        </div>
        <?php
            require('footer.php');
        ?>
    </body>
</html>