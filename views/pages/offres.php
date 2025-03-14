
<?php 
require_once('./../composants/header.php');
require_once('./../composants/connexionDB.php');
?>
<h1>Nos offres d'emploi:</h1>
<?php 
    $sql ="SELECT * from job_offers";
    $statement = $pdo->query($sql);
    $jobs=$statement->fetchAll();

?>

<div class="row row-cols-1 row-cols-md-3 g-4">
<?php
        foreach($jobs as $job){
            echo 
            
            '<div class="col my-3">
                <div class="card h-100">
                    <img src="'.$job["image_url"].'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">'.$job["title"].'</h5>
                        <p class="card-text">'.$job["description"].'</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">'.$job["location"].'</li>
                        <li class="list-group-item">'.$job["category"].'</li>
                        <li class="list-group-item">'.$job["employment_type"].'</li>
                        <li class="list-group-item">'.$job["category"].'</li>
                    </ul>
                    <div class="card-body">
                        <a href="offre.php?id='.$job["id"].'" class="card-link">Détails</a>
                        
                    </div>
                </div> 
            </div>';
        }
?>
<?php 
if(isset($_SESSION['user']))
        if($_SESSION['admin']==1)
    echo '<a href="addOffre.php">Ajouter une offre</a>';
?>

</div>
<?php 
include_once('./../composants/footer.php');

?>