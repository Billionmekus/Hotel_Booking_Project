<?php 
require_once 'includes/db_con.php';
?>

<nav class="nav">
    <a href="index.php" class="logo">
        <img src="./img/logo.jpg" alt="logo">
    </a>
    <div class="hamburger-menu">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
    </div>
    <ul class="nav-list">
        <li class="nav-item">
            <a href="index.php" class="nav-link"> Home </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"> About </a>
        </li>
        <li class="nav-item">
            <a href="rooms.php" class="nav-link"> Offers </a>
        </li>
        <li class="nav-item">
            <a href="news.php" class="nav-link"> News </a>
        </li>
        <li class="nav-item">
            <a href="contact.php" class="nav-link"> Contact </a>
        </li>
        <li class="nav-item">
            <a href="logout.php" class="nav-link"> LOGOUT </a>
        </li>
        <li class="nav-item">
            <a href="chart.php" class="nav-link btn btn-outline-success" style=":#fff;"> 
            choice_activities 
            <?php 
                $sql = "SELECT * FROM outdoor_cart WHERE visitor_IP='$user_IP';";
                $result = mysqli_query($DBconnect,$sql);
                mysqli_fetch_assoc($result);
                $outdoor_count = mysqli_num_rows($result);
                echo $outdoor_count;
            ?>
            </a>
        </li>
    </ul>
</nav>