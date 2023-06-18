<?php

    class Hinting{
        
        public $a;
        
        
        public function value(array $x){
            foreach ($x as $value) {
            	echo $value[0];
            	echo " : " ;
            	echo $value[1] * $value[2]."<br>";
            }
            
        }
      
       
    }

?>