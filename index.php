<?php
    include "includes/autoloader.inc.php";
    $products = new ViewProducts();
    $allProducts = $products->showProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>My Products</title>
</head>
<body>
    <form action="includes/deleteproduct.inc.php" method="post">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Product List</a>
                <div class="d-flex grid gap-3">
                    <a class="btn btn-outline-success" href="add-product/">ADD</a>
                    <button class="btn btn-danger" href="" value="MASS DELETE" name="submit" type="submit">MASS DELETE</button>
                </div>
            </div>
        </nav>

        <div style="padding: 10vh" class="container text-center">
            <div class="row">
                <?php
                    foreach ($allProducts as $product) {
                        ?>
                <div class="col">
                    <div class="card">
                        <div class="card-title d-flex justify-content-center">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input delete-checkbox" name="<?php echo $product["sku"] ?>" id="dropdownCheck">
                                <label class="form-check-label" style="text-transform: uppercase;" for="dropdownCheck">
                                <?php echo $product['sku']; ?>
                                </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <p><?php echo $product["productName"]; ?></p>
                            <p><?php echo $product["price"]; ?>$</p>
                            <p><?php echo $product["details"]; ?></p>
                        </div>
                    </div><br>
                </div><br>
                <?php
                    }
                ?>
            </div>
        </div>
    </form>
</body>
</html>