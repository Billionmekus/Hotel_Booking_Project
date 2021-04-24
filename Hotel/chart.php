<?php 
require_once 'includes/db_con.php';

$user_IP = $_SERVER['REMOTE_ADDR'];//gets user IP address for activities
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Home | The Palm Tree Hotel Reservation system </title>
        <link rel="icon" href="img/logo.jpg">
        <link rel="stylesheet" href="custom.css" type="text/css"><!-- custom css code -->
        <!-- bootstrap css code -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- bootstrap css code ends -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    </head>

    <body>
        <header class="header">
            <div class="container-fluid">
                <!--main navbar-->
                <?php include 'includes/navbar.php';?>
            </div>
        </header>
        <div class="container">
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-6">
                <section class="box">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="img/caro (1).jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="img/caro (2).jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="img/caro (5).jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="img/sunrise.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="img/pool.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="img/cocktail.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </section>
                </div>
                <div class="col-md-6">
                    <h5>CART SUMMARY</h5>
                    <table class="table table-hover">
                    <tr>
                        <th>S/N</th>
                        <th>image name</th>
                        <th>image</th>
                        <th>price<br></th>
                    </tr>
                        <?php 

                        $grand_total = 0;

                        $sql = "SELECT * FROM outdoor_cart WHERE visitor_IP='$user_IP';";
                        $result = mysqli_query($DBconnect,$sql);
                        $activity_count = mysqli_num_rows($result);

                        while ($rows = mysqli_fetch_assoc($result)){
                        $activity = $rows['Name'];
                        $price = $rows['Price'];
                        $Image = $rows['Image']
                        
                        $Grand_total = $grand_total + $price;        
                        ?>
                        <tr>
                            <td><?php echo $activity; ?></td>
                            <td><?php echo $price; ?></td>
                            <td>
                                <!-- image code here -->
                                <img src="<?php echo $Image; ?>" class="img-fluid" height="40px" width="40px" 
                                alt="<?php echo $activity; ?>">
                            </td>
                        </tr>
                        <?php
                        }?>
                    </table><hr>
                    <label>Grand Total:</label> <label style="float: right;"><?php echo $Gxrand_total; ?></label><hr>
                </div>
            </div>
        </div>
        
        <!--main footer section-->
        <?php include 'includes/footer.php'; ?>
        <script src="./js/main.js"></script>
    </body>

    <footer>
        <!-- bootstrap js code -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <!-- bootstrap js code  ends -->
    </footer>
</html>'m '