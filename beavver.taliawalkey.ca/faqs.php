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
    <link rel="stylesheet" type="text/css" href="css/beavver-faqs.css?d=<?php echo time(); ?>" />   

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
        <img src="img/pattern.jpg" class="pattern">
    <br/><br/>
    <div class="page-header">
        <!-- BREADCRUMBS -->
        <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">FAQs</li>
          </ol>
        </nav>                
        
    <!-- PAGE HEADER -->    
    <div class="container-fluid templates-content">
        <div class="row">
            <div class="col-md-1"></div>
    		<div class="col-md-10 center-text">
                <h1>FREQUENTLY ASKED QUESTIONS</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div> <!-- END OF PATTERN -->    
        
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
    <script src="js/header-footer.js"></script>
  </body>
</html>