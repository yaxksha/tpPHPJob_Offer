
<?php 
require_once('./../composants/header.php');
require_once('./../composants/connexionDB.php');
?>

<?php 
    $id = $_GET['id'];
    $sql ="SELECT * from job_offers WHERE id=$id";
    $statement = $pdo->query($sql);
    $job=$statement->fetch();
 

?>
<h1><?= $job['title']?></h1>
<span>Offre crée le : <?= $job['created_at']?></span>

<div class="py-5 mx-5">
    <h2>Description</h2>
    <p><?= $job['description'] ?></p>
    <span>Entreprise : <?= $job['author']?></span>
    <span>Type de contrat : <?= $job["employment_type"]?></span>
    <span>Lieu : <?= $job["location"]?></span>
    <h2>Missions</h2>
    <p><?= $job['mission'] ?></p>
    <span>Technologies utilisées : <?= $job["technologies_used"]?></span>
    <h3>Avantages</h3>
    <p> <?= $job["benefits"]?></p>
    <span>Nombre de candidats : <?= $job['participants_count']?></span>

    <?php

    
    if(isset($_SESSION['user'])){
        if($_SESSION['admin']==0){
                 echo " </br><a class='my-3' href='./../controls/postuler.php?id=$id '><button type='button' class='btn btn-warning'>Postuler</button></a>";
        }elseif($_SESSION['admin']==1){
            echo " 
                <div class'd-flex'>
                    <a class='my-3' href='updateOffre?id=$id '><button type='button' class='btn btn-warning'>Éditer</button></a> 
                   <a class='my-3' href='./../controls/deleteOffer.php?id=$id '><button type='button' class='btn btn-danger'>Supprimer</button></a>
                </div>";
        }
  
    }
    ?>

</div>

<?php 
include_once('./../composants/footer.php');

?>