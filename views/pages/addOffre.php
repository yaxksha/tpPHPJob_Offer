
<?php 
require_once('./../composants/header.php');
require_once('./../composants/connexionDB.php');
?>
<?php 

if(!isset($_SESSION['user'])){
    header('Location: offres.php');
}
if(isset($_SESSION['user']))
        if($_SESSION['admin']==0){
                    header('Location: offres.php');
    
        }

?>

<?php 
    $sql ="SELECT * from job_offers";
    $statement = $pdo->query($sql);
    $jobs=$statement->fetchAll();

?>
<!-- INSERT INTO `job_offers` (`id`, `title`, `description`, `mission`, `location`, `category`, `author`, `employment_type`, 
 `technologies_used`, `benefits`, `participants_count`, `created_at`, `image_url`) 
VALUES (NULL, 'Vendeur LDLC', 
'LDLC recherche un vendeur qui s\'y connait en informatique et pourra conseiller les clients pour l\'achat de matériel informatique.', 
'Conseiller, vendre du matériel informatique', 'Paris', 'CDD', 'LDLC', '', 'Persuasion Niveau 50', 'Ticket resto, place de parking.',
 '0', CURRENT_TIMESTAMP, 'https://media.ldlc.com/nbo/ldlc/shop/52a29a721d43e19ae95f661c6f1eca9c8f95dfac.jpg'); -->
<div color="white" class="form-signin w-50 m-auto">
  <form method="POST" action="./../controls/addOffer.php">

    <h1 class="h3 mb-3 fw-normal">Ajout d'offre</h1>
    <div class="form-floating my-5">
      <input type="text" class="form-control" id="floatingInput" placeholder="title" name="title">
      <label for="floatingInput">Title</label>
    </div>

    <div class="form-floating my-5">
      <input type="text" class="form-control" id="floatingInput" placeholder="description" name="description">
      <label for="floatingInput">description</label>
    </div>

    <div class="form-floating my-5">
      <input type="text" class="form-control" id="floatingInput" placeholder="mission" name="mission">
      <label for="floatingInput">mission</label>
    </div>
    <div class="form-floating my-5">
      <input type="text" class="form-control" id="floatingInput" placeholder="location" name="location">
      <label for="floatingInput">location</label>
    </div>
    <div class="form-floating my-5">
      <input type="text" class="form-control" id="floatingInput" placeholder="category" name="category">
      <label for="floatingInput">category</label>
    </div>
    <div class="form-floating my-5">
      <input type="text" class="form-control" id="floatingInput" placeholder="author" name="author">
      <label for="floatingInput">author</label>
    </div>

    <select class="form-select" aria-label="Default select example" name="employment_type">
        <option selected>Open this select menu</option>
        <option value="CDI">CDI</option>
        <option value="CDD">CDD</option>
        <option value="Freelance">Freelance</option>
        <option value="Internship">Internship</option>
    </select>
    <!-- `technologies_used`, `benefits`, `participants_count`, `created_at`, `image_url`)  -->
    <div class="form-floating my-5">
      <input type="text" class="form-control" id="floatingInput" placeholder="technologies_used" name="technologies_used">
      <label for="floatingInput">technologies_used</label>
    </div>
    <div class="form-floating my-5">
      <input type="text" class="form-control" id="floatingInput" placeholder="benefits" name="benefits">
      <label for="floatingInput">benefits</label>
    </div>

    <div class="form-floating my-5">
      <input type="text" class="form-control" id="floatingInput" placeholder="image_url" name="image_url">
      <label for="floatingInput">image_url</label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">ajout offre</button>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
  </form>
</div>



<?php 
include_once('./../composants/footer.php');

?>