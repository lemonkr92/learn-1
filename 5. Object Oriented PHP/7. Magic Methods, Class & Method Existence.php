<?php

	$fonts="sans-serif";
	$color="#fff";
	$bgcolor="blue";

?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title>Work with Method and Object</title>
		<meta charset="UTF-8">	
		<style>
			.main{
				width: 900px;
				height: auto;
				background: <?php echo "#ddd"; ?>;
				margin-left:  220px;
				font-family: <?php echo $fonts ?>;
			}
			h2{	
				color: <?php echo $color ?>;
				padding: 20px;
			}
			.Header{
				width: 900px;
				height: 70px;
				background: <?php echo $bgcolor ?>;
				text-align: center;

			}
			.Footer{
				width: 900px;
				height: 70px;
				background: <?php echo $bgcolor ?>;
				text-align: center;
			
			}
			.PHP-content{
				height: auto;
				margin: 40px;
				font-size: 18px;
			}
           	p{
                color: red;
            }
			
		</style>
	</head>
	
	<body>
		
		<div class="main">
		
			<section class="Header">
				<h2><?php echo "Object Oriented PHP",date(' Y');?></h2>
			</section>
			
			
			<section class="PHP-content">
				
                
                
                <hr>  Magic Methods __get() , __set(), __Call() <hr> <br>
                               
                
                <?php
                    
                    class student{

                    	public $name;
                        
                        public function describe(){
                        	echo "I am a student <br> ";
                        }
                        
                        public function __get($a){
                        	echo " $a name is Lemon <br> ";
                        }
                        
                        public function __set($b, $value){
                        	echo " My $b->$value <br>";
                        }
                                                
                        public function __call($c, $value){
                        	echo " There is no " .$c. " and Argument ".implode(',',  $value) ;
                        }
                        
                        
                        
                    }

                    $Object = new student();
                    $Object->describe();
                    $Object->My;
                    $Object->age = 22;
                    $Object->Method('2','4','6');
                    
                    
                ?>
                
                 <br><hr> Class & Method Existence <hr> <br>
                
                
                <?php
                    
                    include "Class/cls.php";
                    
                    if (class_exists("className")) {
                    	$obj = new className();

                    	if (method_exists($obj, "Name")) {
                    		 $obj->Name();
                    	} else {
                    		echo "<p>Method Not Found</p>" ;
                    	}
                    	
                
                    } else {

                    	echo "<p>Class Not Found</p>" ;
                    }

                
                    
                ?>
                
                

			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
