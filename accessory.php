<?php 
// definisco la classe accessory

class Accessory extends Product {
    public $color;
    // costruttore della classe acessory
    public function __construct($_title, $_price, $_category, $_color) {
        // richiamo il costruttore di product
        parent::__construct($_title, $_price, $_category);
                // Aggiungo un'eccezione se il colore è "Nero"
                if ($_color === 'Nero') {
                    throw new Exception("Il colore 'Nero' non è disponibile.");
                }
        $this->color = $_color;

    }
    
}
?>