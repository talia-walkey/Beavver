<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="google-signin-client_id" content="865984037107-0laeq4id47er4dn2s10kf547j5ebp5f1.apps.googleusercontent.com">
     
    <title>Beavver</title>

    <!-- Bootstrap -->  
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>" />   


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- NAV BAR -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img src="img/logo-text.png" id="logo" alt="logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">FEATURES</a></li>
            <li><a href="#">PRICING</a></li>
            <li><a href="#">HOW IT WORKS</a></li>
            <li><a href="#">SUPPORT</a></li>
          </ul>

        <!-- SEARCH -->    
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-search" id="nav-search"></span></a></li>
              
            <!-- LOGIN -->  
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <button class="secondaryBtn">
                      <span id="before-login-span">LOGIN</span>
                      <span class="caret"></span>
                </button>
            
                </a>
                        <ul class="dropdown-menu">
                <!-- BEFORE LOGIN -->      
                <div id="before-login" class="form-group">
                        <li><input type="text" class="form-control" placeholder="Your Email" id="email-input"></li>
                        <li><input type="text" class="form-control" placeholder="Password" id="password-input"></li>
                <form class="form-inline">
                        <div class="form-check">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember Me
                        </label>
                </div>
                      <button type="submit" class="btn primaryBtn" id="signin-button">Sign In</button>
                      
                      <!--Google SignIn -->
                    <button type="submit" class="btn primaryBtn" id="signin-button">
                    <div id="my-signin2"></div>
                        <script>
                        function onSuccess(googleUser) {
                            console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                        }
                        function onFailure(error) {
                            console.log(error);
                        }
                        function renderButton() {
                            gapi.signin2.render('my-signin2', {
                            'width': '100px',
                            'height': '25px',
                            'onsuccess': onSuccess,
                            'onfailure': onFailure
                        });
                        
                        }
                  </script>
                  </button>
                <!-- end Google SignIn -->
                      
                    </form>
                </div>
                </ul>
              </li>
              <li><button class="primaryBtn" id="signup-button" type="submit" formaction="register.php">SIGN UP</button></li>
             
             <script>
                 var butClick = document.getElementById('signup-button');
                     butClick.addEventListener("click", function(){
                         window.location.href = "register.php";
                     });
                 
                 //SEARCH BAR ANIMATION
                $(document).ready(function(){
                    $("#nav-search").click(function(){
                        $("#search-box").slideToggle();
                    });
                });

                //LOGIN NAVBAR

                var beforeLogin = document.getElementById("before-login"),
                    afterLogin = document.getElementById("after-login"),
                    signinBtn = document.getElementById("signin-button"),
                    beforeLoginName = document.getElementById("before-login-span"),
                    afterLoginName = document.getElementById("after-login-span"),
                    signOut = document.getElementById("signOut"),
                    signupBtn = document.getElementById("signup-button");

                signinBtn.addEventListener("click", function(){    
                    // changing the dropdown components
                    beforeLogin.style.display = "none";
                    afterLogin.style.display = "block";

                    // changing the name in the login button
                    beforeLoginName.style.display = "none";
                    afterLoginName.style.display = "inline-block";

                    signupBtn.style.display = "none";
                });

                signOut.addEventListener("click", function(){
                    loginBool = false;

                    // changing the dropdown components
                    beforeLogin.style.display = "block";
                    afterLogin.style.display = "none";

                    // changing the name in the login button
                    beforeLoginName.style.display = "inline-block";
                    afterLoginName.style.display = "none";

                    signupBtn.style.display = "block";
                });
                 
             </script>
             
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
</nav>

    <!-- SEARCH BAR -->  
    <div id="search-box" class="form-row align-items-center">
        <input type="text" class="form-control" placeholder="Search" id="search-input">  
        <a href="#"><span class="glyphicon glyphicon-search" id="search-icon"></span></a>
    </div>  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      
    </body>
</html>


<!-- Google SignIn SCRIPT -->
      <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

