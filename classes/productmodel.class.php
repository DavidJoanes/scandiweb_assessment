<?php

class ProductModel extends Db
{
    protected function getProducts()
    {
        return $this->connectDB()->query("SELECT * FROM  products");
    }
    
    protected function add($sku, $name, $price, $type, $details)
    {
        $stmt = $this->connectDB()->prepare("INSERT INTO products (sku, productName, price, productType, details) VALUES (?, ?, ?, ?, ?);");

        if (!$stmt->execute(array($sku, $name, $price, $type, $details))) {
            $stmt = null;
            header("location: ../index.php?error=stmt failed!");
            exit();
        }

        $stmt = null;
        echo "Product added successfully..";
    }

    protected function delete($sku)
    {
        $stmt = $this->connectDB()->prepare("DELETE FROM products WHERE sku = ?;");

        if (!$stmt->execute(array($sku))) {
            $stmt = null;
            header("location: ../index.php?error=stmt failed!");
            exit();
        }

        $stmt = null;
        echo "Product deleted successfully..";
    }

    public function validateSku($sku)
    {
        $stmt = $this->connectDB()->prepare("SELECT * FROM products WHERE sku = ?;");

        if (!$stmt->execute(array($sku))) {
            $stmt = null;
            header("location: ../index.php?error=stmt failed!");
            exit();
        }

        $result = false;
        if ($stmt->rowCount() > 0) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
