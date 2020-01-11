<?php
session_start()
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php
  include("menu.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Pannel</title>
<meta charset="utf-8">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="index1.css"/>
<style>
.cont{
      height:700px;
      width:60%; 
	  border-right:3px solid white;  
	  border-left:3px solid white; 
	  margin:0px auto;}
.text{ 
      padding:30px; 
	  color:#003333; 
	  text-align:center; 
	  font-family:Georgia, "Times New Roman", 
	  Times, serif;
	  }
  </style>
</head>
<html>
<title>Login page </title>
<head>
<link href="style1.css" rel="stylesheet" type="text/css">
<style type="text/css">
table{ 
border:groove; 
background-image:url(blue_abstract_background_310971.jpg); 
border-color:#000000; 
width:"3";}
#box{ 
border-color:#999966;
}
body
  {
    background-image:url('video/anim.gif');
    background-size:100%;
    background-repeat: repeat-y;
    background-attachment: fixed;
    height:100%;
    width:100%;
}
</style>
</head>
<body>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<form action="admin.php" method="post">
<center>
<table border="3" bgcolor="#FFFFFF" bordercolordark="#993333" height="300" width="400" cellspacing="6" > 
<th>
<font color="#990000">Admin Please Login</font> 
</th>
  <tr>
     <td>
	 <font color="#990000" face="Arial, Helvetica, sans-serif">Username&nbsp;&nbsp; &nbsp;&nbsp;   
	 <input type="text"  id="box" name="username" />
	 </font>
	 </td>
  </tr>
  <tr>
     <td>
	 <font color="#990000" face="Georgia, Times New Roman, Times, serif">Password&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
     <input type="password" name="password" id="box" />
	 </font>
	 </td>
  </tr>
     <tr>
	 <td>
	 <center><input type="submit" id="box" name="submit" value="LOG IN"  border="2"/></center>
     </td>
  </tr>
</table>
</center>
</form>               
<center><div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo "$error";?></div></center>
  <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=37307997"></script>
</body>
</html>

