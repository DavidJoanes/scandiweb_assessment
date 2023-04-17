<?php

class DeleteProduct extends Db
{
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
}
