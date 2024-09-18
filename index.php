<?php 
// definisco la classe per la cadegoria degli animali
class Animals {
    public $name;

    // definisco il costrutto per la classe Animals
    public function __construct($_name) {
        $this->name = $_name;
    }
}


// -------------------------------------------------------------------------------------

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

// ---------------------------------------------------------------------------------------------

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

// ------------------------------------------------------------------------------------------------

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

// ------------------------------------------------------------------------------------------------------

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


// creo le istanze 

$categoryAnimals = new Animals ("Dog");
$typeOfFood = new Food ("Cibo per Cani", 20, $categoryAnimals, "Manzo");
$dogToy = new Toy ("Giocattolo per cani,", 15, $categoryAnimals, "Plastica", "Grande");
$dogAccessory = new Accessory("Collare per Cani", 25, $categoryAnimals, "Rosso");



var_dump($categoryAnimals);
var_dump($typeOfFood);
var_dump($dogToy);
var_dump($dogAccessory);




?>