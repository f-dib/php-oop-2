<?php

    class Food extends Categories {
        public $product_type;
        
        
        /**
         * __construct
         *
         * @param  mixed $_product_type
         */
        function __construct($_type, $_product_type){
            parent::__construct($_type);
            $this->product_type = $_product_type;
        }
    };

?>