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

    <title>Resume Templates | Beavver</title>

    <!-- Bootstrap -->  
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat:700" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>" />   
    <link rel="stylesheet" type="text/css" href="css/beavver-resume-templates.css?d=<?php echo time(); ?>" />   

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
    </div>
    
    <div class="content"> 
        <img src="img/pattern.jpg" class="pattern">
        <!-- BREADCRUMBS -->
        <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Resume Templates</li>
          </ol>
        </nav>        
        
    <!-- TEMPLATES INFO -->    
    <div class="container-fluid templates-content">
        <div class="row">
            <div class="col-md-1"></div>
    		<div class="col-md-10 center-text">
                <h1>RESUME TEMPLATES</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
        <br/><br/>
        <div class="row templates-info">
            <div class="col-md-1">
            </div>
            <div class="col-md-5 col-xs-6">
                <h2>Free Downloadable Resume Templates</h2>
                <p>Many companies are now using Applicant Tracking Systems to simplify their hiring process due to the massive volume of applications they receive. If you have that is not optimized for ATS, it is likely that companies will not even see your resume. As a member of Beavver, you have access to these free resume templates that are all ATS-friendly.</p>
            </div>	
            <div class="col-md-5">
                <img src="img/beavver-print.svg" class="templates-img" alt="graphic">			
            </div>
            <div class="col-md-1">
            </div>
        </div>	
    </div>  
        
    <!-- TEMPLATES LIST -->
    <div class="container-fluid templates-list text-center">    
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <ul class="list-inline">
                  <li class="list-inline-item templates-links">
                      <a href="#most-popular">MOST POPULAR</a>
                    </li>
                  <li class="list-inline-item templates-links">
                      <a href="#ats-optimized">ATS-OPTIMIZED</a>
                    </li>
                  <li class="list-inline-item templates-links" data-container="body" data-toggle="popover" data-placement="top" data-content="Coming Soon!"> 
                      <span class="coming-soon-link clean-link">CLEAN</span>
                    </li>
                  <li class="list-inline-item templates-links" data-container="body" data-toggle="popover" data-placement="top" data-content="Coming Soon!"> 
                      <span class="coming-soon-link creative-link">CREATIVE</span>
                    </li>
                </ul>    
            </div>	
            <div class="col-md-1">
            </div>
            <a name="most-popular"></a> <!-- this is here so it doesnt get cut off with the smooth scroll feature --> 

        </div>
    </div>
            
    <!-- MOST POPULAR -->
    <div class="container-fluid templates-content">
        <div class="row templates-info">
            <div class="col-md-1">
            </div>
            <div class="col-md-10 col-xs-10">
                <h2>Most Popular</h2>
                <p>These are the most popular resume templates as they can be used within any industry.</p>
            </div>	
            <div class="col-md-1">
            </div>
        </div>	
        
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 templates-gallery">
                <figure class="figure">
                    <a href="download.php?download_file=template-01.docx">
                      <img src="templates/template-01.jpg" class="figure-img img-fluid rounded" alt="Template One">
                      <figcaption class="figure-caption text-center">Template One</figcaption>
                    </a>
                </figure>
            </div>
            <div class="col-md-3 templates-gallery"> 
                <figure class="figure">
                    <a href="download.php?download_file=template-02.docx">
                      <img src="templates/template-02.jpg" class="figure-img img-fluid rounded" alt="Template Two">
                      <figcaption class="figure-caption text-center">Template Two</figcaption>
                    </a>
                </figure>
            </div>	
            <div class="col-md-3 templates-gallery">
                <figure class="figure">
                    <a href="download.php?download_file=template-03.docx">
                      <img src="templates/template-03.jpg" class="figure-img img-fluid rounded" alt="Template One">
                      <figcaption class="figure-caption text-center">Template Three</figcaption>
                    </a>
                </figure>
            </div>
            <div class="col-md-1"></div>            
        </div>
    </div>     
        
    <br/><br/><br/><br/>    
        
    <!-- ATS-OPTIMIZED -->
    <a name="ats-optimized"></a> 
    <div class="container-fluid templates-content gray-bg">
        <div class="row templates-info">
            <div class="col-md-1">
            </div>
            <div class="col-md-10 col-xs-10">
                <h2>ATS Optimized</h2>
                <p>These resumes are formatted to be ATS-proof.</p>
            </div>	
            <div class="col-md-1">
            </div>
        </div>	

        <div class="row templates-info">
            <div class="col-md-1"></div>
            <div class="col-md-3 templates-gallery">
                <figure class="figure">
                    <a href="download.php?download_file=template-04.docx">
                     <img src="templates/template-04.jpg" class="figure-img img-fluid rounded" alt="Template Four">
                      <figcaption class="figure-caption text-center">Template Four</figcaption>
                    </a>
                </figure>
            </div>
            <div class="col-md-3 templates-gallery"> 
                <figure class="figure">
                    <a href="download.php?download_file=template-05.docx">
                      <img src="templates/template-05.jpg" class="figure-img img-fluid rounded" alt="Template One">
                      <figcaption class="figure-caption text-center">Template Five</figcaption>
                    </a>
                </figure>
            </div>	
            <div class="col-md-3 templates-gallery">
                <figure class="figure">
                    <a href="download.php?download_file=template-06.docx">
                        <img src="templates/template-06.jpg" class="figure-img img-fluid rounded" alt="Template One">
                      <figcaption class="figure-caption text-center">Template Six</figcaption>
                    </a>
                </figure>
            </div>
            <div class="col-md-1"></div>            
        </div>
    </div>   
        
    <!-- UP ARROW BUTTON -->    
        <a href="#top" class="btn btn-lg btn-up" id="btn-up">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>

    </div> <!-- END OF CONTENT -->
      
    <div>
        <?php include 'footer.php';?>
    </div>  
      
    <script>
    $(document).ready(function() {
        
        // show the up button when templates-list is passed
        $("#btn-up").hide(); //hide button initially
        var topOfOthDiv = $(".templates-list").offset().top;
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
        
        //Popovers
        $(function () {
          $('[data-toggle="popover"]').popover()
        })
        
    });
    </script>  
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>