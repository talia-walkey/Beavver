<?php
require_once('connect.php');

    $servername = "beavver.taliawalkey.ca";
    $dblogin = "talia185_Beavver";
    $password = "D3Beavver!";
    $dbname = "talia185_cc";
    
   //var_dump($_POST);


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password= $_POST['confirm_password'];
       
        //$sql = "SELECT * FROM login WHERE ('$first_name')";
        //$sql = "SELECT `id`, `first_name`, `last_name`, `email`, `password`, `confirm_password` FROM `login` WHERE `first_name` = 'Talia'";
            //$conn->exec($sql);
            
       
        $sql = "SELECT * FROM login";
        
        $statement = $conn->prepare($sql);
        $statement->execute();
       
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      
 echo "<table>";
        foreach ($rows as $row) {
            echo "<tr>
                     <th> </th>
                     <th> </th>
                     <th> </th>
                  </tr>";  
                  
            echo "<tr>
                    <td>" . $row['first_name'] . "</td>
                    <td>" . $row['last_name'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['password'] . "</td>
                    <td>" . $row['confirm_password'] . "</td>
                  </tr";
        }
        echo "</table>";
        
        
        /*
        session_start();
        
        $_SESSION['username'] = $rows[0]['username'];
        echo json_encode($rows);*/
        
        
    
    } catch(PDOException $e) {
       // echo "<p style='color: red;'>From the SQL code: $sql</p>";
        $error = $e->getMessage();
        //echo "<p style='color: red;'>$error</p>";
    }

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
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <?php include 'header.php';?>
    
    <?php include 'footer.php';?>
    
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/header-footer.js"></script>
  </body>
</html>

