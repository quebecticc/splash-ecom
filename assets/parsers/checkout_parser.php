<?php

session_start();

if (isset($_POST['checkout']) && $_POST['checkout']) {
    if(isset($_SESSION['total'])) {
        $response = array("setPrice" => true);
    } else {
        $response = array("setPrice" => false);
    }
    echo json_encode($response);

}