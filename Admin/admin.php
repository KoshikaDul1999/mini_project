<?php
    include ("connection.php");
?>

<?php

if(isset($_POST['login'])){

    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT admin_user_name,admin_password FROM adminlogin WHERE admin_user_name='$uname' AND admin_password='$password'";

    $result=mysqli_query($con,$sql);

    if(!$result)
    {
        die('Could not get data: ' . mysqli_error($con));
    }

    if(mysqli_num_rows($result)<1){
        echo "<center> Please enter a valid user name!";
    }

    while($row = mysqli_fetch_assoc($result))
    {
        if($password != $row['admin_password'])
        {
            echo "Password is incorrect";
        }else{
            header('Location:admindashboard.php');
        }
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
            <form method="POST">
                <div class="form-input">
                    <input type="text" name="username" placeholder="User Name">
                </div>
                <div class="form-input">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <input type="submit" name="login" value="LOGIN" class="btn-login">
            </form>
        </div>
    </body>
</html>