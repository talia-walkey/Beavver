<?php
require_once('connect.php');
session_start();

$user = $_SESSION['user']['id'];

$sql1 = "SELECT new_pt_course.crse_numb, new_pt_course.crse_name, new_pt_course.crse_url FROM user_courses
        LEFT JOIN login ON login.id=user_courses.user_id
        LEFT JOIN new_pt_course ON new_pt_course.id=user_courses.courses_id
        WHERE user_courses.user_id = '$user'";

/*
        $statement = $conn->prepare($sql1);
        $statement->execute();
       
        $rows1 = $statement->fetchAll(PDO::FETCH_ASSOC);*/

$result = $conn->query($sql1);
$arr = $result->fetchAll();
    echo json_encode($arr);
?>