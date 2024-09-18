<?php 

// definisco la classe per i prodotti 
class Product {
    public $title;
    public $price;
    public $category;

    // definisco il costrutto per la classe Product
    public function __construct($_title, $_price, $_category) {
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;

    }
}

?>