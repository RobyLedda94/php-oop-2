<?php 
// definisco la classe per la cadegoria degli animali
class Animals {
    public $name;

    // definisco il costrutto per la classe Animals
    public function __construct($_name) {
        $this->name = $_name;
    }
}


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

// Ereditarietà che estende la classe prodotto
class Food extends Product {
    public $flavor;

    // definisco il costruttore della classe food
    public function __construct($_title, $_price, $_category, $_flavor) {
        
    }
    


}

?>