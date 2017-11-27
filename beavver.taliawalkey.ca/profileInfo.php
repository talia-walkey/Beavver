<?php 

include "connect.php";
$email = $_POST('exampleInputEmail1');
echo $email;

$disp = mysql_query("SELECT first_name, email, password FROM login WHERE email='$email");

while($result= mysql_fetch_array($disp, MYSQL_ASSOC)){
    echo "<br/> Name: ". $result['first_name'];
}


?>