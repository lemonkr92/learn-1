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
			
		</style>
	</head>
	
	<body>
		
		<div class="main">
		
			<section class="Header">
				<h2><?php echo "Object Oriented PHP",date(' Y');?></h2>
			</section>
			
			
			<section class="PHP-content">
				
                
                
                <hr> Abstract Class <hr> <br>
                
                
                <?php
                    
                    abstract class Student{
                    	public $name;
                    	public $age;

                        public function details(){
                        	echo $this->name." is ".$this->age." years Old .<br>";
                        }
                        
                        abstract public function School();
                     } 
                    
                        

                        class Boy extends Student{
                        	public function describe(){
                        		return parent::details()."And i am a college student.<br>";
                        	}
                            public function School(){
                                return " I like writen Story";
                            }
                        }

                    $Object = new Boy();
                    $Object->name="Lemon";
                    $Object->age="22";
                    echo $Object->describe();
                    echo $Object->School();
                
                
                ?>

			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
