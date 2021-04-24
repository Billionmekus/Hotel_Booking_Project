<?php
require_once 'includes/db_con.php';
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

$sql = "SELECT * FROM choice_activities;";
$result = mysqli_query($DBconnect,$sql);

if($check_result = mysqli_num_rows($result) < 1){
    return null;
}
else {
    $rows = mysqli_fetch_assoc($result);
    $activity_Id = $rows['ID'];
    $activity_name = $rows['Name'];
    $price = $rows['Price'];
    $Image = $rows['Image'];
    $category = $rows['Category'];
}

$user_IP = $_SERVER['REMOTE_ADDR'];//gets user IP address
if(isset($_POST['add_choice'])){
    $sql = "INSERT INTO outdoor_cart (name,price,image,visitor_IP)
    VALUES(?,?,?,?)";
    $stmt = mysqli_stmt_init($DBconnect);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'siis',$activity_name,$price,$Image,$user_IP);//s-string,i-integer,d-double
    mysqli_stmt_execute($stmt);
}
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
            <div class="containe-fluid">
                <!--main navbar-->
                <?php include 'includes/navbar.php';?>
            </div>
        </header>

        <main class="hero">
            <div class="container-fluid">
                <div class="main-heading">
                    <h1> Welcome <br> <?php echo $_SESSION['username'] ;?></h1>
                    <h1 class="title"> Discover </h1>
                    <h2 class="subtitle"> Luxury Hotels </h2>
                </div>
                <a href="#" class="btn1 btn-gradient">
                     This is Paradise
                    <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                </a>
            </div>
        </main>

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
                        <h5 class="hotel-name"> Bar Beach/Yoga </h5>
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
                        <h5 class="hotel-name"> Cocktail </h5>
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
                        <h5 class="hotel-name"> Roof Top Pool </h5>
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
                        <h5 class="hotel-name"> Private Lounge</h5>
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
        
        <section class="offer">
            <div class="container">
                <div class="offer-content">
                    <div class="discount">
                        40% off
                    </div>
                    <h5 class="hotel-name"> The Paradise </h5>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star-half rating"></i>
                    </div>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, earum blanditiis. Ipsam nulla commodi sed harum cum tempora repellendus itaque, 
                        explicabo est iusto consequuntur, eveniet praesentium eius amet quidem 
                    </p>
                    <a href="#" class="btn1 btn-gradient">
                        Redeem offer
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </a>
                </div>
            </div>
        </section>
        <div class="alert alert-danger">
            <marquee direction="down">
                <div class="row">
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
                                    <img src="img/tree.jpg" class="d-block w-100" alt="...">
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
                        <section class="box">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img src="img/caro (5).jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="img/roomnman.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="img/living-room.jpg" class="d-block w-100" alt="...">
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
                </div>
            </marquee>
            <marquee>
                <div class="row">
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
                                    <img src="img/tree.jpg" class="d-block w-100" alt="...">
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
                        <section class="box">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img src="img/caro (5).jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="img/roomnman.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="img/living-room.jpg" class="d-block w-100" alt="...">
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
                </div>
            </marquee>
        <section class="rooms">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading"> Luxurious </span>
                    <span class="sub-heading"> Affordable rooms </span>
                </h5>
                <!--<div class="grid rooms-grid">-->
                    <div class="grid-items featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="img/paradise.jpg">
                            <h5 class="room-name"> Deluxe | Rooms </h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price"> $500 
                                <span class="per-night">
                                    Per Night
                                </span> 
                            </span>
                            <p class="paragraph">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Deserunt laborum temporibus nihil asperiores explicabo error 
                                ullam amet nobis quisquam! Neque mollitia ut atque iste. Necessitatibus a sapiente dignissimos placeat impedit?
                            </p>
                            <a href="#" class="btn1 rooms-btn1 btn-gradient"> Book now &rarr;</a>
                        </div>
                    </div><br><br><hr><br><br>
                    <div class="grid-items featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="img/bedroom1.jpg">
                            <h5 class="room-name"> Under Deluxe | Rooms </h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price"> $600 
                                <span class="per-night">
                                    Per Night
                                </span> 
                            </span>
                            <p class="paragraph">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Deserunt laborum temporibus nihil asperiores explicabo error 
                                ullam amet nobis quisquam! Neque mollitia ut atque iste. Necessitatibus a sapiente dignissimos placeat impedit?
                            </p>
                            <a href="#" class="btn1 rooms-btn1  btn-gradient"> Book now &rarr;</a>
                        </div>
                    </div><br><br><hr><br><br>
                    <div class="grid-items featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="img/roomnman.jpg">
                            <h5 class="room-name"> Execultive Suites </h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price"> $1000 
                                <span class="per-night">
                                    Per Night
                                </span> 
                            </span>
                            <p class="paragraph">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Deserunt laborum temporibus nihil asperiores explicabo error 
                                ullam amet nobis quisquam! Neque mollitia ut atque iste. Necessitatibus a sapiente dignissimos placeat impedit?
                            </p>
                            <a href="#" class="btn1 rooms-btn1  btn-gradient"> Book now &rarr;</a>
                        </div>
                    </div><br><br><hr><br><br>
                    <div class="grid-items featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="img/bedroom2.jpg">
                            <h5 class="room-name"> Presidential Suites </h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price"> $2000 
                                <span class="per-night">
                                    Per Night
                                </span> 
                            </span>
                            <p class="paragraph">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Deserunt laborum temporibus nihil asperiores explicabo error 
                                ullam amet nobis quisquam! Neque mollitia ut atque iste. Necessitatibus a sapiente dignissimos placeat impedit?
                            </p>
                            <a href="#" class="btn1 rooms-btn1  btn-gradient"> Book now &rarr;</a>
                        </div>
                    </div><br><br><hr><br><br>
                    <div class="grid-items featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="img/bedroom3.jpg">
                            <h5 class="room-name"> Ambassador Suites </h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price"> $1500 
                                <span class="per-night">
                                    Per Night
                                </span> 
                            </span>
                            <p class="paragraph">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Deserunt laborum temporibus nihil asperiores explicabo error 
                                ullam amet nobis quisquam! Neque mollitia ut atque iste. Necessitatibus a sapiente dignissimos placeat impedit?
                            </p>
                            <a href="#" class="btn1 rooms-btn1  btn-gradient"> Book now &rarr;</a>
                        </div>
                    </div><br><br><hr><br><br>
                    <div class="grid-items featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="img/living-room.jpg">
                            <h5 class="room-name"> Double Bed Room </h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price"> $700 
                                <span class="per-night">
                                    Per Night
                                </span> 
                            </span>
                            <p class="paragraph">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Deserunt laborum temporibus nihil asperiores explicabo error 
                                ullam amet nobis quisquam! Neque mollitia ut atque iste. Necessitatibus a sapiente dignissimos placeat impedit?
                            </p>
                            <a href="#" class="btn1 rooms-btn1  btn-gradient"> Book now &rarr;</a>
                        </div>
                    </div><br><br><hr><br><br>
                    <div class="grid-items featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="img/roombag.jpg">
                            <h5 class="room-name"> Single Bed Room </h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price"> $600 
                                <span class="per-night">
                                    Per Night
                                </span> 
                            </span>
                            <p class="paragraph">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Deserunt laborum temporibus nihil asperiores explicabo error 
                                ullam amet nobis quisquam! Neque mollitia ut atque iste. Necessitatibus a sapiente dignissimos placeat impedit?
                            </p>
                            <a href="#" class="btn1 rooms-btn1  btn-gradient"> Book now &rarr;</a>
                        </div>
                    </div><br><br><hr><br><br>
                    <div class="grid-items featured-rooms">
                        <div class="image-wrap">
                            <img class="room-image" src="img/paradise.jpg">
                            <h5 class="room-name"> Children's Room </h5>
                        </div>
                        <div class="room-info-wrap">
                            <span class="room-price"> $500 
                                <span class="per-night">
                                    Per Night
                                </span> 
                            </span>
                            <p class="paragraph">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Deserunt laborum temporibus nihil asperiores explicabo error 
                                ullam amet nobis quisquam! Neque mollitia ut atque iste. Necessitatibus a sapiente dignissimos placeat impedit?
                            </p>
                            <a href="#" class="btn1 rooms-btn1  btn-gradient"> Book now &rarr;</a>
                        </div>
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