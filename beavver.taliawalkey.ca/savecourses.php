<?php
require_once('connect.php');
session_start();
        //this will be the name declared on the btn. if you have more stuff to push in add it here. 
        $user = $_SESSION['user']['id'];
        $course = $_POST['course'];

        var_dump($_SESSION);
        //this inserts into the db. if you added more ^^ then add them here too
             $sql = "INSERT INTO user_courses (user_id, courses_id) VALUES ('$user','$course')";
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