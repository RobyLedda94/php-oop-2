<?php 
// importato le componeneti del file data
require __DIR__.'/animals.php';
require __DIR__.'/product.php';
require __DIR__.'/food.php';
require __DIR__.'/toy.php';
require __DIR__.'/accessory.php';



// creo le istanze 

$categoryAnimals_dog = new Animals ("Dog");
$categoryAnimals_cat = new Animals ("Cat");



// creo l'array di prodotti

$foods = [
    new Food ("Crocchette", 20, $categoryAnimals_dog, "Manzo"),
    new Food ("Biscotti", 10, $categoryAnimals_dog, "Pollo"),
    new Food ("Barf", 20, $categoryAnimals_cat, "Manzo"),
    new Food ("Carne", 20, $categoryAnimals_dog, "Pollo"),

];


$toys = [
    new Toy ("Palla", 15, $categoryAnimals_cat, "Plastica", "Grande"),
    new Toy ("Osso", 15, $categoryAnimals_dog, "Gomma", "Grande"),
    new Toy ("Pupazzo", 15, $categoryAnimals_dog, "Stoffa", "Piccolo"),
    new Toy ("Pollo", 15, $categoryAnimals_dog, "Plastica", "Piccolo"),


];




try {
    $accessoryes = [
        new Accessory("Collare per Cani", 25, $categoryAnimals_dog, "Rosso"),
        new Accessory("Spazzola", 25, $categoryAnimals_cat, "Grey"),
        new Accessory("Gunzaglio", 25, $categoryAnimals_cat, "Grey"),
        new Accessory("Ciondolo", 25, $categoryAnimals_cat, "Nero"),
    
    ];
} catch (Exception $e) {
    echo 'Errore: ', $e->getMessage();  
}

?>