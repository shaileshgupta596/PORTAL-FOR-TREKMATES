<?php
    $q = $_GET['q'];
    $dbname ="org"; //name of database
    $username = "root";
    $password = "";
    $host = "localhost";

if (!filter_var($q, FILTER_VALIDATE_EMAIL)) {
 // $emailErr = "Invalid email format"; 
  echo "Invalid email format";
}
else {
    

    try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
     
            // calling stored procedure command
            $sql = 'CALL chkaMail(:id)';
     
            // prepare for execution of the stored procedure
            $stmt = $pdo->prepare($sql);
     
            // pass value to the command
             
            $stmt->bindParam(':id', $q, PDO::PARAM_STR);
     
            // execute the stored procedure
            $stmt->execute();
     
            
            
            $c=count($stmt->fetchAll());
            
            if ($c>0) {
                echo "Email already taken";
            }
            else{
                echo "Email available";
            }
        } 
        catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
    }
        return null;

?>