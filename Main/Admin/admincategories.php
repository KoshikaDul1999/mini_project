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
            <a href="adminproducts.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Products</span></a>
            <a class="active" href="#"><i class="fa fa-list" aria-hidden="true"></i><span>Categories</span></a>
            <a href="admincustomers.html"><i class="fa fa-users" aria-hidden="true"></i><span>Customers</span></a>
        </div>
        <!--slider bar end-->
        <div class="container">
            <div class="content">
                <a href="addcategory.php"><input type="submit" value="Add new category"></a>

                <div class="card">
                    <div class="card-header">
                        <h4>Categories</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Category ID</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
                                    <th>Delete</th>
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
                                                <td> <?= $item['category_id']; ?></td>
                                                <td> <?= $item['category_name']; ?></td>
                                                <td> <?= $item['c_description']; ?></td>

                                                <td>
                                                    <a href="#" class="btn">Delete</a>
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