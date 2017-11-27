 <?php 
            if (empty($_SESSION["user"])) {
                //location.href("http://beavver.taliawalkey.ca");
                header("location:http://beavver.taliawalkey.ca");
                //die();
            } else {
                //location.href("http://beavver.taliawalkey.ca/landingLogin.php");
                header("location:http://beavver.taliawalkey.ca/landingLogin.php");
            }
?>   