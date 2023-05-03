<?php

class ProductController extends ProductModel
{
    private $sku;
    private $name;
    private $price;
    private $type;
    private $details;

    public function __construct($sku, $name, $price, $type, $details)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->details = $details;
    }

    public function addProduct()
    {
        if ($this->validateInput() == false) {
            header("location: ../add-product/?error=invalid input!");
            exit();
        }

        $this->add($this->sku, $this->name, $this->price, $this->type, $this->details);
    }

    private function validateInput()
    {
        $result = false;
        if (empty($this->sku) || empty($this->name) || empty($this->price) || empty($this->type) || empty($this->details)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

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
