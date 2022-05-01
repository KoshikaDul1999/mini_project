<?php
    include('connection.php');
    include('myfunctions.php');
?>

<html>
    <head>
        <title>Order Dashboard</title>
        <link rel="stylesheet" href="css/adminorders.css">
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
                <img src="images/dashadmin.jpg" class="profile_image" alt="profile image">
                <h4>Admin</h4>
            </center>
            <a href="admindashboard.php"><i class="fa fa-home"></i><span>Dashboard</span></a>
            <a class="active" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span>Orders</span></a>
            <a href="adminproducts.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Products</span></a>
            <a href="admincategories.php"><i class="fa fa-list" aria-hidden="true"></i><span>Categories</span></a>
            <a href="admincustomers.php"><i class="fa fa-users" aria-hidden="true"></i><span>Customers</span></a>
        </div>
        <!--slider bar end-->
        
        <div class="container">
            <div class="content">
                <a href="addcategory.php"><input type="submit" class="add-cate" value="Add new category"></a>

                <div class="card" >
            
                    <div class="card-header">
                        <h4 style="color:rgb(247, 8, 84); font-size:40px; font-style:arial;"><center>Orders</center></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" style="margin-left:auto; margin-right:auto; align-content:center; margin-top:100px; ">
                            <thead>
                                <tr>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Order ID</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Product name</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Product price</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">User id</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Shipping name</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">E-mail</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Mobile</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Order address</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Payment type</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Quantity</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Total</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $categories = getAll("category");

                                    if(mysqli_num_rows($categories) > 0)
                                    {
                                        foreach($categories as $item)
                                        {
                                            ?>
                                            <tr>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['o_id']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['o_product_name']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['o_product_price']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['o_usr_id']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['o_shipping_name']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['c_description']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['c_description']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['c_description']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['c_description']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['c_description']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['c_description']; ?></td>

                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">
                                                <!-- <a href="#" style="background-color:rgb(247, 8, 84); color:white; text-decoration:none; padding:15px 32px; border-radius:15px;">Delete</a> -->
                                                <form method="POST">
                                                    <input type="hidden" name="cate_id" value="<?= $item['category_id']; ?>">
                                                    <button type="submit" name="delete_category_btn" style="background-color:rgb(247, 8, 84); color:white; text-decoration:none; padding:12px 32px; border-radius:15px; cursor:pointer;"> <a href="?id=<?php echo $item['category_id'];?>" style="color:white; text-decoration:none;">Delete</a> </button>
                                                </form>
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

       <!-- <?php
                if(isset($_GET['id']))
                {
                    $products_id = $_GET['id'];

                    $delete_query = "DELETE FROM product WHERE product_id='$products_id'";
                    $delete_query_run = mysqli_query($con, $delete_query);

                    if($delete_query_run)
                    {
                        echo "<script>
                            swal({
                                title: 'Deleted',
								text: 'Data deleted successfully!',
								icon: 'success',
								button: 'done',
                            });
                   </script>";
                    }
                    else
                    {
                        echo "<script>
                        swal({
                            title: 'Error',
                            text: 'something went wrong!',
                            icon: 'warning',
                            button: 'Ok',
                        });
                       </script>";
                echo "Error:".mysqli_error($con);
                    }
                }
            ?> -->

    </body>
</html>