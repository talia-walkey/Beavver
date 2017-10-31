<?php
require_once('connect.php');
    
    $servername = "beavver.taliawalkey.ca";
    $dblogin = "talia185_Beavver";
    $password = "D3Beavver!";
    $dbname = "talia185_cc";
  
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password= $_POST['confirm_password'];
       
//THIS IS HOW YOU PRINT THE ROWS INTO AN ARRAY!!!       
        $sql = "SELECT * FROM gd2";
        
        $statement = $conn->prepare($sql);
        $statement->execute();
       
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        print_r($rows);
        
//END PRINTING HERE!!!                   
 
    } catch(PDOException $e) {
       // echo "<p style='color: red;'>From the SQL code: $sql</p>";
        $error = $e->getMessage();
        //echo "<p style='color: red;'>$error</p>";
    }
?>