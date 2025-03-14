<?php 
require_once('./../composants/connexionDB.php');

$email = $_POST['email'];
$password = $_POST['password'];
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$sql="INSERT INTO USERS (email, password, lastName, firstName)
VALUE('$email','$password','$lastName','$firstName')";
$statement = $pdo->query($sql);
header('http://localhost/php_basics/jobs/views/pages/login.php')
?>