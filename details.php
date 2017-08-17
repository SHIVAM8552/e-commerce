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
	<title>Delivery</title>
	<style type="text/css">
		
		.div_section{
			width:650px;
			margin:auto;
			padding:auto;
			height: 700px;
		}
		.div_section h2{
			background:blue;
			padding:5px;
			text-align:center;
			font-size:20px;
			color:white;
			border-radius:9px;
		}
		.under_div{
			border:1px solid white;
			background: #d9d9d9;
			padding:10px;
		}
		tr,td,th{
			padding:5px;

		}
		.bill_section{
			border:1px solid white;
			background: #d9d9d9;
			padding:10px;
		}
		.another_div{
			width:650px;
			margin:auto;
			padding:auto;
		}
	</style>
</head>
<body>
<div class="div_section">
	<h2>Order details</h2>
	<div class="under_div">
	<table>
		<tr>
			<th>Product Name</th>
			<th>Product Quantity</th>
			<th>Product price</th>
			<th>Product Image</th>
		</tr>
			<?php
		include_once("dbconnect.php");
	if (!empty($_SESSION['order_id'])) {
		$total_bill=0;
		$order_id=$_SESSION['order_id'];
		if(isset($_GET['product_id'])){
			$product_id=$_GET['product_id'];
		mysqli_query($connnect,"DELETE FROM `cart` WHERE product_id='$product_id' and order_id='$order_id'");}
		$query=mysqli_query($connnect,"SELECT * FROM products INNER JOIN cart ON cart.product_id=products.product_id WHERE order_id='$order_id' ");
		while ($row=mysqli_fetch_assoc($query)) {
			$total_bill=$total_bill+$row['original_price'];
	?>
	<tr>
		<td><?php echo $row['product_name'];?></td>
		<td><?php echo $row['order_qty'];?></td>
		<td><?php echo $row['original_price'];?></td>
		<td><img src="images/<?php echo $row['image'];?>" style="width:200px; height:130px; float:left"/></td>

	</tr>

	</div>
    <div >
	<tr style="background:#06F;color:#FFF;font-size:16px;width:80px;height:20px;">
		<td style="float:left;"><?php echo "Total Bill ".$total_bill;?></td>
	</tr>
	</div>
	
	<?php } } ?>
	</div>
	<?php
		include_once("dbconnect.php");
		$query="SELECT `id`, `name`, `address_1`, `address_2`, `city`, `state`, `zip`, `mobile_no`, `country` FROM `address`";
		$result=mysqli_query($connnect,$query);
		if($row=mysqli_fetch_assoc($result)) {
			
	?><tr>
	<td><div class="under_div">
	<h4 style="font-size: 17px;">shipping details</h4>
		<?php echo $row['name']; ?><br><br>
		<?php echo $row['address_1'];?>,<?php echo $row['city'];?>,<?php echo $row['state'];?>,<?php echo $row['zip'];?><br><br>
		<?php echo $row['mobile_no'];?>
	</div></td>
	</tr>
	<?php } ?>

	



	
</body>
</html>
