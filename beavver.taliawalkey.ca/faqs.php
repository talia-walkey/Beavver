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
        <?php 
            if (empty($_SESSION["user"])) {
                include 'header-logout.php';
                header("Location: http://beavver.taliawalkey.ca/login-warning.php");
               // die();
            } else {
                include 'header-login.php';
            }
        ?>  
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

        <div class="container-fluid templates-content">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 center-text">
                    <h1>FREQUENTLY ASKED QUESTIONS</h1>
                    <br/>
                    <p>Can't find what you're looking for?</p>
                    <button class="btn primaryBtn faq-btn"><a href="mailto:alynna.alcira@gmail.com">EMAIL US YOUR QUESTION</a></button>
                    <br/><br/>
                    <span class="glyphicon glyphicon-chevron-down"></span>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>   
        </div> <!-- END OF HEADER -->
        <br/>
        <div class="row faq-content">
            <div class="col-md-1"></div>
            
            <div class="col-md-3 faq-control">
                <p class="sub-header"><b>CATEGORIES</b></p>
                <ul class="nav nav-tabs nav-stacked">
                  <li class="active"><a data-toggle="tab" href="#general-section">General Questions<span class="glyphicon glyphicon-chevron-right arrows"></span></a></li>
                  <li><a data-toggle="tab" href="#beavver-section">About Beavver<span class="glyphicon glyphicon-chevron-right arrows"></span></a></li>
                  <li><a data-toggle="tab" href="#ats-section">Applicant Tracking Systems<span class="glyphicon glyphicon-chevron-right arrows"></span></a></li>
                </ul>
            </div>
            
            <div class="col-md-7 right-side">
                <p class="sub-header"><b>QUESTIONS</b></p>
                <p>Please click a question and the answer will show below.</p>
                <div class="tab-content">
                <div id="general-section" class="tab-pane fade in active">
                    <!-- General Questions -->
                    <div id="accordion gq-accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="gq-1"  data-toggle="collapse" href="#ga-1" aria-expanded="false" aria-controls="ga-1">
                          <h5 class="mb-0">
                            <a class="collapsed">
                                <span class="question"> Is my resume shared with recruiters?</span>
                                <span class="glyphicon glyphicon-chevron-down arrows"></span>
                            </a>
                          </h5>
                        </div>
                        <div id="ga-1" class="collapse" role="tabpanel" aria-labelledby="gq-1" data-parent="#accordion">
                          <div class="card-body">
                            No, only you can access your own resumes. 
                          </div>
                        </div>
                      </div>                    

                      <div class="card">
                        <div class="card-header" role="tab" id="gq-2" data-toggle="collapse" href="#ga-2" aria-expanded="false" aria-controls="ga-2">
                          <h5 class="mb-0">
                            <a class="collapsed">
                                <span class="questions">Do I have to pay?</span>
                                <span class="glyphicon glyphicon-chevron-down arrows"></span>
                            </a>
                          </h5>
                        </div>
                        <div id="ga-2" class="collapse" role="tabpanel" aria-labelledby="gq-2" data-parent="#accordion">
                          <div class="card-body">
                            No, Beavver is completely free to use.
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="gq-3" data-toggle="collapse" href="#ga-3" aria-expanded="false" aria-controls="ga-3">
                          <h5 class="mb-0">
                            <a class="collapsed">
                                <span class="question">Are the resume templates free to use?</span>
                                <span class="glyphicon glyphicon-chevron-down arrows"></span>
                            </a>
                          </h5>
                        </div>
                        <div id="ga-3" class="collapse" role="tabpanel" aria-labelledby="gq-3" data-parent="#accordion">
                          <div class="card-body">
                            Yes, the resume templates are free for you to use and customize.
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="gq-4" data-toggle="collapse" href="#ga-4" aria-expanded="false" aria-controls="ga-4">
                          <h5 class="mb-0">
                            <a class="collapsed">
                                <span class="question">How do I create an account?</span>
                                <span class="glyphicon glyphicon-chevron-down arrows"></span>
                            </a>
                          </h5>
                        </div>
                        <div id="ga-4" class="collapse" role="tabpanel" aria-labelledby="gq-4" data-parent="#accordion">
                          <div class="card-body">
                            Click the yellow “Sign Up” button at the top right of every page. This will take you to the Register page where you will have to fill in the required fields to create an account.
                          </div>
                        </div>
                      </div>                    
                    </div> <!-- End of General Questions -->
                  </div>
                  <div id="beavver-section" class="tab-pane fade">
                    <!-- About Beavver -->
                    <div id="accordion b-accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="bq-1" data-toggle="collapse" href="#ba-1" aria-expanded="false" aria-controls="ba-1">
                          <h5 class="mb-0">
                            <a class="collapsed">
                                <span class="question">What is Beavver?</span>
                                <span class="glyphicon glyphicon-chevron-down arrows"></span>
                            </a>
                          </h5>
                        </div>
                        <div id="ba-1" class="collapse" role="tabpanel" aria-labelledby="bq-1" data-parent="#accordion">
                          <div class="card-body">
                            A digital tool built to make the resume customization more comfortable for job seekers who want to stand out on recruitment processes, and also plan their careers.  
                          </div>
                        </div>
                      </div>                    

                      <div class="card">
                        <div class="card-header" role="tab" id="bq-2" data-toggle="collapse" href="#ba-2" aria-expanded="false" aria-controls="ba-2">
                          <h5 class="mb-0">
                            <a class="collapsed">
                                <span class="questions">How does Beavver work?</span>
                                <span class="glyphicon glyphicon-chevron-down arrows"></span>
                            </a>
                          </h5>
                        </div>
                        <div id="ba-2" class="collapse" role="tabpanel" aria-labelledby="bq-2" data-parent="#accordion">
                          <div class="card-body">
                            We compare your resume to a job description and give you the match rate and suggestions for improvement to pass the ATS. 
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="bq-3" data-toggle="collapse" href="#ba-3" aria-expanded="false" aria-controls="ba-3">
                          <h5 class="mb-0">
                            <a class="collapsed">
                                <span class="question">Is Beavver’s algorithm based off of real Applicant Tracking Systems?</span>
                                <span class="glyphicon glyphicon-chevron-down arrows"></span>
                            </a>
                          </h5>
                        </div>
                        <div id="ba-3" class="collapse" role="tabpanel" aria-labelledby="bq-3" data-parent="#accordion">
                          <div class="card-body">
                            Yes. 85% of companies are now using ATS to automate and simplify the selection process. We have identified the most common factors of applicants being rejected and have included this in our algorithm. The common factors among ATS are keyword searches, keyword frequency, keyword ratios, and match rate.
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="bq-4" data-toggle="collapse" href="#ba-4" aria-expanded="false" aria-controls="ba-4">
                          <h5 class="mb-0">
                            <a class="collapsed">
                                <span class="question">How do I improve my resume?</span>
                                <span class="glyphicon glyphicon-chevron-down arrows"></span>
                            </a>
                          </h5>
                        </div>
                        <div id="ba-4" class="collapse" role="tabpanel" aria-labelledby="bq-4" data-parent="#accordion">
                          <div class="card-body">
                            Beavver provides you with a list of keywords taken from your resume and job description. It also shows you the number of times these keywords show in both places. From these results, we recommend including at least all of the keywords from the job description in your resume.
                          </div>
                        </div>
                      </div>  

                      <div class="card">
                        <div class="card-header" role="tab" id="bq-5" data-toggle="collapse" href="#ba-5" aria-expanded="false" aria-controls="ba-5">
                          <h5 class="mb-0">
                            <a class="collapsed">
                                <span class="question">What happens if I have more keywords in my resume than the job description?</span>
                                <span class="glyphicon glyphicon-chevron-down arrows"></span>
                            </a>
                          </h5>
                        </div>
                        <div id="ba-5" class="collapse" role="tabpanel" aria-labelledby="bq-5" data-parent="#accordion">
                          <div class="card-body">
                            We recommend having the same amount of keywords from the job description.
                          </div>
                        </div>
                      </div>                      
                    </div> <!-- End of About Beavver -->  
                  </div>
                  <div id="ats-section" class="tab-pane fade">
                    <!-- ATS -->
                    <div id="accordion ats-accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="atsq-1" data-toggle="collapse" href="#atsa-1" aria-expanded="false" aria-controls="atsa-1">
                          <h5 class="mb-0">
                            <a class="collapsed">
                                <span class="question">What are Applicant Tracking Systems?</span>
                                <span class="glyphicon glyphicon-chevron-down arrows"></span>
                            </a>
                          </h5>
                        </div>
                        <div id="atsa-1" class="collapse" role="tabpanel" aria-labelledby="atsq-1" data-parent="#accordion">
                          <div class="card-body">
                            Applicant Tracking Systems (ATS) collect candidates’ resumes in a database, to scan and index, giving recruiters an easy overview of candidates. The recruiters then use this tool to identify and filter out each candidate’s job title, skills, education, and other relevant keywords.
                          </div>
                        </div>
                      </div>                    

                      <div class="card">
                        <div class="card-header" role="tab" id="atsq-2" data-toggle="collapse" href="#atsa-2" aria-expanded="false" aria-controls="atsa-2">
                          <h5 class="mb-0">
                            <a class="collapsed">
                                <span class="questions">Does layout matter in the ATS?</span>
                                <span class="glyphicon glyphicon-chevron-down arrows"></span>
                            </a>
                          </h5>
                        </div>
                        <div id="atsa-2" class="collapse" role="tabpanel" aria-labelledby="atsq-2" data-parent="#accordion">
                          <div class="card-body">
                              Yes. To boost your chances of passing an ATS, your resume layout must be easy for an ATS to read. We have provided some free ATS-friendly resume templates that you can find <a href="resume-templates.php">here</a>.
                          </div>
                        </div>
                      </div>                
                    </div> <!-- End of ATS --> 
                  </div>
                </div>
            </div>
            </div> <!-- End of Column -->
            <div class="col-md-1"></div>
    </div> <!-- END OF CONTENT -->
    
    <br/>
        
    <div>
        <?php include 'footer.php';?>
    </div>  
    
    <script>
    $(document).ready(function() {    
        //Toggle chevrons
        $('.collapse').on('shown.bs.collapse', function(){
        $(this).parent().find(".glyphicon-chevron-down").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
        }).on('hidden.bs.collapse', function(){
        $(this).parent().find(".glyphicon-chevron-up").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
        });

    });
        
    </script>
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>