<?php

require 'conn.php';

$cartCookie = $_COOKIE['cart'];
$cart = json_decode($cartCookie, true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/libraries/font-awesome_6.1.2/css/all.css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="stylesheet" rel="stylesheet" href="css/light.css"/>
    <title>Your Cart</title>
</head>

<body>
<section id="header">
    <a href="index.php"><img src="assets/img/logo.png" class="logo" alt="" id="logo"></a>

    <div>
        <ul id="navbar" class="notpressed">
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a class="active" href="" id="lg-bag"><i class="fa-solid fa-bag-shopping"></i></a></li>
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
<section id="page-header" class="about-header">
    <h2>#cart</h2>
    <p>Leave a Message. We would love to hear from you!</p>
</section>

<section id="cart" class="section-p1">
    <table width=100% style="table-layout:fixed; word-break: break-all  ">
        <thead>
        <tr>
            <td>Remove</td>
            <td>Image</td>
            <td>Product</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Subtotal</td>
        </tr>

        </thead>
        <tbody>
        <?php

        foreach ($cart as $key => $value) {
            $query = "SELECT * FROM splash_products WHERE product_id =" . $value['productID'] . ";";
            if ($result = $db->query($query)) {
                while ($product = $result->fetch_assoc()) {
                    echo '<tr data-product-row="' . $product['product_id'] . '">';
                    echo '<td><a href="#_"><i class="fa-solid fa-xmark" onclick="removeItem(this)" data-product-id="' . $product['product_id'] . '"></i></a></td>';
                    echo '<td><img src="products/' . $product['product_id'] . '/1.jpg" alt=""></td>';
                    echo '<td>' . $product['product_name'] . '</td>';
                    echo '<td>₹' . $product['product_price'] . '</td>';
                    echo '<td><input type="number" value="' . $value['productQuantity'] . '" data-product-update="' . $product['product_id'] . '" disabled></td>';
                    echo '<td>' . $product['product_price'] * $value['productQuantity'] . '</td>';
                    echo '</tr>';
                }
            }
        }

        ?>
        </tbody>
    </table>
</section>

<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
            <input type="text" placeholder="Enter Your Coupon Code" id="couponCode">
            <button class="normal" onclick="discount()">Apply</button>
            <p id="coupon_message"></p>
        </div>
    </div>

    <div id="subtotal">
        <h3>Cart Total</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td id="total"></td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong id="grand_total">$335</strong></td>
            </tr>
        </table>
        <button class="normal" onclick="checkout()">Proceed to checkout</button>
        <p id="checkoutError" style="color: red"></p>
    </div>
</section>

<footer class="section-p1">
    <div class="col">
        <h4>Contact</h4>
        <p><span>Address: </span>A-704, Norita Building, Pride Park Complex, <br> Besides R-Mall Thane, Thane (West) -
            400607</p>
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
<script src="js/checkout.js"></script>


</html>>