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
        <div class="nav-item glass" id="login-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg>
        </div>
        <a href="signup.php">
            <div class="nav-item nav-link">
                Inscription
            </div>
        </a>
        <a href="index.php">
            <div class="nav-item nav-link">
                Partenaires
            </div>
        </a>
        <a href="index.php">
            <div class="nav-item nav-link">
                Boutique
            </div>
        </a>
    </div>
</div>
<script type="text/javascript" src="header.js"></script>
    