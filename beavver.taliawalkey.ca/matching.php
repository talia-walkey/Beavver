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
    <link href="css/matching.css" rel="stylesheet">

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
        <!-- Make sure to change this to 'header-login.php' for pages that user is logged in -->
        <?php 
        var_dump($_SESSION);
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
        
    
    <div class="content"> 
        
    <!-- PAGE HEADER -->    
    <div class="container-fluid templates-content">
        <div class="row">
            <div class="col-md-1"></div>
    		<div class="col-md-10">
                <div class="orange-line"></div>
                <img src="img/gray-circle.png" class="gray-circle"/>
                <h1 class="page-title">MATCHING</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
        
    </div> <!-- END OF CONTENT -->
    
    <div id="root"></div>

    <br/>
    
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
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
             $(function() {
             $('.msubmit').click (function() {
              $('html, body').animate({scrollTop: $('section.rsection').offset().top }, 'slow');
              return false;
            });
          });
    </script>-->

    <link href="/build/static/css/main.eeefae2a.css" rel="stylesheet">
<script type="text/javascript" src="/build/static/js/main.da334d1e.js"></script>
  </body>
</html>