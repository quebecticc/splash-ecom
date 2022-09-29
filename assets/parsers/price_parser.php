<?php
require '../../conn.php';
session_start();

if (isset($_POST['change_price']) && $_POST['change_price']) {
    $total = 0;
    $cart = $_COOKIE['cart'];
    $cart = json_decode($cart, true);

    $subtotal = array();

    foreach ($cart as $key => $value) {
        $query = "SELECT * FROM splash_products WHERE product_id =" . $value['productID'] . ";";
        if ($result = $db->query($query)) {
            while ($product = $result->fetch_assoc()) {
                $final_price = $product['product_price'] * $value['productQuantity'];
                array_push($subtotal, $final_price);
                $total = array_sum($subtotal);
            }
        }
    }
    $_SESSION['total'] = $total;
    echo $total;
}

if (isset($_POST['coupon']) && $_POST['couponAdded']) {
    $total = $_SESSION['total'];
    $discount = $_SESSION['total'];
    $couponParse = array();

    switch ($_POST['coupon']) {
        case 'SPLASH30' :
            $discount = round(30/100 * $total);
            if ($total > 1500) {
                $total = $total - $discount;
                $couponParse = array("total" => $total, "message" => "<p style='color: green'>You got 30% off on your order!</p>");
            } else {
                $couponParse = array("total" => $total, "message" => "<p style='color: red'>Coupon Valid on Orders Above ₹1500. Please add <strong>₹" . (1500 - $total) . "</strong> more to use this coupon!</p>");

            }
            break;
        default :
            $couponParse = array("total" => $total, "message" => "<p style='color: red'>Invalid or Expired Coupon!</p>");
    }

    echo json_encode($couponParse);
}
