<?php 
// definisco la classe accessory

class Accessory extends Product {
    public $color;
    // costruttore della classe acessory
    public function __construct($_title, $_price, $_category, $_color) {
        // richiamo il costruttore di product
        parent::__construct($_title, $_price, $_category);
        $this->color = $_color;

    }
    
}
?>