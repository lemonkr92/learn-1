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
				
                
                
                <hr> Type Hinting in PHP <hr> <br>
                               
                
                <?php
                  
                    spl_autoload_register(function($class_name){
                            include "class/"."$class_name".".php";
                        });
                
                
                    $obj = new Hinting;
                    $arr = array(
                            array ('lemon',10,11),
                            array ('khandokar',20,22)
                    );
                
                    $obj-> value($arr); 
                ?>
                
                <br><hr> PHP Object Iteration <hr> <br>
                
                <?php
                	
                    $Object =  new Person;
                    
                	foreach ($Object as $key => $value) {
                		echo "<pre>";
                		echo "$key => $value";
                		echo "</pre>";
                	}
                    
                    $Object->iteratorInner();
                                   
                ?>
                
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
