<?php 
// $db = new PDO('mysql:host=localhost;dbname=website','root','');
// if(isset($_POST['email'])){
// 	$email=$_POST['email'];
// 	$user=$db->query("SELECT * FROM users WHERE 	email='{$email}'");

// 	if($user->rowCount()){
// 		die('Send Email');

// 	}
// }

	$db = new PDO('mysql:host=localhost;dbname=intp','root','');
	if(isset($_POST['email'])){
	$email=$_POST['email'];
	$user=$db->query("SELECT * FROM accounts WHERE email='{$email}'");
	echo $email; 
	// ';drop table forum_topics;/*'*/
	
	// if($user->rowCount()){
	// 	die('Send Email');
	// }
	}

?>

<html>
	<head>
		<title>Inject</title>
	</head>
	<body>
		<form action="injection.php" method="post">
			<label for="email">Email Address
			<input type="text" name="email" id="email">
		    </label>
		    <input type="submit" value="Recover">
			
		</form>
	</body>
</html>