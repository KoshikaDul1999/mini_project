<?php
    include("connection.php");
?>
<html>

    <head> 
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<img src="cart.png"width="300px"height="300px" align="left">
	<title>Register</title>
    </head>
    <body bgcolor="pink">
	<div class="title">User Registration</div><br>
	
    <center><div class="container2">
	<center><img src="register.jfif"width="100px"height="100px"></center>
	        <table>
            <form name="RegForm" method="post">
                <div class="user-details">
				    <tr>
                    <div class="input-box">
                        <td>First Name</td>
                        <td><input type="text" name="fname" id="fname"placeholder="Enter your name" required></td>
                    </div>
					</tr>
					<tr>
                    <div class="input-box">
                        <td>Last Name</td>
                        <td><input type="text" name="lname" id="lname"placeholder="Enter your last name" required></td>
                    </div>
					</tr>
					<tr>
                    <div class="input-box">
                        <td>Address</td>
                        <td><input type="text" name="address" id="add"placeholder="Enter your address" required></td>
                    </div>
					</tr>
					<tr>
                    <div class="input-box">
                       <td> Email Address</td>
                        <td><input type="text" name="mail" id="Email"placeholder="Enter your mail address" required></td>
                    </div>
					</tr>
					<tr>
                    <div class="input-box">
                        <td>Password</td>
                        <td><input type="password" name="pwd" id="pass"placeholder="Enter password" required></td>
                    </div>
					</tr>
					<tr>
					<div class="input-box">
                        <td>Repeat Password</td>
                        <td><input type="password" name="pwd" id="Rpass"placeholder="Enter repeat password" required></td>
                    </div>
					</tr>
					<tr>
                    <div class="input-box">
                       <td> Telephone</td>
                        <td><input type="text" name="tel" id="tele"placeholder="Enter your phone number" required><td>
                    </div>
					</tr>
					<tr>
                    <div class="country">
                        <td>Select Your Country </td><br>
                        <td><select type="text" value="" name ="Subject"id="sel"> 
                            <option>Sri Lanka</option> 
                            <option>India</option> 
                            <option>UK</option> 
                            <option>USA</option> 
                             <option>Australia</option> 
                        </select> </td>
                    </div>
					</tr>
					<tr>
					<td></td>
					<td></td>
					</tr>
					<tr>
                    <div class="button">
                        <td><input type="submit" class="b1" value="Register" name="Submit" />
                        <input type="reset" class="b2" value="Reset" name="Reset" /></td>
                    </div>
					</tr>
					</table>
                </div>
            </form>
        </div></center>

<?php
        if(isset($_POST["Submit"]))
             {
                    $fname=$_POST["fname"];
                    $lname=$_POST["lname"];
                    $address=$_POST["address"];
                    $email=$_POST["mail"];
                    $pwd=$_POST["pwd"];
                    $telephone=$_POST["tel"];
                    $country=$_POST["Subject"];

                    if(!empty($_POST['fname']))
                    {
                        if(!preg_match("/^[a-zA-Z]*$/",$fname)){
                            echo "Letters and white spaces are allowed";
                            exit();
                        }
                        else if(!empty($_POST['lname']))
                        {
                             if(!preg_match("/^[a-zA-Z]*$/",$lname)){
                                 echo "Letters and white spaces are allowed";
                                 exit();
                             }
                             else if(!empty($_POST['address']))
                             {
                                   if(!preg_match("/^[a-zA-Z]*$/",$address)){
                                         echo "Letters and white spaces are allowed";
                                         exit();
                                   }
                                   else if(!empty($_POST['mail']))
                                   {
                                        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                                           echo "Invalid email address";
                                           exit();
                                        }
                                        else if(!empty($_POST['pwd'])) {
                                                if(!empty($_POST['tel']))
                                                {
                                                    if(!preg_match("/^[0-9]{10}$/",$telephone)){
                                                        echo "<script>
                                                            swal({
                                                                title: 'Error',
                                                                text: 'Data didnot add!',
                                                                icon: 'warning',
                                                                button: 'Ok',
                                                            });
                                                        </script>";
                                                     }
                                                }else{
                                                    echo "<br>"."Enter phone number";
                                                }  

                                        }else{
                                            echo "<br>"."Enter email password";
                                        }

                                    }else{
                                        echo "<br>"."Enter your email address";
                                   }

                            }else{
                                echo "<br>"."Enter your address";
                            }
                        }else{
                            echo "<br>"."Enter second name";
                        }
                    }
                    else{
                       echo "<br>"."Enter first name";
                    }
                   $sql="INSERT INTO user (fname,lname,address,mail,pwd,telephone,country) 
                    VALUES('$fname','$lname','$address','$email','$pwd',
                    $telephone,'$country')";

                    $run=mysqli_query($con,$sql) or die(mysqli_error($con));

                    if($run)
                        {
                            echo "<script>
                                    swal({
                                        title: 'Successfuly Added',
                                        text: 'Data added successfully!',
                                        icon: 'success',
                                        button: 'Wow!',
                                    });
                        </script>";
                            //header('Location:admincategories.php');
                        }
                        else
                        {
                            echo "<script>
                                    swal({
                                        title: 'Error',
                                        text: 'Data didnot add!',
                                        icon: 'warning',
                                        button: 'Ok',
                                    });
                                </script>";
                            //echo "Error:".mysqli_error($con);
                        }

            }    
            else{
                echo "<script>
                swal({
                    title: 'Error',
                    text: 'Data didnot add!',
                    icon: 'warning',
                    button: 'Ok',
                });
            </script>";
            }
           // mysqli_close($conn);
?>
</body>
</html>