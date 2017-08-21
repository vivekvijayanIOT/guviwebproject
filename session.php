<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "id2635918_root", "uzumymw.9841","id2635918_avagroup");

session_start();

$user_check=$_SESSION['login_user'];

$ses_sql=mysqli_query($connection,"select sno,Name from newform where Name='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['Name'];
$id=$row['sno'];




if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>