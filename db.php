<?php 
    
    require './Models/Product.php';
    require './Models/Categories.php'; 
    require './Models/Food.php';

    $product1 = new Categories("The Shawshank Redemption",
                                new Product("cane", 
                                            "Darabont",
                                            "Darabont", 
                                            "Francese"));
    
    $product2 = new Categories("The Shawshank Redemption",
                                new Product("cane", 
                                            "Darabont",
                                            "Darabont", 
                                            "Francese"));
    
    // $product3 = new Categories("The Shawshank Redemption",
                                    // new Product("cane", 
                                    //             "Darabont",
                                    //             "Darabont", 
                                    //             "Francese"));
   
    // $product4 = new Categories("The Shawshank Redemption",
                                    // new Product("cane", 
                                    //             "Darabont",
                                    //             "Darabont", 
                                    //             "Francese"));
    
    // $product5 = new Categories("The Shawshank Redemption",
                                    // new Product("cane", 
                                    //             "Darabont",
                                    //             "Darabont", 
                                    //             "Francese"));
    
    // $product6 = new Categories("The Shawshank Redemption",
                                    // new Product("cane", 
                                    //             "Darabont",
                                    //             "Darabont", 
                                    //             "Francese"));

    $products = [
        $product1,
        $product2,
        // $product3,
        // $product4,
        // $product5,
        // $product6
    ];


?>