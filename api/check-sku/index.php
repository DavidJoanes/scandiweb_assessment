<?php
    require_once("../../classes/db.class.php");
    require_once("../../classes/addproduct.class.php");

    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset=UTF-8");
    header('Access-Control-Allow-Methods: *');
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $method = $_SERVER['REQUEST_METHOD'];

    $product = new AddProduct();

    if ($method == 'GET') {
        $sku = $_GET['sku'];
        $response =  $product->validateSku2($sku);

        $json_response = json_encode($response);
        exit($json_response);
    }