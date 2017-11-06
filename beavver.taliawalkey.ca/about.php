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

    <!-- Fonts -->  
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat:700" rel="stylesheet">
      
    <!-- Custom Styling -->  
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>" />   
    <link rel="stylesheet" type="text/css" href="css/beavver-about.css?d=<?php echo time(); ?>" />   
      
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
        <!-- Make sure to change this to 'header-login.php' for pages that user is logged in -->
        <?php include 'header-logout.php';?>
    </div>
    
    <div class="content"> 
        
    <br/><br/>
    <!-- BREADCRUMBS -->
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">About Us</li>
      </ol>
    </nav>        
                
    <!-- PAGE HEADER -->    
    <div class="container-fluid about-content">
        <div class="row">
            <div class="col-md-1"></div>
    		<div class="col-md-10">
                <div class="orange-line"></div>
                <img src="img/gray-circle.png" class="gray-circle"/>
                <h1 class="page-title">ABOUT US</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
        
        <div class="row contact-landing">
            <div class="col-md-3"></div>
            <div class="col-md-3 about-beavver">
                <a href="#aboutbeavver">
                    <img src="img/logo.png" alt="Beavver Logo" class="img-responsive beavver-logo">
                    <h3>About Beavver</h3>
                    <p>Read our business philosophy.</p>
                </a>
            </div>
            <div class="col-md-3 about-team">
                <a href="#aboutteam">
                    <span class="glyphicon glyphicon-user"></span>
                    <h3>Team</h3>
                    <p>Meet our team members.</p>
                </a>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div> <!-- End of Page Header -->
    
    <!-- About Beavver -->
    <a name="aboutbeavver"></a>
    <div class="container-fluid about-beavver-section">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1>About Beavver</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
        
        <div class="row our-mission">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <img src="img/beavver-happy.svg" alt="About Beavver" class="our-mission-img">
            </div>
            <div class="col-md-5">
                <h3>Our Mission</h3>
                <p>Beavver is a digital product intended to help job seekers thrive on a highly competitive and automated market. Our mission is to give the right candidates a chance to stand out of the crowd and get the job they want, by giving them a tool not only to improve keywords, but also to improve their careers as a whole. </p>
            </div>
            <div class="col-md-1"></div>
        </div>
        
        <div class="row our-story">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <h3>Our Story</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>
            </div>
            <div class="col-md-5">
                <img src="http://via.placeholder.com/350x150" alt="About Beavver">
            </div>
            <div class="col-md-1"></div>
        </div>
    <a name="aboutteam"></a> <!-- this is here so it doesnt get cut off with smooth scrolling -->        
    </div> <!-- End of About Beavver -->
        
    <!-- About the Team -->
    <div class="container-fluid about-team-section">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1>Team of Experts</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
        
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 team-member">
                <img src="http://via.placeholder.com/350x400" alt="Alynna" class="img-responsive">
                <h3>Alynna Alcira</h3>
                <h4>Project Manager</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                <a target="_top" href="mailto:alynna.alcira@gmail.com"><span class="fa fa-envelope-o fa-2x contact-icons"></span></a>
                <a target="_blank" href="https://www.linkedin.com/in/alynnaalcira/"><span class="fa fa-linkedin-square fa-2x contact-icons"></span></a>
            </div>
            <div class="col-md-3 team-member">
                <img src="http://via.placeholder.com/350x400" alt="Tess" class="img-responsive">
                <h3>Tess Huang</h3>
                <h4>Developer</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                <a target="_top" href="malto:tess.xj.huang@gmail.com"><span class="fa fa-envelope-o fa-2x contact-icons"></span></a>
                <a target="_blank" href="https://www.linkedin.com/in/tess-huang/"><span class="fa fa-linkedin-square fa-2x contact-icons"></span></a>
            </div>
            <div class="col-md-3 team-member">
                <img src="http://via.placeholder.com/350x400" alt="Miria" class="img-responsive">
                <h3>Miria Huber</h3>
                <h4>Designer</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                <a target="_top" href="mailto:miria.huber@gmail.com"><span class="fa fa-envelope-o fa-2x contact-icons"></span></a>
                <a target="_blank" href="https://www.linkedin.com/in/miria-melo-huber/"><span class="fa fa-linkedin-square fa-2x contact-icons"></span></a>
            </div>
            <div class="col-md-1"></div>
        </div>
        
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 team-member">
                <img src="http://via.placeholder.com/350x400" alt="Yuqi" class="img-responsive">
                <h3>Yuqi Li</h3>
                <h4>Designer</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                <a target="_top" href="mailto:0yuthie0@gmail.com"><span class="fa fa-envelope-o fa-2x contact-icons"></span></a>
                <a target="_blank" href="https://www.linkedin.com/in/yuqi-li/"><span class="fa fa-linkedin-square fa-2x contact-icons"></span></a>
            </div>
            <div class="col-md-3 team-member">
                <img src="http://via.placeholder.com/350x400" alt="Talia" class="img-responsive">
                <h3>Talia Walkey</h3>
                <h4>Developer</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                <a target="_top" href="mailto:taliawalkey@gmail.com"><span class="fa fa-envelope-o fa-2x contact-icons"></span></a>
                <a target="_blank" href="https://www.linkedin.com/in/talia-walkey/"><span class="fa fa-linkedin-square fa-2x contact-icons"></span></a>
            </div>
            <div class="col-md-3">
            </div>
            <div class="col-md-1"></div>
        </div>
        
    </div>    
    
            <!-- UP ARROW BUTTON -->    
        <a href="#top" class="btn btn-lg btn-up" id="btn-up">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
    
    </div><!-- END OF CONTENT -->
          
    <div>
        <?php include 'footer.php';?>
    </div>  
      
    <script>
    $(document).ready(function() {
        
        // show the up button when templates-list is passed
        $("#btn-up").hide(); //hide button initially
        var topOfOthDiv = $(".about-beavver-section").offset().top;
        $(window).scroll(function() {
            if($(window).scrollTop() > topOfOthDiv) { //scrolled past the other div?
                $("#btn-up").show(200); //reached the desired point -- show div
            }
        });
        
        // hide the up button when clicked
        $("#btn-up").click(function(){
            $("#btn-up").hide();
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>