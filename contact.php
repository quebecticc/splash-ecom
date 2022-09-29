<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/libraries/font-awesome_6.1.2/css/all.css" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="stylesheet" rel="stylesheet" href="css/light.css" />
    <title>Contact Us</title>
</head>

<body>
<section id="header">
        <a href="index.php"><img src="assets/img/logo.png" class="logo" alt="" id="logo"></a>

        <div>
            <ul id="navbar" class="notpressed">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li><a href="cart.php" id="lg-bag"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
                <label class="switch">
                    <input type="checkbox" id="theme" onclick="changeTheme()">
                    <span class="slider"></span>
                </label>
            </ul>
        </div>
        <div id="mobile">
            <a href=""><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#letsTalk</h2>
        <p>LEave a Message. We would love to hear from you!</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fa-solid fa-map"></i>
                    <p>1072 Rose Street, Monee, Illinois</p>
                </li>
                <li>
                    <i class="fa-solid fa-at"></i>
                    <p>anurag.sawant@quebecticc.tk</p>
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <p>+1234567890</p>
                </li>
                <li>
                    <i class="fa-solid fa-clock"></i>
                    <p>10:00 AM - 10:00 PM Mon to Sat</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3145803.4219812076!2d-93.87698555034424!3d39.64805689699658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C%20USA!5e0!3m2!1sen!2sin!4v1664473020375!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>

    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-Mail">
            <input type="text" placeholder="Subject">
            <textarea placeholder="Message"></textarea>
            <button class="normal">Submit Query</button>
        </form>
    </section>


    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for Newsletter</h4>
            <p>Get E-mail updates about the latest shop and <span>special offers</span></p>
        </div>
        <div class="form">
            <input type="text" name="" id="" placeholder="Your Email Address">
            <button class="normal">Signup</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <h4>Contact</h4>
            <p><span>Address: </span>A-704, Norita Building, Pride Park Complex, <br> Besides R-Mall Thane, Thane (West) - 400607</p>
            <p><span>Phone: </span>9324083638</p>
            <p><span>Hours: </span>10:00 AM - 10:00 PM Mon to Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Orders</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install the App</h4>
            <p>From the App Store or Play Store</p>
            <div class="row">
                <img src="assets/img/globals/app.jpg" alt="">
                <img src="assets/img/globals/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="assets/img/globals/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>2022, Quebecia Inc. Template Developed and Designed by Anurag</p>
        </div>
    </footer>

</body>
<script src="js/index.js"></script>

</html>