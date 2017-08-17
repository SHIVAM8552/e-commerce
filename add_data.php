<!DOCTYPE html>
<html>
<head>
	<title>add product</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			background-color: #d1d1e0;
			width:100%;
		}
		.add_product h2{
			background: blue;
			text-align: center;
			color:white
			;
		}
		table{
			border:2px solid black;
		}
		tr,td{
			padding:10px;
		}
		#button{
			background-color:blue;
			color:white;
			width:75px;
			height:30px;
			border-radius:10px;
		}
		.add_product input{
			height:30px;
		}
	</style>
</head>
<body  background="images/minimal-background-pattern-wordpress-1.jpg">
<div class="add_product">
<form action="#" method="POST" enctype="multipart/form-data">
<h2>Add product</h2>
	<center><table>
		<tr>
			<td>Item Name</td>
			<td>
				<select name="product_cat">
					<option>Select please</option>
					<option>Mobile</option>
					<option>Laptop</option>
					<option>Tv</option>
					<option>Refrigerator</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Products Name</td>
			<td><input type="text" name="product_name" size="49" /></td>
		</tr>
		<tr>
			<td>Product Description</td>
			<td><textarea cols="50" rows="4" name="product_desc" /></textarea></td>
		</tr>
		<tr>
			<td>Original Price</td>
			<td><input type="text" name="original_price"/></td>
		</tr>
		<tr>
			<td>Products image</td>
			<td><input type="file" name="image" accept="image/*" multiple /></td>
		</tr>
		<tr>
			<center><td colspan="2"><input type="submit" name="submit" value="save" id="button"/></td></center>
		</tr>
	</table></center>
</form>
</div>
<?php include_once("dbconnect.php");
	if (isset($_POST['submit'])) {
		$pname=$_POST['product_name'];
		$pdesc=$_POST['product_desc'];
		$price=$_POST['original_price'];
		$pcat=$_POST['product_cat'];
		$image=$_FILES['image']['name'];
		$pro_tmp=$_FILES['image']['tmp_name'];
		move_uploaded_file($pro_tmp,"images/".$image);
		$prod_id=uniqid();
		$query="INSERT INTO `products`(`product_id`, `product_cat`, `product_name`, `product_desc`, `original_price`, `image`) VALUES ('$prod_id','$pcat','$pname','$pdesc','$price','$image')";
		//echo $query;
		$result=mysqli_query($connnect,$query);
		if (($result)==true) {
			echo "data insert succesful!";
		}
		else{
			echo "something went wrong!";
		}
	}
?>
</body>
</html>