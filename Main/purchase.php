<!DOCTYPE html>

<?php
    include ("connection.php");
?>

<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>checkout page</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link rel="stylesheet" href="../checkout/checkout.css">
   </head>
   <body>
      <div class="checkoutlogo">
         <h2><img class="checklogo" src="logo.png"><span>Haay Checkout</span></h2>
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
                              <input type="submit" name="ckeckbtn" value="Continue to checkout" class="btnc">
                           </div>
                        </div>
                     </div>
					</div>
               </form>
            </div>
            </div>
            <div class="col-25 cart">
               <div class="containerc">
                  <h4>Cart<span class="price" style="color:black"><i class="fa fa-shopping-cart"></i><b>2</b></span></h4>
                  <p><a href="#">product 1</a><span class="price">$20</span></p>
               </div>
            </div>
         </div>
		</div>
      </div>

      <?php
    
    if(isset($_POST['checkbtn']))
    {
        $cat_id='';

       // $dir="uploads/";
        //$filename=basename($_FILES["file"]["name"]);
       // $filepath=$dir.$filename;
       // $filetype=pathinfo($filepath,PATHINFO_EXTENSION);

        $filename=$_FILES['file']['name'];
        $cat_id=$_POST['cat_id'];
        $imageFileType=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
        $extensions_arr = array("jpg","jpeg","png","gif");
        $product_name = $_POST['product_name'];
        $p_brand = $_POST['p_brand'];
        $p_color = $_POST['p_color'];
        $original_price = $_POST['original_price'];
        $selling_price = $_POST['selling_price'];
        $p_description = $_POST['p_description'];
        $p_qty = $_POST['p_qty'];
       
        if(in_array($imageFileType,$extensions_arr)){

            if(move_uploaded_file($_FILES["file"]["tmp_name"],'uploads/'.$filename)){
                $sql="INSERT INTO `product` (`category_id`, `product_name`, `p_brand`, `p_color`, `orginal_price`, `selling_price`, `p_description`, `p_image`, `p_qty`)
                VALUES ('$cat_id', '$product_name', '$p_brand', '$p_color', '$original_price', '$selling_price', '$p_description', '$filename', '$p_qty')";

                if(mysqli_query($con,$sql)){
                   echo "<script>
                            swal({
                                title: 'Successfuly Added',
								text: 'Data added successfully!',
								icon: 'success',
								button: 'Wow!',
                            });
                   </script>";
                   //echo '<script language="javascript">window.location.href="addproduct.php"</script>'; 
                }else{
                    echo "<script>
							swal({
								title: 'Error',
								text: 'Data didnot add!',
								icon: 'warning',
								button: 'Ok',
							});
                   		</script>";
                    echo "Error:".mysqli_error($con);
                }
            }else{
                echo 'Error in uploading file - '.$_FILES['file']['name'].'';
            }
        }

        
    }
?>








   </body>
</html>