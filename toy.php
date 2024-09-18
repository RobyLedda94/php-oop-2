<?php 
// definisco la classe toy
class Toy extends Product {
    public $material;
    public $size;
    // definisco il costruttore della classe toy
    public function __construct($_title, $_price, $_category, $_material, $_size) {
        // richiamo il costtruttore della classe Product
        parent::__construct($_title, $_price, $_category);
        $this->material = $_material;
        $this->size = $_size;
    }
    

}

?>