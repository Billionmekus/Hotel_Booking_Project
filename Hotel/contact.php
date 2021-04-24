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

    <section class="contact">
        <div class="container">
            <h5 class="section-head">
                <span class="heading"> Contact </span>
                <span class="sub-heading"> Get in tounch with us </span>
            </h5>
            <div class="contact-content">
                <div class="traveler-wrap">
                    <img src="img/contect-us.jpg" alt="">
                </div>
                <form action="" class="form contact-form">
                    <div class="input-group-wrap">
                        <div class="input-group">
                            <input type="text" class="input" placeholder="Name ">
                            <span class="bar"></span>
                        </div>
                        <div class="input-group">
                            <input type="email" class="input" placeholder="E-mail ">
                            <span class="bar"></span>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="text" class="input" placeholder="Subject">
                        <span class="bar"></span>
                    </div>
                    <div class="input-group">
                        <textarea class="input" cols="30" rows="8" placeholder="Name " required></textarea>
                        <span class="bar"></span>
                    </div>
                    <button type="submit" class="btn1 form-btn1 btn1-purple"> Send Message
                        <span class="dotss"><i class="fas fa-ellipsis-h"></i></span>
                    </button>
                </form>
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