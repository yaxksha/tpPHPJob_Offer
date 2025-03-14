<?php 
require_once('./../composants/connexionDB.php');

$title = $_POST['title'];
$description = $_POST['description'];
$mission = $_POST['mission'];
$location = $_POST['location'];
$category = $_POST['category'];
$author = $_POST['author'];
$employment_type = $_POST['employment_type'];
$technologies_used = $_POST['technologies_used'];
$benefits = $_POST['benefits'];
$participants_count =0;
$created_at=date('Y-m-d H:i:s');
$image_url = $_POST['image_url'];


var_dump($_POST);
$sql="INSERT INTO job_offers (title, description, mission, location, category, author, employment_type, 
 technologies_used, benefits, participants_count, created_at, image_url) 
VALUES ('$title','^$description','$mission','$location','$category','$author','$employment_type','$technologies_used','$benefits','0','$created_at','$image_url')";
var_dump($sql);
$statement = $pdo->query($sql);
header('Location: http://localhost/php_basics/jobs/views/pages/offres.php')
?>