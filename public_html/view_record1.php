
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
<title>School Details</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="icon" href="images/sas.ico">
  
</head>

<body background="images/4.jpg">
 <br>
  <h1><center>School Details</center></h1>
<hr>
<?php
extract($_POST);
if(isset($submit))
{
	include("school.php");
       $rs="select * from school where pin='$name' OR state='$name1' OR city='$name2'";
       $result=mysqli_query($cn,$rs)or die("Could Not Perform the Query");
       if(mysqli_num_rows($result)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> No such entry <div>";
		exit;	
	}
 }
?>
<?php
while($dat=mysqli_fetch_assoc($result))
{
$image=$dat['image'];
echo"<table>";
echo"<tr>";
echo"<th>"."NAME OF SCHOOL:-"."</th>";
echo"<td>".$dat['name']."</td>";
echo"<td>";
echo"<div id='img_div'>
     <img src='images/$image' width='180' height='100'/>
     </div>";
echo"</td>";
echo"</tr>";

echo"<tr>";
echo"<th>"."AFFLIATION BOARD:-"."</th>";
echo"<td>".$dat['board']."</td>";
echo"</tr>";
echo"<tr>";
echo"<th>"."ADDRESS:-"."</th>";
echo"<td>".$dat['address']."</td>";
echo"</tr>";
echo"<tr>";
echo"<th>"."CITY:-"."</th>";
echo"<td>".$dat['city']."</td>";
echo"</tr>";
echo"<tr>";
echo"<th>"."PIN:-"."</th>";
echo"<td>".$dat['pin']."</td>";
echo"</tr>";
echo"<tr>";
echo"<th>"."STATE:-"."</th>";
echo"<td>".$dat['state']."</td>";
echo"</tr>";
echo"<tr>";
echo"<th>"."WEBSITE LINK:-"."</th>";
echo"<td>".$dat['website']."</td>";
echo"</tr>";
echo"<tr>";
echo"<th>"."EMAIL OF INSTITUTE:-"."</th>";
echo"<td>".$dat['email']."</td>";
echo"</tr>";
echo"<tr>";
echo"<th>"."CONTACT NO:-"."</th>";
echo"<td>".$dat['contact']."</td>";
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

