<?php
print_r($_POST);
if (isset($_POST["sku"])) {
    include "../classes/typeconfiguration.class.php";
    include "../classes/db.class.php";
    include "../classes/productmodel.class.php";
    include "../classes/addproductcontroller.class.php";

    // Fetching the data
    $sku = $_POST["sku"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $type = $_POST['productType'];
    $size = isset($_POST['size']) ? $_POST['size'] : "";
    $weight = isset($_POST['weight']) ? $_POST['weight'] : "";
    $height = isset($_POST['height']) ? $_POST['height'] : "";
    $width = isset($_POST['width']) ? $_POST['width'] : "";
    $length = isset($_POST['length']) ? $_POST['length'] : "";
    $details = "";

    $typeController = new TypeConfiguration($size, $weight, $height, $width, $length);
    $capitalizedType = ucfirst($type);
    $details = $typeController->getType(new $capitalizedType());

    // Instantiate signup controller class
    $add = new AddProductController($sku, $name, $price, $type, $details);

    // Error handlers
    $add->addProduct();

    // Returning to landing page
    header("location: ../index.php?error=none");
}
