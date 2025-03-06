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
            
            .bug-form {
                background: rgba(12, 77, 77, 0.8);
                border-radius: 15px;
                padding: 20px;
                max-width: 600px;
                margin: 50px auto;
                backdrop-filter: blur(5px);
            }
            
            .form-group {
                margin-bottom: 20px;
            }
            
            .form-group label {
                display: block;
                color: white;
                margin-bottom: 5px;
                font-size: 1.2em;
            }
            
            .form-group input, 
            .form-group textarea, 
            .form-group select {
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: none;
                background: rgba(255, 255, 255, 0.9);
                margin-top: 5px;
            }
            
            .form-group textarea {
                min-height: 150px;
                resize: vertical;
            }
            
            .submit-btn {
                display: block;
                margin: 20px auto 0;
            }
        </style>
    </head>
    <body>
        <?php include("../Inclusion/loader.php"); ?>
        <?php include("../Inclusion/menuingame.php"); ?>

        <h1><span class="center">Signaler un Bug</span></h1>

        <div class="bug-form">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="game">Jeu concerné</label>
                    <select id="game" name="game" required>
                        <option value="aot">Attack on Titan</option>
                        <option value="upcoming">Jeu à venir</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="bug-type">Type de bug</label>
                    <select id="bug-type" name="bug-type" required>
                        <option value="visual">Bug visuel</option>
                        <option value="gameplay">Bug de gameplay</option>
                        <option value="story">Bug d'histoire</option>
                        <option value="other">Autre</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="description">Description du bug</label>
                    <textarea id="description" name="description" required 
                        placeholder="Décrivez le bug en détail. Que s'est-il passé ? Quelles étaient les circonstances ?"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="steps">Étapes pour reproduire</label>
                    <textarea id="steps" name="steps" 
                        placeholder="Quelles sont les étapes pour reproduire ce bug ?"></textarea>
                </div>
                
                <button type="submit" class="BoutonV submit-btn">Envoyer le rapport</button>
            </form>
        </div>

        <script src="../Javascript/loader.js"></script>
    </body>
</html> 