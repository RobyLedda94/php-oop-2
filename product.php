<?php 

// definisco la classe per i prodotti 
class Product {
    public $title;
    public $price;
    public $category;

    // definisco il costrutto per la classe Product
    public function __construct($_title, $_price, $_category) {
        // aggiongo Exeption al prezzo
        if ($_price <= 0) {
            throw new Exception("Il prezzo deve essere maggiore di zero");
        }
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;

    }

    
}

?>