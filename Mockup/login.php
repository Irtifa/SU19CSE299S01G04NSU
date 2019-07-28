<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form action="" method="post">
<label>Username:</label><input type="text" name="user"><br/>
<label>Password:</label><input type="password" name="pass"><br/>
<input type="submit" value="Login" name="submit"><br/>
<!--New user Register Link -->
<p><a href="register.php">New User Registeration!</a></p>
</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['user']) && !empty($_POST['pass'])){
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 //DB Connection
 $conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
 //Select DB From database
 $db = mysqli_select_db($conn, 'log') or die("databse error");
 //Selecting database
 $query = mysqli_query($conn, "SELECT * FROM userpass WHERE user='".$user."' AND pass='".$pass."'");
 $numrows = mysqli_num_rows($query);
</body>
</html>