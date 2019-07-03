<?php

require_once "config.php";
require_once 'sendMailD.php';

$mailF = new sendMailD();

// Prepare a select statement
        $sql2 = "SELECT user_id FROM accounts WHERE email = ?";
        
        
        if($stmt2 = mysqli_prepare($link, $sql2)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt2, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt2)){
                // Store result
                mysqli_stmt_store_result($stmt2);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt2) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt2, $pa);
                    if ($pa=="") {
                      $email_done="kuchh nahi aaya".$email."<br/>";

                    } else {
                      $email_done=count_chars($pa);
                    }
                    
                  }
                }
              }
          else
          {
              $email_error ="Error occured!! Please try again later!!";
              return null;
          }



    try
    {
		
		          $userEmail = $email; //email id of recevr
            	$message= "
                           Hello , $userEmail
                           <br /><br />
                           Here is your Password:
                           "
                           .$pa.
                           "
                           <br /><br />
                           
                           <br /><br />
                           Thank you 
                           <br /><br />
                           PCE 
                           ";
                        $subject = "Password";
                
                        $retv = $mailF->sendMail($userEmail,$message,$subject);

                        if($retv == "OK"){
                           
				                   // $email_done="Password sent".$pass."!";

                        }
                        else {
                            $email_error="Mail not sent!";
                        }
            

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }


?>

