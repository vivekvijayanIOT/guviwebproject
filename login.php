<?php
session_start(); // Starting Session
$error='';
$ok='Checking..'; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Authentication failed";

}
else
{
// Define $username and $password
$Name=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "id2635918_root", "uzumymw.9841","id2635918_avagroup");

// To protect MySQL injection for Security purpose
if(!$connection)
{
	$ok="<font color='red', size='+1' face='Arial, Helvetica, sans-serif'>Not Connected</font>";
}else
{
	$ok="<font color='lightGreen', size='+1' face='Arial, Helvetica, sans-serif'>Connected</font>";}

// Selecting Database
$connection = mysqli_connect("localhost", "id2635918_root", "uzumymw.9841","id2635918_avagroup");

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from newform where password='$password' and Name='$Name'");
$rows = mysqli_num_rows($query);
if ($rows == 1)
{
$_SESSION['login_user']=$Name; // Initializing Session
header("location: profile.php");
  // Redirecting To Other Page
}
else
{
$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}

?>