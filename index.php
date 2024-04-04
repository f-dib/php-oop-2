<?php

    require 'db.php';

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <div class=\"col-12 col-md-6 col-lg-4 mb-4 d-flex flex-column\">
                    <div class=\"card position-relative h-100\">
                        <img src=\"" . $product->image . "\" class=\"card-img-top\" alt=\"   \">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">". $product->title . "</h5>
                            <p class=\"card-text m-0\"> <span class=\"fw-bold pe-1\"> Descrizione: </span>" . $product->description . "</p>
                            <p class=\"card-text m-0\"> <span class=\"fw-bold pe-1\"> Prezzo: </span>" . $product->price . "</p>
                            <div class=\"m-4 myfav text-black position-absolute top-0 end-0\">" . $product->categories->getIcon() . "</div>"
                            ?>
                            <p class="card-text m-0"><?= is_a($product, 'Food') || is_a($product, 'Games') || is_a($product, 'Kennel') ? $product->product_info : "" ?></p>
                            <div class="card-text m-0">
                                <?php
                                        if (is_a($product, 'Food') || is_a($product, 'Kennel')) {
                                            $small = "Taglia piccola: " . $product->sizeSmall ."Kg<br>Taglia media: ". $product->sizeMedium ."Kg<br>Taglia grande: " . $product->sizeBig . 'Kg'; // Assuming product_info is a method to get product details
                                        } else {
                                            $small = "";
                                        }
                                ?> 
                                <?= $small ?>
                            </div>
                            <?=
                        "</div>
                    </div>
                </div>";

            }
            ?>
        </div> 
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>