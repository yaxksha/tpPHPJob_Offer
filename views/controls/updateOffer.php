


  <?php 
require_once('./../composants/connexionDB.php');
$id = $_GET['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$mission = $_POST['mission'];
$location = $_POST['location'];
$category = $_POST['category'];
$author = $_POST['author'];
if($_POST['employment_type']!== 'Open this select menu'){
    $employment_type = $_POST['employment_type'];
}

$technologies_used = $_POST['technologies_used'];
$benefits = $_POST['benefits'];
$created_at=date('Y-m-d H:i:s');
$image_url = $_POST['image_url'];


var_dump($_POST['employment_type']);
if($_POST['employment_type']== 'Open this select menu'){
    $sql="UPDATE `job_offers` SET `title` = '$title', `description` = '$description',
    `mission` = '$mission', `location` = '$location', `category` = '$category',
     `author` = '$author', `technologies_used` = '$technologies_used', `benefits` = '$benefits', `created_at` 
     = '$created_at', 
     `image_url` = '$image_url' 
     WHERE `job_offers`.`id` = $id;
   ";
   var_dump($sql);
   $statement = $pdo->query($sql);
   
}else{
    $sql="UPDATE `job_offers` SET `title` = '$title', `description` = '$description',
    `mission` = '$mission', `location` = '$location', `category` = '$category',
     `author` = '$author', `technologies_used` = '$technologies_used', `benefits` = '$benefits', `created_at` 
     = '$created_at', 
     `image_url` = '$image_url', `employment_type` = '$employment_type'
     WHERE `job_offers`.`id` = $id;
   ";
   var_dump($sql);
   $statement = $pdo->query($sql);
}

header('Location: http://localhost/php_basics/jobs/views/pages/offres.php')
?>