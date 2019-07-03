<html>
<head>
	<title>profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="profile.css">
	

	</head>
<body>
	<section class="profile_page_head"></section>

		<div class="profile_head">
			<div class="head_statement" align="center" style="position:absolute;width:400px;right: 27%;">
			<h1 align="center" style="color:white;
			position:absolute;
			font-size: 20px;">Welcome, To TrekMates.com</h1>
			</div>

			<!--
			<div class="head_logo">
				<img src="headlogo.jpeg" width="145" height="145" id="head_logo">
			</div>
			-->

			<!--
			<div class="image_avtar_dropdown">
				<button class="dropdown_btn1">
					<img src="user.jpeg" width="50" height="50">
				</button>

				<div class="dropdown_list1">
					<a href="#"><label><b>Setting</b></label></a>
					<a href="#" area-expanded="true"><label><b>Logout</b></label></a>
				</div>
			</div>
			-->


			<div class="navbar_contentprofile">
				<ul>
					<li><a href="#"><b>Explore</b></a></li>
					<li><a href="#"><b>Adventure</b></a></li>
					<li><a href="#"><b>Search Location</b></a></li>
					<li><a href="../INTP/homepage/contactus/contact.php"><b>Contact Us</b></a></li>
					<li><a href="../INTP/homepage/aboutus/about.php"><b>About</b></a></li>
				</ul>
			</div>
			<div class="login_register_container">
			<form action="../INTP/login.php">
			<button class="loginbutton" type="submit" value="login" >LOGIN</button>
			<form action="../INTP/register.php">
			<button class="regbutton" type="submit" value="registration">SIGNUP</button>
			</form>
			</div>
		</div>
		<hr>


