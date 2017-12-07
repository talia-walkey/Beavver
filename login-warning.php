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
                //include 'header-logout.php';
            } else {
                include 'header-login.php';
            }
        ?>   
    </div>
    
    <script type='text/javascript'>

            (function()
            {
              if( window.localStorage )
              {
                if( !localStorage.getItem('firstLoad') )
                {
                  localStorage['firstLoad'] = true;
                  window.location.reload();
                  console.log('page is loaded');
                }  
                else
                  localStorage.removeItem('firstLoad');
              }
            })();

</script>
    
    
    <div class="content"> 
        <img src="img/pattern.jpg" class="pattern">
    <br/><br/>    
                
    <!-- PAGE HEADER -->    
    <div class="container-fluid templates-content">
        <div class="row">
            <div class="col-md-1"></div>
    		<div class="col-md-10 center-text">
                <br/>
                <h2>Oops! Please login or register to see this page!</h2>
                <h3>Make sure you entered the correct email and password.</h3>
                <button class="primaryBtn" >
                <a href='index.php'>Go Back</a>
                </button>
                <div style="height:40vh;"></div>
            </div>
            <div class="col-md-1"></div>
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
    <script src="js/header-footer.js"></script>
  </body>
</html>