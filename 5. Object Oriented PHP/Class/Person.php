<?php

    class Person{
        public $Name     = "Lemon";
        public $Age      = "22";
        public $Skill    = "Poet";
        
        private $Email      = "lemon.kr49@gmail.com";
        protected $Password = "1234";
        
            function iteratorInner(){
            echo "Inside Class <br>";
            foreach ($this as $key => $value) {
                echo "<pre>";
                echo "$key => $value";
                echo "</pre>"; 
            }
        }   

    }

?>