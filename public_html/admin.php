<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
  
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}


  </style>
</head>
  

<body background="images/back1.jpg" style="background-repeat:no-repeat" style="background-attachment: fixed">
  <?php
  include("menu.php");
  ?>
  <?php
extract($_POST);
if(isset($submit))
{
	include("school.php");
	$rs="select * from login where username='$username' and password='$password'";
    $result=mysqli_query($cn,$rs)or die("Could Not Perform the Query");
    if(mysqli_num_rows($result)<1)
	{
		echo "<BR><BR><BR><BR><center><div> Invalid User Name or Password<div>
        <br><a href=login.php>Login</a></center>";
		exit;
		
	}
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div> Your are not logged in<br> Please <a href=login.php>Login</a><div>";
		exit;
}
?>
  
<br>
<br>
<br>
<br>
  <br><br>
  <center>
    <a href="welcome.php"><img src="images/ads.gif" width="20%"></a>
<a href="welcome1.php"><img src="images/adc.gif" width="20%"></a>

    <br>
    <form name="form1" method="post" action="message.php">
    <input type="image" name="submit" value="submit" src="images/chat.png" width="12%">
    </form>
  </center>
 <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=37307997"></script> 
</body>
</html>

