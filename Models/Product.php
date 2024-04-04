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
         * @param  float $_price
         * @param  mixed $_image
         * @param  mixed $_categories
         */
        function __construct($_title, $_description, $_price, $_image, Categories $_categories){
            $this->title = $_title;
            $this->description = $_description;
            
            if(is_numeric($_price)) {

                $this->price = $_price;
    
            } else {
                // se notiamo che sta succedendo qualcosa che non vorremmo
                throw new Exception("Il prezzo inserito non è di valore numerico");
            }

            $this->image = $_image;
            $this->categories = $_categories;
        }
    }; 

?>