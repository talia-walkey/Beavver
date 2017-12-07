<?php 
include 'header.php';
include 'quickstart.js';
include 'register-db.php'
 ?>



<?php
require_once('connect.php');

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
        
        
        print_r($rows);
        
        
       /* $type = $_POST['type'];
    
        if($type == "reg"){ 
             $sql = "INSERT INTO login (first_name, last_name, email, password, confirm_password) VALUES ('$first_name', '$last_name', '$email', '$password', '$confirm_password')";
             $conn->exec($sql);
                //echo 'register button is clicked';
        }else if($type == "log"){
            $sql = "SELECT (first_name, last_name, email, password, confirm_password) FROM login WHERE first_name = '$first_name'";
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
        }*/
             
    } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "<p style='color: red;'>$error</p>";
    }
?>


<div><?php include 'footer.php';?></div>



<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="styles.css">
    
</head>
    <body>
        <div>Login Here</div>
         <input type="hidden" value="log" name="type" />

       
        <div class="container">
            <form class="form-signin" method="POST">
                <h2 class="form-signin-heading">Please Login</h2>
        <div class="input-group">
	       <span class="input-group-addon" id="basic-addon1">@</span>
	           <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
	   </div>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" >
                <button id='loginBut' name='loginBut' class="btn btn-lg btn-primary btn-block" type="submit" formaction="displayresults.php">Login</button>
                <!--formaction="loginHome.php"      loginHome.php-->
    
    </body>
</html>
