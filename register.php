
<?php

// Include config file
require_once "config.php";
session_start();

// Define variables and initialize with empty values

$fn = $mn=$ln=$cllg_org = $email = $phone = $password = $confirm_password = "";
$address = $state = $city =$user_type=$gender =$otp="";
$fn_error = $mn_error=$ln_error=$cllg_org_error= $email_error = $phone_error = $password_error = $confirm_password_error = "";
$address_error = $state_error = $city_error =$user_type_error=$gender_error ="";
$otp_error="";
$error = False;
//Variables done
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
//Validate owner
	/*
	$data = file_get_contents('php://input');
	echo var_dump($data);
	echo var_dump($_POST);
	*/
	
	if(empty(trim($_POST["fn"]))){
	        $fn_error = "Please enter First Name.";
	        $error = True;
	    } 
	 else
	 {
	 	$fn = trim($_POST["fn"]);
	 	//echo $ownername;
	 }
	 if(empty(trim($_POST["mn"]))){
	        $mn_error = "Please enter Middle Name.";
	        $error = True;
	    } 
	 else
	 {
	 	$mn = trim($_POST["mn"]);
	 	//echo $ownername;
	 }
	 if(empty(trim($_POST["ln"]))){
	        $ln_error = "Please enter Last Name.";
	        $error = True;
	    } 
	 else
	 {
	 	$ln = trim($_POST["ln"]);
	 	//echo $ownername;
	 }
//Validate owner complete 	
//Validate Org
	if(empty(trim($_POST["cllg_org"]))){
	        $cllg_org_error = "Please enter College/Organisation Name.";
	        $error = True;
	    } 
	 else
	 {
	 	$cllg_org = trim($_POST["cllg_org"]);
	 	//echo $orgname;
	 }
