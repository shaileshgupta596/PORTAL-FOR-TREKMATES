<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
session_unset();
// Destroy the session.
session_destroy();
// Redirect to login page
header("location: /intpjs/INTP/login.php");
exit;
?>