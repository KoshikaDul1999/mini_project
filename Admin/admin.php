<?php
    include ("connection.php");
?>

<?php

if(isset($_POST['username'])){

    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from adminlogin where admin_user_name='".$uname."'AND admin_password='".$password."' limit 1";

    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)==1){
        //echo "You have successfully logged in";
        exit();
    }
    else{
        echo "You have entered Incorret Password";
        exit();
    }
}

?>
<html>
    <head>
        <title>Admin login</title>
        <link rel="stylesheet" href="css/admin.css">
    </head>
    <body>
        <div class="container">
            <img src="images/admin.jpg">
            <form method="POST" action="admindashboard.php">
                <div class="form-input">
                    <input type="text" name="username" placeholder="User Name">
                </div>
                <div class="form-input">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <input type="submit" value="LOGIN" class="btn-login">
            </form>
        </div>
    </body>
</html>