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
<!--    <link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat:700" rel="stylesheet">-->
    
<!--    <link href="style.css" rel="stylesheet" />-->
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>" />      


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <!-- FOOTER -->
    <div id="footer">
        
        <!-- NEWLETTER -->
        <div class="container">
          <div class="row newsletter-row">
            <div class="col-6 col-sm-6">
              <p>SUBSCRIBE TO NEWSLETTER</p>
            </div>
            <div class="col-6 col-sm-6">
                <div id="email-box" class="form-row align-items-center">
                    <button id="newsletter-button" data-container="body" data-toggle="popover" data-placement="top" data-content="Coming Soon!">
                        <span class="glyphicon glyphicon-envelope" id="envelope-icon"></span>
                    </button>
                    <input type="text" class="form-control" placeholder="E-mail" id="email-footer-input">  
                </div>  
            </div>
          </div>
        </div>
        
        <hr/>
        
        <!-- FOOTER LINKS --> 
        <nav class="navbar navbar-default fixed-bottom">
          <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="index.php">
                    <img src="img/logo-text-white.png" id="logo" alt="logo">
                  </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav footer-nav">
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="faqs.php">FAQ</a></li>
                  </ul> 
                </div>
              
              
                <div class="collapse navbar-collapse"></div>
            </div>  
            
        </nav>
        
        <div class="container">
          <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10 center-text">
                <p class="copyright-msg">© 2017 Beavver. All rights reserved.</p> 
            </div>
            <div class="col-md-1">
            </div>
          </div>
        </div>
    </div> <!-- end of footer -->  
      
    <script>
    // popover function    
    $(document).ready(function() {
        $(function () {
          $('[data-toggle="popover"]').popover()
        })  
    });
    </script>  
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/bootstrap.min.js"></script>  
    <script src="js/bootstrap.bundle.min.js"></script>  
    <script src="js/bootstrap.bundle.js"></script>

  </body>
</html>