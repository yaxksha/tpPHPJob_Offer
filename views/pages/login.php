
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
  <form method="POST" action="./../controls/login.php">

    <h1 class="h3 mb-3 fw-normal">Connexion</h1>
    <?php 

    if(isset($_GET['connexion'])){
        if($_GET['connexion']=='false'){
        
            echo ('<span class="error">Login ou password invalide !<span>');
        }
    }

    ?>
    <div class="form-floating my-5">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating my-5">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="text-start my-3">
        <a href="inscription.php">S'inscrire</a>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
  </form>
</div>

</div>
<?php 
include_once('./../composants/footer.php');

?>