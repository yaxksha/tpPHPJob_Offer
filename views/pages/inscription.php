
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
<div color="white" class="form-signin w-50 m-auto">
  <form method="POST" action="./../controls/register.php">

    <h1 class="h3 mb-3 fw-normal">Inscription</h1>
    <div class="form-floating my-5">
      <input type="text" class="form-control" id="floatingInput" placeholder="Doe" name="lastName">
      <label for="floatingInput">Nom</label>
    </div>

    <div class="form-floating my-5">
      <input type="text" class="form-control" id="floatingInput" placeholder="John" name="firstName">
      <label for="floatingInput">Prénom</label>
    </div>

    <div class="form-floating my-5">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating my-5">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>


    <button class="btn btn-primary w-100 py-2" type="submit">Créer le compte</button>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
  </form>
</div>

</div>
<?php 
include_once('./../composants/footer.php');

?>