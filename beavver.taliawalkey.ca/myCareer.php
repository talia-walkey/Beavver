<?php
session_start();
require_once('connect.php');
//var_dump($_SESSION['user']['first_name']);

//phpinfo();
//die;
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
    <link href="css/beavver_mycareer.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat:700" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>" />
      

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>        
    <a name="top"></a>   

    <div>
        <?php 
            if (empty($_SESSION["user"])) {
                include 'header-logout.php';
                include 'login-warning.php';
                exit();
            } else {
                include 'header-login.php';
            }
        ?> 
        
            <!-- for local development only -->
        <?php
//            include 'header-login.php';
        ?>  
    </div>
      
    <div class="content">
        <img src="img/pattern.jpg" class="pattern">
    <br/><br/>
    
    <!-- BREADCRUMBS -->
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">My Career</li>
      </ol>
    </nav>        
        
        
    <!-- PAGE HEADER -->    
    <div class="container-fluid templates-content">
        <div class="row">
            <div class="col-md-1"></div>
    		<div class="col-md-10">
                <h1 class="page-title">MY CAREER</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
        
    </div> <!-- END OF CONTENT -->
    
    <br/><br/>
    <div id="slogan">BEAVVER IS A TOOL INTENDED TO HELP JOB SEEKERS THRIVE ON A HIGH COMPETITIVE AND AUTOMATED MARKET.</div>    
    
    <br/><br/>
    <div class="cwrap">
    <div class="ccontrol">
        <br/>
        <label class="mycategory" for="slide-1-trigger">MY PROFILE</label><br/><br/><br/>
        <label class="mycategory" for="slide-2-trigger">MY RESUME</label><br/><br/><br/>
        <label class="mycategory" for="slide-3-trigger">MY JOB BANK</label><br/><br/><br/>
        <label class="mycategory" for="slide-4-trigger">SAVED COURSES</label>
    </div> 

    <input id="slide-1-trigger" type="radio" name="slides" checked>
    <section class="slide slide-one" id="myprofile-section">
        <div id="gray-bg1">
            <p class="ctitle">ACCOUNT INFORMATION</p>
            <div class="row">
              <div class="col">
                  <label>Username</label><br/>
                  <input id="bggray" type="text" class="profile-control" placeholder="Present Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $_SESSION['user']['email'];?>" disabled>
                  <br/> 
                  <label>First name</label><br/>
                  <input type="text" class="profile-control" placeholder="Type first name" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $_SESSION['user']['first_name'];?>"> 
                  <br/>
                  <label>New password</label><br/>
                  <input type="text" class="profile-control" placeholder="Type new password" aria-label="Username" aria-describedby="basic-addon1" > <br/> 
              </div> 
              <div class="col">
                  <label>&nbsp;</label><br/><br/>
                  <br/>
                  <label>Last name</label><br/>
                  <input type="text" class="profile-control" placeholder="Type last name" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $_SESSION['user']['last_name'];?>">
                  <br/>
                  <label>Email</label><br/>
                  <input type="text" class="profile-control" placeholder="Email address" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $_SESSION['user']['email'];?>">
              </div>
              
            </div>
        </div>
        <br/>
        <div id="gray-bg2">
            <p class="ctitle">CONNECT</p>
            <button id="revokeAllScopes" id="google-api">
                <img class="btnImg" src="img/google-logo-w.svg"/>
                DISCONNECT GOOGLE
            </button>
            
<!--disconnect gmail user -->           
            <script type="text/javascript">
                 document.getElementById("revokeAllScopes").addEventListener("click", function(){
                        var revokeAllScopes = function() {
                            auth2.disconnect();
                            }
                            console.log('removed the user');
                            location.href = "index.php";
                 });
              </script>       
