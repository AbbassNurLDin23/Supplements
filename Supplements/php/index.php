<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["firstName"] = $_POST["firstName"];
    $_SESSION["lastName"] = $_POST["lastName"];
    echo '<script>alert("Hi ' . $_SESSION["firstName"] . ' ' . $_SESSION["lastName"] . '");</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sync Supplements</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="media.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
    <style>
        /* Style for the container holding the buttons */
        .button-container {
            width: 100%;
            text-align: center;
            margin-top: 20px;
            /* Optional: Add space above the buttons */
        }

        /* Style for each button */
        .custom-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            margin: 0 10px;
            /* Optional: Add space between buttons */
        }

        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 10px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: block;
            width: 100px;
            margin-right: auto;
        }

        .navbar {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .navbar a {
            text-decoration: none;
            color: #ecf0f1;
        }

        .icons {
            display: flex;
            gap: 10px;
        }

        .icons i {
            font-size: 24px;
            color: #ecf0f1;
            cursor: pointer;
        }

        .home {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .home-text {
            width: 50%;
        }

        .home h1 {
            font-size: 2em;
            color: #3498db;
        }

        .home p {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            display: inline-block;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .about {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .about h2 {
            color: #2c3e50;
        }

        .about-text {
            width: 50%;
        }

        .about p {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .products {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .products h2 {
            color: #2c3e50;
        }

        .box {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
        }

        .box img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .box h3 {
            color: #2c3e50;
        }

        .box span {
            color: #e74c3c;
        }

        .box a {
            display: inline-block;
            margin-top: 10px;
            background-color: #3498db;
            color: #fff;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .box a:hover {
            background-color: #2980b9;
        }

        .custom-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            margin: 0 10px;
        }

        .custom-button:hover {
            background-color: #2980b9;
        }

        .customers {
            padding: 20px;
        }

        .customers h2 {
            color: #2c3e50;
        }

        .customers-container {
            display: flex;
            gap: 20px;
        }

        .box p {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .box h2 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .box img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #2c3e50;
            color: #ecf0f1;
        }

        .footer-box {
            width: 20%;
        }

        .footer h3 {
            color: #ecf0f1;
            margin-bottom: 10px;
        }

        .footer-box li {
            list-style: none;
            margin-bottom: 5px;
        }

        .footer .contact span {
            display: block;
            margin-bottom: 10px;
        }

        .social i {
            font-size: 24px;
            color: #ecf0f1;
            margin-right: 10px;
            cursor: pointer;
        }

        .copyright {
            text-align: center;
            background-color: #34495e;
            color: #ecf0f1;
            padding: 10px;
        }

        .bu {
            display: block;
            margin: 0 auto;
            text-align: center;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }

        .bu:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <header>
        <nav>
            <a href="#" class="logo">
                <img src="img/logo.png" alt="">
            </a>

            <i class='bx bx-menu' id="menu-icon"></i>
            <!-- links -->
            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#customers">Customers</a></li>
            </ul>
            <!-- icons -->
            <div class="icons">
                <i class='bx bx-cart-alt' onclick="redirect()"></i>
                <i class='bx bx-search' id="search"></i>
            </div>
        </nav>
    </header>

    <!--  home  -->


    <section class="home" id="home">
        <div class="home-text">
            <h1>BUY $75+ AND GET<br> <span>15% OFF</span></h1>
            <p>OR JOIN US AND GET 35% OFF</p>
            <a href="#" class="btn" onclick="redirect3()">Contact Us Now</a>
        </div>
        <div class="home-img">
            <img src="img/main.png" alt="main">
        </div>
    </section>


    <!-- about -->

    <section class="about" id="about">
        <div class="about-img">
            <img src="img/about.jpg" alt="about">
        </div>
        <div class="about-text">
            <h2>About Us</h2>
            <p>Welcome to GymX, your ultimate destination for premium gym supplements that fuel your fitness journey. At GymX, we are passionate about helping you achieve your fitness goals and maximize your potential.</p>
            <p>Our mission is simple: to provide you with the highest quality, scientifically-backed supplements that support your fitness and wellness goals. Whether you're a seasoned athlete or just starting your fitness journey, we believe that everyone deserves access to top-notch supplements that enhance performance, aid recovery, and promote overall well-being.</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>

    <!-- products -->

    <!-- <section class="products" id="products">
        
    </section> -->
    <button class="bu" style="padding: 10px 20px; font-size: 16px; background-color: #3498db; color: #fff; border: none; cursor: pointer;" class="bu" onclick="redirect2()" onclick="redirect2()">PRODUCTS</button>

    <!-- customers -->

    <section class="customers" id="customers">
        <div class="heading">
            <h2>Our Customer's</h2>
        </div>
        <div class="customers-container">
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia quibusdam hic magni aspernatur debitis suscipit.</p>
                <h2>AMARYAN JACKSON</h2>
                <img src="img/rev1.jpg" alt="">
            </div>
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia quibusdam hic magni aspernatur debitis suscipit.</p>
                <h2>JORDAN KHUS</h2>
                <img src="img/rev2.jpg" alt="">
            </div>
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia quibusdam hic magni aspernatur debitis suscipit.</p>
                <h2>DAVID JHO</h2>
                <img src="img/rev3.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- footer -->
    <section class="footer">
        <div class="footer-box">
            <h3>Coffee Shop</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, deserunt!</p>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-tiktok'></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>Support</h3>
            <li><a href="#">Product</a></li>
            <li><a href="#">Help & Support</a></li>
            <li><a href="#">Return Policy</a></li>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Product</a></li>
        </div>
        <div class="footer-box">
            <h3>View Guides</h3>
            <li><a href="#">Features</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Bolg Posts</a></li>
            <li><a href="#">Our Branches</a></li>
        </div>
        <div class="footer-box">
            <h3>Contact</h3>
            <div class="contact">
                <span><i class='bx bxs-map'></i>9169 W State St #510, Boise, ID 83714 USA 1-866-236-8417</span>
                <span><i class='bx bxs-phone'></i>+20 555 888 7777</span>
                <span><i class='bx bxs-envelope'></i>syncsupplements@support.com</span>

            </div>
        </div>
    </section>

    <div class="copyright">
        <p>&#169; Syncintern All Right Reserved</p>
    </div>
    <script>
        function redirect() {
            window.location.href = "cart.php";
        }

        function redirect2() {
            window.location.href = "products.php";
        }

        function redirect3() {
            window.location.href = "group.php";
        }
    </script>
    <script src="main.js"></script>
</body>

</html>