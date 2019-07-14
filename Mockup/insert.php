<?php
require_once "connection.php";

$uname=$_POST["uname"];
$email=$_POST["email"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$phone=$_POST["phonr"];
$street=$_POST["street"];
$city=$_POST["city"];
$state=$_POST["state"];
$zipcode=$_POST["zipcode"];
$country=$_POST["country"];
$member=$_POST["membership"];

$sql = "INSERT INTO reg (username,email,password,repassword,fname,lname,phone,street,zipcode,country,membership)
VALUES ('$uname','$email','$password','$repassword','$fname','$lname','$phone','$street','$zipcode','$country','$membership')";
if (mysqli_query($conn, $sql)) 
{
echo "New record created successfully";
} 
else 
{
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>