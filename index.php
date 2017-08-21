<?php
$error="";
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location:profile.php");
}// Includes Login Script

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>vivek-mysite</title>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>
      <link rel="stylesheet" href="css/style.css">
<link
</head>

<body>
  <style>
  .pad{
    padding-top:20px;
    padding-left:10px;
    font-family: 'Roboto', sans-serif;
    color:#880e4f;
    font-size:15px;
  }
  .next
  {
  font-family: 'Roboto', sans-serif;
  padding-top: 695px;
  }
  .logo
  {
    padding-top:15px;
    padding-left:80px;
    letter-space:1px;
  }
  </style>
  <div id="logo" class="logo">
    <h1 style="text-shadow: 2px 2px lightgray;"><a href="#"><font color="#880e4f" size="10px">vivek</font><font color="white" size="10px">iot</font></a></h1><font color="gray">
  Resume server</font>
  </div>
  <div class="materialContainer">
   <div class="box">

      <div class="title">LOGIN</div>
<form method="post">
      <div class="input">
         <label for="name">Username</label>
         <input type="text" required="" name="username" id="name">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="pass">Password</label>
         <input type="password" required="" name="password" id="pass">
         <span class="spin"></span>
      </div>
      <div align="left" class="pad">
        <br><font color="#d50000">
        <p><?php echo $error; ?></p></font>
      </div>
      <div class="button login">

         <button type="submit" name="submit" value="GO">GO<i class="fa fa-check"></i></button>
      </div>

      <a href="" class="pass-forgot"><font color="gray">
  <p> Vivek.IOT creation, Developer : Vivek.V</p></font></a>

</form>

   </div>
   <div align="center">

   </div>

   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>

      <div class="title">REGISTER</div>
<form method="post"  action="#">
      <div class="input">
         <label for="regname">Username</label>
         <input type="text" required="" name="regname" id="regname">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="regpass">Password</label>
         <input type="password" required="" name="regpass" id="regpass">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="reregpass">Repeat Password</label>
         <input type="password" required="" name="reregpass" id="reregpass">
         <span class="spin"></span>
      </div>

      <div class="button">
         <button type="submit" name="create"><span>CREATE</span></button>
      </div>
</form>
<?php
if(isset($_POST['create']))
{
  $usn=$_POST['regname'];
  $pswd=$_POST['regpass'];
  $rpswd=$_POST['reregpass'];
  if($rpswd!=$pswd)
  {
    echo "<script> alert('Password are mismatched!'); </script>";
  }
  else
  {
    $connection = mysqli_connect("localhost", "id2635918_root", "uzumymw.9841","id2635918_avagroup");
    
    $query = mysqli_query($connection,"insert into newform(Name,password) values('$usn','$pswd')");
    if($query==1)
    {
      echo "<script> alert('Login created successfully.. kindly login'); </script>";

      $error="CREATED";
    }
    else
    {
      echo "<script> alert('Sorry, Something gone wrong!!'); </script>";
    }
  }

}?>

   </div>

</div>
<div align="center" class="next"><font color="gray">
  <p> Vivek.IOT creation, Developer : Vivek.V</p></font>
</div>
  <script src='js/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>