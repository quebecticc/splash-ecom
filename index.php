<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/libraries/font-awesome_6.1.2/css/all.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="stylesheet" rel="stylesheet" href="css/light.css" />
    <title>Welcome</title>
</head>

<body>
    <section id="header">
        <a href="index.php"><img src="assets/img/logo.png" class="logo" alt="" id="logo"></a>

        <div>
            <ul id="navbar" class="notpressed">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php" id="lg-bag"><i class="fa-solid fa-bag-shopping"></i></a></li>

                <li id="login"></li>
                <li><a href="#" id="close"><i class="fa-solid fa-xmark"></i></a></li>
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

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & upto 70% off</p>
        <button onclick="goToShop()" style="cursor: pointer;">SHOP NOW!</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="assets/img/home/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="assets/img/home/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="assets/img/home/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="assets/img/home/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="assets/img/home/features/f5.png" alt="">
            <h6>Happy Customers</h6>
        </div>
        <div class="fe-box">
            <img src="assets/img/home/features/f6.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection Modern Designs</p>
        <div class="pro-container">
            <?php

            require 'conn.php';
            $query = "SELECT * FROM products, products_images WHERE products.product_id = products_images.product_id LIMIT 7";
            if ($result = $db->query($query)) {
                while ($product = $result->fetch_assoc()) {
                    echo '<div class="pro">';

                    echo '<img src="data:image/jpeg;base64,' . base64_encode($product['image_1']) . '"/>';
                    echo '<div class="des">';
                    echo '<span>' . $product['brand'] . '</span>';
                    echo '<h5>' . $product['name'] . '</h5>';
                    echo '<div class="star">';

                    for ($rating = 1; $rating <= floor($product['rating']); $rating++) {
                        echo '<i class="fas fa-star"></i>';
                    }
                    echo '</div>';
                    echo '<h4>₹ ' . $product['price'] . '</h4>';
                    echo '</div>';
                    echo '<a href="#"><i class="fa fa-shopping-cart cart"></i></a>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Upto <span>70% Off</span> - All T-Shirts and Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
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

            <div class="pro">
                <img src="assets/img/products/n5.jpg" alt="">
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
                <img src="assets/img/products/n6.jpg" alt="">
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
                <img src="assets/img/products/n7.jpg" alt="">
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
                <img src="assets/img/products/n8.jpg" alt="">
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
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at splash</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring / summer</h4>
            <h2>upcomming season</h2>
            <span>The best classic dress is on sale at splash</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h4>SEASONAL SALE</h4>
            <h2>Winter Collection - 50% off</h2>
        </div>

        <div class="banner-box banner-box2">
            <h4>NEW FOOTWEAR COLLECTION</h4>
            <h2>Spring / Summer 2022</h2>
        </div>

        <div class="banner-box banner-box3">
            <h4>T-SHIRTS</h4>
            <h2>New Trendy Prints</h2>
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
</body>
<script src="assets/libraries/jquery-3.6.0.js" ></script>
<script src="js/index.js"></script>

</html>