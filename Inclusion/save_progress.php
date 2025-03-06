<?php
session_start();
require_once "config.php";

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $user_id = $_SESSION["id"];
    $game_id = $_POST["game_id"];
    $chapter = $_POST["chapter"];
    $choice = $_POST["choice"];
    
    $sql = "INSERT INTO game_progress (user_id, game_id, current_chapter, last_choice) 
            VALUES (?, ?, ?, ?) 
            ON DUPLICATE KEY UPDATE 
            current_chapter = VALUES(current_chapter), 
            last_choice = VALUES(last_choice)";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($stmt, "isis", $user_id, $game_id, $chapter, $choice);
        mysqli_stmt_execute($stmt);
    }
}
?> 