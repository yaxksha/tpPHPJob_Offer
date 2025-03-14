<?php 

require_once('./../composants/connexionDB.php');


session_start();
echo "test";
if($_SERVER['REQUEST_METHOD']==='POST'){
    $sql ="SELECT * from users";
    $statement = $pdo->query($sql);
    $users=$statement->fetchAll();

    $connexion =false;
    foreach($users as $user){
        if($user['email']==$_POST['email']&&$user['password']==$_POST['password']){
            $connexion=true;
            $_SESSION['user']=$user['email'];
            
            $_SESSION['admin']=$user['admin'];
        }
        
    }
    if($connexion=='true'){
        header('Location: http://localhost/php_basics/jobs/views/pages/index.php');
    }else{
        header('Location: http://localhost/php_basics/jobs/views/pages/login.php?connexion=false');
    }
    
}
?>