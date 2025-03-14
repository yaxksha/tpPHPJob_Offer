<?php 
require_once('./../composants/connexionDB.php');
$id = $_GET['id'];
$sql="SELECT participants_count FROM job_offers where id=$id ";
$statement = $pdo->query($sql);
$count=$statement->fetch();
$pcount = $count['participants_count'];

$sql="UPDATE job_offers SET participants_count = $pcount+1 WHERE  job_offers.id =$id";
$statement = $pdo->query($sql);
header('Location: http://localhost/php_basics/jobs/views/pages/offre.php?id='.$id)

?>