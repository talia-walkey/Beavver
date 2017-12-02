<?php
    session_start();
    $_SESSION['user']['email'] = $_POST['email'];
    $_SESSION['user']['first_name'] = $_POST['first_name'];
    $_SESSION['user']['last_name'] = $_POST['last_name'];
  
var_dump($_SESSION);
       if($_POST['type'] == "log"){
            var_dump($_SESSION);
            echo json_encode($user);
            exit;
        }
    
?>
