<?php

    $servername = "beavver.taliawalkey.ca";
    $dblogin = "talia185_Beavver";
    $password = "D3Beavver!";
    $dbname = "talia185_cc";
    
   //var_dump($_POST);

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM login";
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password= $_POST['confirm_password'];
        
        
        $type = $_POST['type'];
    
        if($type == "reg"){ 
             $sql = "INSERT INTO login (first_name, last_name, email, password, confirm_password) VALUES ('$first_name', '$last_name', '$email', '$password', '$confirm_password')";
             $conn->exec($sql);
                //echo 'register button is clicked';
        }else if($type == "log"){
            $sql = "SELECT (first_name, last_name, email, password, confirm_password) FROM login WHERE $first_name";
            $conn->exec($sql);
            
        }
        
        
        //declare whether you want to login or signup
     
       
        
        if($sql){
            $arr = array(
                "status"=>1,
                "msg"=>"inserted properly"
            );
            echo json_encode($arr);
        } else {
            $arr = array(
                "status"=>0,
                "msg"=>"something went wrong"
            );
            echo json_encode($arr);
        }
             
    } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "<p style='color: red;'>$error</p>";
    }
?>

