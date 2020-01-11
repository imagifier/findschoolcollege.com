<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="icon" href="image/sas.ico">
<style>
div {
    float:right;
}
table{
 float:left;
 width:70%;
}
table, th, td {
    border-collapse: collapse;

}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 {
    width: 50%;    
    background-color: #f1f1c1;
}
</style>
<title>ALL MESSAGES</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="icon" href="images/sas.ico">
  
</head>
<body background="images/mani.jpg">
  
  <br><br>
  <h1><center>Message That Contact Us</center></h1>
<hr>
<?php
extract($_POST);
if(isset($submit))
{
	include("school.php");
       $rs="select * from contact";
       $result=mysqli_query($cn,$rs)or die("Could Not Perform the Query");
       if(mysqli_num_rows($result)<1)
	{
		echo "<BR><BR><BR><BR><div><center>No ANY MESSAGES</center><div>";
		exit;	
	}
 }
?>
<?php
while($dat=mysqli_fetch_assoc($result))
{
echo"<table>";
echo"<tr>";
echo"<th>"."NAME:-"."</th>";
echo"<td>".$dat['n1']."</td>";
echo"</tr>";
echo"<tr>";
echo"<th>"."EMAIL:-"."</th>";
echo"<td>".$dat['n2']."</td>";
echo"</tr>";
echo"<tr>";
echo"<th>"."MOBILE NO:-"."</th>";
echo"<td>".$dat['n3']."</td>";
echo"</tr>";
echo"<tr>";
echo"<th>"."MESSAGE:-"."</th>";
echo"<td>".$dat['n4']."</td>";
echo"</tr>";
echo"<td>";
  echo"<hr>";
echo"</td>";
  echo"<table>";
}
?>
  <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=37307997"></script>
</body>
</html>
