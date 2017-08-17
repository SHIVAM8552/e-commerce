<!DOCTYPE html>
<html>
<head>
	<title>product page</title>
	<meta charset="utf-8">
	<style type="text/css">
	  body{
	  	background: #d1d1e0;
	  }
		.div_section h2{
			background-color:#d1d1e0;
			text-align:center;
			width:100%;
			margin:0px;
		}
		.div_section button{
			height:40px;
			background:#3366ff;
			color:white; 
		}
		h3{
			width:100%;
			background: #d1d1e0;
			margin:0px;
			text-align:center;
		}
		table{
			background: white;
		}
		tr,td{
			border:1px solid black;
			padding:5px;
			height: 50px;
		}
		th{
			background-color:#3366ff;
			height:30px;
			font-size:20px;
			color:white;
		}

	</style>
</head>
<body  background="images/minimal-background-pattern-wordpress-1.jpg">
<div class="div_section">
	<h2>Product Section</h2>
	<a href="add_data.php"><button> Add Product</button></a>
</div>
	<h3>All Products</h3>
	<center><table>
		<tr>
			<th>Id</th>
			<th>Product category</th>
			<th>Product Name</th>
			<th>Product Description</th>
			<th>Product price</th>
			<th>Product Image</th>
		</tr>
	<?php
		$i=0;
		include_once("dbconnect.php");
		$query="SELECT `id`, `product_cat`, `product_name`, `product_desc`, `original_price`, `image` FROM `products` ";
		$result=mysqli_query($connnect,$query);
		while ($row=mysqli_fetch_assoc($result)) {
			$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['product_cat'];?></td>
			<td><?php echo $row['product_name'];?></td>
			<td><?php echo $row['product_desc'];?></td>
			<td><?php echo $row['original_price'];?></td>
			<td><img src="../e-commerce/images/<?php echo $row['image'];?>" width="100px" height="100px"/></td>
		</tr>
		<?php }?>
	</table>
	</center>
</body>
</html>