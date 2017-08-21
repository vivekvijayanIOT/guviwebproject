<?php
include('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>
<link href="profile/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="profile/fonts.css" rel="stylesheet" type="text/css" media="all" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<style>
    .frame1
    {
      width:570px;
      height:300px;
        padding-top:10px;
      padding-left:10px;

      padding-right:10px;

overflow-y: scroll;
overflow-x:none;
    }</style>
<div id="header-wrapper">
	<div id="header" class="container1">
		<div id="logo">
			<h1 style="text-shadow: 2px 2px lightgray;"><a href="#"><font color="#880e4f">vivek</font><font color="white">iot</font></a></h1>
<b>Resume server</b>
		</div>

		<div id="menu">
			<ul>
				<li class="active"><a href="profile.php" accesskey="1" title=""><b>Homepage</b></a></li>
				<li><font color="#fff">..</font></li>
				<li class="active1"><a href="../logout.php" accesskey="5" title=""><B>Logout</b></a></li>
			</ul>
		</div>
</div>
<table><tr><td>
  <div class="dummy"></div></td><td>
	<div id="banner" class="containera">
    <img src="profile/u3.png" height="80px" width="80px"/>
		<div class="title" align="center" style="padding-left:10px; padding-right:10px;">
			<font size="6px"><b>Hi <font color="#880e4f"><?php echo $login_session;?></font> </font></b><br>
			<span class="byline" ><font color="gray" size="3px"><b>Welcome! </b></font></span><br>

   <strong><font color="#001" size="3px">Hope you like my site.<br> Then click like </font></strong>
		<ul >
<form method="post">
			<li class="active1"><input class="button" type="submit" value="LIKES" name="submitz"/></li></form>
      <li class="active1"><a href="#" class="buttonx">LOGOUT</a></li>
		</ul>
    </div>

    <?php


    $connection = mysqli_connect("localhost", "id2635918_root", "uzumymw.9841","id2635918_avagroup");
    $ses_sqlget=mysqli_query($connection,"select * from likes");
    $row=mysqli_num_rows($ses_sqlget);
$ses_sqlgetX=mysqli_query($connection,"select * from comment");
    $row1=mysqli_num_rows($ses_sqlgetX);
if(isset($_POST['submitz'])){
    $ses_sql=mysqli_query($connection,"insert into likes (likes) values(1)");
    if($ses_sql)
    {
      echo "<script> alert ('Thank you for you valuable vote'); </script>";
    }
    else
    {
      echo "<script> alert ('Something went wrong'); </script>";
    }
}
    ?>
<style>
.side{
padding-left:35px;
padding-right:35px;}
.side2{
padding-left:75px;
padding-right:75px;}
</style>
	</div></td><td>
    <div class="dummy"></div></td><td>
    <div id="banner" class="containerbiga" >
<div align="left" class="side">
<h3><font color="#880e4f">Resume</font> Server</h3>
<font color="#d50000"> Enter your resumes details </font>. It will not be shared with anyone. only your login can view this<br><br><div class="side2">
      <form method="post" action="profile.php">
<input class="w3-input w3-border w3-round-large" type="text" name="name" value="<?php echo $login_session;?>" placeholder="NAME"/><br>
<input class="w3-input w3-border w3-round-large" type="text" placeholder="YOUR CGPA" name="cga" value="" required=""/><br>
<input class="w3-input w3-border w3-round-large" type="text" placeholder="TECHNICAL SKILLS" name="tech" value="" required=""/><br>
<input class="w3-input w3-border w3-round-large" type="text" placeholder="10th PERCENTAGE" name="p1" value="" required=""/><Br>
<input class="w3-input w3-border w3-round-large" type="text" placeholder="+2 PERCENTAGE" name="p2" value="" required=""/><br>
<input class="w3-button w3-red" type="submit" name="upload" value="Save my resume"/>
</form>
</div>
</div>
</div>
</td></tr>
  </table>
<?php
if(isset($_POST["upload"]))
{$connection = mysqli_connect("localhost", "id2635918_root", "uzumymw.9841","id2635918_avagroup");
 $name=$_POST['name'];
$cgpa=$_POST['cga'];
$tech=$_POST['tech'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
    $ses_sqlgat=mysqli_query($connection,"insert into resume (id,name,cgpa,tech,p1,p2) values('$id','$name','$cgpa','$tech','$p1','$p2')");

}
?>
</body>
</html>