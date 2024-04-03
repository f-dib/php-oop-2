<?php

    class Kennel extends Product {
        public $product_info;
        
        
        
        /**
         * __construct
         *
         * @param  mixed $_title
         * @param  mixed $_description
         * @param  mixed $_price
         * @param  mixed $_image
         * @param  mixed $_product_type
         */
        function __construct($_title, $_description, $_price, $_image, $_product_info){
            parent::__construct($_title, $_description, $_price, $_image);
            $this->product_info = $_product_info;
        }
    };

?>