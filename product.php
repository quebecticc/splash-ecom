<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/libraries/font-awesome_6.1.2/css/all.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="stylesheet" rel="stylesheet" href="css/light.css" />
    <title>Shop</title>
</head>

<body>
    <section id="header">
        <a href="index.php"><img src="assets/img/logo.png" class="logo" alt="" id="logo"></a>

        <div>
            <ul id="navbar" class="notpressed">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="" id="lg-bag"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <li id="login"></li>
                <a href="cart.php" id="close"><i class="fa-solid fa-xmark"></i></a>
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

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">

            <img src="assets/img/products/f1.jpg" width="1100" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="assets/img/products/f1.jpg" alt="" width="1100" class="small-img" srcset="">
                </div>
                <div class="small-img-col">
                    <img src="assets/img/products/f2.jpg" alt="" width="1100" class="small-img" srcset="">
                </div>
                <div class="small-img-col">
                    <img src="assets/img/products/f3.jpg" alt="" width="1100" class="small-img" srcset="">
                </div>
                <div class="small-img-col">
                    <img src="assets/img/products/f4.jpg" alt="" width="1100" class="small-img" srcset="">
                </div>
                <div class="small-img-col">
                    <img src="assets/img/products/f1.jpg" alt="" width="1100" class="small-img" srcset="">
                </div>
                <div class="small-img-col">
                    <img src="assets/img/products/f2.jpg" alt="" width="1100" class="small-img" srcset="">
                </div>
                <div class="small-img-col">
                    <img src="assets/img/products/f3.jpg" alt="" width="1100" class="small-img" srcset="">
                </div>
                <div class="small-img-col">
                    <img src="assets/img/products/f4.jpg" alt="" width="1100" class="small-img" srcset="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home / T-Shirt</h6>
            <h4>Men's Fashion T Shirt</h4>
            <h2>$139</h2>
            <select>
                <option>Select Size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>M</option>
                <option>S</option>
                <option>XS</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add to Cart</button>
            <h4>Product Details</h4>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero odit asperiores, laudantium, dolorum vero at suscipit assumenda repellendus iusto, inventore sit dicta totam similique cum quidem possimus voluptates velit error?</span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection Modern Designs</p>
        <div class="pro-container">
            <div class="pro">
                <img src="assets/img/products/n1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="assets/img/products/n2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="assets/img/products/n3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="assets/img/products/n4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for Newsletter</h4>
            <p>Get E-mail updates abput out latest shop and <span>special offers</span></p>
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

    <script>
        const MainImg = document.getElementById("MainImg")
        const smallImg = document.getElementsByClassName("small-img")

        smallImg[0].onclick = function() {
            MainImg.src = smallImg[0].src;
        }

        smallImg[1].onclick = function() {
            MainImg.src = smallImg[1].src;
        }

        smallImg[2].onclick = function() {
            MainImg.src = smallImg[2].src;
        }

        smallImg[3].onclick = function() {
            MainImg.src = smallImg[3].src;
        }
        smallImg[4].onclick = function() {
            MainImg.src = smallImg[4].src;
        }

        smallImg[5].onclick = function() {
            MainImg.src = smallImg[5].src;
        }

        smallImg[6].onclick = function() {
            MainImg.src = smallImg[6].src;
        }

        smallImg[7].onclick = function() {
            MainImg.src = smallImg[7].src;
        }
    </script>

</body>
<script src="js/index.js"></script>

</html>