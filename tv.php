<html>
	<head>
    <style type="text/css">
	#button2
{
	float:left;
	width:200px;
	
	 background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
	
   
    padding: 14px 20px;
    margin: 8px 0;
    border-radius: 4px;
    cursor: pointer;
	margin:15px;
}
#button2:hover
{
	background-color: #008CBA;
    color: white;
}

#single_product{
	display:inline-block;
}


	</style>
     </head>
	<body  background="images/minimal-background-pattern-wordpress-1.jpg">


<?php include_once("header1.php");?>
    <br />
    <br />
    	<?php include_once("header2.php");?>
<div class="product_section">
		<h2>Features Product</h2>
<?php include_once("dbconnect.php");
		$query="SELECT * FROM `products` WHERE product_cat='Tv' order by rand()";
		$result=mysqli_query($connnect,$query);
		while($row=mysqli_fetch_assoc($result)){
		?>
		<div id="single_product">
			<a><img style="border:5px solid #F60;width:400;height:250;margin:15px;border-radius:8px;" src="images/<?php echo $row['image'];?>" alt="i8"/></a>
			<h4 style="font-family:'Comic Sans MS', cursive;font-size:24px;color:#666;text-align:justify;margin:18px;"><?php echo $row['product_name'];?></h4>
			<h4 style="font-family:'Comic Sans MS', cursive;font-size:24px;color:#666;text-align:justify;margin:18px;">Price:<?php echo $row['original_price'];?></h4>
			<h4 id="button2"><a href="home-product.php?product_id=<?php echo $row['product_id'];?>">Add to cart</a></h4>
		</div>
		<?php } ?>
	</div>
</div>
</body>
<?php include_once("footer.php"); ?>
</html>