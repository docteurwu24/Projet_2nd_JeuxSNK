<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');  // Nom d'utilisateur par défaut de XAMPP
define('DB_PASSWORD', '');      // Mot de passe vide par défaut
define('DB_NAME', 'dwplay');    // Nom de votre base de données

// Création de la connexion
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

// Vérification de la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter au serveur MySQL. " . mysqli_connect_error());
}

// Création de la base de données si elle n'existe pas
$sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
if(mysqli_query($conn, $sql)){
    // Sélection de la base de données
    mysqli_select_db($conn, DB_NAME);
    
    // Création des tables si elles n'existent pas
    $users_table = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    
    $progress_table = "CREATE TABLE IF NOT EXISTS game_progress (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        game_id VARCHAR(50) NOT NULL,
        current_chapter INT NOT NULL,
        last_choice VARCHAR(255),
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id),
        UNIQUE KEY unique_user_game (user_id, game_id)
    )";
    
    mysqli_query($conn, $users_table);
    mysqli_query($conn, $progress_table);
} else {
    die("ERREUR : Impossible de créer la base de données. " . mysqli_error($conn));
}
?> 