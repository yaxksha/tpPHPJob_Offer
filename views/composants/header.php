<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<style>
    .error{
        color:red;
    }
   body{
        background-color:orange;
       
    }
    .form-check label{
        color:white;
    }
    main label{
        color:black;
    }
    main{
        color:white;
        flex-direction:column;
        min-height:100vh !important;
    }
    .mlr-auto{
        margin-left:auto;
        margin-right:auto;
    }
    .card img{
        max-height:220px;
    }
    h1{
        text-align:center;
    }
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-warning ">
        <div class="container-fluid">
            <span class="navbar-brand">Job Portal</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="offres.php">Offres</a>
                </li>
            </ul>
            <span class="navbar-text">
                <?php
                session_start();
             
                if(isset($_SESSION['user'])){
                    echo '<a class="nav-link" href="profil.php">'.$_SESSION['user'].'</a>';
                    echo '<a class="nav-link" href="../controls/logout.php"><img src="./../../assets/img/logout.png" alt="icone logout"></a>';
                }else{
                    echo ' <a class="nav-link" href="login.php">Login</a>';
                }
               
                ?>

            </span>
            </div>
        </div>
        </nav>
    </header>
    <main class="bg-dark container d-flex my-3  ">

   