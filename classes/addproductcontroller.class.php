?>
    <script type="text/javascript">
        const error = document.getElementById("error");
    </script>
?>
<?php

class AddProductController extends AddProduct
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
            header("location: ../addproduct.php?error=invalid input!");
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

    private function skuExist()
    {
        $result = false;
        if (!$this->validateSku($this->sku)) {
            $result= false;
        } else {
            $result = true;
        }
        return $result;
    }
}
