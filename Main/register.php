<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecom";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Connection failed". mysqli_connect_error());
}
<<<<<<< HEAD
echo "Connected Successfully";
=======
echo "Conneected Successfully";
>>>>>>> 16040447eb178c155838dc2307c4c8a2666ee57c

mysqli_close($conn);
?>

<html> 
  <head> 
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Register</title>
	
        <script> 
            function GEEKFORGEEKS() { 
                var name =  
                    document.forms["RegForm"]["Name"]; 
                var email =  
                    document.forms["RegForm"]["EMail"]; 
                var phone =  
                    document.forms["RegForm"]["Telephone"]; 
                var what =  
                    document.forms["RegForm"]["Subject"]; 
                var password =  
                    document.forms["RegForm"]["Password"]; 
                var address =  
                    document.forms["RegForm"]["Address"]; 
  
                if (name.value == "") { 
                    window.alert("Please enter your name."); 
                    name.focus(); 
                    return false; 
                } 
  
                if (address.value == "") { 
                    window.alert("Please enter your address."); 
                    address.focus(); 
                    return false; 
                } 
  
                if (email.value == "") { 
                    window.alert( 
                      "Please enter a valid e-mail address."); 
                    email.focus(); 
                    return false; 
                } 
  
                if (phone.value == "") { 
                    window.alert( 
                      "Please enter your telephone number."); 
                    phone.focus(); 
                    return false; 
                } 
  
                if (password.value == "") { 
                    window.alert("Please enter your password"); 
                    password.focus(); 
                    return false; 
                } 
  
                if (what.selectedIndex < 1) { 
                    alert("Please enter your Country."); 
                    what.focus(); 
                    return false; 
                } 
  
                return true; 
            } 
			

			
        </script> 
  
        <style> 

		    form { 
                padding-left:10rem; 
            }
        </style> 
    </head> 
  
    <body> 
	
	
		<div class="header">

		<div class="navbar">
			<div class="logo">
				<img src="Logo.png" alt="Logo" width="125px">
			</div>
				<nav>
					<ul>
						<li><a href="register.html" class="btn">Register</a></li>
						<li><a href="shoses.html">Shose</a></li>
						<li><a href="electronics.html">Electronics</a></li>
						<li><a href="mcloths.html" >Men's Clothing</a></li>
						<li><a href="wcloths.html" >Women's Clothing</a></li>
						<li><a href="watches.html" >Watches</a></li>
						<li><a href="beauty.html" >Beauty and Cosmetics</a></li>
						<li><a href="cameras.html">Cameras</a></li>
						<li><a href="index.html">Home</a></li>
					</ul>
				</nav>
				<a href="cart.html">
				<img src="cart.png" alt="cart.png" width="40px"></a>
		</div>

	

<!------------------------------------------------------------------------------------------------------------------------->	
	
	
	<h3> &emsp; Registration</h3>	
	<hr class="soft"/>
	 <h3>&emsp; Your Personal Details</h3><br><br>
		
		<center><img src="cart.png"></center>
		
        <form name="RegForm" action="/submit.php" 
              onsubmit="return GEEKFORGEEKS()" method="post"> 
            <p>Name: <input type="text" 
                            size="65" name="Name" /></p> 
            <br> 
            <p>Address: <input type="text" 
                               size="65" name="Address" /> 
          </p> 
            <br /> 
            <p>E-mail Address: <input type="text" 
                            size="65" name="EMail" /></p> 
            <br> 
            <p>Password: <input type="text" 
                         size="65" name="Password" /></p> 
            <br> 
            <p>Telephone: <input type="text" 
                        size="65" name="Telephone" /></p> 
            <br> 
  
            <p> 
                Select Your Country 
                <select type="text" value="" name ="Subject"> 
                    <option>Sri Lanka</option> 
                    <option>India</option> 
                    <option>UK</option> 
                    <option>USA</option> 
                    <option>Australia</option> 
                </select> 
            </p> 
            <br> 
            <br> 
   
                <input type="submit" 
                       value="Send" name="Submit" /> 
                <input type="reset" 
                       value="Reset" name="Reset" /> 
            </p> 

		<br><br><br>
		
		<h2><i>Brand and Products</i></h2>
		
		<table border="1">
			<tr>
				<th>Category </th>
				<th>Products</th>
			<tr>
			
			<tr>
				<td>Cameras</td>
				<td>
						&#10004; Sony<br>
						&#10004; Nikon<br>
						&#10004; Canon<br>
						&#10004; Cisco<br>
				</td>
			</tr>
			
			<tr>
				<td>Beauty and Cosmetics</td>
				<td>
					&#10004; JERGENS<br>
					&#10004; Inika<br>
					&#10004; Love Me<br>
				</td>
			</tr>
			
			<tr>
				<td>Watches</td>
				<td>
					&#10004; Apple<br>
					&#10004; Rolex<br>
					&#10004;Quartz<br>
					&#10004;SKMEI<br>
				</td>
			</tr>
		
			<tr>
				<td>Clothings</td>
				<td>
					&#10004; Adidas<br>
					&#10004; Calvin Klein<br>
					&#10004;Sleeves<br>
					&#10004;Clothes Plus<br>
				</td>
			</tr>
			
			<tr>
				<td>Electronics</td>
				<td>
					&#10004; Sony<br>
					&#10004; Asus<br>
					&#10004;HP<br>
					&#10004;Samsung<br>
					&#10004;Apple<br>
				</td>
			</tr>
			
			<tr>
				<td>Shose</td>
				<td>
					&#10004; Nike<br>
					&#10004; Under Armour<br>
				</td>
			</tr>
		
		</table>
        </form> 
		
	</div>
   </body> 
</html> 