//Validate Org complete 	
// Validate EMAIL
    if(empty(trim($_POST["email"]))){
        $email_error = "Please enter Email ID.";
        $error = True;
    } else{
        // Prepare a select statement
        $sql = "SELECT user_id FROM accounts WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_error = "This Email ID is already taken.";
                    
                    $error = True;
                } else{
                    $email = trim($_POST["email"]);
                    $_SESSION['email']=$_POST['email'];
                    //echo $email;
				//otp send
                   
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
                $error = True;
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
//EMAIL COMPLETE
//OTP
    //echo $_SESSION['otp'];
    if(empty(trim($_POST["otp"]))){
        $otp_error = "Please enter OTP.";
        $error = True;  
    }

    elseif (trim($_POST["otp"])!=$_SESSION['otp']) {
    	$otp_error = "Wrong OTP.";
        $error = True;
    }
    else
    {

    }

//
//VALIDATE PHONE

    if(empty(trim($_POST["phone"]))){
        $phone_error = "Please enter Phone Number.";
        $error = True;
        
    } 
    elseif (strlen(trim($_POST["phone"]))!=10) {
    	$phone_error = "Please enter a Valid Phone Number.";

    	$error = True;
    	
    }
    else{
        // Prepare a select statement
        $sql = "SELECT user_id FROM accounts WHERE phone = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_phone);
            
            // Set parameters
            $param_phone = trim($_POST["phone"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $phone_error = "This Phone Number is already taken.";
                    $error = True;
                } else{
                    $phone = trim($_POST["phone"]);
                    //echo $phone;
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
                $error = True;
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
//PHONE COMPLETE
//PASSWORD validate  
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_error = "Please enter a password.";     
        $error = True;
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_error = "Password must have atleast 6 characters.";
        $error = True;
    } else{
        $password = trim($_POST["password"]);
        //echo $password;

    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_error = "Please confirm password.";  
        $error = True;   
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_error) && ($password != $confirm_password)){
            $confirm_password_error = "Password did not match.";
            
            $error = True;
        }

    }
 //PASSWORD validate done
 //ADDRESS Validate
    if(empty(trim($_POST["address"]))){
	        $address_error = "Please enter Address.";
	        $error = True;
	    } 
	 else
	 {
	 	$address = trim($_POST["address"]);
	 	//echo $address;
	 }
 //ADDRESS complete
 //user_type Validate
    if(!isset($_POST["user_type"])){
	        $user_type_error = "Please choose user type";
	        $error = True;
	    } 
	 else
	 {
	 	$user_type = $_POST["user_type"];
	 	//echo $user_type;
	 }
 //user_type complete 
 //gender Validate
    if(!isset($_POST["gender"])){
	        $gender_error = "Please choose your Gender";
	        $error = True;
	    } 
	 else
	 {
	 	$gender = $_POST["gender"];
	 	//echo $pin_code;
	 }
 //user_type complete
 //STATE Validate
    if(empty(trim($_POST["state"]))){
	        $state_error = "Please select State.";
	        $error = True;
	    } 
	 else
	 {
	 	$state = trim($_POST["state"]);
	 	//echo $state;
	 }
 //STATE complete   
 //City Validate
    if(empty(trim($_POST["city"]))){
	        $city_error = "Please select City.";
	        $error = True;
	    } 
	 else
	 {
	 	$city = trim($_POST["city"]);
	 	//echo $city;
	 }
 //City complete     
    // Check input errors before inserting in database
    if(!($error)){
    	
        $user_id = uniqid();
        $today = date("d/m/Y");
        // Prepare an insert statement
        $sql = "INSERT INTO accounts (user_id,fn,mn,ln,cllg_org,email,password,phone,address,state,city,gender,user_type,acc_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        if($stmt = mysqli_prepare($link, $sql)){
        	
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssssssss", $param_userid, $param_fn,$param_mn,$param_ln,$param_org,$param_email,$param_password,$param_phone,$param_address,$param_state,$param_city,$param_gender,$param_user_type,$param_acc_date);
            
            // Set parameters
            $param_userid = $user_id;
            $param_fn = $fn;
            $param_mn = $mn;
            $param_ln = $ln;
            $param_org= $cllg_org;
            $param_email=$email;
            $param_password = $password;
            $param_phone=$phone;
            $param_address=$address;
            $param_state=$state;
            $param_city=$city;
            $param_gender=$gender;
            $param_user_type=$user_type;
            $param_acc_date=$today;

            //$param_password = password_hash($password, PASSWORD_BCRYPT); // Creates a password hash
            
            // Attempt to execute the prepared statement

            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                echo "clear";
                header("location: login.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
                
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
   
}
 mysqli_close($link);
?>
 

<html>
<head>
	<meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport" />
	
	<title>Registeration Form</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="register.css?<?=filemtime("register.css")?>" rel="stylesheet" type="text/css" />
	
    
    <!--/************************************************************/-->
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="/intpjs/header/h.css">
    <link rel="stylesheet" media='screen and (max-width: 1150px)' href="/intpjs/header/h1.css">
    <link rel="stylesheet" media='screen and (max-width: 925px)' href="/intpjs/header/h2.css">
    <link rel="stylesheet" media='screen and (max-width: 700px)' href="/intpjs/header/h3.css">

   <!--/************************************************************/-->
   
  
</head>
<body id="body">
	    <div class="profile_head" style="width: 102%;top: -10px;left: -8px">
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
                    <li><a href="#"><b>Contact Us</b></a></li>
                    <li><a href="#"><b>About</b></a></li>
                </ul>
            </div>
            <div class="login_register_container">
            <form action="login.php">
            <button class="loginbutton" type="submit" value="login" >LOGIN</button>
            <form action="register.php">
            <button class="regbutton" type="submit" value="registration">SIGNUP</button>
            </form>
            </div>
        </div>
    </form>
</div>
</div>
<i class="fa fa-bars"></i>
    <div class="details">
	<form name="RegForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		
			<br/>
			<br/>
			<p id="register_text">Register</p><br/><br/>
			<div class="name">
				<div class="fn" >
					<label id="first" >First Name</label><br/>
					<input class="box" name="fn" id="first_name_box" type="text" placeholder="First Name" onfocusin="hide(id,'first')" onfocusout="show(id,'first')" value="<?php if($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["fn"];} ?>" />
					<br/>
					<label class='php_error' id='php_fn_error'>
						<?php
							echo $fn_error;
						?>
					</label>
					<label class='error' id='fn_error'></label>
				</div>
				<div class="mn">
					<label id="middle">Middle Name</label><br/>
					<input class="box" name="mn" id="middle_name_box" type="text" placeholder="Middle Name" onfocusin="hide(id,'middle')" onfocusout="show(id,'middle')" value="<?php if($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["mn"];} ?>" />
					<br/>
					<label class='php_error' id='php_mn_error'>
						<?php
							echo $mn_error;
						?>
					</label>
					<label class='error' id='mn_error'></label>
				</div>
				<div class="ln">
					<label id="last">Last Name</label><br/>
					<input class="box" name="ln" id="last_name_box" type="text" placeholder="Last Name" onfocusin="hide(id,'last')" onfocusout="show(id,'last')" value="<?php if($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["ln"];} ?>" />
					<br/>
					<label class='php_error' id='php_ln_error'>
						<?php
							echo $ln_error;
						?>
					</label>
					<label class='error' id='ln_error'></label>
				</div>
			</div>

			<div id="clear"></div>
			<div class="user_type">
				<br/>
				<span class="sentence">I am a</span>
				<br/>
				<input type="radio" name="user_type" value="t">Trekker
				<input type="radio" name="user_type" value="o">Organizer
				<br/>
				<label class='php_error' id='php_user_type_error'>
						<?php
							echo $user_type_error;
						?>
					</label>
				<label class='error' id='user_type_error'></label>
			</div>

			<div class="email_otp">
				<div class="email">
					<br/>
					<label id="email-id">Email ID</label>
					<br/>
					<input class="box" name="email" id="email_box" type="email" placeholder="EMAIL-ID" onfocusin="hide(id,'email-id')" onfocusout="show(id,'email-id')" onkeyup="chkMail(this);"  value="<?php if($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["email"];} ?>" />
					<br/>
					<label class='php_error' id='php_email_error'>
						<?php
							echo $email_error;
						?>
					</label>
					<label class='error' id='email_error'></label>
					<br/>
					
					<button class="btn" name="send_otp" id="send_otp" style="margin:4px;width: 6em;" onclick=" return sendOTP(this);" disabled>Send OTP</button>
					<br/>
					<label class='error' id='send_otp_error'></label>

				</div>
				<div class="otp">
					<br/>
					<label id="otp">OTP</label>
					<br/>
					<input class="box" name="otp" id="otp_box" type="text" placeholder="OTP" onfocusin="hide(id,'otp')" onfocusout="show(id,'otp')" value="<?php if($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["otp"];} ?>" />
					<br/>
					<label class='php_error' id='php_otp_error'>
						<?php
							echo $otp_error;
						?>
					</label>
					<label class='error' id='otp_error'></label>
					<br/>
					
					<!--<button class="btn" style="margin:4px;">Verify</button>-->
				</div>
			</div>

			<div id="clear"></div>

			<div class="phone_college">
				<div class="phone">
					<br/>
					<label id="phn">Phone Number</label>
					<br/>
					<input class="box" name="phone" id="phn_box" type="tel" placeholder="Phone No." onfocusin="hide(id,'phn')" onfocusout="show(id,'phn')" value="<?php if($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["phone"];} ?>" />
					<br/>
					<label class='php_error' id='php_phone_error'>
						<?php
							echo $phone_error;
						?>
					</label>
					<label class='error' id='phone_error'></label>
				</div>

				<div class="college_org">
					<br/>
					<label id="cllg_org">College/Org.</label>
					<br/>
					<input class="box" name="cllg_org" id="cllg_org_box"  type="text" placeholder="College/Org." onfocusin="hide(id,'cllg_org')" onfocusout="show(id,'cllg_org')" value="<?php if($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["cllg_org"];} ?>" />
					<br/>
					<label class='php_error' id='php_cllg_org_error'>
						<?php
							echo $cllg_org_error;
						?>
					</label>
					<label class='error' id='cllg_org_error'>    </label>
				</div>
			</div>

			<div id="clear"></div>

			

			<div class="address" >
				<br/>
				<label style="visibility: visible; color:rgb(26, 115, 232);font-size:25px">Address</label>
				<br/>
				<textarea class="box" name="address" id="address_box" style="height: 5em;width: 70% ">
					<?php if($_SERVER["REQUEST_METHOD"] == "POST") { echo trim($_POST["address"]);} ?>
				</textarea>
				<label class='php_error' id='php_address_error'>
					<?php
							echo $address_error;
					?>
				</label>
				<label class="error" id="address_error"></label>				
			</div>

			<div id="clear"></div>

			<div class="select city_state">
				<div class="state">
					<br/>
					<label style="visibility:visible; color:rgb(26, 115, 232);font-size:25px">State</label>
					<br/>
					<select class="select_box" name="state" id="state_box">
						<option>Select State</option>
						<option>Maharashtra</option>
						<option>Goa</option>
						<option>UP</option>
					</select>	
					<br/>
					<label class='php_error' id='php_state_error'>
						<?php
							echo $state_error;
						?>
					</label>
					<label class="error" id="state_error"></label>
				</div>	
				<div class="city">
					<br/>
					<label style="visibility:visible; color:rgb(26, 115, 232);font-size:25px">City</label>
					<br/>
					<select class="select_box"  name="city" id="city_box">
						<option>Select City</option>
						<option>Thane</option>
						<option>Mumbai</option>
						<option>Panvel</option>
					</select>
					<br/>
					<label class='php_error' id='php_city_error'>
						<?php
							echo $city_error;
						?>
					</label>
				    <label class="error" id="city_error"></label>	
				</div>

			</div>

			<div id="clear"></div>

			
			<div class="gender">
				<br/>
				<span class="sentence">Gender:</span>
				<br/>
				<input type="radio" name="gender" value="M">Male
				<input type="radio" name="gender" value="F">Female
				<br/>
				<label class='php_error' id='php_gender_error'>
						<?php
							echo $gender_error;
						?>
					</label>
				<label class='error' id='gender_error'></label>
			</div>

			<div id="clear"></div>

			<div class="passwords">
				<div class="password">
					<br/>
					<label id="pwd">Password</label>
					<br/>
					<input class="box" name="password" id="pwd_box" type="password" placeholder="Password" onfocusin="hide(id,'pwd')" onfocusout="show(id,'pwd')"/>
					<br/>
					<label class='php_error' id='php_password_error'>
						<?php
							echo $password_error;
						?>
					</label>
				    <label class="error" id="password_error"></label>
				</div>
				<div class="re-password">
					<br/>
					<label id="re-pwd">Confirm Password</label>
					<br/>
					<input class="box" name="confirm_password" id="re-pwd_box" type="password" placeholder="Confirm Password" onfocusin="hide(id,'re-pwd')" onfocusout="show(id,'re-pwd')"/>
					<br/>
					<label class='php_error' id='php_confirm_password_error'>
						<?php
							echo $confirm_password_error;
						?>
					</label>
				    <label class="error" id="confirm_password_error"></label>
				</div>
				<br/>
				<label class="error" id="passwords_error" style="position:relative;left: 50px;"></label>
			</div>

			<div id="clear"></div>

			<div class="submit">
				<br/>
				<button class="btn" name="register" onclick="return FormValidate();">Register</button>
			</div>

			<br/>
		
		
	</form>
    </div>
</body>
<script type='text/JavaScript' src='register.js?<?=filemtime("register.js")?>'></script>
</html>
			