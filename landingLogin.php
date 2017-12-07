<?php
session_start();
require_once('connect.php');
var_dump($_SESSION);
//phpinfo();

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
    <link rel="stylesheet" type="text/css" href="css/beavver-landinglogin.css?d=<?php echo time(); ?>" />  
      
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">       
      
  </head>
  <body>
        <a name="top"></a>   
  
    <div>
        <?php 
//            if (empty($_SESSION["user"])) {
//               //include 'header-logout.php';
//               include 'login-warning.php';
//               exit();
//            } else {
//                include 'header-login.php';
//            }
        
            include 'header-login.php';
        ?>   
        
        
        <!--<script>
        window.onload = function () {
             if (! localStorage.justOnce) {
             localStorage.setItem("justOnce", "true");
             window.location.reload();
            }
        }
        </script>-->
        
        
    <!-- for local development only -->
        <?php
//            include 'header-login.php'
        ?>        

    </div>
    
    
    
    <div id="content">
        
        <!-- CARDS -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 center-text">
                    <h1 class="welcome">WELCOME!</h1>
                </div>
                <div class="col-md-1"></div>
            </div>
            
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 cards">
                    <h4>Got a new job position to apply for? Get started here.</h4>
                    <br/>
                    <a href="matching.php"><button class="btn primaryBtn compareBtn">COMPARE NEW RESUME</button></a>
                </div>
                <div class="col-md-1"></div>
            </div>
            
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5 smallcards">
                    <h4>Career Planning</h4>
                    <p>Pick your dream job position and set as a career goal. Beavver shows you a timeline to keep you on track.</p>
                    <br/>
                    <a href="myCareer.php"><button class="btn ctaBtn careerBtn">Start Here</button></a>
                </div>
                <div class="col-md-5 smallcards">
                    <h4>Resume Templates</h4>
                    <p>Save time and build a screening-proof resume based on our ready to customize templates.</p>
                    <br/>
                    <a href="resume-templates.php"><button class="btn ctaBtn templatesBtn">Start Here</button></a>                    
                </div>
                <div class="col-md-1"></div>
            </div>
            <br/><br/>
            <div class="row">
                <div class="col-md-12 pattern">
                    <img src="img/bottom-pattern.png" alt="pattern">
                </div>
            </div>
        </div> <!-- End of Cards -->

        <!-- How To Section -->
        <div class="container-fluid how-to-section">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 center-text">
                    <h2>Not sure how it works?</h2>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                  <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#beavver-section">HOW TO USE BEAVVER</a></li>
                    <li><a data-toggle="tab" href="#career-section">EXTRA FEATURES</a></li>
                  </ul>
                </div>
                <div class="col-md-1"></div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="tab-content">
                        <!-- Beavver Section -->
                        <div id="beavver-section" class="tab-pane fade in active">
                            <br/>
                            <!--h3 class="center-text">How to Use Beavver</h3-->
                              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                  <div class="item active">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="img/step1.png" alt="Matching Page" class="carousel-img">
                                        </div>
                                        <div class="col-md-5 beavver-info">
                                            <div class="circle-num">1</div>
                                            <h3>Get the job position and your resume ready</h3>
                                            <br/><br/>
                                            <p>Open your current resume, and the job description you want to apply for. They be in a website, MS Word document, or any other tool where you can copy the text.
                                            </p>
                                        </div>
                                    </div>    
                                  </div>
                                  <div class="item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="img/step2.png" alt="Matching Page" class="carousel-img">
                                        </div>
                                        <div class="col-md-5 beavver-info">
                                            <div class="circle-num">2</div>
                                            <h3>Adding your information into Beavver</h3>
                                            <br/><br/>
                                            <p>On the matching page, start by selecting your profession from the dropdown menu (1), then copy your resume and paste it into the resume field (2). Finally, copy the job posting text and paste it into the job description field(3).
                                            </p>
                                        </div>
                                    </div> 
                                  </div>
                                  <div class="item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="img/step3.png" alt="Matching Page" class="carousel-img">
                                        </div>
                                        <div class="col-md-5 beavver-info">
                                            <div class="circle-num">3</div>
                                            <h3>Know your matching score</h3>
                                            <br/><br/>
                                            <p>Click on “Make a match,” and the system will screen through your resume and find all the keywords used in the job description and not in your resume. And return a score that is calculated based on how many keywords you have in your resume that are relevant for the position, use of keywords and length.
                                            </p>
                                        </div>
                                    </div> 
                                  </div>
                                  <div class="item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="img/step4.png" alt="Matching Page" class="carousel-img">
                                        </div>
                                        <div class="col-md-5 beavver-info">
                                            <div class="circle-num">4</div>
                                            <h3>Copy and Paste Your Documents</h3>
                                            <br/><br/>
                                            <p>Check the results list to know which keywords you can add to your resume, for example, software names, or even synonims for soft skills.<br/>
                                            Edit your resume and add as many keywords as you can, but remember that they have to be related to you true experience and knowledge.
                                            </p>
                                        </div>
                                    </div> 
                                  </div>
                                  <div class="item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="img/step5.png" alt="Matching Page" class="carousel-img">
                                        </div>
                                        <div class="col-md-5 beavver-info">
                                            <div class="circle-num">5</div>
                                            <h3>Improving your skills</h3>
                                            <br/><br/>
                                            <p>You might not have all the skills required for the job postition you want, so Beavver gives you a list of courses you take to acquire those new skills and be ready for the next opportunity.<br/><br/>
                                            On the courses list, you can see more informations about them and save your favorites to your profile! </p>
                                                <!--ul>
                                                    <li>how many times certain keywords has appeared in both your resume and job description.</li>
                                                    <li>a list of suggestions to improve your resume</li>
                                                    <li>a list of BCIT courses to improve your missing skills</li>
                                                </ul-->     
                                        </div>
                                    </div>
                                  </div>
                                    
                                  <div class="item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="img/step6.png" alt="Matching Page" class="carousel-img">
                                        </div>
                                        <div class="col-md-5 beavver-info">
                                            <div class="circle-num">6</div>
                                            <h3>Run the test on your improved resume and apply with confidence!</h3>
                                            <br/><br/>
                                            <p>
                                            Paste your improved resume and click on “make a match” again to see your new score.<br/>
                                            A good score starts with 80%, so fix and build your resume focusing on this score. <br/>
                                            <br/>
                                            Now you are ready to apply, with a resume built to the job your position want!
                                            </p><br/><br/>
                                            <a href="matching.php"><button class="btn ctaBtn">Start Now</button></a>
                                        </div>
                                    </div>
                                  </div>                                 
                                    
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <button class="btn btn-arrow leftLst">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    </button>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <button class="btn btn-arrow rightLst">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </button>
                                </a>
                              </div>
                            
                        </div> <!-- End of Beavver Section -->
                        
                        <!-- My Career Section -->
                        <div id="career-section" class="tab-pane fade">
                        <br/>
