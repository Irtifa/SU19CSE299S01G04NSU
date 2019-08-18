<?php
$connection = mysqli_connect("localhost", "root", "root", "database");
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Orphanage Hope</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" type="text/css">
        <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <body>
            <div class="main">
                <div class="header">

                    
                    <div class="clr"></div>
                    <div class="hbg"><img src="images/header_images.jpg" width="670" height="298" alt="" class="fl" />
                        <div class="info fl">
                        	<div class="article">


                        <h4 style="color:#97c950;">Eager Parents Data</h4>
                        <br>
                        <?php              
                        $query = "SELECT * FROM adoption"; 
                        $result = mysqli_query($connection,$query);
                        ?>
                        <table class="table table-hover">
                            <tr>
                                <td>Fathers Name</td>
                                <td>Mothers Name</td>
                                <td>Fathers NID</td>
                                <td>Mothers NID</td>
                                <td>Mobile No.</td>
                                <td>Address</td>
                                <td>Email Address</td>
                                <td>Orphanages Name</td>
                                <td>Orphanages ID</td>
                                <td>Manager Name</td>
                            </tr>
                            <?php
                        while($row = mysqli_fetch_array($result)){   
                        echo "<tr><td>" . $row['fathers_name'] . "</td><td>" . $row['mothers_name'] . "</td><td>". $row['fathers_nid'] ."</td><td>". $row['mothers_nid'] ."</td><td>". $row['mobile'] ." </td><td>". $row['address'] . "</td><td>". $row['email'] . "</td><td>". $row['orphanages_name'] . "</td><td>". $row['orphanages_id'] . "</td><td>". $row['manager_name'] . "</td></tr>";  
                        }

                        echo "</table>"; 

                        mysqli_close($connection); 

                        ?>
