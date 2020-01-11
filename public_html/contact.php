<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php
  include("session.php");
  include("menu.php");
  ?>
<script type="text/javascript">
function valid()
{
var user_mobile=document.getElementById("n3");
var pattern=/^\d{10}$/;
if(!pattern.test(user_mobile.value))
{
alert("Phone nubmer must be of 0123456789 format ");
user_mobile.focus();
return false;
}
   var x = document.forms["form1"]["n2"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
  
  if (document.form1.n1.value == "") {
	alert("please fill name");
    document.form1.n1.focus();
	return false;
}
if (document.form1.n2.value == "") {
	alert("please fill Email Id");
    document.form1.n2.focus();
	return false;
}
if (document.form1.n3.value == "") {
	alert("please fill Mobile No.");
    document.form1.n3.focus();
	return false;
}
if (document.form1.n4.value == "") {
	alert("please submit message");
    document.form1.n4.focus();
	return false;
}

	

}

</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contact Developers</title>
<meta charset="utf-8">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body background="images/5.jpg" style="background-repeat:no-repeat" >
<center>
<table width="791">
  <tr><td width="856">
    <br><br><br>
<h1><font face="Times New Roman, Times, serif">CONTACT FOR :-</font></h1>
<style>
p::first-letter {
    font-size: xx-large;
}
</style>
<p>
Website building designing,Database management or graphic designing.
</p>
<pre>
Note:We are always at your service.
</pre>
<form name="form1" method="post" action=""  onsubmit="return valid()" >
 Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="n1" />
 <br>
 <br>
 E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="n2" />
  <br>
  <br>
  Mobile No: <input type="text" class="input-field" name="n3" id="n3" value="" />
  <br>
  <br>
  Message:&nbsp;&nbsp;&nbsp;<textarea name="n4" rows="5" cols="40"></textarea>
  <br>
  <br>
   <center> <input type="submit" name="submit" value="submit" /></center>
  </form>
  <h3 align="right">Address :-</h3>
  <h4 align="right">Opp. UIT College,Saraitkar more</h4>
  <h5 align="right">Golapbag,Burdwan</h5></td></tr></font></table>
  </center>
  <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=37307997"></script>
</body>
</html>
<?php
extract($_POST);
if(isset($_POST['submit']))
{
include("school.php");
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$query="insert into contact(n1,n2,n3,n4)
 values('$n1','$n2','$n3','$n4')";
$rs=mysqli_query($cn,$query)or die("Could Not Perform the Query");
echo "<center>Thank You $n1 for Contacting us we will soon be there for you</center>";
}
?>

