<?php

$host="localhost";
$user="root";
$password="1234";
$dbname="ecom";

$con=mysqli_connect($host,$user,$password,$dbname);
$db_connection=mysqli_select_db($con,$dbname);

?>