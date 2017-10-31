<?php
require_once('connect.php');
require_once('register-db.php');
?>

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
    

  </head>
  <body>
<div> 
<?php include 'header-logout.php';?>
</div>

<div class="content">
 <div id="topspace" class="containerRegForm">
              <div id="regibox">
                  <p id="imgcenter"><img id="beavver" alt='beavverLogo' src="img/Asset%201@4x.png"/></p>
                  
<!-- IMPORTANT TO HAVE THIS ON EVERY FORM TO SEND TO DATABASE -->
            <form id="registerForm" action='register-db.php' method='POST'>
                  <div class="form-group">
                      <p class="regititle">New to us? <br/>Sign up now</p>
            </div>
                    
            <div class="form-group">
                  <input class="regiinput form-control" type="text"  placeholder="First Name" id='first_name' name='first_name' required>
                  <hr class="dashline">
            </div>
                          
<!--HIDDEN INPUT TO DECLARE LOGIN OR SIGNUP -->
                  <input type="hidden" value="reg" name="type" />
                          
            <div class="form-group">
                  <input type="text" class="regiinput form-control" placeholder="Last Name" id='last_name' name='last_name' required>
                              <hr class="dashline">
            </div>
                          
            <div class="form-group">
                  <input  type="email" class="regiinput form-control" id="exampleInputEmail1" placeholder="Enter email" name='email' required>
                  <hr class="dashline">
            </div>
           <div class="form-group">
                  <input type="password" class="regiinput form-control" placeholder="Password" name="password">
                  <hr class="dashline" required>
           </div>
           <div class="form-group">
                  <input  type="password" class="regiinput form-control" placeholder="Confirm Password" name="confirm_password">
                  <hr class="dashline" required>
           </div>
                          
                      <!--<button type="submit" class="msubmit2 btn btn-primary">
                          <img id="linkedinbtn" alt='linkedInLogo' src="img/linkedin-logo.svg" >
                          &nbsp;Login with LinkedIn
                      </button>-->
                      
                    
<!--Google SignIn -->
      <!--      <button id="registerFormGmail" action='register-db.php' method='POST' class="msubmit2 btn btn-primary" type="submit">
                
            <div id="my-signin2"></div>

                  <script>
                        function onSuccess(googleUser) {
                            console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                       
                            window.location.href="myprofile.php";
                        }
                        function onFailure(error) {
                            console.log(error);
                        }
                        function renderButton() {
                            gapi.signin2.render('my-signin2', {
                            'width': '200px',
                            'onsuccess': onSuccess,
                            'onfailure': onFailure
                        });
                        }
                  </script>
                  
                  </button>-->
<!-- end Google SignIn -->
                
                      <br/>
                      <button type="submit" class="msubmit btn btn-primary" id='submitBut' name='submitBut' >Submit</button>
                      
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
        <script>
        $(document).ready(function(){
            document.getElementById("registerForm").addEventListener("submit", function(ev){
                //stops form from reloading
                ev.preventDefault();
                
                //load the page via javascript instead of going to the page itself
                $.post("register-db.php",
                    $("#registerForm").serialize(), 
                    function(resp){
                    var obj = JSON.parse(resp);
                    console.log(obj);
                    if(obj.status == 1){
                    //go to the next page
                    alert("You have successfully registered! Welcome to Beavver:)");
                    window.location.href="myprofile.php";
                        }
                    }
                )
            });
        });
        
        
    </script>
    
<!-- Google SignIn SCRIPT -->
      <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
      
  </body>
</html>