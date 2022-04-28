<?php
   include('connection.php');
   
   	if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['price']) && isset($_GET['qty'])){
   		$pid=$_GET['id'];
   		$name=$_GET['name'];
   		$price=$_GET['price'];
   		$qty=$_GET['qty'];
   
   		$sql="INSERT INTO cart(product_id,p_name,unit_price,qty) VALUES('$pid','$name','$price','$qty')";
   		$res=mysqli_query($con,$sql);
   
   		if($res){
   			echo "<script>
   				alert('product added');
               window.location.href = 'cart.php';
   			</script>";
   		}else{
   			echo mysqli_error($con);
   		}
   
   	}
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="stylesheet.css">
      <title>Shopping Cart</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <link rel="stylesheet" href="../cart/assets/css/style.css">
	 
   </head>
   <body>
     
      <!--Cart View--------------------------------------------------->
      <main class="page">
         <section class="shopping-cart dark">
            <div class="container">
               <div class="block-heading">
                  <h2>Shopping Cart</h2>
                  <p>Haay.lk provides a reliable, secure shopping cart solution for your order. 
                     Haay.lk allows you to accept credit cards, Amazon Pay, Apple Pay and PayPal payments 
                     by integrating with over 10 payment gateways.
                  </p>
               </div>
               <div class="content">
                  <div class="row">
                     <div class="col-md-12 col-lg-8">
                        <div class="items">
							<?php
                      $tot=0;
								$sql="SELECT product.product_id,product.p_image,cart.product_id,cart.p_name,cart.unit_price,cart.qty FROM cart,product WHERE product.product_id=cart.product_id";
								$res=mysqli_query($con,$sql);
                        $i=0;
                        
								while($row=mysqli_fetch_assoc($res)){
							?>
                           <div class="product">
                              <div class="row">
                                 <div class="col-md-3">
                                    <img class="img-fluid mx-auto d-block image" src="<?php echo "../Admin/uploads/".$row['p_image']?>">
                                 </div>
                                 <div class="col-md-8">
                                    <div class="info">
                                       <div class="row">
                                          <div class="col-md-5 product-name">
                                             <div class="product-name">
                                                <a href="#"><?php echo $row['p_name']?></a>
                                                <div class="product-info">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-4 quantity">
                                             <label for="quantity">Quantity:</label>
                                             <!----<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">-->
                                             <input id="quantity" type="number" value ="<?php echo $row['qty']?>" name="qty"class="form-control quantity-input">
                                          </div>
                                          <div class="col-md-3 price">
                                             <span><?php echo $row['unit_price']?></span>
                                          </div>
                                          &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn-update">Update</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
						   <?php 
                  }
                  $sql="SELECT SUM(cart.unit_price) AS tot FROM cart;";
                  $res=mysqli_query($con,$sql);
                  $row=mysqli_fetch_row($res);
                  $tot=$row[0];
                     ?>
                        </div>
                     </div>
                     <div class="col-md-12 col-lg-4">
                        <div class="summary">
                           <h3>Summary</h3>
                           <div class="summary-item"><span class="text">Subtotal</span><span class="price"><?php if($tot>0){echo $tot;} ?></span></div>
                           <div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
                           <div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span></div>
                           <div class="summary-item"><span class="text">Total</span><span class="price"><?php if($tot>0){echo $tot;} ?></span></div>
                           <button type="button" class="btn btn-primary btn-lg btn-block"><a href="purchase.html"> Checkout</button></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      </form>
   </body>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</html>