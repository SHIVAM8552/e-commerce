<?php 
   
session_start();
  
		include_once("dbconnect.php");
		if(isset($_SESSION['U_EMAIL']))
		{
			$email= $_SESSION['U_EMAIL'];
			$query= "SELECT * FROM `users` WHERE email='$email'";
			$result=mysqli_query($connnect,$query);
			while($row=mysqli_fetch_assoc($result))
			{
				$user =$row['username'];
			}
		}
		?>
<html>
<head>
<title>ShopTym</title>

<style type="text/css">
.wrapper
{
	width: 1350px;
	height: auto;
	text-align: center;
	display: table-cell;
	margin: 0 auto;
}

.menu{
  width: 1350px;
  height: 62px;
  background-image: url("images/menu.jpg");
  background-repeat: repeat-x;
  

}

.logo{
  width: 1330px;
  font-family:"Comic Sans MS", cursive;
  font-size:48px;
  color:#666;
  margin-top:10px;
  margin-bottom:10px;
  margin-left:10px;
  text-align:center;
}


.solidblockmenu{

margin: 0;

padding: 0;
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:11px;
color:#ffffff;
width: 100%;
overflow: hidden;
margin-bottom: 1em;
border-width: 1px 0;

}

.solidblockmenu li{

display: inline;

}

.solidblockmenu li a{
margin-top:2px;
text-align:center;
border-left:1px solid #01C5FF;
border-right:1px solid #01C5FF;
height:33px;
float: left;
color: black;
padding-top:18px;
text-decoration: none;
padding-left:10px;
padding-right:10px;
}

.solidblockmenu li a:visited{
color: white;
}

.solidblockmenu li a:hover, .solidblockmenu li .current{
color: black;
border-left:1px solid #01C5FF;
border-right:1px solid #01C5FF;
background:#666;
}






</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<center>
  <div align="center" class="wrapper">
  
    <div class="logo"> ShopTym</div>
    
    <div class="menu">
      <ul class="solidblockmenu" style="border:2px solid #666;">
        <li><a href="index.php">Home</a></li>
        <li><a href="about us.php">About Us</a></li>
        <li><a href="home-product.php">Products</a></li>
       
        <li><a href="contact.php">Contact Us</a></li>
        <div style="float:right;">
        <?php if(!isset($_SESSION['U_EMAIL'])){?>
        
         <li><a href="register.php">Register</a></li>
         <li><a href="login.php">Login</a></li>
          <li><a href="login-admin.php">Admin Login</a></li>
         </div>
         <?php } else { ?>

        <div style="float:right;">
        <li><a href="logout.php">Logout</a></li>
        <li><a>Welcome! <?php echo $user; ?></a></li>
        <?php }?>
        </div>
     
      </ul>
      <div class="clear"></div>
    </div>
  </div>
  
</center>
  </body>
  </html>
  
  