<!--                          <h3 class="center-text">Extra Features</h3>-->
                              <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel" data-interval="false">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                  <div class="item active">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="img/resume-templates-pic.png" alt="Matching Page" class="carousel-img">
                                        </div>
                                        <div class="col-md-5 beavver-info">
                                            <div class="circle-num">1</div>
                                            <h3>Resume Templates</h3>
                                            <br/><br/>
                                            <p>As a registered user, you will able to download free resume templates that are ATS-friendly.
                                            Just change the content and you will be ready!
                                            </p><br/><br/>
                                            <a href="resume-templates.php"><button class="btn ctaBtn">Start Now</button></a>
                                        </div>
                                    </div>    
                                  </div>

                                  <div class="item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="img/myjobbank.jpg" alt="Matching Page" class="carousel-img">
                                        </div>
                                        <div class="col-md-5 beavver-info">
                                            <div class="circle-num">2</div>
                                            <h3>My Job Bank</h3>
                                            <br/><br/>
                                            <p>Everyone will have a bundle of job positions that they would like to apply for. 
                                            Beavver makes this easier to organize by allowing users to save a list of job descriptions.</p><br/><br/>
                                            <a href="myCareer.php"><button class="btn ctaBtn">Start Now</button></a> 
                                        </div>
                                    </div>
                                  </div>
                                    
                                  <div class="item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="img/myresume.jpg" alt="Matching Page" class="carousel-img">
                                        </div>
                                        <div class="col-md-5 beavver-info">
                                            <div class="circle-num">3</div>
                                            <h3>My Resume</h3>
                                            <br/><br/>
                                            <p>
                                            Everyone will have a bundle of job positions that they would like to apply for. 
                                            Beavver makes this easier to organize by allowing users to save a list of job descriptions.
                                            </p><br/><br/>
                                            <a href="myCareer.php"><button class="btn ctaBtn">Start Now</button></a>
                                        </div>
                                    </div>
                                  </div>                                 
                                    
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                                    <button class="btn btn-arrow leftLst">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    </button>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                                <button class="btn btn-arrow rightLst">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </button>
                                </a>
                              </div>
                      </div> <!-- End of Tab Content -->
                </div>
                <div class="col-md-1"></div>
            </div>
        
        </div>
        </div> <!-- End of How To Section -->
        
            <!-- UP ARROW BUTTON -->    
        <a href="#top" class="btn btn-lg btn-up" id="btn-up">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        
    </div>  <!-- End of Content -->
    
    <div class="row bottom-clouds">
        <div class="col-md-12">

        </div>
    </div> <!-- End of Clouds --> 

    <div>
        <?php include 'footer.php';?>
    </div>  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script> 
      
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>      
      
      
    
      
      
    <script>
        
        
        $(document).ready(function() {
            
//            if ($("#beavver-section").hasClass("active")){
//                $("")
//            }

            $(".carousel").swipe({

              swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

                if (direction == 'left') $(this).carousel('next');
                if (direction == 'right') $(this).carousel('prev');

              },
              allowPageScroll:"vertical"

            }); 
            
            // show the up button when templates-list is passed
            $("#btn-up").hide(); //hide button initially
            var topOfOthDiv = $("#beavver-section").offset().top;
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
                if (scrollPos <= 80) {
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
              .not('[href="#carousel-example-generic"]')
              .not('[href="#carousel-example-generic2"]')
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
  </body>
</html>