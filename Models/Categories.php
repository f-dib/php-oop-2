<?php

    class Categories {
        public $categories;       
        
        
        
        /**
         * __construct
         *
         * @param  mixed $_categories
         */
        function __construct($_categories){
            $this->categories = $_categories;

        }

        public function getIcon() {
            if ($this->categories === "Gatto") {
              return "<i class=\"fa-solid fa-cat d-block\"></i>";
            } elseif ($this->categories === "Cane") {
              return "<i class=\"fa-solid fa-dog d-block\"></i>";
            } else {
              return "";
            }
        }



    };

?>