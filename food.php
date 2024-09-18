<?php 
// Ereditarietà che estende la classe prodotto
class Food extends Product {
    public $flavor;

    // definisco il costruttore della classe food
    public function __construct($_title, $_price, $_category, $_flavor) {
        // richiamo il costruttore del genitore Product
        parent::__construct($_title, $_price, $_category);
        $this ->flavor = $_flavor;
    }   
}
?>