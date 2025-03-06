<!DOCTYPE html>
<html>
    <head>
        <?php include("../Inclusion/en_tete.php"); ?>
        <style>
            body {
                background-image: url('../Image/fond-accueil.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
                cursor: none;
            }
            
            .about-content {
                background: rgba(12, 77, 77, 0.8);
                border-radius: 15px;
                padding: 20px;
                max-width: 800px;
                margin: 50px auto;
                backdrop-filter: blur(5px);
            }
        </style>
    </head>
    <body>
        <?php include("../Inclusion/loader.php"); ?>
        <?php include("../Inclusion/menuprincipal.php"); ?>

        <h1><span class="center">À propos</span></h1>

        <div class="about-content">
            <p class="ap1">DWplay est une plateforme de jeux narratifs où vos choix déterminent l'histoire.</p>
            <p class="ap2">Chaque décision que vous prenez influence le déroulement de l'aventure, créant ainsi une expérience unique.</p>
            <p class="ap3">Notre objectif est de vous offrir des histoires immersives et interactives dans différents univers.</p>
        </div>

        <script src="../Javascript/loader.js"></script>
    </body>
</html> 