<?php
    session_start();
    $_SESSION['user']['email'] = $_POST['email'];
    $_SESSION['user']['name'] = $_POST['name'];
  
var_dump($_SESSION);
       if($_POST['type'] == "log"){
            var_dump($_SESSION);
            echo json_encode($user);
            exit;
        }
    
?>
