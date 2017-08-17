<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us</title>

<style type="text/css">


#mar{
	 font-size:18px;
	 font-family:Georgia, "Times New Roman", Times, serif;
	 font-style:italic;
	 color:#00F;
	 background-color:#CCF;
 }
 
.slideshow-container {
  max-width: 1330px;
  position: relative;
  margin: auto;
  height:"300";
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}
#para1{
	font-size:18px;
	font-family:Tahoma, Geneva, sans-serif;
	color:#06F;
	border:2px dotted #663300;
	width:"1330";
	height:"250";
	
	background-color:#CFF;
	
	
}
#about
{
	font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
	color:#C9F;
	font-size:28px;
}




</style>
</head>

<body background="images/minimal-background-pattern-wordpress-1.jpg">
<?php include_once("header1.php"); ?>

<table width="1330" height="10" cellpadding="10" cellspacing="10">
<tr>
<td width="1330" height="10" cellpadding="10" cellspacing="10"><marquee direction="left" scrollamount="7" id="mar"> Our Ecommerce webiste is one of the best solution to shop from home with lots and lots of offers.        ONLY FOR YOU!!</marquee></td>
</tr></table>
<table width="1330" height="10" cellspacing="10" cellpadding="0">
<tr>
<td width="1330" height="10">
<div class="slideshow-container" style="border:2px solid black; border-radius:8px;">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/Samsung-Banner.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/samsung-splash.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/home-appliance-hero.jpg" style="width:100%">
  <div class="text"></div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); 
}
</script>
</td>
</tr>
</table>

<table width="1330" heigh="550" cellspacing="50">
<tr>
<td width="600" height="250" id="para1" align="center"> <p> <strong id="about"> About us</strong><br /> <br />E-commerce is a transaction of buying or selling online. Electronic commerce draws on technologies such as mobile commerce, electronic funds transfer, supply chain management, Internet marketing, online transaction processing, electronic data interchange (EDI), inventory management systems, and automated data collection systems. Modern electronic commerce typically uses the World Wide Web for at least one part of the transaction's life cycle although it may also use other technologies such as e-mail.</p></td>
</tr>
</table>




</body>

<?php include_once("footer.php"); ?>

</html>