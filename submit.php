<?php
session_start();
if (!isset($_SESSION['U_EMAIL'])) {
	$_SESSION['U_EMAIL']=$email;
	header('Location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deliver success</title>
	<style type="text/css">
		.div_section{
			width:670px;
			margin:auto;
			padding:auto;
			height: 700px;
		}
		.under_div{
			width:670px;
			background: blue;
			text-align:center;
			padding:9px;
			color:white;
		}
	</style>
</head>
<body>
<div class="div_section">
	<div class="under_div">
		<h2>Order placed</h2>
		
		<a href="details.php" style="text-decoration: none;color: white;"><h4>View details>></h4></a>
	</div>
	<?php
		include_once("dbconnect.php");
		$query="SELECT `id`, `name`, `address_1`, `address_2`, `city`, `state`, `zip`, `mobile_no`, `country` FROM `address`";
		$result=mysqli_query($connnect,$query);
		if($row=mysqli_fetch_assoc($result)) {
			
	?>
	<div class="bahar_div" style="padding:5px;background:white;border-bottom:1px solid grey;">
		<?php echo $row['name']; ?><br><br>
		<?php echo $row['address_1'];?>,<?php echo $row['city'];?>,<?php echo $row['state'];?>,<?php echo $row['zip'];?><br><br>
		<?php echo $row['mobile_no'];?>
	</div>
	<?php } ?>
</div>
</body>
<?php include_once("footer.php"); ?>

</html>