<?php 




session_start();
session_destroy();
if(!isset($_SESSION)){
    echo 'session détruite avec succès';
}
header('Location: http://localhost/php_basics/jobs/views/pages/index.php');

?>