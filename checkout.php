<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/checkout.css">
    <title>Checkout</title>
</head>
<body onload="first()">
<div id="1">
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Order Placement Gateway</h3>
            <div class="input-group">
                <input required="" type="text" name="text" autocomplete="off" class="input">
                <label class="user-label">First Name</label>
            </div>

            <div class="input-group">
                <input required="" type="text" name="text" autocomplete="off" class="input">
                <label class="user-label">Last Name</label>
            </div>

            <div class="input-group">
                <input required="" type="email" name="text" autocomplete="off" class="input">
                <label class="user-label">Email Address</label>
            </div>

            <div class="input-group">
                <input required="" type="number" name="text" autocomplete="off" class="input">
                <label class="user-label">Phone Number</label>
            </div>
            <button onclick="goToSecond()">NEXT</button>
        </form>
    </div>
</div>

<div id="2">
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Order Placement Gateway</h3>
            <div class="input-group">
                <input required="" type="text" name="text" autocomplete="off" class="input">
                <label class="user-label">Address Line I</label>
            </div>

            <div class="input-group">
                <input required="" type="text" name="text" autocomplete="off" class="input">
                <label class="user-label">Address Line II</label>
            </div>

            <div class="input-group">
                <input required="" type="text" name="text" autocomplete="off" class="input">
                <label class="user-label">City</label>
            </div>

            <div class="input-group">
                <input required="" type="text" name="text" autocomplete="off" class="input">
                <label class="user-label">State</label>
            </div>

            <div class="input-group">
                <input required="" type="number" name="text" autocomplete="off" class="input">
                <label class="user-label">PIN Code</label>
            </div>
            <button onclick="goToThird()">NEXT</button>
        </form>
    </div>
</div>

<div id="3">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
        <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
        <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
    </svg>
    <p class="success">Order Placed. Redirecting...</p>
</div>
</body>
<script src="assets/libraries/jquery-3.6.0.js"></script>
<script src="js/checkout.js"></script>
</html>