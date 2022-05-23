<?php
             include("connection.php");
             if(isset($_POST["loging"]))
             {
                    $name=$_POST["username"];
                    $password=$_POST["pwd"];
                    $sql="SELECT fname,pwd FROM user where mail= \"".$name."\";";

                    $result1=mysqli_query($con,$sql);
                    if(!$result1){
                        die("Can not get data: ".mysqli_error($con));
                    }
                    else if(mysqli_num_rows($result1)==0){
                        echo "<center>Please enter valid user name</center>";
                    }
                    while($row=mysqli_fetch_assoc($result1)){
                        if($password!=$row["pwd"]){
                            echo "<center>Password is incorrect</center>";
                        }else{
                           header('Location:index.php');
                        }
                    }
             }else{
                 echo "Form not submitted";
             }

?>