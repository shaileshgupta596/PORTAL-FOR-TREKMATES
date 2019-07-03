<?php
require_once "config.php";

$q = $_GET['q'];

$sql = "DELETE FROM products WHERE cid = ?";



$sql2 = "DELETE FROM category WHERE cid = ?";

if($stmt2 = mysqli_prepare($link, $sql2))
{
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt2, "s", $param_id);
            
            // Set parameters
            $param_id = $q;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt2))
            {
                // Store result
                mysqli_stmt_store_result($stmt2);
                echo "Category deleted";
                
            }
            else
            {
                echo "Oops! Something went wrong. Please try again later.";
            }
        
}       
        // Close statement
        mysqli_stmt_close($stmt2);


if($stmt = mysqli_prepare($link, $sql))
{
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_id);
            
            // Set parameters
            $param_id = $q;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
            {
                // Store result
                mysqli_stmt_store_result($stmt);
                echo "Products deleted";
                
            }
            else
            {
                echo "Oops! Something went wrong. Please try again later";
            }
        
        
}      
        // Close statement
        mysqli_stmt_close($stmt);



?>