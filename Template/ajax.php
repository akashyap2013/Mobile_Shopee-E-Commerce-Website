<?php

// require MySQL Connection
require ('../database/DBController.php');

// require Product Class
require ('../database/Product.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);

if (isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}