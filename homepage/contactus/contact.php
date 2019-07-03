<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contactus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST["name"])){
      $name=$_POST["name"];
    $message=$_POST["Message"];
    $email=$_POST["email"];
    $sql = "INSERT INTO contactus (name,email,message) VALUES('$name','$email','$message')";

    if ($conn->query($sql) === TRUE) {
        echo "record added created successfully";
      } 
      else {
    echo "Error creating table: " . $conn->error;
      }
}
else{
  //echo "not done";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--/************************************************************/-->
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="/intpjs/header/h.css">
    <link rel="stylesheet" media='screen and (max-width: 1150px)' href="/intpjs/header/h1.css">
    <link rel="stylesheet" media='screen and (max-width: 925px)' href="/intpjs/header/h2.css">
    <link rel="stylesheet" media='screen and (max-width: 700px)' href="/intpjs/header/h3.css">

   <!--/************************************************************/-->
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
  <div class="profile_head" style="font-size: 1.5em;padding-top: 1em;">
            <div class="head_statement" align="center">
            <h1 align="center" style="color:white;
            position:absolute;
            font-size: 20px;">Welcome, To TrekMates.com</h1>
        </div>


            <div class="navbar_contentprofile">
                <ul>
                    <li><a href="../../../explorepage/profile1.php"><b>Explore</b></a></li>
                    <li><a href="#"><b>Adventure</b></a></li>
                    <li><a href="#"><b>Search Location</b></a></li>
                    <li><a href="#"><b>Contact Us</b></a></li>
                    <li><a href="../aboutus/about.php"><b>About</b></a></li>
                </ul>
            </div>
            <div class="login_register_container">
            <form action="../../login.php">
            <button class="loginbutton" type="submit" value="login" >LOGIN</button>
            <form action="../../register.php">
            <button class="regbutton" type="submit" value="registration">SIGNUP</button>
            </form>
            </div>
        </div>
    </form>
</div>
</div>
<i class="fa fa-bars"></i>
  <div class="jumbotron" style="margin-top:0px;background-image: url(trek2.jpg);
 box-shadow:  0px 3px 10px 0px rgb(0,0,0,0.9);height: 150px;">
  <div class="container text-center">
    <h1 style="color:white;margin-top:-15px;">Trekmates.com</h1>      
    <p style="color:white;">Contact Us</p>
  </div>
</div>

<div class="container-fluid">
  <div class="row content" style="height: 600px; box-shadow:  0px 3px 10px 0px rgb(0,0,0,0.9);">
    <div class="col-sm-3 sidenav">
      <h3>Our Contact</h3>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1"><label style="font-size: 18px;color:#e6fff2;">Email</label><br><label>abc@gmail.com</label></a></li><br>
        <li class="active"><a href="#section3"><label style="font-size: 18px;color:#e6fff2;">Skype</label><br><label>trekmatesskype</label></a></li>
        <li class="active"><a href="#section3"><label style="font-size: 18px;color:#e6fff2;">Address</label><br><label>Rama Apartment, Ground Floor, Near Shivam Redium, Daji Ramchandra Road, Charai, Thane (West) 400601</label></a></li>
        <li class="active"><a href="#section3"><label style="font-size: 18px;color:#e6fff2;">Follow US</label><br><label>facebook/trekmatesindia</label><br><label>twitter@TrekMates</label></a></li>
        <li class="active"><a href="#section2"><label style="font-size: 18px;color:#e6fff2;">Phone Number</label><br><label>91 2222 444444</label><br><label>91 2222 444444</label></a></li>
      </ul><br>
    </div>
    <div class="col-sm-8">
        <h2> Contact Us</h2>
        <p>We are here to answer any questions you may have about our combadi experiences Reach out to us and we'll respond as soon as we can.</p><br>
        <p>Even if there is something you have always wanted to experience and we can't find it on combadi,lets us konw and we promice we 'll do our best to find it for you and send you there.</p>
        <hr>
        <form method="POST" action="#">
        <div class="col-sm-4">
        <label style="font-size:15px;">Name*</label><br>
        <input class="form-control" type="text" name="name" required="required">
        </div>
        <div class="col-sm-4">
          <label style="font-size:15px;">Email*</label><br>
          <input class="form-control" type="email" name="email" required="required">
        </div>
        <div class="col-sm-8">
          <label style="font-size:15px;">Message*</label><br>
          <textarea class="form-control" rows="4" cols="50" name="Message" required="required"></textarea><br>
          <input class="btn btn-primary" type="submit" name="submit" value="Send Message"> 
        </div>
        </form>


    </div>
  </div>
</div>




</body>
</html>
