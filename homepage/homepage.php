<?php
  require_once "config.php";
  session_start();
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
  {
      
  }
  else
  {
    header("location: /intpjs/INTP/login.php");
      exit;
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>

    .navbar {
      margin-bottom: 10px;
      border-radius: 0;
    }
    
    
     .jumbotron {
      margin-bottom: 30px;
    }
   
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    .panel{
    	box-shadow:  0px 3px 10px 0px rgb(0,0,0,0.9);
    }
    .org_subscribe {
	padding:8px;
	margin:5px;
	background-color: #ff3333;
	color:white;
	font-size:15;
	border:none;
	font-weight: bold;
	border-radius: 2px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

  </style>
</head>
<body>
<nav class="navbar navbar-inverse" style="box-shadow:  0px 3px 10px 0px rgb(0,0,0,0.9); ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="icon.png" height="40" width="40"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Adventures</a></li>
        <li><a href="#">Location</a></li>
        <li><a href="aboutus/about.php">About us</a></li>
        <li><a href="contactus/contact.php">Contact us</a></li>
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
        <div class="dropdown">
          <a href="#">
        <span class="glyphicon glyphicon-user" style="color: white;padding: 5px 10px 5px 10px ;top:5px;font-size: 20px">
        <?php
  if(isset($_POST["logout_btn"])){
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: ../../");
}

  if(isset($_GET['userid'])){
      echo $_GET['userid'];
  }



  
  $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "org";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  if(isset($_POST['sub_btn'])){
      $name=$_GET['userid'];
      $org=$_POST['sub_btn'];

      $sql = "INSERT INTO org (org,subname) VALUES('$org','$name')";

      if ($conn->query($sql) === TRUE) {
        //echo "record added created successfully";
      } 
      else {
    echo "Error creating table: " . $conn->error;
      }
  }


$conn->close();

?>
        </span></a>
        <div class="dropdown-content">
          <form method="POST">
            <a href="logout.php"><button type="submit" name="logout_btn" style="border: none;background-color: white;">Logout</button></a>
           
        </div>
        </div>
      </ul>

    </div>
  </div>
</nav>

<div class="jumbotron" style="margin-top:0px;background-image: url(trek2.jpg);
 box-shadow:  0px 3px 10px 0px rgb(0,0,0,0.9);">
 <div class="col-sm-1">
 	
 	
 		<img src="user1.png" height="120" width="120" style="border-radius: 70px;">
</form>

 </div>
  <div class="container text-center">
    <h1 style="color:white;">Trekmates.com</h1>      
    <p style="color:white;">Welcome, user</p>
  </div>
</div>

<div class="container">    
  <div class="row">
  	
    <div class="col-sm-4">
      <div class="panel panel-primary">
      	
        <div class="panel-heading"><a href="trek1/orgdetails.php" style="text-decoration:none;color: white;">NORMAL CLIMB</a></div>
    	
        <div class="panel-body" style="background-image: url(mountain.jpeg);">
        	<a href="trek1/orgdetails.php">
        	<img src="mountain.jpg" class="img-responsive" style="width:100%;" alt="Image">
        	</a>
        </div>
        <div class="panel-footer">
        	<form method="POST" action="#">
        	<button class="org_subscribe" type="submit" onclick="sub()" name="sub_btn" value="Ladhak tourism Adventure">Subscribe</button><label>Ladhak tourism Adventure</label>
        	</form>
        </div>
      </div>
    </div>

	<a href="trek2">
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading"><a href="trek2/orgdetails.php" style="text-decoration:none;color: white;">STRIP ROUTES ADVENTURE</a></div>
        <div class="panel-body">
          <a href="trek2/orgdetails.php">
          <img src="strip.jpg" class="img-responsive" style="width:100%;" alt="Image">
        </a></div>
        <div class="panel-footer">
          <form method="POST" action="#">
        	<button class="org_subscribe" type="submit"  onclick="sub()" name="sub_btn" value="manali tourism">Subscribe</button><label>manali tourism</label>
          </form>
        </div>
      </div>
    </div>
	</a>
	<a href="trek3">
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading"><a href="trek3/orgdetails.php" style="text-decoration:none;color: white;">WATERFALLS TREK</a></div>
        <div class="panel-body">
          <a href="trek3/orgdetails.php">
          <img src="waterfall.jpg" class="img-responsive" style="width:100%" alt="Image">
        </a>
        </div>
        <div class="panel-footer">
          <form method="POST" action="#">
        	<button class="org_subscribe" type="submit"  onclick="sub()" name="sub_btn" value="tamilnadu adventure Tourism">Subscribe</button><label>tamilnadu adventure Tourism</label>
        </form>
        </div>
      </div>
    </div>
  </div>
</a>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="trek4/orgdetails.php" style="text-decoration:none;color: white;">VALLY ADVENTURE</a></div>
        <div class="panel-body">
          <a href="trek4/orgdetails.php">
          <img src="vally.jpg" class="img-responsive" style="width:100%" alt="Image">
          <a href="/orgdetails.php">
        </div>
        <div class="panel-footer">
          <form method="POST" action="#">
        	<button class="org_subscribe" type="submit"  onclick="sub()" name="sub_btn" value="Mountain Riders">Subscribe</button><label>Mountain Riders</label>
        </form>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="trek5/orgdetails.php" style="text-decoration:none;color: white;">7 DAYS CAMP</a></div>
        <div class="panel-body">
          <a href="trek5/orgdetails.php">
          <img src="camp.jpg" class="img-responsive" style="width:100%" alt="Image">
        </a>
        </div>
        <div class="panel-footer">
          <form method="POST" action="#">
        	<button class="org_subscribe" type="submit"  onclick="sub()" name="sub_btn" value="Lets camp Company">Subscribe</button><label>Let's camp Company</label>
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="trek6/orgdetails.php" style="text-decoration:none;color: white;">CAMP</a></div>
        <div class="panel-body">
          <a href="trek6/orgdetails.php">
          <img src="camp1.jpeg" class="img-responsive" style="width:100%" alt="Image">
          </a>
        </div>
        <div class="panel-footer">
        <form method="POST" action="#">
        <button class="org_subscribe" type="submit"  onclick="sub()" name="sub_btn" value="Lets camp Company">Subscribe</button><label>Let's camp Company</label></div>
        </form>
      </div>
    </div>
  </div>
</div><br><br>
<script > function sub(){alert("successfully subscribed");}</script>


<div class="container">    
  <div class="row">
  	<h3>Advertisement</h3>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        
        <iframe width="100%"  src="https://www.tutorialspoint.com/index.htm" width="600"  frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        
        	<iframe src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=1" width="100%" ></iframe>
      </div>
    </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Subscribe to get notification from Us</p>  
  <form class="form-inline">Get notification:
    <input type="email" class="form-control" size="50" placeholder="Email Address"><br>
    <button type="button" class="btn btn-danger" style="margin-top: 10px;">Sign Up</button>
  </form>
</footer>

<div mapclass="" style="width:100%;box-shadow:  0px 3px 10px 0px rgb(0,0,0,0.9);"><iframe width="100%" height="400px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23922.046630948345!2d73.08605183336681!3d19.217630551331414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7be1e53006dbd%3A0xe3e79fb1f2b474ad!2sGopi+Cine+Mall!5e0!3m2!1sen!2sus!4v1538898679511" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div><br>

<a href="trek1/orgdetails.php" style="color:black;">
<h1>hii</h1></a>
</body>
</html>