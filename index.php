<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet"  href="profile.css"/>
	<link rel="stylesheet" media='screen and (max-width: 1300px)' href="tabview.css"/>
	<link rel="stylesheet" media='screen and (max-width: 900px)' href="mobview.css"/>
	<link rel="stylesheet" href="h.css">
	<link rel="stylesheet" media='screen and (max-width: 1150px)' href="h1.css">
	<link rel="stylesheet" media='screen and (max-width: 925px)' href="h2.css">
	<link rel="stylesheet" media='screen and (max-width: 700px)' href="h3.css">
	<style>
	a{
		 text-decoration: none;
		 color:white;
		 font-size:18 ;
		 padding:10px 20px 0px 0px;
		 /*background-color: red;*/
	}
	a:hover{
		 box-shadow: 0px 0px 20px 0px white;

	}
	div.title{
		width:100%;
		height:50px;
	}
	#login{
		border:none;
		background-color:black;
		padding:10px;
		color:white;
		opacity: 0.3;
	}
	#register{
		border:none;
		background-color:black;
		padding:10px;
		color:white;
	}
	#login:hover{
		border:none;
		background-color:orange;
		padding:10px;
		color:white;
	}
	#register:hover{
		border:none;
		background-color:orange;
		padding:10px;
		color:white;
	}
	.parallax{ 
		 background-image: url("terk1.jpg");
    
    height: 800px;
    width:100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    box-shadow: 0px 3px 10px 0px rgb(0,0,0,0.9);
    border-radius: 2px;
    }
    .parallax2{ 
   	background-image: url("trek2.jpg");
    height: 800px;
    width:100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    box-shadow: 0px 3px 10px 0px rgb(0,0,0,0.9);
    border-radius: 2px;
    }
    div.buttons1{
    	top:200px;
    	right:31%;
    	position:absolute;
    }
    #explore{
    	border:none;
		background-color:red;
		padding:15px 120px;
		color:white;
		box-shadow: 0px 3px 10px 0px rgb(0,0,0,0.9);
   		border-radius: 8px;
   		margin-left: 80px;
   		margin-bottom: 40px;
   		font-size: 18;
    }
    #login1{
    	border:none;
		/*background-color:green;*/
		padding:15px 150px;
		color:white;
		box-shadow: 0px 3px 10px 0px rgb(0,0,0,0.9);
   		border-radius: 8px;
   		margin:10px;
   		font-size: 18;
    }
    #register1{
    	border:none;
		/*background-color:blue;*/
		padding:15px 150px;
		color:white;
		box-shadow: 0px 3px 10px 0px rgb(0,0,0,0.9);
    	border-radius: 8px;
    	font-size: 18;
    }
    div.search_bar{

    	position: absolute;
    	right:30%;
    	
    }
    #search_bar{
    	border:none;
		background-color:white;
		padding:15px 150px;
		color:gray;
		box-shadow: 0px 3px 10px 0px rgb(0,0,0,0.9);
   		border-radius: 8px;
   		margin:10px;
   		font-size: 18;
    }
    #search_btn{
    	border:none;
		background-color:red;
		padding:15px 50px;
		color:white;
		box-shadow: 0px 3px 10px 0px rgb(0,0,0,0.9);
   		border-radius: 8px;
   		margin:10px;
   		font-size: 18;
    }
    .subscribe{
    	width:100%;
    	margin-top:10px;
    	background-color: white;
    }
    .email_s{
    	
    	position:absolute;
    	right:40%;
    }
    #email_s{
    	border:none;
		background-color:white;
		padding:12px 120px;
		color:white;
		box-shadow: 0px 3px 10px 0px rgb(0,0,0,0.9);
   		border-radius: 8px;
   		margin:10px;
   		font-size: 18;
    }
    #e_submit{
    	border:none;
		background-color:green;
		padding:12px 40px;
		color:white;
		box-shadow: 0px 3px 10px 0px rgb(0,0,0,0.9);
   		border-radius: 8px;
   		margin:10px;
   		font-size: 18;
    }
</style>
	</head>
<body style="overflow-x: hidden;">

	<div class="profile_head">
		<div class="head_statement" align="center">
			<h1 align="center" style="color:white;
			position:absolute;
			font-size: 20px;">Welcome, To TrekMates.com</h1>
		</div>


			<div class="navbar_contentprofile">
				<ul>
					<li><a href="explorepage/profile1.php"><b>Explore</b></a></li>
					<li><a href="#"><b>Adventure</b></a></li>
					<li><a href="#"><b>Search Location</b></a></li>
					<li><a href="INTP/homepage/contactus/contact.php"><b>Contact Us</b></a></li>
					<li><a href="INTP/homepage/aboutus/about.php"><b>About</b></a></li>
				</ul>
			</div>
			<div class="login_register_container">
			<form action="INTP/login.php">
			<button class="loginbutton" type="submit" value="login" >LOGIN</button>
			<form action="INTP/register.php">
			<button class="regbutton" type="submit" value="registration">SIGNUP</button>
			</form>
			</div>