<!--end disconnect gmail user -->                
            
            <button id="linkedin-api">
                <img class="btnImg" src="img/linkedin-logo-w.svg"/>
                Connect with LinkedIn
            </button>
        </div>
        <br/>
        <div id="imgcenter">
            <button id="inline" id="cleft" class="msubmit">SAVE CHANGE</button>
            <button  id="closeAccount" class="cancel" type='destroy'>X CLOSE MY ACCOUNT</button>
        </div><br/>
        
       
        <div class="bluebox">
            <p id="inline" class="ctitle">
                <b>HAVE QUESTIONS ABOUT YOUR ACCOUNT?</b> See our FAQs.
            </p>
            <a class="checkit" href="faqs.php">CHECK IT></a>
        </div>
    </section>
    
    <input id="slide-2-trigger" type="radio" name="slides">
    <section class="slide slide-two" id="myresume-section">
        <div id="gray-bg3">
            <br/><br/>
            <div class="row">
                <div class="col"><span><b>SOURCE</b></span></div>
                <div class="col"><span><b>DATE</b></span></div>
                <div class="col"><span><b>TITLE</b></span></div>
            </div>
            <p class="ctitle">You have no resumes saved. <br/>Start by clicking on "Add new" button below to choose your resume.</p>
            <br/><br/>
        </div><br/>
        <div id="ccenter">
            <div>
                <img id="plusicon" src="img/plus.svg"/>
                &nbsp;
                <span id="bold">ADD NEW</span>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button id="changeWidth" class="secondaryBtn">FROM MY COMPUTER</button>
                &nbsp;
                <button id="changeWidth" class="primaryBtn">FROM LINKEDIN</button>
            </div>
        </div><br/>
        <div class="bluebox">
            <p id="inline" class="ctitle">
                <b>NEED HELP WITH YOUR RESUME?</b> Start by downloading our resume templates.
            </p>
            <a class="checkit" href="resume-templates.php">CHECK IT></a>
        </div>
    </section>
   
    <input id="slide-3-trigger" type="radio" name="slides">
    <section class="slide slide-three" id="jobbank-section">
        <div id="gray-bg3">
            <br/><br/>
            <div class="row">
                <div class="col"><span><b>POSITION TITLE</b></span></div>
                <div class="col"><span><b>DATE</b></span></div>
                <div class="col"><span><b>COMPANY</b></span></div>
            </div>
            <p class="ctitle">You have no jobs saved yet</p>
            <br/><br/>
        </div><br/>
        <div id="ccenter">
            <div>
                <img id="plusicon" src="img/plus.svg"/>
                &nbsp;
                <span id="bold">ADD NEW</span>
            </div>
                <br/>
                <div>
                        <input class="jbinput" type="text" placeholder="POSITION TITLE">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="jbinput" type="text" placeholder="COMPANY NAME">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="jbinput" type="text" placeholder="JOB POSITION LINK">

                </div>
            
        </div><br/>
        <div class="bluebox">
            <p id="inline" class="ctitle">
                <b>ADDING A JOB IS SIMPLE:</b> Click on "Add new" and fill up with details or click on "Save job" while matching with your resume.
            </p>
            <a class="checkit" href="resume-templates.php">CHECK IT></a>
        </div>
    </section>
    
    <input id="slide-4-trigger" type="radio" name="slides">
    <section class="slide slide-four" id="savedcourses-section">
        <div id="gray-bg">
            <p class="ctitle"><b>UNDER CONSTRUCTION</b></p>
        </div>
    </section>
</div>
    <br/>
<!--
    <div>
        <?php include 'footer.php';?>
    </div>  
-->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!-- close Account -->    
    <script type="text/javascript">
                 document.getElementById("closeAccount").onclick = function () {
                    //location.href = "index.php";
                 var fd = new FormData();
                    fd.append("type", "destroy");
                    
                    console.log("destoy clicked");
                    fetch("register-db.php",{
                        credentials: 'same-origin',
                        method:"POST",
                        body:fd
                    }).then((resp)=>{return resp.text()}).then((json)=>{console.log(json)});
                 };
            </script> 
<!-- close Account --> 
    
  </body>
</html>