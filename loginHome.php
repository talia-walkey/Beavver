<?php
require_once('connect.php');

  
     
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="styles.css">
    
</head>
    <body>
        <div>My Profile</div>


        <div class="container">
            <form class="form-signin" method="POST">
	            <p name='username'></p>
	   </div>
                <p name="email"> </p>
                <p name="password" ></p>
                
                <div> <?php 
        
                 echo $row['username'] . "<br>";
                 echo $row['email'] . "<br>";
                 echo $row['password'] . "<br>";
                 
                 echo $username . "<br>";
                 echo $email . "<br>";
                 echo $password . "<br>";
        
                 ?> </div>
            
        
    </body>
</html>




        

      
