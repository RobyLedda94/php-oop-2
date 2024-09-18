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
$typeOfFood = new Food ("Cibo per Cani", 20, $categoryAnimals_dog, "Manzo");
$dogToy = new Toy ("Giocattolo per cani,", 15, $categoryAnimals_cat, "Plastica", "Grande");
$dogAccessory = new Accessory("Collare per Cani", 25, $categoryAnimals_dog, "Rosso");

?>