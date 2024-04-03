<?php

    class Food extends Product {
        public $product_info;        
        
        
        
        /**
         * __construct
         *
         * @param  mixed $_title
         * @param  mixed $_description
         * @param  mixed $_price
         * @param  mixed $_image
         * @param  mixed $_categories
         * @param  mixed $_product_info
         */
        function __construct($_title, $_description, $_price, $_image, Categories $_categories, $_product_info){
            parent::__construct($_title, $_description, $_price, $_image, $_categories);
            $this->product_info = $_product_info;
        }
    };

?>