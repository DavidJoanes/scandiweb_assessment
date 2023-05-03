<?php

    class ProductsView extends ProductModel
    {
        private $products = array();

        public function showProducts()
        {
            $result = $this->getProducts();

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $this->products[] = $row;
            }

            return $this->products;
        }
    }