<div class="slidebar" style="width:100%;height:400px;background-color: yellow;box-shadow: 0px 3px 10px 0px rgb(0,0,0,2.2);">
  <img class="mySlides" src="slide1.jpg" style="width:100%;height:400px;
  ">
  <img class="mySlides" src="slide2.jpg" style="width:100%;height:400px;">
  <img class="mySlides" src="slide3.jpg" style="width:100%;height:400px;">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>

		
	<!--</section>-->

	<!--
		<div class="sidebar" style="display: inline-block;">
			<div class="menu_items">
				<a href="#">Mountains</a>
				<a href="#">Waterfall</a>
				<a href="#">Desert</a>
				
				<a href="#">Diving</a>
				<a href="#">Acssessory</a>

			</div>
		</div>
	-->
		<!--
		<div class="body_heading" aling="center" style="display:inline-block; position:absolute;left:44%;">
			<h1 align="center">Recommend For You</h1>
		</div>
		-->
		<div class="user_profile_body" style="display:inline-block;margin-top: 10px;"> 
			<p style="font-weight: bold;font-size:20;text-decoration:underline;">organization</p>
			<button type="submit" class="more">More</button>
			<div class="trek" style="display:inline-block;margin-left:48px;">

				<div class="trekimage" style="background-image: url(image/trek1.jpg);height:160px;width:100%;background-position: center;background-size: cover;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<form action="../login/r.php">
					<button class="org_subscribe" type="submit">Subscribe</button>
					
					<a href="trek1/orgdetails.php" style="text-decoration: none;color:black"><label>Nepal trek club</label></a>
					</form>
				</div>
			</div>

			<div class="trek" style="display:inline-block;margin-left:48px;">

				<div class="trekimage" style="background-image: url(image/trek2.jpg);height:160px;width:100%;background-position: center;background-size: cover;border-radius: 10px;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<form action="../login/r.php">
					<button class="org_subscribe" type="submit">Subscribe</button>
					
					<a href="trek2/orgdetails.php" style="text-decoration: none;color:black"><label>kokan Trekkers</label></a>
					</form>
				</div>
			</div>

			<div class="trek" style="display:inline-block;margin-left:48px;">

				<div class="trekimage" style="background-image: url(image/trek3.jpg);height:160px;width:100%;background-position: center;background-size: cover;border-radius: 10px;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<form action="../login/r.php">
					<button class="org_subscribe" type="submit">Subscribe</button>
					
					<a href="trek3/orgdetails.php" style="text-decoration: none;color:black"><label>Adventure Zone</label></a>
					</form>
				</div>
			</div>

			<!--

			<div class="trek" style="display:inline-block;margin-left:60px;margin-top:40px;">

				<div class="trekimage" style="background-image: url(image/trek4.png);height:160px;width:100%;background-position: center;background-size: cover;border-radius: 10px;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<p> <b>this is trek1</b></p>
				</div>
			</div>

			<div class="trek" style="display:inline-block;margin-left:60px;margin-top:40px;">

				<div class="trekimage" style="background-image: url(image/trek5.jpg);height:160px;width:100%;background-position: center;background-size: cover;border-radius: 10px;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<p> <b>this is trek1</b></p>
				</div>
			</div>

			<div class="trek" style="display:inline-block;margin-left:60px;margin-top:40px;">

				<div class="trekimage" style="background-image: url(image/trek6.jpg);height:160px;width:100%;background-position: center;background-size: cover;border-radius: 10px;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<p> <b>this is trek1</b></p>
				</div>
			</div>

			<div class="trek" style="display:inline-block;margin-left:60px;margin-top:40px;">

				<div class="trekimage" style="background-image: url(image/trek7.jpg);height:160px;width:100%;background-position: center;background-size: cover;border-radius: 10px;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<p> <b>this is trek1</b></p>
				</div>
			</div>

			<div class="trek" style="display:inline-block;margin-left:60px;margin-top:40px;">

				<div class="trekimage" style="background-image: url(image/trek8.jpg);height:160px;width:100%;background-position: center;background-size: cover;border-radius: 10px;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<p> <b>this is trek1</b></p>
				</div>
			</div>
			-->
		</div>

		<div class="user_profile_body2" style="display:inline-block;margin-top: 10px;"> 
			<p style="font-weight: bold;font-size:20 ;text-decoration: underline">Latest Trek</p>
			<button type="submit" class="more">More</button>
			<div class="trek" style="display:inline-block;margin-left:48px;">

				<div class="trekimage" style="background-image: url(image/trek4.png);height:160px;width:100%;background-position: center;background-size: cover;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<a href="trek4/orgdetails.php" style="text-decoration: none;color:black"><b>Sikkim lekes</b></a>
				</div>
			</div>

			<div class="trek" style="display:inline-block;margin-left:48px;">

				<div class="trekimage" style="background-image: url(image/trek5.jpg);height:160px;width:100%;background-position: center;background-size: cover;border-radius: 10px;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<a href="trek5/orgdetails.php" style="text-decoration: none;color:black"><b>Matheran</b></a>
				</div>
			</div>

			<div class="trek" style="display:inline-block;margin-left:48px;">

				<div class="trekimage" style="background-image: url(image/trek6.jpg);height:160px;width:100%;background-position: center;background-size: cover;border-radius: 10px;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<a href="trek6/orgdetails.php" style="text-decoration: none;color:black"><b>Karnala,panvel</b></a>
				</div>
			</div>
		</div>

		<div class="user_profile_body3" style="display:inline-block;margin-top: 10px;"> 
			<p style="font-weight: bold;font-size:20 ;text-decoration: underline">Most Popular</p>
			<button type="submit" class="more">More</button>
			<div class="trek" style="display:inline-block;margin-left:48px;">

				<div class="trekimage" style="background-image: url(image/trek7.jpg);height:160px;width:100%;background-position: center;background-size: cover;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<a href="trek7/orgdetails.php" style="text-decoration: none;color:black"><b>Hamta Circle</b></a>
					
				</div>
			</div>

			<div class="trek" style="display:inline-block;margin-left:48px;">

				<div class="trekimage" style="background-image: url(image/trek8.jpg);height:160px;width:100%;background-position: center;background-size: cover;border-radius: 10px;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<a href="trek8/orgdetails.php" style="text-decoration: none;color:black"><b>Indrai Fort</b></a>
				</div>
			</div>

			<div class="trek" style="display:inline-block;margin-left:48px;">

				<div class="trekimage" style="background-image: url(slide3.jpg);height:160px;width:100%;background-position: center;background-size: cover;border-radius: 10px;" >
				</div>
				<div class="trekname" style="width:100%;height:50px">
					<a href="#" style="text-decoration: none;color:black"><b>leh</b></a>
				</div>
			</div>
		</div>

</body>
</html>
