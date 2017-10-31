<?php
require_once('connect.php');
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

                <a href="#how-it-works">
                    <img src="img/play-button.svg" class="playBtn">
                    <span class="how-it-works-span">HOW IT WORKS</span>
                </a>
            </div>    
            
            <br/><br/>
            <img src="img/b-home.svg" alt="Beavver" class="zen-beavver">
            <br/><br/><br/><br/>
            <div class="myCircle">
                <img src="img/mouse-icon.svg" class="mouse-icon" alt="mouse">
            </div>    
        </div> <!-- End of Landing Content -->
        
        <!-- CTA Sections -->
        <a name="features"></a>
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
        
        <!-- Pricing -->
        <a name="pricing"></a>
        <div class="container-fluid pricing-info">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1>PRICING</h1>
                    <p class="pricing-text">There's so much more to love inside Beavver. <br/>
                    Here are the benefits of being a standard user.</p>
                </div>
                <div class="col-md-1"></div>
            </div>
            
            <div class="row pricing-table">
                <div class="col-md-1"></div>
                <div class="col-md-5 free-info">
                    <h2>FREE</h2>
                    <p class="pricing-free">                    <span class="gray-pricing dollar-sign">$</span>0<span class="gray-pricing">/mo</span>
                    </p>
                    <div class="pricing-features">
                        <div class="checkmark"><span class="glyphicon glyphicon-ok"></span></div>
                        <p class="features-text">Free Forever</p>
                        <br/>
                        <div class="checkmark"><span class="glyphicon glyphicon-ok"></span></div>
                        <p class="features-text">5 Match Rate Calculations / month</p>
                        <br/>
                        <div class="checkmark"><span class="glyphicon glyphicon-ok"></span></div>
                        <p class="features-text">5 Keyword Comparisons / month</p>
                        <br/>
                        <div class="checkmark"><span class="glyphicon glyphicon-ok"></span></div>
                        <p class="features-text">Limited Access to Online Courses</p>
                        <br/>
                        <div class="checkmark"><span class="glyphicon glyphicon-ok"></span></div>
                        <p class="features-text">3 ATS Friendly Resume Templates</p>
                        <br/>
                        <div class="checkmark"><span class="glyphicon glyphicon-ok"></span></div>
                        <p class="features-text">Awesome Support</p>
                        <br/>                        
                    </div>
                    <button class="secondaryBtn longerBtn">YOUR CURRENT PLAN</button>    
                </div>  
                <div class="col-md-5 standard-info">
                <h2>STANDARD</h2>
                    <p class="pricing-standard">                    <span class="blue-pricing dollar-sign">$</span>29.95<span class="blue-pricing">/mo</span>
                    </p>
                    <div class="pricing-features">
                        <div class="checkmark"><span class="glyphicon glyphicon-ok"></span></div>
                        <p class="features-text">Unlimited Match Rate Comparisons</p>
                        <br/>
                        <div class="checkmark"><span class="glyphicon glyphicon-ok"></span></div>
                        <p class="features-text">Unlimited Keyword Comparisons</p>
                        <br/>
                        <div class="checkmark"><span class="glyphicon glyphicon-ok"></span></div>
                        <p class="features-text">Unlimited Access to Online Courses</p>
                        <br/>
                        <div class="checkmark"><span class="glyphicon glyphicon-ok"></span></div>
                        <p class="features-text">12 ATS Friendly Resume Templates</p>
                        <br/>
                        <div class="checkmark"><span class="glyphicon glyphicon-ok"></span></div>
                        <p class="features-text">Even More Awesome Support</p>
                        <br/>
                        <div class="checkmark"><span class="glyphicon glyphicon-ok"></span></div>
                        <p class="features-text">..and so much more!</p>
                        <br/>                        
                    </div>
                    <button class="primaryBtn longerBtn">GET STARTED</button>
                </div>
                <div class="col-md-1"></div>
                
            </div>
        </div> <!-- End of Pricing -->
        
    </div>  <!-- End of Content -->
    
      
    <!-- Clouds -->  
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