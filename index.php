<?php 


// importato le componeneti
require __DIR__.'/animals.php';
require __DIR__.'/product.php';
require __DIR__.'/food.php';
require __DIR__.'/toy.php';
require __DIR__.'/accessory.php';




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