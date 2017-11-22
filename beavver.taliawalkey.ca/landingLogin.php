<?php
session_start();
require_once('connect.php');
var_dump($_SESSION);
console.log($_SESSION);

//phpinfo();
exit;
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
      
      <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Montserrat:700" rel="stylesheet">
      
      
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css?d=<?php echo time(); ?>" />   
    <link rel="stylesheet" type="text/css" href="css/beavver-home.css?d=<?php echo time(); ?>" />   

   
  </head>
  <body>
    <div>
        <?php include 'header-login.php';?>
    </div>

    <div id="content">
        <!-- Landing Content -->
        <div id="landing-content" class="container-fluid">
            <div class="landing-text">
                <h1>RESUME AND CAREER BOOSTER</h1>
                <p>Say hello to Beavver, a tool to help you thrive on a high competitive and automated job market.</p>
            </div>
            <div class="landing-buttons">
                <a id="mystart-button">
                    <button class="btn ctaBtn" type="submit">START NOW!</button>
                </a> 

                <a href="#how-it-works" id="how-it-works-link">
                    <img src="img/play-button.svg" class="playBtn">
                    <span class="how-it-works-span">HOW IT WORKS</span>
                </a>
            </div>    
            
            <img src="img/b-home.svg" alt="Beavver" class="zen-beavver">
            <br/><br/>        
            <div class="myCircle">
                <a href="#about-beavver"><img src="img/mouse-icon.svg" class="mouse-icon" alt="mouse"></a>
                <a name="about-beavver"></a> <!-- this is here because smooth scrolling enabled makes the first feature cut off when clicked -->
            </div>    
            
        </div> <!-- End of Landing Content -->       
        
        <!-- About Beavver -->
        <div class="about-beavver container-fluid">
            <div class="row about-title">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1>WHAT IS BEAVVER?</h1>
                </div>
                <div class="col-md-1"></div>
            </div>
            
            <div class="row about-info">
                <div class="col-md-6">
                    <img src="img/beavver-matchingpage.png" class="img-responsive img-matching-page">
                </div>
                <div class="col-md-5 about-text">
                        <p>A digital tool built to make the resume customization more comfortable for job seekers who want to stand out on recruitment processes, and also plan their careers. This is the main idea behind Beavver. And it's making the job application process less painful for lots of people from various industries. 
                        <br/><br/>
                        You don’t have to spend long hours researching and customizing your resume — <b>Beavver does all the hard work for you!</b>
                        </p>
                        <a href="about.php">SEE MORE           <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <div class="col-md-1"></div>
            </div> 
            
            <div class="row about-bottom">
            </div>
            
            <a name="features"></a><!-- this is here so it doesnt get cut off during smooth scrolling -->

        </div> <!-- End of About Beavver -->
        
        <!-- Features -->
        <div class="container-fluid features-section">
            <div class="row features-title">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1>FEATURES</h1>
                </div>
                <div class="col-md-1"></div>
            </div>
            
            <div class="row how-to-steps">
                <div class="col-md-4">
                    <div class="howto-images">
                        <div class="circle-container">
                            <img src="img/resume-screening.svg" class="img-responsive img-features">
                        </div>
                    </div>  
                    <div class="features-text">        
                        <h4>RESUME SCREENING</h4>
                        <p>Compare your resume with the desired job position and get a compatibility matching score based on job keywords.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="howto-images">
                        <div class="circle-container">
                            <img src="img/writing-tips.svg" class="img-responsive img-features">
                        </div>
                    </div>
                    <div class="features-text">
                        <h4>WRITING TIPS</h4>
                        <p>No more writer’s block! Get tips with career specific terms in which all employers are looking for and more.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="howto-images">
                        <div class="circle-container">
                            <img src="img/courses.svg" class="img-responsive img-features img-courses">
                        </div>
                    </div> 
                    <div class="features-text">
                        <h4>COURSE RECOMMENDATIONS</h4>
                        <p>Based on your current resume and your dream job, get a list of short-term courses that will give the skills you need.</p>
                    </div>    
                </div>
            </div>
            
            <div class="row how-to-steps">
                <div class="col-md-4">
                    <div class="howto-images">
                        <div class="circle-container">
                            <img src="img/resume-templates.svg" class="img-responsive img-steps">
                        </div>
                    </div>  
                    <div class="features-text">        
                        <h4>RESUME TEMPLATES</h4>
                        <p>Save time and build a screening-proof resume based on our templates.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="howto-images">
                        <div class="circle-container">
                            <img src="img/career-planning.svg" class="img-responsive img-steps">
                        </div>
                    </div>
                    <div class="features-text">
                        <h4>CAREER PLANNING</h4>
                        <p>Pick your dream job position and set as a career goal. Beavver will check what’s missing on your resume and provide you a checklist and a timeline to keep you on track.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="howto-images">
                        <div class="circle-container">
                            <img src="img/free.svg" class="img-responsive img-features">
                        </div>
                    </div> 
                    <div class="features-text">
                        <h4>FREE FOREVER</h4>
                        <p>Beavver is free to use, no locked features and no subscriptions. It’s our gift for all applicants.</p>
                    </div>    
                </div>
            </div>            
            
        </div> <!-- End of Features -->
        
        <!-- Benefits -->
        <div class="row benefits-section">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1>BENEFITS</h1>
                </div>
                <div class="col-md-1"></div>
        </div>
        <div class="row job-keywords">
            <div class="col-md-6">
                <img src="img/beavver-computer.svg" class="img-responsive beavver-images">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 section-text">
                <div class="circle-num">1</div>
                <span class="section-title">JOB KEYWORDS</span>
                <h2>Spend less time customizing resumes!</h2>
                <p>Beavver makes customizing your resume for your dream job easier with a simple interface that allows you to see what keywords you need to change upon.</p>
            </div>
            <div class="col-md-1"></div>
        </div>
        
        <div class="row matching-rate">
            <div class="col-md-1"></div>
            <div class="col-md-4 section-text">
                <div class="circle-num">2</div>
                <span class="section-title">MATCHING RATE</span>
                <h2>Get your resume ready for automated softwares.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse egestas ligula a efficitur ultrices.</p>
            </div>
            <div class="col-md-6">
                <img src="img/beavver-print.svg" class="img-responsive beavver-images">
            </div>
        </div>
        
        <div class="row career-path">
            <div class="col-md-6">
                <img src="img/beavver-happy.svg" class="img-responsive beavver-images">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 section-text">
                <div class="circle-num">3</div>
                <span class="section-title">CAREER PATH</span>
                <h2>Pursure your dream job by keeping track of your career.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse egestas ligula a efficitur ultrices.</p>
            </div>
            <div class="col-md-1"></div>
        </div> 
        <!-- End of Benefits -->
        
        <!-- How It Works -->
        <a name="how-it-works"></a>
        <div class="how-it-works container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1>HOW IT WORKS</h1>
                    <p class="how-it-works-text">See how easy it is to customize your resume!</p>
                </div>
                <div class="col-md-1"></div>
            </div>
            
            <div class="row how-to-steps">
                <div class="col-md-4">
                    <div class="howto-images">
                        <div class="circle-steps">1</div>
                        <div class="circle-container">
                            <img src="img/step1.svg" class="img-responsive img-steps">
                        </div>
                    </div>    
                    <h4>ADD YOUR INFORMATION</h4>
                    <p class="steps-text">Select a job description of your dream job.</p>
                </div>
                <div class="col-md-4">
                    <div class="howto-images">
                        <div class="circle-steps">2</div>
                        <div class="circle-container">
                            <img src="img/step2.svg" class="img-responsive img-steps">
                        </div>
                    </div>
                    <h4>GET A SCORE AND KEYWORDS LIST</h4>
                    <p class="steps-text">Match with your resume and get to know what you need to get there</p>
                </div>
                <div class="col-md-4">
                    <div class="howto-images">
                        <div class="circle-steps">3</div>
                        <div class="circle-container">
                            <img src="img/step3.svg" class="img-responsive img-steps step-3">
                        </div>
                    </div>    
                    <h4>CHANGE YOUR RESUME AND SUBMIT</h4>
                    <p class="steps-text">Edit your resume and apply to the job position and keep track of it on the My Career Page.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <img src="img/video-placeholder.png" class="img-responsive howto-video" alt="How It Works Video">
                </div>
                <div class="col-md-1"></div>
            </div>
        </div> <!-- End of How It Works -->

        
            <!-- UP ARROW BUTTON -->    
        <a href="index.php#top" class="btn btn-lg btn-up" id="btn-up">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        
    </div>  <!-- End of Content -->
    
      
    <!-- Bottom CTA -->
    <div class="row bottom-cta">
        <div class="col-md-12">
        <h1>GET STARTED FOR FREE</h1>
        <p>No hidden fees and no locked features, Beavver is all yours to use. Register to get started!</p>
        <a href="register.php">
            <button class="btn ctaBtn" type="submit">START NOW!</button>
        </a>    
        </div>    
    </div>  
    <div class="row bottom-clouds">
        <div class="col-md-12">
            <object type="image/svg+xml" data="img/bottom-clouds.svg">
                <img src="img/bottom-clouds.svg" alt="clouds" class="img-responsive">
            </object>
        </div>
    </div> <!-- End of Clouds --> 

    <div>
        <?php include 'footer.php';?>
    </div>  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


<script>
    
                    var startBut = document.getElementById('mystart-button');
                    
                     startBut.addEventListener("click", function(){
                         console.log("clicked");
                         window.location.href = "scan.php";
                     });
    
    
    
</script>