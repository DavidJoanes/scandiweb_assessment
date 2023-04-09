<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Add Product</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add Product</title>
</head>
<body>
    <form action="includes/addproduct.inc.php" method="post">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">Add Product</a>
                <div class="d-flex grid gap-3">
                    <button class="btn btn-success" name="submit" type="submit">Add</button>
                    <a class="btn btn-outline-danger" href="index.php">Cancel</a>
                </div>
            </div>
        </nav>
        
        <div class="container">
            <div class="col" style="padding: 5vh 40% 5vh 0;">
                <form class="px-4 py-3 mb-3">
                    <div class="form-group d-flex grid gap-4">
                        <h5>SKU:</h5>
                        <input type="text" class="form-control" name="sku" id="sku" placeholder="E.g: dsc-01" required><br>
                    </div><br>
                    <div class="form-group d-flex grid gap-4">
                        <h5>Name:</h5>
                        <input type="text" class="form-control" name="name" id="name" placeholder="E.g: Purple hibiscus" required><br>
                    </div><br>
                    <div class="form-group d-flex grid gap-4">
                        <h5>Price($):</h5>
                        <input type="text" class="form-control" name="price" id="price" placeholder="E.g: 30" required><br>
                    </div><br>
                    <div class="form-group d-flex grid gap-4">
                        <h5>Type Switcher:</h5>
                        <select
                            id="productType"
                            name="productType"
                            class="input"
                            onchange="switchType()"
                            required
                        >
                            <option selected disabled value="">Select Type</option>
                            <option>DVD</option>
                            <option>Book</option>
                            <option>Furniture</option>
                        </select>
                    </div><br>
                    <div id="switch"></div>
                </form>
            </div>
        </div>
    </form>
    <script src="js/app.js"></script>
</body>
</html>