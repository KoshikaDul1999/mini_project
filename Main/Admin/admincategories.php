<?php
    include('connection.php');
    include('myfunctions.php');
?>

<html>
    <head>
        <title>Category Dashboard</title>
        <link rel="stylesheet" href="admincategories.css">
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
            <a href="adminproducts.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Products</span></a>
            <a class="active" href="#"><i class="fa fa-list" aria-hidden="true"></i><span>Categories</span></a>
            <a href="admincustomers.html"><i class="fa fa-users" aria-hidden="true"></i><span>Customers</span></a>
        </div>
        <!--slider bar end-->
        <div class="container">
            <div class="content">
                <a href="addcategory.php"><input type="submit" class="add-cate" value="Add new category"></a>

                <div class="card" >
            
                    <div class="card-header">
                        <h4 style="color:rgb(247, 8, 84); font-size:40px; font-style:arial;"><center>Categories</center></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" style="margin-left:auto; margin-right:auto; align-content:center; margin-top:100px; ">
                            <thead>
                                <tr>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Category ID</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Category Name</th>
                                    <th style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">Description</th>
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
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['category_id']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['category_name']; ?></td>
                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;"> <?= $item['c_description']; ?></td>

                                                <td style="padding-top:10px; padding-bottom:10px; padding-left:15px; padding:20px;">
                                                <a href="#" style="background-color:rgb(247, 8, 84); color:white; text-decoration:none; padding:15px 32px; border-radius:15px;">Delete</a>
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