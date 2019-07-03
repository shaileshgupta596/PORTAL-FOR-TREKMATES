<?php
	// Include config file
	
	$email="";
	$email_error=$email_done="";
	
		$db = new PDO('mysql:host=localhost;dbname=intp','root','');
		if(isset($_POST['email']))
		{
			$email=$_POST['email'];
			$user=$db->query("SELECT * FROM accounts WHERE email='{$email}'");
			      
	    }
?>
<html>
<head>
	<meta charset="utf-8"/>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link href="forgot_password.css?<?=filemtime("forgot_password.css")?>" rel="stylesheet" type="text/css" />
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<title>Login</title>
</head>
<body>
<div class="profile_head">
			<div class="head_statement" align="center" style="position:absolute;width:400px;right: 27%;">
			<h1 align="center" style="color:white;
			position:absolute;
			font-size: 20px;">Welcome, To TrekMates.com</h1>
			</div>

			<div class="navbar_contentprofile">
				<ul>
					<li><a href="#"><b>	Home</b></a></li>
					<li><a href="#"><b>Adventure</b></a></li>
					<li><a href="#"><b>Search Location</b></a></li>
					<li><a href="#"><b>Contact Us</b></a></li>
					<li><a href="#"><b>About</b></a></li>
				</ul>
			</div>
			<div class="login_register_container">
			<button class="loginbutton" type="submit" value="login" >LOGIN</button>
			<button class="regbutton" type="submit" value="registration">SIGNUP</button>
			</div>
	</div>
		<hr>
	<div id="clear"></div>
<div class="content">
	<div class="login-details">
		<form name="LogForm" action="forgot_password.php" method="post">
			<div class="email">
				<label id="email-id">Please enter your Email-ID to receive your password.</label>
				<br/>
				<input class="box" type="text" id="eid" name="email" placeholder="Email-ID" value="<?php if(isset($_POST['reset'])) { echo $_POST["email"];} ?>" />
				<br/>
				<label class='php_error' id='php_email_error'>
					<?php
						echo $email_error;
					?>
				</label>
				<label class='php_error' id='php_email_done'>
					<?php
						echo $email_done;
					?>
				</label>

				<label class='error' id='email_error'></label>
			</div>
			
			<div clear="both"></div>
			<div class="submit">
				<button id="btn" type="submit" name="reset" name="send_password" onclick="return FormValidate() " >Send Password</button>
			</div>
			<br/>
		</form>
	</div>
</div>

</body>
   <script type='text/JavaScript' src='forgot_password.js?<?=filemtime("forgot_password.js")?>'></script>
</html>