<?php
require_once('connect.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>register</title>
        <meta charset="utf-8" />
        
        <link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat:700" rel="stylesheet">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <link href="style.css" rel="stylesheet" />
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a>
    <img id="logo" src="img/Asset%202@4x.png"  alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class ="mnavlink nav-link" href="#">ABOUT <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item active">
        <a class ="mnavlink nav-link" href="#">GET STARTED <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item active">
        <a class ="mnavlink nav-link" href="#">CONTACT <span class="sr-only">(current)</span></a>
      </li>

    </ul>
      <button class="login btn btn-outline-success my-2 my-sm-0" type="submit">LOGIN</button>
      <button class="signup btn btn-outline-success my-2 my-sm-0" type="submit">SIGN UP</button>

  </div>
</nav>

        <div id="topspace" class="container">
              <div id="regibox">
                  <p id="imgcenter"><img id="beavver" alt='beavverLogo' src="img/Asset%201@4x.png"/></p>
                  <form>
                      <div class="form-group">
                          <p class="regititle">New to us? <br/>Sign up now</p>
                      </div>
                
                      <div class="form-group">
                          <input class="regiinput form-control" type="text"  placeholder="First Name" id='username' name='username'>
                          <hr class="dashline">
                      </div>
                      <div class="form-group">
                          <input type="text" class="regiinput form-control" placeholder="Last Name">
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
                        <input  type="password" class="regiinput form-control" placeholder="Confirm Password">
                        <hr class="dashline">
                      </div>
<!--
                      <div class="form-check">
                        <label id="rmbme" class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                          Remember Me
                        </label>
                      </div>
                      
-->
                      <button type="submit" class="msubmit2 btn btn-primary">
                          <img id="linkedinbtn" alt='linkedInLogo' src="img/linkedin-logo.svg">
                          &nbsp;Login with LinkedIn
                      </button>
                     
                      
                      <br/>
                      <button type="submit" class="msubmit btn btn-primary" id='submitBut' name='submitBut' formaction="registeredProfile.php">Submit</button>
                       
                  </form>
              </div>
            </div>
        

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>