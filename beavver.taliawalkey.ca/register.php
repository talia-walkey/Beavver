<?php
session_start();
var_dump($_SESSION);
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
     <meta name="google-signin-client_id" content="c651246939702-uhm0eltj2jfa6ipjt9hvtpisr94pqla7.apps.googleusercontent.com">
 
     
    <title>Beavver</title>

<!-- Bootstrap -->  
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>" />   
       <script src="https://apis.google.com/js/platform.js" async defer></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                  <input  type="email" class="regiinput form-control" id="email1" placeholder="Enter email" name='email' required>
                  <hr class="dashline">
            </div>
           <div class="form-group">
                  <input type="password" class="regiinput form-control" placeholder="Password" name="password" id="pass1b">
                  <hr class="dashline" required>
           </div>
           <div class="form-group">
                  <input  type="password" class="regiinput form-control" placeholder="Confirm Password" name="confirm_password" id="pass2" required>
                  <hr class="dashline">
           </div>
<!-- Register Submit Button -->                  
                      <br/>
                      <button type="submit" class="msubmit btn btn-primary" id='submitBut' name='submitBut' type='log'>Submit</button>
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
                 <!--<input type="hidden" value="gmailReg" name="type" />-->
                 
                <form id="gmailForm" method='POST'>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="primaryBtn btn" id="GoogleLogin2">Gmail Registration</div> 
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
        
//send Gmail Login to DB       
        /*var obj;
        $(document).ready(function(){
            
        });*/
        
        
        document.getElementById("GoogleLogin2").addEventListener("click", function(){
            console.log("test");
            console.log(gapi.auth2)
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signIn().then((resp)=>{
                onSignIn2(auth2.currentUser.get());
            });
        });

//start SESSION --> 
    
                 document.getElementById("registerForm").onsubmit = function (ev) {
                     ev.preventDefault();
                if (document.getElementById("pass1b").value == document.getElementById("pass2").value){
                    console.log("CLICKED");
                    //window.location.href = "landingLogin.php";
                 var fd = new FormData();
                    fd.append("first_name", document.getElementById("first_name").value);
                    fd.append("last_name", document.getElementById("last_name").value);
                    fd.append("email", document.getElementById("email1").value);
                    fd.append("type", "reg");
                    fd.append("password", document.getElementById("pass1b").value);
                    fd.append("confirm_password", document.getElementById("pass2").value);
                
                    fetch("register-db.php",{
                        credentials: 'same-origin',
                        method:"POST",
                        body:fd
                    }).then((resp)=>{return resp.text()}).then((json)=>{console.log(json)
                        window.location.href = "landingLogin.php";
                    });
                        
                 }else{
                     alert("Your passwords do not match!");
                 }};
                 
                 
                   /* if(isset($_SESSION['user'])){
                        echo json_encode(array(
                            "hasSession"=>true
                        ));
                    } else {
                        $_SESSION stuff
                    };
                    */
                //get Gmail Register Information        
        function onSignIn2(googleUser) {
            
            var profile = googleUser.getBasicProfile();
            //window.location.href = "landingLogin.php";
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
             console.log('Given Name: ' + profile.getGivenName());
             console.log('Family Name: ' + profile.getFamilyName());
             console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
            // window.location.href="landingLogin.php";
              var fd = new FormData();
                            fd.append("email", profile.getEmail());
                            fd.append("first_name", profile.getGivenName());
                            fd.append("last_name", profile.getFamilyName());
                            fd.append("password", profile.getEmail());
                            fd.append("type", "reg");
                            fetch("register-db.php",{
                                method:"POST",
                                body:fd,
                                credentials:'same-origin'
                        }).then((resp)=>{
                            return resp.json();
                        }).then((json)=>{
                            if(json.status){
                                location.href="landingLogin.php";
                            }
                        });
}


document.getElementById("submitBut").onclick = function () {
    <?php
    $name = $_POST['first_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $from = 'Beavver <beavver.work@gmail.com>';
            $to = $email;
            $subject = 'Beavver Register Verification ';
            
            $body = "Hi $name! Thank you for registering with Beavver. These are your information details:\n E-Mail: $email\n Password:\n $password\n";
            
            mail($to, $subject, $body, $from);
    ?>
    
}

            </script>    
<!-- end SESSION -->      


//get Gmail Register Information
    </script>

<!-- Password Validation -->
      
  </body>
</html>