<?php 

// importo la componenete data
require __DIR__ . '/data.php';








var_dump($categoryAnimals_dog);
var_dump($categoryAnimals_cat);
var_dump($typeOfFood);
var_dump($dogToy);
var_dump($dogAccessory);


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
                <h2>Prodotti</h2>
            </div>
            <div class="col-12">
                <div class="row">
                    <?php foreach($products as $product){ ?>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <h3><?php echo $product->title ?></h3>
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