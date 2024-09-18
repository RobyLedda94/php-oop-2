<?php 
// definisco la classe per la cadegoria degli animali
class Animals {
    public $name;

    // definisco il costrutto per la classe Animals
    public function __construct($name) {
        $this->name = $_name;
    }
}


// definisco la classe per i prodotti 
class Product {
    public $title;
    public $price;
    public $category;
    public $type;

    // definisco il costrutto per la classe Product
    public function __construct($title, $price, $category, $type) {
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;
        $this->type = $_type;

    }
}

?>