<?php
require_once('connect.php');
    
$ukeywords =$_POST['keywords'];

$sql1 = "SELECT softskill_keywords.name FROM soft_job
        LEFT JOIN job_title ON job_title.id=soft_job.job_id
        LEFT JOIN softskill_keywords ON softskill_keywords.id=soft_job.soft_id
        WHERE job_title.name REGEXP '$ukeywords'";

$sql2 = "SELECT hardskill_keywords.name FROM hard_job
        LEFT JOIN job_title ON job_title.id=hard_job.job_id
        LEFT JOIN hardskill_keywords ON hardskill_keywords.id=hard_job.hard_id
        WHERE job_title.name REGEXP '$ukeywords'";
        
        $statement = $conn->prepare($sql1);
        $statement->execute();
       
        $rows1 = $statement->fetchAll(PDO::FETCH_ASSOC);

        $statement = $conn->prepare($sql2);
        $statement->execute();
       
        $rows2 = $statement->fetchAll(PDO::FETCH_ASSOC);

$row3 = array(
    "soft"=> $rows1,
    "hard"=> $rows2
);
    echo json_encode($row3);
?>