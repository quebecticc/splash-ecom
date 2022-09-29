<?php

if(!isset($_GET['p'])) {
    header("location: index.php");
}

require 'conn.php';
$product_id = $_GET['p'];
$query = "SELECT * FROM splash_products WHERE product_id = $product_id";
if ($result = $db->query($query)) {
    while ($product = $result->fetch_assoc()) {
        $product_name = $product['product_name'];
        $product_price = $product['product_price'];
        $product_desc = $product['product_desc'];
        $product_brand = $product['product_brand'];
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/libraries/font-awesome_6.1.2/css/all.css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="stylesheet" rel="stylesheet" href="css/light.css"/>
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
            <li><a href="cart.php" id="lg-bag"><i class="fa-solid fa-bag-shopping"></i></a></li>
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

        <img src='<?php echo "products/" . $product_id . "/1.jpg" ?>' width="544px" id="MainImg" alt="">
        <div class="small-img-group">
            <div class="small-img-col">
                <img src='<?php echo "products/" . $product_id . "/1.jpg" ?>' alt="" width="136" class="small-img" srcset="">
            </div>
            <div class="small-img-col">
                <img src='<?php echo "products/" . $product_id . "/2.jpg" ?>' alt="" width="136" class="small-img" srcset="">
            </div>
            <div class="small-img-col">
                <img src='<?php echo "products/" . $product_id . "/3.jpg" ?>' alt="" width="136" class="small-img" srcset="">
            </div>
            <div class="small-img-col">
                <img src='<?php echo "products/" . $product_id . "/4.jpg" ?>' alt="" width="136" class="small-img" srcset="">
            </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h6>Home / T-Shirts</h6>
        <h4><?php echo $product_name ?></h4>
        <h2>₹<?php echo $product_price ?></h2>
        <select>
            <option>Select Size</option>
            <option>XXL</option>
            <option>XL</option>
            <option>M</option>
            <option>S</option>
            <option>XS</option>
        </select>
        <input type="number" value="1" id="productQuantity">
        <button class="normal" data-product-id="<?php echo $product_id; ?>" onclick="addToCart(this); returnToShop();">Add to Cart</button>
        <h4>Product Details</h4>
        <p>Brand: <?php echo $product_brand ?></p>
        <span><pre><?php echo $product_desc ?></pre></span>
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

<script>
    const MainImg = document.getElementById("MainImg")
    const smallImg = document.getElementsByClassName("small-img")

    smallImg[0].onclick = function () {
        MainImg.src = smallImg[0].src;
    }

    smallImg[1].onclick = function () {
        MainImg.src = smallImg[1].src;
    }

    smallImg[2].onclick = function () {
        MainImg.src = smallImg[2].src;
    }

    smallImg[3].onclick = function () {
        MainImg.src = smallImg[3].src;
    }
</script>

</body>
<script src="assets/libraries/jquery-3.6.0.js" ></script>
<script src="js/index.js"></script>

</html>