<?php

class AllProducts extends Db
{
    protected function getProducts()
    {
        return $this->connectDB()->query("SELECT * FROM  products");
    }
}
