<?php 

// importo la componenete data
require __DIR__ . '/data.php';








// var_dump($categoryAnimals_dog);
// var_dump($categoryAnimals_cat);
// var_dump($typeOfFood);
// var_dump($dogToy);
// var_dump($dogAccessory);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Animals</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-5">Prodotti</h2>
            </div>
            <div class="col-12">
                <div class="row">
                    <?php foreach($foods as $food){ ?>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <h3><?php echo $food->title ?></h3>
                                </div>
                                <div class="card-body">
                                    <p>Prezzo : <?php echo $food->price; ?></p>
                                    <p>Tipo : <?php echo $food->flavor; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 mt-3">
                <div class="row">
                    <?php foreach($toys as $toy){ ?>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <h3><?php echo $toy->title ?></h3>
                                </div>
                                <div class="card-body">
                                    <p>Prezzo : <?php echo $toy->price; ?></p>
                                    <p>Materiale : <?php echo $toy->material; ?></p>
                                    <p>Grandezza : <?php echo $toy->size; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 mt-3">
                <div class="row">
                    <?php foreach($accessoryes as $accessory){ ?>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <h3><?php echo $accessory->title ?></h3>
                                </div>
                                <div class="card-body">
                                    <p>Prezzo : <?php echo $accessory->price; ?></p>
                                    <p>Colore : <?php echo $accessory->color; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>