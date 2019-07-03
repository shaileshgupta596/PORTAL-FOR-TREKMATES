<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
   header("location: /intpjs/INTP/homepage/homepage.php");
    echo $_SESSION["loggedin"];
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$email_error = $password_error = "";
$if_email = false;
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $email_error = "Please enter Email-ID or Phone Number.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_error = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_error) && empty($password_error)){
        // Prepare a select statement
        $sql = "SELECT user_id, email, password FROM accounts WHERE email = ?";
        $sql2 = "SELECT user_id, email, password FROM accounts WHERE phone = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){      
                    $if_email=true;              
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $user_id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                    	
                        if($password==$hashed_password){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["user_id"] = $user_id;
                            $_SESSION["email"] = $email;                            
                            
                            // Redirect user to welcome page
                            header("location: homepage/homepage.php?userid=".$email);
                        } else{
                            // Display an error message if password is not valid
                            $password_error = "The password you entered was not valid.";
                        }
                    }
                } 

                
                else{
                    // Display an error message if username doesn't exist
                    $email_error = "No account found with that Email-ID/Phone Number";
                }
                
            } 
            else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        if(!$if_email)
        {
            if($stmt2 = mysqli_prepare($link, $sql2))
            {
                $big= "checking for phone";
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt2, "s", $param_phone);
                
                // Set parameters
                $param_phone = $email;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt2)){
                    // Store result
                    $big= "executing stmt2";
                    mysqli_stmt_store_result($stmt2);
                    
                    // Check if username exists, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt2) == 1){                    
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt2, $user_id, $email, $hashed_password);
                        if(mysqli_stmt_fetch($stmt2)){
                        	
                            if($password==$hashed_password){
                                // Password is correct, so start a new session
                                session_start();
                                
                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["user_id"] = $user_id;
                                $_SESSION["email"] = $email;                            
                                
                                // Redirect user to welcome page
                                header("location: homepage/homepage.php?userid=".$email);
                            } else{
                                // Display an error message if password is not valid
                                $password_error = "The password you entered was not valid.";
                            }
                        }
                    } 
                    else{
                        // Display an error message if username doesn't exist
                        $email_error = "No account found with that Email-ID/Phone Number";
                    }
                } 
                else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
        
        }
        // Close statement
        mysqli_stmt_close($stmt);
        if(!$if_email)
        {
            mysqli_stmt_close($stmt2);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<html>
<head>
	
	<meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport" />
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link href="login.css?<?=filemtime("login.css")?>" rel="stylesheet" type="text/css" />
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    
    
    
   <!--/************************************************************/-->
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="/intpjs/header/h.css">
    <link rel="stylesheet" media='screen and (max-width: 1150px)' href="/intpjs/header/h1.css">
    <link rel="stylesheet" media='screen and (max-width: 925px)' href="/intpjs/header/h2.css">
    <link rel="stylesheet" media='screen and (max-width: 700px)' href="/intpjs/header/h3.css">

   <!--/************************************************************/-->
   
    <script>
        k=0;
        function change(){
            x=document.getElementsByClassName("nav_list_mobile");
            if(k==0){
                document.getElementsByClassName("log_in_mobile")[0].style="display:none;";
                document.getElementsByClassName("sign_up_mobile")[0].style="display:none;";
                document.getElementsByClassName("log_in_mobile_2")[0].style="display:block;";
                document.getElementsByClassName("sign_up_mobile_2")[0].style="display:block;";
                for(var i=0; i<x.length; i++){
                    x[i].style="display:block; ";
                }
                k=1;
            }else{
                document.getElementsByClassName("log_in_mobile")[0].style="display:block;";
                document.getElementsByClassName("sign_up_mobile")[0].style="display:block;";
                document.getElementsByClassName("log_in_mobile_2")[0].style="display:none;";
                document.getElementsByClassName("sign_up_mobile_2")[0].style="display:none;";
                for(var i=0; i<x.length; i++){
                    x[i].style="display:none;";
                }
                k=0;
            }
            
        }
    </script>
	<title>Login</title>
</head>
<body>
<div class="profile_head">
            <div class="head_statement" align="center">
            <h1 align="center" style="color:white;
            position:absolute;
            font-size: 20px;">Welcome, To TrekMates.com</h1>
        </div>


            <div class="navbar_contentprofile">
                <ul>
                    <li><a href="#"><b>Explore</b></a></li>
                    <li><a href="#"><b>Adventure</b></a></li>
                    <li><a href="#"><b>Search Location</b></a></li>
                    <li><a href="contactus/contact.php"><b>Contact Us</b></a></li>
                    <li><a href="#"><b>About</b></a></li>
                </ul>
            </div>
            <div class="login_register_container">
            <form action="register.php">
            <button class="loginbutton" type="submit" value="login" >LOGIN</button>
            
            <button class="regbutton" type="submit" value="registration">SIGNUP</button>
            
            </div>
        </div>
    </form>
</div>
</div>
<i class="fa fa-bars"></i>
    

        
<div class="content">
	<div class="login-details">
		<form name="LogForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <br/>
            <p id="login_text">Login</p>
			<div class="email">
				<label id="email-id">Email-ID or Phone Number</label>
				<br/>
				<input class="box" type="email" id="eid" name="email" placeholder="Email-ID" onfocusin="hide(id,'email-id')" onfocusout="show(id,'email-id')" value="<?php if(isset($_POST['login'])) { echo $_POST["email"];} ?>" />
				<br/>
				<label class='php_error' id='php_email_error'>
					<?php
						echo $email_error;
					?>
				</label>
				<label class='error' id='email_error'></label>
			</div>
			<div class="password">
				<label id="password">Password</label>
				<br/>
				<input class="box" type="password" id="pwd" name="password" placeholder="Password" onfocusin="hide(id,'password')" onfocusout="show(id,'password')" value="<?php if(isset($_POST['login'])) { echo $_POST["password"];} ?>" />
				<br/>
				<label class='php_error' id='php_password_error'>
					<?php
						echo $password_error;
					?>
				</label>
				<label class='error' id='password_error'></label>				
			</div>
			<div clear="both"></div>
			<div class="forgot-password">
				<a id="forgot-pwd" href="forgot_password.php">Forgot Password?</a>
			</div>
			<div clear="both"></div>
			<div class="submit">
				<button id="btn" name="login" onclick="return FormValidate() ">Login</button>
			</div>
			<br/>
			
		</form>
	</div>
</div>

</body>
<script type='text/JavaScript' src='login.js?<?=filemtime("login.js")?>'></script>
</html>