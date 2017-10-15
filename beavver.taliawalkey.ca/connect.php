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
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $loginBut = $_POST['loginBut'];
        $submitBut = $_POST['submitBut'];
    
    
            //declare whether you want to login or signup
               if (isset($submitBut))
            	{
            	     echo 'register button is clicked';
            		$sql = "INSERT INTO login (username, email, password) VALUES ('$username', '$email', '$password')";
                    $conn->exec($sql);
                    
                    
            	}else if (isset($loginBut))
            	{
            	     //$sql = "SELECT `id`, `username`, `email`, `password` FROM `login` WHERE `username` = '$username'";
                     //$conn->exec($sql);
             }
             
    } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "<p style='color: red;'>$error</p>";
    }
?>

