<?php
@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olivia</title>
    <link rel="stylesheet" href="../css/home_style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="container">
        <div class="main-header">
            <div class="header">   
                <img src="../img/Olivia (1).png" alt="">
                <div class="navigation">
                    <ul class="menu">
                        <li><a href="./about.php">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#">Store</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="./f&q.php">F&Q</a></li>
                        <li><a href="./logout.php">Log Out</a></li>
                        <li><a href="#">Hi <?php echo $_SESSION['user_name'] ?></a></li>
                    </ul>
                </div>
            </div>
            <h2>Explore your true <span>style.</span></h2>
        </div>
    
        <div class="link">
            <div class="item">
                <div class="menC">
                    <article class="card">
                        <img src="../img/home/men's.jpg" alt="Men's" class="card-img">
                        <div class="card-data">
                            <h2 class="card-title">Men's Items</h2>
                            <p class="card-discription">Men's Items</p>
                            <a href="#" class="card-btn">More</a>
                        </div>
                    </article>
                </div>
                <div class="womenC">
                    <article class="card">
                        <img src="../img/home/women's.jpg" alt="women's" class="card-img">
                        <div class="card-data">
                            <h2 class="card-title">Women's Items</h2>
                            <p class="card-discription">Men's Items</p>
                            <a href="#" class="card-btn">More</a>
                        </div>
                    </article>
                </div>
                <div class="kidC">
                    <article class="card">
                        <img src="../img/home/kid's.jpg" alt="kid's" class="card-img">
                        <div class="card-data">
                            <h2 class="card-title">Kid's Items</h2>
                            <p class="card-discription">Men's Items</p>
                            <a href="#" class="card-btn">More</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="touch" id="contact">
        <h2>Get In Touch</h2>
        <div class="break">
            <div class="address">
                <h4>Address</h4>
                <p>Olivia (PVT), Sri Lanka.</p>
            </div>
            <div class="sales">
                <h4>Sales</h4>
                <h6>Sales Enquiries</h6>
                <p>Tel: +94 123456789</p>
                <p>Email: olivia@gmail.com</p>
            </div>
            <div class="about">
                <h4>About Us</h4>
                <p>Matching style and class with luxury and comfort.</p>
            </div>
        </div>
        <div class="footer">
            <h4>Web Group Assignment - 21.2</h4>
        </div>
    </div>
</body>
</html>