<?php 

$dsn="mysql:host=localhost;dbname=job_portal;charset=utf8";
$username ="root";
$password ="";


try{ //tentative de connexion
    $pdo = new PDO($dsn, $username, $password);
    // echo "Connexion OK";
}catch(PDOException $e){ //capturer l'erreur
    die("Error de connexion à la BDD".$e->getMessage());
}




?>