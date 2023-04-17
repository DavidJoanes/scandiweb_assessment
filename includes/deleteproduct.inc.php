<?php

    if (isset($_POST['submit'])) {
        // Importations
        include "../classes/db.class.php";
        include "../classes/deleteproduct.class.php";
        include "../classes/deleteproductcontroller.class.php";

        // Instantiate signup controller class
        $product = new DeleteProductController();

        // Error handler
        $product->deleteProduct($_POST);

        // Returning to landing page
        header("location: ../index.php?error=none");
    } else {
        header("location: ../index.php?error=invalid selection!");
    }