</div>
	<div class="parallax">
		<div class="title">
			<div class="logo" style="width:30%;z-index:1;">
			<img src="icon.png" height="120" width="120">
		</div>
		<h3 style="color:white;font-size:30"></h3>
		<!--<div class="buttons" style="right:0%;position:absolute;height:50px;width:300px;top:12px">
			<ul>
				<li ><a href="contactus/contact.php">Contact Us</a></li>
				<li><a href="aboutus/about.php">About Us</a></li>
				
			</ul>
		</div>-->
	</div>


		<div class="website">
			<h1 align="center" style="color:white;font-size:60;">Trekmates.com</h1>
		</div>
		
		<div class="search_bar">
			<form align="center">
			<input type="text" placeholder="Search here ..." name="search_bar" id="search_bar">
			<input type="submit" value="search" id="search_btn"> 
		</form>
		</div>
	

		<div class="buttons1" style="left:31%; position: relative;">
			<!--<form action="explorepage/profile1.php">
				<button  id="explore">Visit To Explore</button><br>
			</form>-->
			<div class="logreg" style="right:-70px;position: relative;">
			<form action="INTP/login.php">
				<button   id="login1">login</button>
			</form>
			<form action="INTP/register.php">	
				<button type="submit"  id="register1">Register</button>
			</form>
			</div>
			
		</div>
		
	</div>

	
<div class="parallax2" style="z-index: -1;">
	<div class="user_profile_body" style="display:inline-block;margin-top: 80px;z-index: 1;"> 
			<p style="font-weight: bold;font-size:20;text-decoration:underline;">Organization</p>
			<button type="submit" class="more">More</button>
			<div class="trek" style="display:inline-block;margin-left:48px;">
					<div class="trekimage" style="background-image: url(image/trek1.jpg);height:160px;width:100%;background-position: center;background-size: cover;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<form action="INTP/login.php">
					<button class="org_subscribe" type="submit">Subscribe</button>
					<label>Nepal trek club</label>
					</form>
				</div>
				
			</div>

			<div class="trek" style="display:inline-block;margin-left:48px;">

				<div class="trekimage" style="background-image: url(image/trek2.jpg);height:160px;width:100%;background-position: center;background-size: cover;border-radius: 10px;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<form action="INTP/login.php">
					<button class="org_subscribe" type="submit">Subscribe</button>
					<label>kokan Trekkers</label>
				</form>
				</div>
			</div>

			<div class="trek" style="display:inline-block;margin-left:48px;">

				<div class="trekimage" style="background-image: url(image/trek3.jpg);height:160px;width:100%;background-position: center;background-size: cover;border-radius: 10px;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<form action="INTP/login.php">
					<button class="org_subscribe" type="submit">Subscribe</button>
					<label>Adventure Zone</label>
				</form>
				</div>
			</div>
		</div>


		<div class="y_vidos">
			<div class="user_profile_body2" style="display:inline-block;margin-top: 200px;z-index: 1;"> 
			<p style="font-weight: bold;font-size:20;text-decoration:underline;">About Website</p>
			<button type="submit" class="more">More</button>
			<!--<div class="trek" style="display:inline-block;margin-left:48px;">
				<iframe width="380" height="220"
src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=1">
</iframe>

			</div>
			<div class="trek" style="display:inline-block;margin-left:48px;">
				<iframe width="380" height="220"
src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=1">
</iframe>

			</div>
			<div class="trek" style="display:inline-block;margin-left:48px;">
				<iframe width="380" height="220"
src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=1">
</iframe>
			<p>1.website having a two login option i.e admin or user Login</p>

			</div>-->
			<p>1.website having a two login option i.e admin or user Login</p>
			<p>2.website also Having Two Registration Page for Organization and User</p>
			<p>3.It is having a landing page which is having parrallex effect and link to login,register,contact,aboutus and it also include the search bar and map</p>
			<p>4.homepage having an different card which shows different treks.  it also include the advertisement and Map</p>
			<p>5.In homepage and explore we have a navbar which have multiple functionality</p>
			<p>6.we have also creates a page for brief introduction of particular place</p>
			<p>7.we also have a orgnization page which read the message that are send by user.</p>
			<p>8.In control panel page we have a admin view which user has subscribe which orgnization</p>

		</div>

</div>

		
	
</div>
<div class="subscribe" style="margin-bottom: 150px">
		<h2 align="center"> Subscribe To Our Newsletter</h2>
		<h3 align="center">Enter Your E-Mail Here And Get Updates Regarding Our Events</h3>
		<h3 align="center"> And Other Offers!</h3>
		<div class="email_s">
		<form>
			<input type="email" placeholder="email..." id="email_s">
			<input type="submit" value="subscribe" id="e_submit">
		</form>
		</div>
</div>
<div class="map">
<div style="width: 100%"><iframe width="100%" height="400px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23922.046630948345!2d73.08605183336681!3d19.217630551331414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7be1e53006dbd%3A0xe3e79fb1f2b474ad!2sGopi+Cine+Mall!5e0!3m2!1sen!2sus!4v1538898679511" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div><br>
</div>

	</body>
</html>