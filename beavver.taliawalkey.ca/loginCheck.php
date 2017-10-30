<?php 
require_once('connect.php');


$email = isset($_POST['email']) ? $_POST['email'] : $_SESSION['email'];
$password = isset($_POST['password']) ? $_POST['password'] : $_SESSION['password'];


if(!isset($email)) {
    require_once('register.php');

    
exit;
}

?>