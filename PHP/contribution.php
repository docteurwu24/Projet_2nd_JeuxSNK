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
            
            .author-card {
                background: rgba(12, 77, 77, 0.8);
                border-radius: 15px;
                padding: 20px;
                max-width: 600px;
                margin: 50px auto;
                backdrop-filter: blur(5px);
            }
            
            .author-name {
                color: var(--secondary-color);
                font-size: 2.5vw;
                margin-bottom: 15px;
            }
            
            .author-role {
                color: white;
                font-size: 1.8vw;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <?php include("../Inclusion/loader.php"); ?>
        <?php include("../Inclusion/menuprincipal.php"); ?>

        <h1><span class="center">Contribution</span></h1>

        <div class="author-card">
            <h3 class="author-name">Louaï Hamlat</h3>
            <p class="author-role">Créateur & Développeur</p>
            <p class="ap1">Passionné par le développement web et les jeux interactifs, 
            j'ai créé DWplay pour offrir une expérience unique de jeux à choix.</p>
        </div>

        <script src="../Javascript/loader.js"></script>
    </body>
</html> 