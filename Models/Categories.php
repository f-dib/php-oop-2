<?php

    class Categories {
        public $categories;  
        public $product;      
        
        
        
        /**
         * __construct
         *
         * @param  mixed $_categories
         * @param  mixed $_product
         */
        function __construct($_categories, Product $_product){
            $this->categories = $_categories;
            $this->product = $_product;
        }
    };

?>