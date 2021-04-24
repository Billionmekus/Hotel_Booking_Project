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

        <section>
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
                    <section>
                        <div class="col-md-6">
                            <h5>CART SUMMARY</h5>
                            <table class="table table-dark">
                                <tr>
                                    <th>S/N</th>
                                    <th>image</th>
                                    <th>image name</th>
                                    <th>price<br></th>
                                    <th>sub-price[plus the booking fee]<br></th>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <td>5000</td>
                                    <td>50000</td>
                                    <td>500</td>
                                    <td>50000</td>
                                    <td>50000</td>
                                    <td>4000</td>
                                </tr>
                            </table><hr>
                            <label>Grand Total:</label> <label style="float: right;">10 million</label><hr>
                        </div>
                    </section>
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