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
            
            .games-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 20px;
                padding: 20px;
                max-width: 1200px;
                margin: 0 auto;
                position: relative;
                z-index: 1;
            }
            
            .game-card {
                background: rgba(12, 77, 77, 0.8);
                border-radius: 15px;
                padding: 20px;
                text-align: center;
                backdrop-filter: blur(5px);
                position: relative;
                z-index: 1;
            }
        </style>
    </head>
    <body>
        <?php include("../Inclusion/loader.php"); ?>
        <?php include("../Inclusion/menuprincipal.php"); ?>

        <h1><span class="center">Nos Jeux</span></h1>

        <div class="games-grid">
            <div class="game-card">
                <img class="Iconejeux" src="../Image/icone1.jpg" alt="Jeu 1">
                <h3>Attack on Titan</h3>
                <a href="../PHP/Jeux1.php" class="BoutonV">Jouer</a>
            </div>
            <div class="game-card ap1">
                <h3>Nouveau jeu à venir...</h3>
                <p>Bientôt disponible</p>
            </div>
        </div>

        <script src="../Javascript/loader.js"></script>
    </body>
</html> 