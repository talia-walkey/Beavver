<?php
session_start();
require_once('connect.php');
//var_dump($_SESSION);
console.log($_SESSION);
//phpinfo();

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
    
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>" />   
    <link rel="stylesheet" type="text/css" href="css/beavver-contact.css?d=<?php echo time(); ?>" />   

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
                header("Location: http://beavver.taliawalkey.ca/login-warning.php");
                //die();
            } else {
                include 'header-login.php';
            }
        ?>    
    </div>
    
    <div class="content"> 
        <img src="img/pattern.jpg" class="pattern">
    <br/><br/>
    <!-- BREADCRUMBS -->
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact</li>
      </ol>
    </nav>        
                
    <!-- PAGE HEADER -->    
    <div class="container-fluid templates-content">
        <div class="row">
            <div class="col-md-1"></div>
    		<div class="col-md-10 center-text">
                <h1>CONTACT</h1>
                <p>Please complete this form and someone will be in contact with you shortly.</p>
            </div>
            <div class="col-md-1"></div>
        </div>
        
        <div class="row contact-section">
            <div class="col-md-3"></div>
            <div class="col-md-6 contact-fields">
                <p class="sub-heading">Send us a message</p>
                <form method="post" action="contact.php">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Name</label>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                      
                    <div class="form-group col-md-6">
                      <label for="email">Email Address</label>
                      <input name="email" type="text" class="form-control" id="email" placeholder="Email Address">
                    </div>
                      
                  </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                  </div>
                    
                <div class="form-group">  
                  <input type="submit" class="btn primaryBtn" name="submit" value="Submit" id="submit">
                </div>
                <div class="form-group">
                    <!-- To make the contact form functional -->
                    <?php
//                    if (isset($_POST['name'])) {
//                        $name = $_POST['name'];
//                    }
//
//                    if (isset($_POST['email'])) {
//                        $email = $_POST['email'];
//                    }
//
//                    if (isset($_POST['message'])) {
//                        $message = $_POST['message'];
//                    }
//                    
//                        $from = 'From: Beavver Contact Form'; 
//                        $to = 'alynna.alcira@gmail.com'; 
//                        $subject = 'Beavver Contact Form';
//
//                        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
//
//                        if (isset($_POST['submit']) && ) {		
//                            if (mail ($to, $subject, $body, $from)) { 
//                            $result = "Your message has been sent!";
//                            echo $result;
//                        } else { 
//                           $result = "Something went wrong. Please try again!"; 
//                            echo $result;
//                           } 
//                        }
                    
                        if (isset($_POST["submit"])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];
                            $from = 'Beavver Contact Form'; 
                            $to = 'beavver.work@gmail.com'; 
                            $subject = 'Message from Beavver ';

                            $body = "From: $name\n E-Mail: $email\n Message:\n $message";

                            // Check if name has been entered
                            if (!$_POST['name']) {
                                $errName = 'Please enter your name';
                                echo "<p class='text-danger'>$errName</p>";           
                            }

                            // Check if email has been entered and is valid
                            if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                $errEmail = 'Please enter a valid email address';
                                echo "<p class='text-danger'>$errEmail</p>";
                            }

                            //Check if message has been entered
                            if (!$_POST['message']) {
                                $errMessage = 'Please enter your message';
                                echo "<p class='text-danger'>$errMessage</p>";
                            }

                    // If there are no errors, send the email
                    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
                        if (mail ($to, $subject, $body, $from)) {
                            $result='<div class="alert alert-success">Thank You! Your message has been sent.</div>';
                            echo $result;
                        } else {
                            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
                            echo $result;
                        }
                    }
                        }     
                    
                    ?>
                </div>
                </form>                                
            </div>
            <div class="col-md-3"></div>
        </div>
        
        
    </div> <!-- END OF CONTENT -->
    
    </div>
    
    <br/>
        
    <div>
        <?php include 'footer.php';?>
    </div>  
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>