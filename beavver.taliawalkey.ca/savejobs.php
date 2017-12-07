<?php
require_once('connect.php');
session_start();
        //this will be the name declared on the btn. if you have more stuff to push in add it here. 
        $user = $_SESSION['user']['id'];
        $job_title = $_POST['jobtitle'];
        $date = $_POST['date'];
        $job_link = $_POST['link'];

        var_dump($_SESSION);
        //this inserts into the db. if you added more ^^ then add them here too
             $sql = "INSERT INTO user_jobs (user_id, job_title, job_date, job_link) VALUES ('$user','$job_title', '$date', '$job_link')";
             $conn->exec($sql);
       
       //this is just to check if eveything is working
       if($sql){
            $arr = array(
                "status"=>1,
                "msg"=>"inserted properly"
            );
            echo json_encode($arr);
        } else {
            $arr = array(
                "status"=>0,
                "msg"=>"something went wrong"
            );
            echo json_encode($arr);
        }

?>