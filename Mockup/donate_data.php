<?php
    $connection = mysqli_connect("localhost", "root", "", "database");
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Orphans</title>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


        <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <body>
            <div class="main">
                <div class="header">

                    <div class="clr"></div>
                    <div class="hbg"><img src="images/or.jpg" width="1000" height="400" alt="" class="fl" /></div>
                </div>
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="content">


                    <div class="article">


                        <h4 style="color:black;">Donor Data</h4>
                        <br>
                        <?php
                        $query = "SELECT * FROM donate"; 
                        $result = mysqli_query($connection,$query);
                        ?>
                            <table class="table table-hover">
                                <tr>
                                    <td>Type</td>
                                    <td>Card Holder Name</td>
                                    <td>Card No</td>
                                    <td>Date</td>
                                    <td>CVV</td>
                                </tr>
                                <?php
                        while($row = mysqli_fetch_array($result)){   
                        echo "<tr><td>" . $row['type'] . "</td><td>" . $row['ccname'] . "</td><td>". $row['ccno'] ."</td><td>". $row['date'] ."</td><td>". $row['cvv'] ." </td></tr>";  
                        }

                        echo "</table>"; 

                        mysqli_close($connection);  
                        ?>


                    </div>

                </div>

                <div class="clr"></div>
            </div>
            
            <div class="footer">
                <div class="footer_resize">
                    <p class="lf">&copy; Copyright <a href="#">Orphanage Hope</a>. &nbsp; &nbsp; All right reserved.</p>


                  
                </div>
                    <div class="col_c1">
                        
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>    
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
            </div>
            </div>

        </body>

    </html>
