<?php
    include('connection.php');
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="footer.css">
      <title>home</title>
      <script src="https://kit.fontawesome.com/619bc20a51.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   </head>
   <body>
      <div class="header">
         <center>
            <h1><i>haay.lk</i></h1>
         </center>
         <div class="container">
            <div class="navbar">
               <div class="logo">
                  <img src="Logo.png" alt="Logo" width="125px">
               </div>
               <nav>
                  <ul>
                     <li><a href="register.html">Register</a></li>
                     <li><a href="shoses.html">Shose</a></li>
                     <li><a href="electronics.html">Electronics</a></li>
                     <li><a href="mcloths.html">Men's Clothing</a></li>
                     <li><a href="wcloths.html">Women's Clothing</a></li>
                     <li><a href="watches.html">Watches</a></li>
                     <li><a href="beauty.html">Beauty and Cosmetics</a></li>
                     <li><a href="cameras.html">Cameras</a></li>
                     <a href="index.html" class="btn">Home</a>
                  </ul>
               </nav>
               <a href="cart.html">
               <img src="cart.png" alt="cart.png" width="40px"></a>
            </div>
            <div class="row mainSlider">
               <div class="left-side-text">
                  <h1>Change your lens,<br>Change your story.</h1>
                  <p>When words become unclear, I shall focus with photographs.<br>
                     When images become inadequate, i shall content with silence.
                  </p>
                  <br><br>
                  <a href="cameras.html" class="btn">Explore Now &#8594;</a>
               </div>
               <div class="slider">
                  <!-- Slider main container -->
                  <div class="swiper">
                     <!-- Additional required wrapper -->
                     <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><img src="img1.jpg"  alt="camara"></div>
                        <div class="swiper-slide"><img src="img4.webp" alt="watches"></div>
                        <div class="swiper-slide"><img src="img3.jpg"  alt="shoe"></div>
                        <div class="swiper-slide"><img src="img5.jpg"  alt="mavic air 2"></div>
                        <div class="swiper-slide"><img src="img6.webp"  alt="rog keyboard"></div>
                     </div>
                     <!-- If we need pagination -->
                     <div class="swiper-pagination"></div>
                     <!-- If we need navigation buttons -->
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-button-next"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!------------------------------------------------------------------------------------------------------------------------->	
      <div class="categories">
         <div class="col-3">
            <a href="mcloths.html">
            <img src="../Clothings/sources/mens/h1.png" alt="men" width="300">
            </a>
            <a href="watches.html">
            <img src="../Watches/sources/h1.png" alt="watch" width="300">
            </a>
            <a href="wcloths.html">
            <img src="../Clothings/sources/womens/h1.png" alt="womens" width="300">
            </a>
         </div>
      </div>
      <!------------------------------------------------------------------------------------------------------------------------->
      <center>
         <div clas="small-container">
            <h2>Featured Products</h2>
            <a href="../Clothings/Pages/01.html">
               <div class="col4">
                  <img src="../Clothings/sources/mens/h2.png" alt="men">
                  <h4>Wet look Sports By Rebook</h4>
                  <p>Rs.2000</p>
               </div>
            </a>
         </div>
      </center>
      <!------------------------------------------------------------------------------------------------------------------------->	
      <div class="header">
         <h2>Newly arivels</h2>
         <div class="box1">
             <?php
                $sql="SELECT * FROM product LIMIT 4";
                $res=mysqli_query($con,$sql);
                $i=0;
            
                while($row=mysqli_fetch_assoc($res))
                {
             ?>
            <div class="product_column1">
               <a href="productdetails.php?id=<?php echo $row['product_id'];?>">
                  <img src="<?php echo "../Admin/uploads/".$row['p_image']?>" width="300">
                  <h4><?php echo $row['product_name'];?><br>
                  <?php echo $row['selling_price'];?>
                  </h4>
               </a>
            </div>
            <?php
            $i++;
                }
            ?>
         </div>
         <!------------------------------------------------------------------------------------------------------------------------->
         <div class="box2">
            <div class="product_column1">
               <a href="../Beauty/Pages/06.html">
                  <img src="../Beauty/Sources/b6.png" width="300">
                  <h4>Firming green tea body cream<br>
                     Rs.1800
                  </h4>
               </a>
            </div>
            <div class="product_column2">
               <a href="../Electronics/Pages/03.html">
                  <img src="../Electronics/Sources/e3.png" width="300">
                  <h4>Sony Headset<br>
                     Rs.8000
                  </h4>
               </a>
            </div>
            <div class="product_column3">
               <a href="../Shoses/pages/04.html">
                  <img src="../Shoses/source/s3.png" width="300">
                  <h4>Nike Metcon 5<br>
                     Rs.15000
                  </h4>
               </a>
            </div>
            <div class="product_column4">
               <a href="../Electronics/Pages/12.html">
                  <img src="../Electronics/Sources/e12.png" width="300">
                  <h4>Mavic Air 2<br>
                     Rs.90000
                  </h4>
               </a>
            </div>
         </div>
         <!------------------------------------------------------------------------------------------------------------->
         <div class="box2">
            <div class="product_column1">
               <a href="../Electronics/Pages/09.html">
                  <img src="../Electronics/Sources/e9.png" width="300">
                  <h4>Samsung Galaxy S7 edge<br>
                     Rs.40000
                  </h4>
               </a>
            </div>
            <div class="product_column2">
               <a href="../Clothings/Pages2/09.html">
                  <img src="../Clothings/Sources/womens/f9.png" width="300">
                  <h4>Floral Women cocktail<br>
                     Rs.2800
                  </h4>
               </a>
            </div>
            <div class="product_column3">
               <a href="../Beauty/Pages/07.html">
                  <img src="../Beauty/Sources/b8.png" width="300">
                  <h4>Night face cream<br>
                     Rs.2300
                  </h4>
               </a>
            </div>
            <div class="product_column4">
               <a href="../Cameras/Pages/10.html">
                  <img src="../Cameras/Sources/c10.png" width="300">
                  <h4>Axis Gimbal<br>
                     Rs.60000
                  </h4>
               </a>
            </div>
         </div>
         <!------------------------------------------------------------------------------------------------------------->
         <div class="box2">
            <div class="product_column4">
               <a href="../Cameras/Pages/01.html">
                  <img src="../Cameras/Sources/c1.png" width="300">
                  <h4>Canon Digital SLR<br>
                     Rs.80000
                  </h4>
               </a>
            </div>
            <div class="product_column3">
               <a href="../Beauty/Pages/05.html">
                  <img src="../Beauty/Sources/b5.png" width="300">
                  <h4>Face cream<br>
                     Rs.1300
                  </h4>
               </a>
            </div>
            <div class="product_column2">
               <a href="../Clothings/Pages/02.html">
                  <img src="../Clothings/Sources/mens/02.png" width="300">
                  <h4>Classic T-Shirt<br>
                     Rs.850
                  </h4>
               </a>
            </div>
            <div class="product_column1">
               <a href="../Electronics/Pages/04.html">
                  <img src="../Electronics/Sources/e4.png" width="300">
                  <h4>HP Computer<br>
                     Rs.32000
                  </h4>
               </a>
            </div>
         </div>
      </div>
      <!------------------------------------------------------------------------------------------------------------->
      <footer>
         <div class = "row">
            <div class="col">
               <img src="Logo.png" class="logo">
               <h4>Island wide Delivery</h4>
               <p>Same day delivery and next day delivery available for selected products.</p>
            </div>
            <div class="col">
               <h3>
                  Office 
                  <div class="underline"><span></span></div>
               </h3>
               <p>Galle road,</p>
               <p>Colombo, Sri Lanka</p>
               <p class="email-id">haaylk@outlook.com</p>
               <h4>+94 - 0114567852</h4>
            </div>
            <div class="col">
               <h3>
                  Links 
                  <div class="underline"><span></span></div>
               </h3>
               <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="">Services</a></li>
                  <li><a href="">About Us</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">Contacts</a></li>
               </ul>
            </div>
            <div class="col">
               <h3>
                  Newsletter 
                  <div class="underline"><span></span></div>
               </h3>
               <form>
                  <input type="email" placeholder="Enter your email">
               </form>
               <div class="social-icons"></div>
               <i class="fa-brands fa-facebook"></i></a>
               <i class="fa-brands fa-twitter"></i></a>
               <i class="fa-brands fa-whatsapp"></i></a>
               <i class="fa-brands fa-pinterest"></i></i></a>
            </div>
         </div>
         </div>	
         <hr>
         <p class="copyright">© Haay.lk - All rights reserved</p>
      </footer>
      <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
      <script>
         const swiper = new Swiper('.swiper', {
           autoplay: {
         		delay:2500,
         		disableOnInteraction:false,
           },
           loop: true,
         
           
           pagination: {
             el: '.swiper-pagination',
         	clickable:true,
           },
         
           navigation: {
             nextEl: '.swiper-button-next',
             prevEl: '.swiper-button-prev',
           },
         
          
         });
         
         
         
      </script>	
   </body>
</html>