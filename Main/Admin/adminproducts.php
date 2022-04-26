<?php
    include('connection.php');
    include('myfunctions.php');
?>

<html>
    <head>
        <title>Product Dashboard</title>
        <link rel="stylesheet" href="adminproducts.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>
    <body>

        <input type="checkbox" id="check">

        <!--header area start-->
        <header>
            <label for="check">
                <i class="fa fa-bars" id="sidebar_btn"></i>
            </label>
            <div class="left_area">
                <h3>Haay <span>Shooping</span></h3>
            </div>
            <div class="right_area">
                <a href="admin.php" class="logout_btn">Sign out</a>
            </div>
        </header>
        <!--header area end-->
    
        <!--sliderbar start-->
        <div class="sidebar">
            <center>
                <img src="dashadmin.jpg" class="profile_image" alt="profile image">
                <h4>Admin</h4>
            </center>
            <a href="admindashboard.html"><i class="fa fa-home"></i><span>Dashboard</span></a>
            <a href="adminorders.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span>Orders</span></a>
            <a class="active" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Products</span></a>
            <a href="admincategories.php"><i class="fa fa-list" aria-hidden="true"></i><span>Categories</span></a>
            <a href="admincustomers.html"><i class="fa fa-users" aria-hidden="true"></i><span>Customers</span></a>
        </div>
        <!--slider bar end-->
        <div class="container">
            <div class="content">
                <a href="addproduct.php"><input type="submit" class="add-pro" value="Add new product" style="margin-top: 2rem; padding: 15px 25px;  border: none; background-color: #5e0bed; color: #fff; font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif;"></a>

            <div class="card">
                <div class="card-header">
                    <h4 style="color:rgb(247, 8, 84); font-size:40px; font-style:arial;"><center>Products</center></h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" style="margin-left:auto; margin-right:auto; align-content:center; margin-top:100px;  ">
                        <thead>
                            <tr>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Product ID</th>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Category ID</th>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Product Name</th>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Brand</th>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Selling Price</th>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Quantity</th>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Image</th>
                                <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $products = getAll("product");

                                if(mysqli_num_rows($products) > 0)
                                {
                                    foreach($products as $item)
                                    {
                                        ?>
                                        <tr>
                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['product_id']; ?></td>
                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['category_id']; ?></td>
                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['product_name']; ?></td>
                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['p_brand']; ?></td>
                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['selling_price']; ?></td>
                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['p_qty']; ?></td>
                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">
                                                <img src="uploads/<?= $item['p_image']; ?>" width="80px" height="80px" alt="<?= $item['product_name']; ?>">
                                            </td>

                                            <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">
                                                <a href="#" style="background-color:rgb(247, 8, 84); color:white; text-decoration:none; padding:12px 32px; border-radius:15px;">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                }
                                else
                                {
                                    echo "No records found";
                                }
                            ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>