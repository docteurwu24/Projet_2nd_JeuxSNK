<?php
session_start();

require_once "../Inclusion/config.php";

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $username);
        
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){
                        session_start();
                        
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $username;
                        
                        header("location: jeux.php");
                        exit();
                    } else {
                        $error = "Le mot de passe est invalide.";
                    }
                }
            } else {
                $error = "Aucun compte trouvé avec ce nom d'utilisateur.";
            }
        } else {
            $error = "Oops! Une erreur est survenue.";
        }
        mysqli_stmt_close($stmt);
    }
}
?>

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
            
            .login-form {
                background: rgba(12, 77, 77, 0.8);
                border-radius: 15px;
                padding: 20px;
                max-width: 400px;
                margin: 50px auto;
                backdrop-filter: blur(5px);
            }
            
            .form-group {
                margin-bottom: 20px;
            }
            
            .form-group input {
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: none;
                margin-top: 5px;
            }
            
            .error-message {
                color: #ff6b6b;
                text-align: center;
                margin-bottom: 15px;
            }
            
            .register-link {
                text-align: center;
                margin-top: 15px;
            }
            
            .register-link a {
                color: var(--secondary-color);
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <?php include("../Inclusion/loader.php"); ?>
        <?php include("../Inclusion/menuprincipal.php"); ?>

        <h1><span class="center">Connexion</span></h1>

        <div class="login-form">
            <?php if(!empty($error)): ?>
                <div class="error-message"><?php echo $error; ?></div>
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
                <button type="submit" class="BoutonV">Se connecter</button>
            </form>
            
            <div class="register-link">
                <p>Pas encore de compte ? <a href="inscription.php">Inscrivez-vous</a></p>
            </div>
        </div>

        <script src="../Javascript/loader.js"></script>
    </body>
</html> 