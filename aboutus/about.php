<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="about_us.css"/>

<link rel='stylesheet' media='screen and (max-width: 800px)' href="about_us_mobile.css" />


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
<div class="navbar">
        <h1 class="header" style="font-variant: small-caps;">Trek Mates</h1>
        <br>
        <ul>
            <li class="nav_list">Home</li>
            <li class="nav_list">Adventure</li>
            <li class="nav_list">Search</li>
            <li class="nav_list">Contact Us</li>
            <li class="nav_list">About Us</li>
        </ul>
        <button class="log_in">LOG IN</button>
        <button class="sign_up">SIGN UP</button>
    </div>

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
    
    <div class="navbar_mobile">
       <ul>
            <li class="nav_list_mobile">Home</li>
            <li class="nav_list_mobile">Adventure</li>
            <li class="nav_list_mobile">Search</li>
            <li class="nav_list_mobile">Contact Us</li>
            <li class="nav_list_mobile">About Us</li>
        </ul>
        <h1 class="header_mobile" style="font-variant: small-caps;">Trek Mates</h1>
        <div class="menu_container" onclick="change()">
            <div class="menu_line"></div>
            <div class="menu_line"></div>
            <div class="menu_line"></div>
        </div>
        <button class="log_in_mobile">LOG IN</button>
        <button class="sign_up_mobile">SIGN UP</button>
        <button class="log_in_mobile_2" style="display: none";>LOG IN</button>
        <button class="sign_up_mobile_2" style="display: none";>SIGN UP</button>
    </div>
    
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
