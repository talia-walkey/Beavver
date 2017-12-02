<?php
session_start();
    header("Access-Control-Allow-Origin: *");
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
            $sql = "SELECT id, first_name, last_name, email FROM login WHERE email='$email' AND password='$password'";
            $result=$conn->query($sql);
            $user=$result->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION["user"]=$user[0];
            //var_dump($_SESSION);
            echo json_encode($user);
            exit;
        }else if($type=="destroy"){
            $sql = "DELETE * FROM login WHERE email = '$email'";
            $result=$conn->query($sql);
            $user=$result->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION["user"]=$user[0];
            //var_dump($_SESSION);
            echo json_encode($user);
            exit;
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

