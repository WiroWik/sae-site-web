<?php
    if (session_id() === "") session_start();
    if (!isset($_SESSION["connected"])) $_SESSION["connected"] = false;
?>
<div id="header" class="glass">
    <div id="header-left">
        <?php echo file_get_contents("medias/logo.svg")?>
        <h1>Saint-Dié-des-Vosges Plongée</h1>
    </div>
    <div id="nav-bar">
        <?php
            if ($_SESSION["connected"]) {
                require("member/member_button.php");
            } else {
                require("member/login_button.php");
            }
        ?>
        <a href="register.php">
            <div class="nav-item nav-link">
                Inscription
            </div>
        </a>
        <a href="partenaires.php">
            <div class="nav-item nav-link">
                Partenaires
            </div>
        </a>
        <a href="shop.php">
            <div class="nav-item nav-link">
                Boutique
            </div>
        </a>
        <a href="planning.php">
            <div class="nav-item nav-link">
                Planning
            </div>
        </a>
    </div>
</div>
<script type="text/javascript" src="header.js"></script>
    