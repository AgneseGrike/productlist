<?php 

abstract class Product {
    public $SKU; 
    public $name;
    public $price;
    public $type;
    public $value;

    abstract function __construct($SKU, $name, $price, $value);

    //public function __destruct() {}

    abstract function setType();
}

class DVD extends Product{
    public function setType() {
        $this->type = 'DVD';
    }

    public function __construct($SKU, $name, $price, $value) {
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->value = $value;
    }    
}

class Book extends Product{
    public function setType() {
        $this->type = 'Book';
    }

    public function __construct($SKU, $name, $price, $value) {
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->value = $value;
    }    
}

class Furniture extends Product{
    public function setType() {
        $this->type = 'Furniture';
    }

    public function __construct($SKU, $name, $price, $value) {
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->value = $value;
    }    
}
