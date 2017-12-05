<?php
require_once('connect.php');
require_once('register-db.php');

session_start();
//console.log($_SESSION);
//phpinfo();
//exit;

?>

<!DOCTYPE html>

<html lang="en">
  <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="google-signin-client_id" content="865984037107-0laeq4id47er4dn2s10kf547j5ebp5f1.apps.googleusercontent.com">
     <meta name="google-signin-client_id" content="651246939702-uhm0eltj2jfa6ipjt9hvtpisr94pqla7.apps.googleusercontent.com">
 
     
    <title>Beavver</title>

<!-- Bootstrap -->  
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>" />   
       <script src="https://apis.google.com/js/platform.js" async defer></script>

  </head>
  <body>
    <?php 
            if (empty($_SESSION["user"])) {
                include 'header-logout.php';
                header("Location: http://beavver.taliawalkey.ca/login-warning.php");
                //die();
            } else {
                include 'header-login.php';
            }
    ?>   
 <div>
      
    </div>

<div class="content">
    <img src="img/pattern.jpg" class="pattern">
    <br/><br/>
    <!-- BREADCRUMBS -->
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Register</li>
      </ol>
    </nav>
    
 <div id="topspace" class="containerRegForm">
              <div id="regibox">
                  <p id="imgcenter"><img id="beavver" alt='beavverLogo' src="img/Asset%201@4x.png"/></p>
                  
<!-- IMPORTANT TO HAVE THIS ON EVERY FORM TO SEND TO DATABASE -->
            <form id="registerForm" method='POST'>
                  <div class="form-group">
                      <p class="regititle">New to us? <br/>Sign up now</p>
            </div>
                    
            <div class="form-group">
                  <input class="regiinput form-control" type="text" placeholder="First Name" id='first_name' name='first_name' maxlength="10" required>
                  <hr class="dashline">
            </div>
                          
<!--HIDDEN INPUT TO DECLARE LOGIN OR SIGNUP -->
                  <input type="hidden" value="reg" name="type" />
                          
            <div class="form-group">
                  <input type="text" class="regiinput form-control" placeholder="Last Name" id='last_name' name='last_name' maxlength="10" required>
                              <hr class="dashline">
            </div>
                          
            <div class="form-group">
                  <input  type="email" class="regiinput form-control" id="exampleInputEmail1" placeholder="Enter email" name='email' required>
                  <hr class="dashline">
            </div>
           <div class="form-group">
                  <input type="password" class="regiinput form-control" placeholder="Password" name="password" id="pass1">
                  <hr class="dashline" required>
           </div>
           <div class="form-group">
                  <input  type="password" class="regiinput form-control" placeholder="Confirm Password" name="confirm_password" id="pass2" required>
                  <hr class="dashline">
           </div>
<!-- Register Submit Button -->                  
                      <br/>
                      <button type="submit" class="msubmit btn btn-primary" id='submitBut' name='submitBut' onclick=validationFunc() type='log'>Submit</button>
                      <br/><br/><br/>
                      
                <div class="row">
                    <div class="col-md-4">
                        <div class="gray-line"></div>
                    </div>
                    <div class="col-md-4">
                        <h4 class="or">Sign in with Google:</h4>
                    </div>
                    <div class="col-md-4">
                        <div class="gray-line"></div>
                    </div>
                </div>  
                <br/>
<!--Google SignIn -->
<!--HIDDEN INPUT TO DECLARE LOGIN OR SIGNUP -->
                 <input type="hidden" value="gmailReg" name="type" />
                <form id="gmailForm" method='POST'>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="g-signin2" data-onsuccess="onSignIn" id="GoogleLogin" type='gmailReg'></div> 
                    </div>
                    <div class="col-md-4"></div>
                </div> 
                </form>
           
<!--end Google SignIn -->
                      
<!--formaction="registeredProfile.php"-->
                  </form>
              </div>
            </div>
        

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
            </div>  

            <div><?php include 'footer.php';?></div>
            
<!--send Beavver Login to DB -->        
        <script>
        var obj;
        $(document).ready(function(){
            document.getElementById("registerForm").addEventListener("submit", function(ev){
                ev.preventDefault();
                $.post("register-db.php",
                    $("#registerForm").serialize(), 
                    function(resp){
                    var obj = JSON.parse(resp);
                    console.log(obj);
                    if(obj.status == 1){
                        }
                    }
                    
                )
            });
        });
        
//send Gmail Login to DB       
        var obj;
        $(document).ready(function(){
            document.getElementById("GoogleLogin").addEventListener("submit", function(ev){
                console.log("gmail sent to db");
                ev.preventDefault();
                $.post("register-db.php",
                    $("#gmailForm").serialize(), 
                    function(resp){
                    var obj = JSON.parse(resp);
                    console.log(obj);
                    if(obj.status == 1){
                        }
                    }
                )
            });
        });


<!--start SESSION --> 
              <script>
                 document.getElementById("submitBut").onclick = function () {
                    console.log("CLICKED");
                    //location.href = "landingLogin.php";
                 var fd = new FormData();
                    fd.append("email", document.getElementById("exampleInputEmail1").value);
                    fd.append("type", "log");
                    fd.append("password", document.getElementById("mpass").value);
                
                    fetch("register-db.php",{
                        credentials: 'same-origin',
                        method:"POST",
                        body:fd,
                        credentials:'same-origin'
                    }).then((resp)=>{return resp.text()}).then((json)=>{console.log(json)});
                 };
                //get Gmail Register Information        
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
             console.log('Given Name: ' + profile.getGivenName());
             console.log('Family Name: ' + profile.getFamilyName());
             console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
              var fd = new FormData();
                            fd.append("email", profile.getEmail());
                            fd.append("first_name", profile.getGivenName());
                            fd.append("last_name", profile.getFamilyName());
                            fd.append("type", "log");
                            fetch("googleSession.php",{
                                method:"POST",
                                body:fd,
                                credentials:'same-origin'
                        })
}
            </script>    
<!-- end SESSION -->      


//get Gmail Register Information
    </script>
    
<!-- Google SignIn SCRIPT -->
      <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
      
<!-- Password Validation -->
      <script>
                function validationFunc() {
                    
                var pass1 = document.getElementById("pass1").value;
                var pass2 = document.getElementById("pass2").value;
                var first_name = document.getElementById("first_name").value;
                var last_name = document.getElementById("last_name").value;
                var email = document.getElementById("exampleInputEmail1").value;
                    
                    
                    //window.location.href='landingLogin.php';
                    if (pass1 == pass2 && pass2 !="" && pass1 !="") {
                        if(first_name != ' ' && email != ' ' && last_name != ' '){
                        window.location.href="index.php";
                        console.log("register is clicked");
                   }}
                   
                   
                    /*else {
                        //alert("Passwords Do not match");
                        document.getElementById("pass1").style.color = "#E34234";
                        document.getElementById("pass2").style.color = "#E34234";
                    }*/
    }
            </script>
      
  </body>
</html>