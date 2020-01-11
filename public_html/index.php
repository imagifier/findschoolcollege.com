<!DOCTYPE html>
<html>
<head>
<title>Find School & college</title>
<meta charset="utf-8">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 1000);
}
</script>

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
.frame{
    float:left;
    margin:20px;
    height:200px;
    width:200px; 
    overflow:hidden;
    border:10px solid #333; 
    -webkit-box-shadow:5px 5px 5px #111; 
    box-shadow:5px 5px 5px #111;
  }
.picture img{ height:200px; width:200px; -webkit-transition:all ls ease;
transition:all ls ease;}
.picture .one:hover{ height:300px; width:300px;}
.picture .two:hover{ transform:rotate(30deg);}
.picture .three:hover{ transform:rotate(-30deg);}
.mani{
top:0;
width:100%;
opacity:0.7;
position:fixed;
overflow: hidden;
}
.manii{
width:7%;
height:2.5%;
position:fixed;
}
.maniii{
width:7%;
height:2.5%;
position:fixed;

}
</style>

</head>
<body>
<div style="background-color:yellow;;font-size:36px">
<ul class="mani" id="home">
<font face="Georgia, Times New Roman, Times, serif" size="+2">
 <li><a href="login.php">Admin Login</a></li>
       <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Search For</a>
    <div class="dropdown-content">
	
      <a href="view_record.php" class="manii">SCHOOL</a><br>
      <a href="view_recordc.php" class="maniii">COLLEGE</a>
	  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Add your</a>
    <div class="dropdown-content">
	
      <a href="welcome.php" class="manii">SCHOOL</a><br>
      <a href="welcome1.php" class="maniii">COLLEGE</a>
       <li><a href="contact.php">Contact Us</a></li>
	  <li><a href="aboutsc.php">About</a></li>
	   <li><a href="#home">Home</a></li>
	   </font>
	   <div id="logo" style="float:left"><img src="logo1.png"></div>
  </li>
 
</ul>

  </div>

<!-- -->
<div class="con">

  <div class="button" align="left"><a href="view_record.php"><font color="#CCFF00">FIND School</font></a>
  <div class="button1 a" align="right"><a href="view_recordc.php"><font color="#00FF00"> FIND Colleges</font> </a></div>
  </div><div>

<p class="item-1"><font color="#FF00FF" size="+3">We are here to help U in FINDING SCHOOL & COLLEGES </font></p>

<p class="item-2"><font color="red" size="+3">We are happpy to help u...........</font></p>

<p class="item-3"><font color="#CC3333" size="+3">Search here for the DETAILS of SCHOOL & COLLEGES in India</font> </p>

<!-- -->

  <img class="mySlides" src="Image/j11.jpg"
  style="width:100%">
  <img class="mySlides" src="Image/j22.jpg"
  style="width:100%">
  <img class="mySlides" src="Image/j33.jpg"
  style="width:100%">
  <img class="mySlides" src="Image/j44.jpg"
  style="width:100%">
 

</div>
<script>
var myIndex = 0;
carousel();
</script>

</div>
<div class="parallax"></div>
<div style="height:700px;font-size:36px">
<table align="left">
<tr><td><pre> <img src="quotes/w1.jpg"></pre></td></tr>
<tr><td><pre> <img src="quotes/w2.jpg"></pre></td></tr>
<tr><td><pre> <img src="quotes/w3.jpg"></pre></td></tr>
<tr><td><pre> <img src="quotes/w4.jpg"></pre></td></tr>
</table>
<table align="right">
<tr><td><pre><img src="quotes/w5.jpg"> </pre></td></tr>
<tr><td><pre><img src="quotes/w6.jpg"> </pre></td></tr>
<tr><td><pre><img src="quotes/w7.jpg"> </pre></td></tr>
<tr><td><pre><img src="quotes/w1.jpg"> </pre></td></tr>
</table>
<div class="cont">
<div class="text">IMAGE GALLERY</div>
<hr>
<div class="picture frame"><img src="gallery/c1.jpg" class="one" /></div>
<div class="picture frame"><img src="gallery/c2.jpg" class="two" /></div>
<div class="picture frame"><img src="gallery/c3.jpg" class="three" /></div>
<br>
<div class="picture frame"><img src="gallery/c4.jpg" class="one" /></div>
<div class="picture frame"><img src="gallery/c7.jpg" class="two" /></div>
<div class="picture frame"><img src="gallery/c14.jpg" class="three" /></div>
</div>
</div>
<div class="parallax2"></div>

