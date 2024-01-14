<?php
$host = "localhost";
$database = "club_sportif";
$username = "root";
$password ="";

try{
    $pdo = new PDO ("mysql:host=$host; dbname=$database",$username,$password);
    $pdo -> setAttribute ( PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
} 
catch (PDOException $e){
    die ("erreur de connexion à la base de données: ".$e -> getMessage());
}



?>

