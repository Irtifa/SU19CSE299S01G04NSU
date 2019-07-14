<?php
require_once "connection.php";
?>

<html>
<head>
<meta charset="utf-8">
	<title>lab 6</title>
</head>
<body>
<html>
<div class="content">
                <div class="mainbar">

                    <div class="article">

                        <h2><center>Regintration From</center></h2>
                        <br>

                        <form action="insert.php" method="post">
                            <table width="100%">
                                
                                <tr>
                                    <td>
                                        <h3> User Name</h3>
                                    </td>
                                    <td><input type="text" name="uname"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Email</h3>
                                    </td>
                                    <td><input type="text" name="email"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Password</h3>
                                    </td>
                                    <td><input type="password" name="password"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Retype password</h3>
                                    </td>
                                    <td><input type="password" name="repassword"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>First name </h3>
                                    </td>
                                    <td><input type="text" name="fname"></td>
                                </tr>
                               
                                <tr>
                                    <td>
                                        <h3> Last name </h3>
                                    </td>
                                    <td><input type="text" name="lname"></td>
                                </tr>

                                <tr>
                                    <td>
                                        <h3>Phone</h3>
                                    </td>
                                    <td><input type="number" name="phone"></td>
                                </tr>
                                 <tr>
                                    <td>
                                        <h3>Street</h3>
                                    </td>
                                    <td><input type="text" name="street"></td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <h3> City </h3>
                                    </td>
                                    <td><input type="text" name="city"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3> State </h3>
                                    </td>
                                    <td><input type="text" name="state"></td>
                                </tr>

                                <tr>
                                    <td>
                                        <h3> ZipCode</h3>
                                    </td>
                                    <td><input type="number" name="zipcode"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3> Country</h3>
                                    </td>
                                    <td><input type="text" name="country"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Membership level</h3>
                                    </td>
                                    <td><input type="number" name="membership"></td>
                                </tr>

                            </table>

                            <button type="submit" value="submit">Register</button>

                        </form>


                    </div>

                </div>

</body>
</html>


</html>

</body>
</html>