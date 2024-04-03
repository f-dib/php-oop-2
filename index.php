<?php

    require 'db.php';

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container-xl">
        <div class="py-5">
            <?php include './partials/nav.php' ?>
        </div>

        <div class="row">
            <?php
            foreach($products as $product) {

                echo "
                <div class=\"col-12 col-md-6 col-lg-4 pb-4 \">
                    <div class=\"card h-100\">
                        <img src=\"" . $product->image . "\" class=\"card-img-top h-75\" alt=\"   \">
                        <div class=\"card-body h-25\">
                            <h5 class=\"card-title\">". $product->title . "</h5>
                            <p class=\"card-text m-0\"> <span class=\"fw-bold pe-1\"> Durata: </span>" . $product->description . "</p>
                            <p class=\"card-text m-0\"> <span class=\"fw-bold pe-1\"> Anno di uscita: </span>" . $product->price . "</p>
                        </div>
                    </div>
                </div>";

            }
            ?>
        </div> 
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>