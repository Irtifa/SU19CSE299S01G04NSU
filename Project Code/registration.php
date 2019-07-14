<?php

$link = mysqli_connect("localhost", "root", "", "database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$yourname = mysqli_real_escape_string($link, $_REQUEST['yourname']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$repassword = mysqli_real_escape_string($link, $_REQUEST['repassword']);

 // attempt insert query execution
$sql = "INSERT INTO users (yourname, username,email, password, repassword ) 
VALUES ('$yourname', '$username','$email', '$password', '$repassword')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
<html>
    <br/><a href="donate.php">Another Donation<a>
    <br/><a href="index.html">Go to homepage<a>
</html>