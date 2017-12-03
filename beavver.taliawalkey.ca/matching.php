<?php
session_start();
require_once('connect.php');
//var_dump($_SESSION);
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

    <title>Matching</title>

    <!-- Bootstrap -->  
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/beavver-matching.css" rel="stylesheet">

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

        <?php 
            if (empty($_SESSION["user"])) {
                include 'header-logout.php';
                header("Location: http://beavver.taliawalkey.ca/login-warning.php");
                die();
            } else {
                include 'header-login.php';
            }
        ?>   
      
    <div class="content">
        <img src="img/pattern.jpg" class="pattern">
    <br/><br/>

    <div>
        <!-- Make sure to change this to 'header-login.php' for pages that user is logged in -->
        <?php 
        //var_dump($_SESSION);
            if (empty($_SESSION["user"])) {
                include 'header-logout.php';
                include 'login-warning.php';
                exit();
            } else {
                include 'header-login.php';
            }
            
            
        ?>
    </div>
    
    <!-- BREADCRUMBS -->
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Current Page</li>
      </ol>
    </nav>        
                
    <!-- PAGE HEADER -->    
    <div class="container-fluid templates-content">
        <div class="row">
            <div class="col-md-1"></div>
    		<div class="col-md-10">
                <h1 class="page-title">MATCHING</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
        
    </div> <!-- END OF CONTENT -->
    
    <div id="root"></div>

    <br/>
    
        <!-- UP ARROW BUTTON -->    
        <a href="#top" class="btn btn-lg btn-up" id="btn-up">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>    
        
    <div>
        <?php include 'footer.php';?>
    </div>  
    
    </div>
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/header-footer.js"></script>
      
    <!--progressbarJS-->
    <script src="js/progressbar/progressbar.js"></script>
    
    <!--scroll down jquery-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
             $(function() {
             $('.msubmit').click (function() {
              $('html, body').animate({scrollTop: $('section.rsection').offset().top }, 'slow');
              return false;
            });
          });

    </script>
      
      <script>
    $(document).ready(function() {
        
        // show the up button when templates-list is passed
        $("#btn-up").hide(); //hide button initially
        var topOfOthDiv = $("#root").offset().top;
        $(window).scroll(function() {
            if($(window).scrollTop() > topOfOthDiv) { //scrolled past the other div?
                $("#btn-up").show(200); //reached the desired point -- show div
            }
        });
        
        // hide the up button when clicked
        $("#btn-up").click(function(){
            $("#btn-up").hide();
        });
        
        //hide the up button when at the top
        $(window).on("scroll", function() {
            var scrollPos = $(window).scrollTop();
            if (scrollPos <= 0) {
                $("#btn-up").fadeOut();
            } else {
                $("#btn-up").fadeIn();
            }
        });
        
        //Smooth Scrolling
        // Select all links with hashes
        $('a[href*="#"]')
          // Remove links that don't actually link to anything
          .not('[href="#"]')
          .not('[href="#0"]')
          .click(function(event) {
            // On-page links
            if (
              location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
              && 
              location.hostname == this.hostname
            ) {
              // Figure out element to scroll to
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              // Does a scroll target exist?
              if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 2000, function() {
                  // Callback after animation
                  // Must change focus!
                  var $target = $(target);
                  $target.focus();
                  if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                  } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                  };
                });
              }
            }
          });  
        
    });
    </script>  

    <link href="/build/static/css/main.d93e1e39.css" rel="stylesheet">
<script type="text/javascript" src="/build/static/js/main.31f30758.js"></script>
  </body>
</html>