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
    <title>F&Q</title>
    <link rel="stylesheet" href="../css/f&q.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="container">
        <div class="header">  
            <div class="main-header">    
                <div class="navigation">
                    <ul class="menu">
                        <li><a href="./home.php">Home</a></li>
                        <li><a href="./about.php">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#">Store</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="#">Hi <?php echo $_SESSION['user_name'] ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="link">
            <div class="item">
                <div class="Q1">
                    <article class="card">
                        <div class="card-Q">
                            <h2 class="card-title">How can I order?</h2> 
                        </div>
                        <div class="card-data">
                            <h2 class="card-title">Answer</h2>
                            <p class="card-discription">You can order easily using our online platform. When you find a product you need, you can add it to cart, login and go through the ordering process. </p>
                        </div>
                    </article>
                </div>
                <div class="Q1">
                    <article class="card">
                        <div class="card-Q">
                            <h2 class="card-title">How can I change delivery address?</h2> 
                        </div>
                        <div class="card-data">
                            <h2 class="card-title">Answer</h2>
                            <p class="card-discription">Sign in to your account and go to ???my account???. On ???my account??? you can change all your contact information.</p>
                        </div>
                    </article>
                </div>
                <div class="Q1">
                    <article class="card">
                        <div class="card-Q">
                            <h2 class="card-title">What are the terms and conditions?</h2> 
                        </div>
                        <div class="card-data">
                            <h2 class="card-title">Answer</h2>
                            <p class="card-discription">You can see the terms and conditions here</p>
                            <a href="../html/t&c.html" class="card-btn">T&C</a>
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