<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="about_us.css?<?=filemtime("about_us.css")?>" rel="stylesheet" type="text/css" />

<link href="about_us_mobile.css.css?<?=filemtime("about_us_mobile.css.css")?>" rel="stylesheet" type="text/css" media='screen and (max-width: 800px)'  />

<!--/************************************************************/-->
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="/intpjs/header/h.css">
    <link rel="stylesheet" media='screen and (max-width: 1150px)' href="/intpjs/header/h1.css">
    <link rel="stylesheet" media='screen and (max-width: 925px)' href="/intpjs/header/h2.css">
    <link rel="stylesheet" media='screen and (max-width: 700px)' href="/intpjs/header/h3.css">

   <!--/************************************************************/-->
<script>

loadXMLDoc();

function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "details.xml", true);
  xmlhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var x = xmlDoc.getElementsByTagName("member");
  console.log(x);
var ki=0;
   for (i = 0; i <x.length; i++) {
       
    document.getElementsByClassName("name")[ki].innerHTML=x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
    document.getElementsByClassName("rollno")[ki].innerHTML=x[i].getElementsByTagName("roll")[0].childNodes[0].nodeValue;
    document.getElementsByClassName("std")[ki].innerHTML=x[i].getElementsByTagName("email")[0].childNodes[0].nodeValue;
    document.getElementsByClassName("name")[ki+4].innerHTML=x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
    document.getElementsByClassName("rollno")[ki+4].innerHTML=x[i].getElementsByTagName("roll")[0].childNodes[0].nodeValue;
    document.getElementsByClassName("std")[ki+4].innerHTML=x[i].getElementsByTagName("email")[0].childNodes[0].nodeValue;
    //document.getElementsByClassName("name")[i].innerHTML=x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue;
    ki+=1;
   }
  
  
}
</script>


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
    
</head>
<body>
<div class="profile_head" style="top: -28px;left: -28px;width: 105%">
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
            <form action="../login/r.php">
            <button class="loginbutton" type="submit" value="login" >LOGIN</button>
            <form action="../register/reg.php">
            <button class="regbutton" type="submit" value="registration">SIGNUP</button>
            </form>
            </div>
        </div>
    </form>
</div>
</div>
<i class="fa fa-bars"></i>

<div class="parallax_container">
<div class="parallax" style="background-image: url(a1.jpg);"></div>

<div class="header_about_us">
About Us</div>

<div class="parallax" style="background-image: url(a1.jpg);"></div>
</div>

<div class="parallax_container">
<div class="parallax" style="background-image: url(a2.jpg);"></div>

<div class="content">
<div class="img" style="background-image: url(i1.jpg);width: 30vw;height: 35vh; background-size: cover;">
    
</div>
<div class="details">
<span class="name">Ronak S Karani</span>
<span class="std">TEITA</span>
<span class="rollno">11</span>
</div>
</div>

<div class="parallax" style="background-image: url(a2.jpg);"></div>
</div>

<div class="parallax_container">
<div class="parallax" style="background-image: url(a3.jpg);"></div>

<div class="content">
<div class="img" style="background-image: url(i2.jpg);width: 30vw;height: 35vh; background-size: cover;">
    
</div>
<div class="details">
<span class="name">Ronak S Karani</span>
<span class="std">TEITA</span>
<span class="rollno">11</span>
</div>
</div>

<div class="parallax" style="background-image: url(a3.jpg);"></div>
</div>

<div class="parallax_container">
<div class="parallax" style="background-image: url(a4.jpg);"></div>

<div class="content">
<div class="img" style="background-image: url(i3.jpg);width: 30vw;height: 35vh; background-size: cover;">
    
</div>
<div class="details">
<span class="name">Ronak S Karani</span>
<span class="std">TEITA</span>
<span class="rollno">11</span>
</div>
</div>
<div class="parallax" style="background-image: url(a4.jpg);"></div>
</div>

<div class="parallax_container">
<div class="parallax" style="background-image: url(a5.jpg);"></div>

<div class="content">
<div class="img" style="background-image: url(i4.jpg);width: 30vw;height: 35vh; background-size: cover;">
    
</div>
<div class="details">
<span class="name">Ronak S Karani</span>
<span class="std">TEITA</span>
<span class="rollno">11</span>
</div>
</div>

<div class="parallax" style="background-image: url(a5.jpg);"></div>
</div>

<div class="parallax_container">
<div class="parallax" style="background-image: url(a6.jpg);"></div>

<div class="video">

</div>

<div class="parallax" style="background-image: url(a6.jpg);"></div>
</div>


    <!--Mobile-->
    

    
    <hr>

<div class="parallax_container_mobile">

<div class="parallax" style="background-image: url(a1.jpg); ">
    <div class="header_about_us">
About Us</div>

</div>
</div>

<div class="parallax_container_mobile">


<div class="parallax" style="background-image: url(a2.jpg);">
    <div class="content">
<div class="img" style="background-image: url(i1.jpg);width: 30vw;height: 30vw; background-size: cover;">
    
</div>
<div class="details">
<span class="name">Ronak S Karani</span>
<span class="std">TEITA</span>
<span class="rollno">11</span>
</div>
</div>

</div>
</div>

<div class="parallax_container_mobile">



<div class="parallax" style="background-image: url(a3.jpg);"><div class="content">
<div class="img" style="background-image: url(i2.jpg);width: 30vw;height: 30vw; background-size: cover;">
    
</div>
<div class="details">
<span class="name">Ronak S Karani</span>
<span class="std">TEITA</span>
<span class="rollno">11</span>
</div>
</div></div>
</div>

<div class="parallax_container_mobile">


<div class="parallax" style="background-image: url(a4.jpg);">
    <div class="content">
<div class="img" style="background-image: url(i3.jpg);width: 30vw;height: 30vw; background-size: cover;">
    
</div>
<div class="details">
<span class="name">Ronak S Karani</span>
<span class="std">TEITA</span>
<span class="rollno">11</span>
</div>
</div>
</div>
</div>

<div class="parallax_container_mobile">


<div class="parallax" style="background-image: url(a5.jpg);">
    <div class="content">
<div class="img" style="background-image: url(i4.jpg);width: 30vw;height: 30vw; background-size: cover;">
    
</div>
<div class="details">
<span class="name">Ronak S Karani</span>
<span class="std">TEITA</span>
<span class="rollno">11</span>
</div>
</div>
</div>
</div>

<div class="parallax_container_mobile">


<div class="parallax" style="background-image: url(a6.jpg);">
    <div class="video">

</div>

</div>
</div>

</body>
</html>
