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
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
       
      // $sql = "SELECT `username`, `email`, `password` FROM `login` WHERE `username` = '$username'";
       
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
                    <td>" . $row['username'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['password'] . "</td>
                  </tr";
        }
        echo "</table>";
        
    
    } catch(PDOException $e) {
       // echo "<p style='color: red;'>From the SQL code: $sql</p>";
        $error = $e->getMessage();
        //echo "<p style='color: red;'>$error</p>";
    }

?>

</div>

  </body>
</html>

