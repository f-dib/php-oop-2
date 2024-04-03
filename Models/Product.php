<?php

    class Product {
        public $title;
        public $description;
        public $price;
        public $image;


        /**
         * __construct
         *
         * @param  mixed $_title
         * @param  mixed $_description
         * @param  mixed $_price
         * @param  mixed $_image
         */
        function __construct($_title, $_description, $_price, $_image){
            $this->title = $_title;
            $this->description = $_description;
            $this->price =  $_price;
            $this->image = $_image;
        }
    }; 

?>