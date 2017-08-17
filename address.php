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
	<title>Adress</title>
	<meta charset="utf-8">
	<style type="text/css">
		.table_1{
			width: 550px;
			padding:auto;
			margin:auto;
			background-color:#fff;
		}
		.under_table{
			width:500px;
			border:1px solid black;
			border-radius: 10px;
		}
		tr,td,select{
			
			padding:3px;
			
		}
		.under_table input,select{
			height:30px;
			border-radius:10px;
		}
		select{
			margin:5px;
			padding:5px;
		}

	</style>
</head>
<body>
<div class="table_1">
	<div><h2>Enter a shipping address</h2></div>
	<div class="under_table">
	<form action="#" method="POST">
	<table>
		<tr>
			<td><input type="text" name="name" placeholder="Full name" size="65" /></td>
		</tr>
		<tr>
			<td><input type="text" name="address_1" placeholder="Address line 1" size="65"/></td>
		</tr>
		<tr>
			<td><input type="text" name="address_2" placeholder="Address line 2" size="65"/></td>
		</tr>
		<tr>
			<td><input type="text" name="city" placeholder="City" size="65"/></td>
		</tr>
		<tr>
			<td><input type="text" name="state" placeholder="State/Province/Region" size="65"/></td>
		</tr>
		<tr>
			<td><input type="text" name="zip" placeholder="ZIP" size="65"/></td>
		</tr>
		<tr>
			<td><input type="text" name="mobile_no" placeholder="Phone number" size="65"/></td>
		</tr>
		<tr>
			<select name="country" style="width: 490px;height: 30px;">
				<option >United State</option>
				<option >India</option>
				<option >Iran</option>
				<option >India</option>
				<option >India</option>
				<option >India</option>
				<option >India</option>
				<option >India</option>
				<option >India</option>
				<option>India</option>
			</select>
		</tr>
	</table>	
	</div>
	<button  name="button" style="background-color:#3366ff; width:500px;height:30px;text-align: center; color:white; border-radius:5px;text-decoration: none;padding:5px;">shift to this adress</button>
	</form>
</div>
</body>
</html>
<?php
		include_once("dbconnect.php");
	if (isset($_POST['button'])) {
		$name=$_POST['name'];
		$add1=$_POST['address_1'];
		$add2=$_POST['address_2'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$zip=$_POST['zip'];
		$mobile_no=$_POST['mobile_no'];
		$country=$_POST['country'];
		$address=uniqid();

		$query="INSERT INTO `address`(`address_id`,`name`, `address_1`, `address_2`, `city`, `state`, `zip`, `mobile_no`, `country`) VALUES ('$address','$name','$add1','$add2','$city','$state','$zip','$mobile_no','$country')";
		if (mysqli_query($connnect,$query)) {
			header('Location:delivery.php?success=1');
		}
		else{
			echo "<script> alert('Please fill up blank!') </script>";
			header('Location:home-product.php?success=0');
		}
	}
?>
<?php include_once("footer.php"); ?>
