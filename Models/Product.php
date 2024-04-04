<?php

    class Product {
        public $title;
        public $description;
        public $price;
        public $image;
        public $categories;


        
        /**
         * __construct
         *
         * @param  mixed $_title
         * @param  mixed $_description
         * @param  mixed $_price
         * @param  mixed $_image
         * @param  mixed $_categories
         */
        function __construct($_title, $_description, $_price, $_image, Categories $_categories){
            $this->title = $_title;
            $this->description = $_description;
            $this->price =  $_price;
            $this->image = $_image;
            $this->categories = $_categories;
        }
    }; 

?>