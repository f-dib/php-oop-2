<?php

    require_once __DIR__ .'/Traits/Sizeable.php';
    class Food extends Product {

        use Sizeable;
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
        function __construct($_title, $_description, $_price, $_image, Categories $_categories, $_product_info, $_sizeSmall, $_sizeMedium, $_sizeBig){
            parent::__construct($_title, $_description, $_price, $_image, $_categories);
            $this->product_info = $_product_info;
            $this->sizeSmall = $_sizeSmall;
            $this->sizeMedium = $_sizeMedium;
            $this->sizeBig = $_sizeBig;
        }
    };

?>