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
</body>
</html>