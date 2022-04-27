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
</head>
<body>

	<a href="../Main/index.php">
		<div class="sizes1">
			<button>Back</button>
		</div>
	</a>
	
	<div class="container">
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
					<button>39</button>
					<button>40</button>
					<button class="active">42</button>
					<button>44</button>
				</div>
				<a href="../main/cart.php">
				<div class="purchase">
					<button>Add to Cart</button>
				</div></a><br>
			</div>
		</div>
		<?php
			}
		?>
	</div>
	
	<a href="../Main/index.php">
		<div class="sizes1">
			<button>Home</button>
		</div>
	</a>
	
	<script src="app.js"></script>
	


</body>
</html>
