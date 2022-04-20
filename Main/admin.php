<?php

$host="localhost";
$user="root";
$password="";
$dbname="ecom";

$con=mysqli_connect($host,$user,$password,$dbname);
mysqli_select_db($con,$dbname);

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
        <link rel="stylesheet" href="admin.css">
    </head>
    <body>
        <div class="container">
            <img src="admin.jpg">
            <form method="POST" action="admindashboard.html">
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