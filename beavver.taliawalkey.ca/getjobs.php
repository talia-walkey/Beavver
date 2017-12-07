<?php
require_once('connect.php');
session_start();

$user = $_SESSION['user']['id'];

$sql1 = "SELECT job_title, job_date, job_link FROM user_jobs WHERE user_jobs.user_id = '$user'";

/*
        $statement = $conn->prepare($sql1);
        $statement->execute();
       
        $rows1 = $statement->fetchAll(PDO::FETCH_ASSOC);*/

$result = $conn->query($sql1);
$arr = $result->fetchAll();

    echo json_encode($arr);
?>