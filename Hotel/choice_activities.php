<?php 
require_once 'includes/db_con.php';
include 'includes/functions.php';

$user_IP = $_SERVER['REMOTE_ADDR'];//gets user IP address
if(isset($_POST['add_choice'])){
    $sql = "INSERT INTO checkout (name,price,image,visitor_IP)
    VALUES(?,?,?,?)";
    $stmt = mysqli_stmt_init($DBconnect);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'siis',$product_name,$price,$Image,$user_IP);//s-string,i-integer,d-double
    mysqli_stmt_execute($stmt);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Url | The Palm Tree Hotel Reservation </title>
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
                <a href="booking.php" class="logo">
                    <img src="./img/logo.jpg" alt="logo">
                </a>
                <div class="hamburger-menu">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </header>
        <section class="hotels">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading"> Explore </span>
                    <span class="sub-heading"> Our beautiful outdoor activities </span>
                </h5>
                <div class="grid">
                    <div class="grid-item featured-hotels">
                        <img src="img/caro (1).jpg" alt="rooms" class="hotel-image">
                        <h5 class="hotel-name"> Exclusive Bar </h5>
                        <span class="hotel-price"> From $200/drink </span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star-half rating rating"></i>
                        </div>
                        <button name="add_choice" type="submit" class="btn1 btn-gradient">
                            choice activities
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </button>
                    </div>

                    <div class="grid-item featured-hotels">
                        <img src="img/caro (2).jpg" alt="rooms" class="hotel-image">
                        <h5 class="hotel-name"> In-door Pool </h5>
                        <span class="hotel-price"> From $50/daily </span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                        </div>
                        <button name="add_choice" type="submit" class="btn1 btn-gradient">
                            choice activities
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </button>
                    </div>

                    <div class="grid-item featured-hotels">
                        <img src="img/caro (5).jpg" alt="rooms" class="hotel-image">
                        <h5 class="hotel-name"> Bar Bearch/Yoga </h5>
                        <span class="hotel-price"> From $50/Session  </span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                        </div>
                        <button name="add_choice" type="submit" class="btn1 btn-gradient">
                            choice activities
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </button>
                    </div>

                    <div class="grid-item featured-hotels">
                        <img src="img/pool2.jpg" alt="rooms" class="hotel-image">
                        <h5 class="hotel-name"> Out-door Pool </h5>
                        <span class="hotel-price"> From $20/daily </span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star-half rating"></i>
                        </div>
                        <button name="add_choice" type="submit" class="btn1 btn-gradient">
                            choice activities
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </button>
                    </div>

                    <div class="grid-item featured-hotels">
                        <img src="img/cocktail.jpg" alt="rooms" class="hotel-image">
                        <h5 class="hotel-name"> Cocktails </h5>
                        <span class="hotel-price"> From $15/Glass </span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                        </div>
                        <button name="add_choice" type="submit" class="btn1 btn-gradient">
                            choice activities
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </button>
                    </div>

                    <div class="grid-item featured-hotels">
                        <img src="img/pool.jpg" alt="rooms" class="hotel-image">
                        <h5 class="hotel-name"> Prevent Root Top Pool </h5>
                        <span class="hotel-price"> From $500/daily </span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                        </div>
                        <button name="add_choice" type="submit" class="btn1 btn-gradient">
                            choice activities
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </button>
                    </div>

                    <div class="grid-item featured-hotels">
                        <img src="img/luxury-yacht-1620040_1920.jpg" alt="rooms" class="hotel-image">
                        <h5 class="hotel-name"> Boat Cruise </h5>
                        <span class="hotel-price"> From $100/daily </span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                        </div>
                        <button name="add_choice" type="submit" class="btn1 btn-gradient">
                            choice activities
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </button>
                    </div>

                    <div class="grid-item featured-hotels">
                        <img src="img/living-room.jpg" alt="rooms" class="hotel-image">
                        <h5 class="hotel-name"> Prevent Lounge</h5>
                        <span class="hotel-price"> From $400/daily </span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                        </div>
                        <button name="add_choice" type="submit" class="btn1 btn-gradient">
                            choice activities
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </button>
                    </div>

                    <div class="grid-item featured-hotels">
                        <img src="img/paradise.jpg" alt="rooms" class="hotel-image">
                        <h5 class="hotel-name"> Spa/Gym </h5>
                        <span class="hotel-price"> From $600/daily </span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                        </div>
                        <button name="add_choice" type="submit" class="btn1 btn-gradient">
                            choice activities
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        
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
</html>