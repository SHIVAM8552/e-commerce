	<?php include_once("header1.php");?>
    <br/	>
    	<?php include_once("header2.php");?>

	<style type="text/css">
		.submit_section{
			width: 800px;
			height:50px;
			margin:auto;
			background-color:#3366ff;
			padding: 10px;
			border-bottom:1px solid black;
		}
		.order_section{
			width: 800px;
			height:140px;
			margin:auto;
			background-color:#3366ff;
			padding: 10px;
			border-bottom:1px solid black;
		}
	</style>
	<h2 align="center">ordered Product</h2>
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
	<div class="order_section">
		<img src="images/<?php echo $row['image'];?>" style="width:200px; height:130px; float:left"/>
		<a href="checkout.php?product_id=<?php echo $row['product_id'];?>" style="float:right;">x</a>
		<h4> <?php echo $row['product_name'];?></h4>
		<h5> Price:<?php echo $row['original_price'];?></h5>
		<h4> quantity:<?php echo $row['order_qty'];?></h4>
	</div>
	<?php } ?>
	<div class="order_section">
		<div style="text-align: center; font-size: 25px">
			<?php echo "Total Bill ".$total_bill;?>
		</div>
	</div>
	<div class="submit_section">
		<div style="text-align: center; font-size: 25px">
			<a href="login.php"><button>Continue to pay</button></a>
		</div>
	</div>
	<?php } else{?>
	<div class="order_section">
		<h2>you have not added any item in your cart</h2>
	</div>
	<?php } ?>
	
</div>
		
</body>
</html>