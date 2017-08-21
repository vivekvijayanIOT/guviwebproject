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
				<li class="active"><a href="profile.php" accesskey="1" title=""><b>Refresh</b></a></li>
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
padding-left:15px;}
</style>
	</div></td><td>
    <div class="dummy"></div></td><td>
    <div id="banner" class="containerbiga" >
      <table ><tr><td class="side">
      <div align="left"><h1> Hello Friend </h1>
      <b><font color="#880e4f">Im Vivek, This is my responsive website</font></b>
      <b><font color="#000">. Im a python, IoT and Web developer,<br> Guvi gave me a opportunity to develop my own site. </font></b><hr>
<?php $connection = mysqli_connect("localhost", "id2635918_root", "uzumymw.9841","id2635918_avagroup");
    $ses_sqlgetx=mysqli_query($connection,"select * from resume where id = '$id'");
    $rowx=mysqli_num_rows($ses_sqlgetx);
if($rowx!=1){?>
<ul><li><b><font color="#d50000">Add your resume</font></b> and view at at any time</li>
<li class="active1"><a href="resume.php"><button class="button"/>ADD YOUR RESUME HERE</button></a></li>
</ul><?php
}else {
?><h3>YOUR RESUME</h3>
<?php 
$connection = mysqli_connect("localhost", "id2635918_root", "uzumymw.9841","id2635918_avagroup");
    $sq=mysqli_query($connection,"select * from resume where id = '$id'");
while($rowq=mysqli_fetch_array($sq))
{       ?><br> <b> Name : &nbsp; <font color="#d50000"> <?php echo $rowq['name']; ?></font></b><br>

<b> CGPA : &nbsp; <font color="#d50000"> <?php echo $rowq['cgpa']; ?></font></b><Br>

<b> Your technical skill : &nbsp; <font color="#d50000"> <?php echo $rowq['tech']; ?></font></b><br>
<b> 10th mark : &nbsp; <font color="#d50000"> <?php echo $rowq['p1']; ?></font></b><br>
<b> 12th mark : &nbsp; <font color="#d50000"> <?php echo $rowq['p2']; ?></font></b><Br>
<?php } ?>

<?php } ?>

    </div>

  </td><td class="dummy"></td>
  <td align="left"><b>Comments:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b><font color="#880e4f">Total: </font><b><?php echo $row;?> LIKES</b>
<font color="#880e4f">Total: </font><b><?php echo $row1;?> COMMENTS</b> <br>

    <div id="commenta"  class="frame1">
      <table class="w3-table-all w3-card-4">
      <?php
      $connection = mysqli_connect("localhost", "id2635918_root", "uzumymw.9841","id2635918_avagroup");
      $sql=mysqli_query($connection,"select * from comment order by sno desc");
      while($row=mysqli_fetch_array($sql))
      {?>
        <tr>
          <td>
            <h3><font color="#d50000"><?php echo $row['comment']; ?></font></h3>
            <font color="#880e4f"><p>by <b><?php echo $row['name']; ?></b></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b><?php echo $row['times']; ?></b></p><hr>
          </td>
        </tr>
      <?php } ?>
    </table>
    </div>
    <div style="padding-left:10px;

    padding-right:10px;">
    <b>Send Comment:</b>
<form  method="post">
    <input class="w3-input w3-border w3-round-large" name="comment" placeholder="Your comment" type="text">
    <table><tr><Td><b></b><input class="w3-input w3-border w3-round-large" name="names" placeholder="Your name" type="text"></td><td>
    <b><input class="w3-button w3-red" type="submit" name="com" value="Comment"></b></td></tr></table></form>
</div>
<?php
$connection = mysqli_connect("localhost", "id2635918_root", "uzumymw.9841","id2635918_avagroup");
if(isset($_POST['com']))
{
  $com=$_POST['comment'];
  $nam=$_POST['names'];
  $sql=mysqli_query($connection,"insert into comment (comment,name) values ('$com','$nam')");
  if($sql)
  {
    echo "<script> alert('Thank you');</script>";
  }
}?>





   </td></tr>
  </table>

</div>
</td></tr>
  </table>
</body>
</html>