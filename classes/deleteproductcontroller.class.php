<?php

class DeleteProductController extends ProductModel
{
    public function deleteProduct($inputArray)
    {
        foreach ($inputArray as $key => $val) {
            $sku = "";
            if ($key !== "submit") {
                $sku = $key;
            }
            $this->delete($sku);
        }
    }
}
