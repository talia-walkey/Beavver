<?php
require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Beavver</title>

    <!-- Bootstrap -->  
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat:700" rel="stylesheet">
    
        <link href="style.css" rel="stylesheet" />


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
            <li><a href="#">SUPPORT</a></li>
            <li><a href="#">HOW IT WORKS</a></li>
          </ul>

        <!-- SEARCH -->    
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-search" id="nav-search"></span></a></li>
              
            <!-- LOGIN -->  
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <button class="secondaryBtn">
                      <span id="before-login-span">LOGIN</span>
                      <span id="after-login-span">Hi, <span id="firstname">MyName</span>!</span>
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
                    </form>
                </div>
                <!-- AFTER LOGIN -->  
                <div id="after-login">
                    <li><a href="#">My Career</a></li>
                    <li><a href="#">My Profile</a></li>
                    <li><a href="#">My Plan</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#" id="signOut">Sign Out</a></li>
                </div>
              </ul>
            </li>
            <li><button class="primaryBtn" id="signup-button" type="submit" formaction="register.php">SIGN UP</button></li>
             
             <script>
                 var butClick = document.getElementById('signup-button');
                     butClick.addEventListener("click", function(){
                         window.location.href = "new.php";
                     });
                 
             </script>
             
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
</nav>




 <div id="topspace" class="containerRegForm">
              <div id="regibox">
                  <p id="imgcenter"><img id="beavver" alt='beavverLogo' src="img/Asset%201@4x.png"/></p>
                  
                  <!-- IMPORTANT TO HAVE THIS ON EVERY FORM TO SEND TO DATABASE -->
                      <form id="registerForm" action='connect.php' method='POST'>
                      <div class="form-group">
                          <p class="regititle">New to us? <br/>Sign up now</p>
                      </div>
                
                      <div class="form-group">
                          <input class="regiinput form-control" type="text"  placeholder="First Name" id='first_name' name='first_name'>
                          <hr class="dashline">
                      </div>
                      
    <!--HIDDEN INPUT TO DECLARE LOGIN OR SIGNUP -->
                      <input type="hidden" value="reg" name="type" />
                      
                      <div class="form-group">
                          <input type="text" class="regiinput form-control" placeholder="Last Name" id='last_name' name='last_name'>
                          <hr class="dashline">
                      </div>
                      
                      <div class="form-group">
                        <input  type="email" class="regiinput form-control" id="exampleInputEmail1" placeholder="Enter email" name='email'>
                        <hr class="dashline">
                      </div>
                      <div class="form-group">
                        <input type="password" class="regiinput form-control" placeholder="Password" name="password">
                        <hr class="dashline">
                      </div>
                      <div class="form-group">
                        <input  type="password" class="regiinput form-control" placeholder="Confirm Password" name="confirm_password">
                        <hr class="dashline">
                      </div>

                      <button type="submit" class="msubmit2 btn btn-primary">
                          <img id="linkedinbtn" alt='linkedInLogo' src="img/linkedin-logo.svg">
                          &nbsp;Login with LinkedIn
                      </button>
                     
                      <br/>
                      <button type="submit" class="msubmit btn btn-primary" id='submitBut' name='submitBut' >Submit</button>
                      
                      <!--formaction="registeredProfile.php"-->
                       
                  </form>
              </div>
            </div>
        

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    
    <!-- SEARCH BAR -->  
    <div id="search-box" class="form-row align-items-center">
        <input type="text" class="form-control" placeholder="Search" id="search-input">  
        <a href="#"><span class="glyphicon glyphicon-search" id="search-icon"></span></a>
    </div>  
      
    <!-- FOOTER -->
    <div id="footer">
        
        <!-- NEWLETTER -->
        <div class="container">
          <div class="row newsletter-row">
            <div class="col-lg-6">
              <p>SUBSCRIBE TO NEWSLETTER</p>
            </div>
            <div class="col-lg-6">
                <div id="email-box" class="form-row align-items-center">
                    <a href="#"><button id="newsletter-button"><span class="glyphicon glyphicon-envelope" id="envelope-icon"></span></button></a>
                    <input type="text" class="form-control" placeholder="E-mail" id="email-footer-input">  
                </div>  
            </div>
          </div>
        </div>
        
        <hr/>
        
        <!-- FOOTER LINKS -->
        <nav class="navbar navbar-default">
          <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">
                    <img src="img/logo-text-white.png" id="logo" alt="logo">
                  </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav footer-nav">
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="#">SUPPORT</a></li>
                    <li><a href="#">TO BE DEFINED</a></li>
                  </ul> 
                </div>
            </div>  
        </nav>
        
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-8">
                <p class="copyright-msg">© 2017 Beavver. All rights reserved.</p> 
            </div>
            <div class="col-lg-4">
            </div>
          </div>
        </div>
        
    </div> <!-- end of footer -->    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/header-footer.js"></script>
    
    
    <script>
        $(document).ready(function(){
            document.getElementById("registerForm").addEventListener("submit", function(ev){
                //stops form from reloading
                ev.preventDefault();
                
                //load the page via javascript instead of going to the page itself
                $.post("connect.php",
                    $("#registerForm").serialize(), 
                    function(resp){
                    var obj = JSON.parse(resp);
                    console.log(obj);
                    if(obj.status == 1){
                    //go to the next page
                    alert("Go to the next page after successful registration");
                    window.location.href="registeredProfile.php";
                        }
                    }
                )
            });
        });
        
    </script>
  </body>
</html>