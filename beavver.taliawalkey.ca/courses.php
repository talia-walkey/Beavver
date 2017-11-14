<?php
require_once('connect.php');

$courses = $_POST['missingskill'];
/*foreach($courses as &$val){
    $val = "'$val'";
}*/
$word = implode("|", $courses);
// $word = $word.'/i';

//echo "SELECT subj_desc, crse_numb, crse_name, subj_code FROM pt_courses WHERE LOWER(crse_name) REGEXP '$word'";
$result = $conn->query("SELECT crse_numb, crse_name, crse_url FROM new_pt_course WHERE LOWER(crse_name) REGEXP '$word'");

$rows = $result->fetchAll(PDO::FETCH_ASSOC);
$arr = array();
foreach($rows as $key=>&$val){
    $val["crse_name"] = htmlspecialchars( $val["crse_name"]);
}

echo json_encode($rows);
?>