<!DOCTYPE html>
<?php

session_start(); 

   include ("connection.php");
   
   if(isset($_POST['checkout'])){
       $name=$_POST['firstname'];
       $email=$_POST['email'];
       $phone=$_POST['tp'];
       $address=$_POST['address'];
       $paymethod=$_POST['pmethod'];
   
   $sql="INSERT INTO orderdetails(name,email,phone,address,paymentmethod) VALUES('$name','$email','$phone','$address','$paymethod')";
   $res=mysqli_query($con,$sql);
   if($res){
       echo "<script>
           alert('Purchase success');
           window.location.href = 'thankyou.php';
       </script>";
   }else{
       echo mysqli_error($con);
   }
   
   }
   ?>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>checkout page</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      
      <link rel="stylesheet" href="../checkout/checkout.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="footer.css">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   </head>
   <body>
      <div class="checkoutlogo">
         <a href="index.php">
            <h2><img class="checklogo" src="logo.png">
         </a>
         <span>Haay Checkout</span></h2>
      </div>
      <div class="rowc">
         <div class="col-75">
            <div class="containerc">
               <form method="POST" enctype="multipart/form-data" action="">
                  <div class="rowc">
                     <div class="bill-info">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i>Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder ="Enter you name">
                        <label for="email"><i class="fa fa-envelope"></i>Email</label>
                        <input type="text" id="email" name="email" placeholder ="john@gmail.com">
                        <label for="telephone"><i class="fa-solid fa-mobile-screen-button"></i>Telephone</label>
                        <input type="text" id="tp" name="tp" placeholder ="077-1231231">
                        <label for="adr"><i class="fa-solid fa-location-dot"></i>Address</label>
                        <input type="text" id="adr" name="address" placeholder ="home address">
                        <div class="cart">
                           <div class="rowc">
                              <div class="col-50">
                                 <input type="checkbox" checked="checked" name="sameadr">Shipping same as Billing
                                 </label>
                                 <div class="col-50">
                                    <h3>Payment Method</h3>
                                    <input type="radio" id="pmethod" name ="pmethod" value="creditcard"> Using credit cards
                                    <input type="radio" id="pmethod" name ="pmethod" value="cash-ondelivery"> Cash on delivery
                                    <div class="icon-container">
                                       <!--<i class="fa-brands fa-cc-visa"></i>
                                          <i class="fa-brands fa-cc-amex" style="color: blue;"></i>
                                          <i class="fa-brands fa-cc-mastercard" style="color:red;"></i>
                                          <i class="fa-brands fa-cc-discover" style="color:orange;"></i>
                                          -->
                                       <img src="../checkout/visanew.png"  class="visalogo" width="250px"> 
                                    </div>
                                    <lable for="cname">Name of card</lable>
                                    <input type="text" id="cname" name="cardname" >
                                    <lable for="cnum">Card number</lable>
                                    <input type="text" id="cnum" name="cardnumber" placeholder="xxxx-xxxx-xxxx-xxxx">
                                    <lable for="expmonth">Expire month</lable>
                                    <input type="text" id="expmonth" name="expmonth" placeholder="sep">
                                    <div class="rowc">
                                       <div class="col-50">
                                          <lable for="expyear">Exp year</lable>
                                          <input type="text" id="expyear" name="expyear" placeholder="2023">
                                       </div>
                                       <div class="col-50">
                                          <lable for="cvv">CVV</lable>
                                          <input type="text" id="cvv" name="cvv" placeholder="721">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <input type="submit" name="checkout" value="Continue to checkout" class="btnc">
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-25 cart">
      
         <div class="col-25 cart">
         <div class="content">
                  <div class="row">
                     <div class="col-md-12 col-lg-8">
                        <div class="items">
							<?php
                     $tot=0;
                      if(isset($_SESSION['cart'])){
                         foreach($_SESSION['cart'] as $key=>$value){
                        
                           $tot=$tot+$value['p_price'];
							?>
                           <div class="product">
                              <div class="row">
                                 <div class="col-md-3">
                                    <img class="img-fluid mx-auto d-block image" src="<?php echo "../Admin/uploads/".$value['p_img']?>">
                                 </div>
                                 <div class="col-md-8">
                                    <div class="info">
                                       <div class="row">
                                          <div class="col-md-5 product-name">
                                             <div class="product-name">
                                                <a href="#"><?php echo $value['p_name']?></a>
                                                <div class="product-info">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-4 quantity">
                                             <label for="quantity">Quantity:</label>
                                             <!----<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">-->
                                          <td><input type="number" class="iquantity" onchange='subtotal()' min='1' max='100' value ="<?php echo $value['p_qty']?>"></td>
                                          </div>
                                          <div class="col-md-3 price">
                                             <td ><?php echo $value['p_price']?><input type="hidden" class="iprice" value="<?php echo $value['p_price']?>"></td>
                                          </div>

                                             <form action="manage_cart.php" method="POST">
                                             &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn-update">Update</button>
                                          &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn-update" name="remove">Remove</button>
                                          <input type="hidden" name="p_id" value="<?php echo $value['p_id'];?>">
                                             </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
						   <?php 
                   }
                      }
                        
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
                           <button type="button" name="pay" onclick="alert()" class="btn btn-primary btn-lg btn-block"><a href="purchase.php"> Pay now</button></a>
                        </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      </div>
      </div>

         </div>
      </div>
      </div>
      </div>
      <?php
         require('footer.php');
         ?>
   </body>
   <script>
      function alert(){
         swal("Purchase successfully!", "Your order has been shipped!", "success");
      }
   </script>
</html>