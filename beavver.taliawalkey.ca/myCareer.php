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
        <!-- Make sure to change this to 'header-login.php' for pages that user is logged in -->
        <?php include 'header-login.php';?>
    </div>
    
    <!-- BREADCRUMBS -->
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">My Career</li>
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
        <label class="mycategory" for="slide-1-trigger">Career Goal</label><br/><br/><br/>
        <label class="mycategory" for="slide-2-trigger">My Job Bank</label><br/><br/><br/>
        <label class="mycategory" for="slide-3-trigger">Saved Courses</label><br/><br/><br/>
        <label class="mycategory" for="slide-4-trigger">My Resume</label><br/><br/><br/>
        <label class="mycategory" for="slide-5-trigger">My Profile</label>
    </div>

    <input id="slide-1-trigger" type="radio" name="slides" checked>
    <section class="slide slide-one">
            <div id="gray-bg">
            <br/><br/>
            <p class="ctitle">Keep track of your career, choose what would you like to do and we will show you the path.</p>
            </div>
            <div id="stepwrap">
                
                    
                        <div id="stepimg1"></div>
                    
<!--
                <div>
                        <span>STEP1</span><br/>
                        <span>Select a job description of your dream job</span>
                    </div>
-->
              
                        <div id="stepimg2"></div>
                    
<!--
                <div>
                        <span>STEP2</span><br/>
                        <span>Match with your resume and get to know what you need to get there</span>
                    </div>
-->
                
                        <div id="stepimg3"></div>
                    
<!--
                <div>
                        <span>STEP3</span><br/>
                        <span>Save it, add a timelie and start to work on your career. Beavver will send you monthly email to remind you</span>
                    </div>
-->
                <br/><br/><br/>
                
            
                
                <button class="msubmit">START NOW</button>
            </div>
            
        
            
        
        
    </section>
    <input id="slide-2-trigger" type="radio" name="slides">
    <section class="slide slide-two">
        <h1>Headline Two</h1>
    </section>
    <input id="slide-3-trigger" type="radio" name="slides">
    <section class="slide slide-three">
        <h1>Headline Three</h1>
    </section>
    <input id="slide-4-trigger" type="radio" name="slides">
    <section class="slide slide-four">
        <h1>Headline Four</h1>
    </section>
    <input id="slide-5-trigger" type="radio" name="slides">
    <section class="slide slide-five">
        <h1>Headline Five</h1>
    </section>

</div>
        
    <br/>
        
<!--
    <div>
        <?php include 'footer.php';?>
    </div>  
-->
    
    </div>
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/header-footer.js"></script>
  </body>
</html>