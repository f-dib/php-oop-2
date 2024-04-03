<?php

    class Food extends Product {
        public $product_type;
        
        
        
        /**
         * __construct
         *
         * @param  mixed $_title
         * @param  mixed $_description
         * @param  mixed $_price
         * @param  mixed $_image
         * @param  mixed $_product_type
         */
        function __construct($_title, $_description, $_price, $_image, $_product_type){
            parent::__construct($_title, $_description, $_price, $_image);
            $this->product_type = $_product_type;
        }
    };

?>