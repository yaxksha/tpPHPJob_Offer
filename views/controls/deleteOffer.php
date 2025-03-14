<?php 
require_once('./../composants/connexionDB.php');
$id = $_GET['id'];


$sql="DELETE FROM job_offers WHERE `job_offers`.`id` = $id";
$statement = $pdo->query($sql);
header('Location: http://localhost/php_basics/jobs/views/pages/offres.php');

?>