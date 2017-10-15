<?php
require_once('connect.php');



?>

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
