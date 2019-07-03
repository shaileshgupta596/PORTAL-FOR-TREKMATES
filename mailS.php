<?php
session_start();
$_SESSION['otp']=rand(1000,9999);
require_once 'sendMailD.php';
$email = $_GET['q'];
$mailF = new sendMailD();
//$_SESSION['otp']=rand(1000, 9999);
    try
    {
		$userOtpRCode = $_SESSION['otp'];
		$userEmail = $email; //email id of recevr
            	$message= "
                           Hello , $userEmail
                           <br /><br />
                           We got request to rgister your email id for  if you have requested  then use the one time verfification code to verify your email id, if not just ignore this email,
                           <br /><br />
                           Your one time verification code is  $userOtpRCode
                           <br /><br />
                           
                           <br /><br />
                           Thank you 
                           <br /><br />
                           PCE 
                           ";
                        $subject = "User verification";
                
                        $retv = $mailF->sendMail($userEmail,$message,$subject);

                        if($retv == "OK"){
                           
				                    echo "Mail sent!";

                        }
                        else {
                            echo "Mail not sent!";
                        }
            

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }


?>

