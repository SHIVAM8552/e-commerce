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
	<title>Payment</title>
	<style type="text/css">
		.div_section{
			width:650px;
			margin:auto;
			padding:auto;
			border:1px solid grey;
		}
		.div_section h2{
			background:blue;
			padding:5px;
			text-align:center;
			font-size:20px;
			color:white;
		}
		table{
			text-align:center;
		}
		tr,td{
			width: 600px;
			padding:7px;
			border-bottom:1px solid grey;
			font-size: 20px;
		}
	</style>
</head>
<body>
<div class="div_section">
	<h2>Payments</h2>
	<table>
	<tr>
		<label><td>Cash on delivery</td></label>
		<label><td><input type="radio" name="cod" ></td></label>
	</tr>
	<tr>
		<label><td>Net Banking</td></label>
		<label><td><input type="radio" name="cod"></td></label>
	</tr>
	<tr>
		<label><td>Credit/Debit/ATM Card</td></label>
		<label><td><input type="radio" name="cod"></td></label>
	</tr>
	<tr>
		<td colspan="2">
			<a href="submit.php"><button style="padding:7px; float: right;background: blue;color:white; border-radius:5px;"> PLACE ORDER</button></a>
		</td>
	</tr>

	<table>
</div>
</body>
<?php include_once("footer.php"); ?>

</html>