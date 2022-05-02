<?php
    include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Shoping Center</title>
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="footer.css">
</head>
<body>

	<a href="../Main/index.php">
		<div class="sizes1">
			<button>Back</button>
		</div>
	</a>
	
	<div class="container">
		<form action="manage_cart.php" method="POST">
		<?php
			if(isset($_GET['id'])){
				$product_id=$_GET['id'];
				$sql="SELECT * FROM product WHERE product_id='$product_id'";
				$res=mysqli_query($con,$sql);
				$row=mysqli_fetch_assoc($res);
		?>
		<div class="card">
			<div class="sneaker">
				<div class="circle"></div>
					<img src="<?php echo "../Admin/uploads/".$row['p_image']?>" >
			</div>
			<div class="info">
				<h1 class ="title"><?php echo $row['product_name'];?></h1>
				<h3><?php echo $row['p_description'];?></h3>
				<div class="sizes">
				<?php echo "Rs.". $row['selling_price'];?>
				</div>
				<a href="../main/cart.php?id=<?php echo $product_id;?>&name=<?php echo $row['product_name'];?>&price=<?php echo $row['selling_price'];?>&qty=<?php echo 1;?>">
				<div class="purchase">
					<button type="submit" name="addcart">Add to Cart</button>
				</div></a><br>
				<input type="hidden" name="p_id" value="<?php echo $product_id;?>">
				<input type="hidden" name="p_name" value="<?php echo $row['product_name'];?>">
				<input type="hidden" name="p_price" value="<?php echo $row['selling_price'];?>">
				<input type="hidden" name="p_img" value="<?php echo $row['p_image'];?>">
			</div>
		</div>
		<?php
			}
		?>
		</form>
	</div>
	
	<a href="../Main/index.php">
		<div class="sizes1">
			<button>Home</button>
		</div>
	</a>
	
	<script src="app.js"></script>
	


</body>
</html>
