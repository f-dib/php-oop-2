<?php 
    
    require './Models/Product.php';
    require './Models/Categories.php'; 
    require './Models/Food.php';
    require './Models/Games.php';
    require './Models/Kennel.php';

    $product1 = new Food("Crocchette per Cani Adulti con Pollo e Riso",
                        "Alimento completo e bilanciato per cani adulti di tutte le razze",
                        "15.90", 
                        "https://shop-cdn-m.mediazs.com/bilder/0/400/293704_pla_forza10_maintenance_medium_chickenpotatotes_12_5kg_hs_01_0.jpg",
                        new Categories("Cane"),
                        "Contiene prebiotici e probiotici per la salute digestiva.",
                        "2",
                        "5",
                        "10");
    
    $product2 = new Games("Osso in Nylon per Cani",
                            "Gioco resistente e sicuro per la masticazione del cane, aiuta a pulire i denti",
                            "7.99", 
                            "https://www.pets-house.it/8459-large_default/gioco-osso-nylon-pollo-11-cm.jpg",
                            new Categories("Cane"),
                            "Riempibile con snack per aumentare il divertimento del cane");
    
    $product3 = new Kennel("Cuccia Morbida per Cani",
                            "Cuccia in morbido peluche con bordi rialzati per un comfort",
                            "29.90", 
                            "https://www.saluteinerba.com/wp-content/uploads/2021/06/luxury_pet_side.jpg",
                            new Categories("Cane"),
                            "Lavabile in lavatrice per una facile manutenzione",
                            "2-5",
                            "5-10",
                            "10+");
   
    $product4 = new Food("Crocchette per Gatti Adulti con Salmone e Tonno",
                         "Alimento completo e bilanciato per gatti adulti di tutte le razze",
                         "14.99", 
                         "https://arcaplanet.vtexassets.com/arquivos/ids/285508/10161147.jpg?v=638197429875800000",
                         new Categories("Gatto"),
                         "Formula specifica per la salute della pelle e del pelo",
                         "2",
                         "5",
                         "10");
    
    $product5 = new Games("Tiragraffi in Cartone per Gatti",
                            "Tiragraffi in cartone riciclato, soddisfa l'istinto naturale del gatto di graffiare",
                            "5.99", 
                            "https://cdn.manomano.com/images/images_products/5644877/L/106396999_1.jpg",
                            new Categories("Gatto"),
                            "Design reversibile per un utilizzo prolungato");
    
    
    try {
        $product6 = new Kennel("Letto Igloo per Gatti",
                                "Cuccia in morbido tessuto con forma a igloo, ideale per creare un rifugio sicuro",
                                "15", 
                                "https://arcaplanet.vtexassets.com/arquivos/ids/272900/trixie-cuccia-per-gatto.jpg?v=637914829399400000",
                                new Categories("Gatto"),
                                "Dotato di cuscino interno rimovibile",
                                "0,5",
                                "2",
                                "5+");
    } catch (Exception $e) {
        $error = "Errore: " . $e->getMessage();
    }



    $products = [
        $product1,
        $product2,
        $product3,
        $product4,
        $product5,
        $product6
    ];

?>