<div style="height:500px; background-color:#333333;">
<footer id="footer">
<img src="logo1.png" height="80px">
<div class="n-footer1"><center><font size="+2" color="#CCCCCC">About Us</font></center>
<table><tr><td></td></tr>

<tr><td></td></tr></table>
<div class="container"><center><a href="aboutsc.php"><font size="+2">About school&college finder.in</font></a></center>
<table><tr><td></td></tr>

<tr><td></td></tr></table>
<div class="n-row"><center><a href="aboutus.php"><font size="+2"color="#CCCCCC">Meet the team</font></a></center>
<table><tr><td></td></tr>
<tr><td></td></tr>
</table>
  <div class="col-lg-3"><center><a href="disclaimer.php"><font size="+2">Disclaimer</font></a></center>
<table><tr><td></td></tr>
<tr><td></td></tr>

</table>


<div class="col-lg-3"><center><a href="contact.php"><font size="+2"color="#CCCCCC">Contact Us</font></a></center>
<table><tr><td></td></tr>
<tr><td></td></tr>

</table>

  <div class="col-lg-3"><center><a href="http://webby4design.tk/"><font size="+2">Advertise With Us</font></a></center>
<table><tr><td></td></tr>
<tr><td></td></tr></table>


<div class="col-lg-3"><center><font size="+2"color="#CCCCCC">Head Office :---</font></center>
<div class="col-lg-3"><center><font size="+1">University Institute of Technology</font></center>
<div class="col-lg-3"><center><font size="+1">Golapbag, Burdwan</font></center>
<table><tr><td></td></tr>
<tr><td></td></tr>
</table>
<div style="background-color:#009966" >
<ul style="background-color:#009966" >

<li style="background-color:#009966" ><p><font face="Courier New, Courier, monospace" size="+1">Student Helpline Number :<b>  7908742904</b><br>
Timings :</font> <span><font face="Courier New, Courier, monospace" size="+1">9:30 AM - 6:30 PM, MON - FRI</font></span></p>
</li>
<li>
</li>
</ul>
<div></div>
<ul style="background-color:#009966" >
<li style="background-color:#009966" >
<a href="http://webby4design.tk/" style="padding:0" style="margin:0"><img src="Icon/2.PNG" title="Join us on our Company Website" width="55" height="55" ><i class="icons ic_fb"></i></a>
<a href="https://www.facebook.com/Webby4Design-352000745256749/" style="padding:0" style="margin:0"><img src="Icon/ic1.png" title="Join us on Facebook" width="55" height="55" ><i class="icons ic_fb"></i></a>
<a href="https://www.youtube.com/channel/UCE95JrzcS52YxkuzzbgHkAg/featured" style="padding:0" style="margin:0"><img src="Icon/ic3.png" title="Join us on You Tube" width="55" height="55" ><i class="icons ic_fb"></i></a>
<a href="https://twitter.com/Webby4Design" style="padding:0" style="margin:0"><img src="Icon/ic2.png" title="Join us on Twitter" width="55" height="55"><i class="icons ic_tw"></i></a>
<font color="#CCCCCC" size="+3"> copyright &copy; 2017 School&College FInder.in</font>
</li>
</ul></footer>
</div>
<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=37307997"></script>
</body>
</html>



