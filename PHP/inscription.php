<?php
require_once "../Inclusion/config.php";

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);
    
    if($password != $confirm_password){
        $error = "Les mots de passe ne correspondent pas.";
    } else {
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $username);
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $error = "Ce nom d'utilisateur est déjà pris.";
                } else {
                    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
                    
                    if($stmt = mysqli_prepare($conn, $sql)){
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        
                        mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);
                        
                        if(mysqli_stmt_execute($stmt)){
                            $success = "Compte créé avec succès ! Vous pouvez maintenant vous connecter.";
                        } else {
                            $error = "Une erreur est survenue.";
                        }
                    }
                }
            }
            mysqli_stmt_close($stmt);
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("../Inclusion/en_tete.php"); ?>
        <style>
            body {
                background-image: url('../Image/Fond-accueil.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
                cursor: none;
            }

            .login-form {
                max-width: 400px;
                margin: 2rem auto;
                padding: 2rem;
                background: rgba(12, 77, 77, 0.9);
                border-radius: 15px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            }

            .form-group {
                margin-bottom: 1.5rem;
            }

            .form-group label {
                display: block;
                color: white;
                margin-bottom: 0.5rem;
                font-size: 1.2rem;
            }

            .form-group input {
                width: 100%;
                padding: 0.8rem;
                border: none;
                border-radius: 5px;
                background: rgba(255, 255, 255, 0.9);
                font-size: 1rem;
            }

            .error-message {
                color: #ff4444;
                background: rgba(255, 68, 68, 0.1);
                padding: 1rem;
                border-radius: 5px;
                margin-bottom: 1rem;
                text-align: center;
            }

            .success-message {
                color: #00C851;
                background: rgba(0, 200, 81, 0.1);
                padding: 1rem;
                border-radius: 5px;
                margin-bottom: 1rem;
                text-align: center;
            }

            .register-link {
                text-align: center;
                margin-top: 1rem;
            }

            .register-link a {
                color: var(--secondary-color);
                text-decoration: none;
            }

            .register-link a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <?php include("../Inclusion/loader.php"); ?>
        <?php include("../Inclusion/menuprincipal.php"); ?>

        <h1><span class="center">Inscription</span></h1>

        <div class="login-form">
            <?php if(!empty($error)): ?>
                <div class="error-message"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <?php if(!empty($success)): ?>
                <div class="success-message"><?php echo $success; ?></div>
            <?php endif; ?>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirmer le mot de passe</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                <button type="submit" class="BoutonV">S'inscrire</button>
            </form>
            
            <div class="register-link">
                <p>Déjà un compte ? <a href="connexion.php">Connectez-vous</a></p>
            </div>
        </div>

        <script src="../Javascript/loader.js"></script>
    </body>
</html> 