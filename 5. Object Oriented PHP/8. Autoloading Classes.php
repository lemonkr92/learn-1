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
				
                
                
                <hr> Autoloading Classes <hr> <br>
                               
                
                <?php
                    
               //  	function __autoload($class_name){
          	  //    	include "class/"."$class_name".".php";
             //   	}

                    spl_autoload_register(function($class_name){
                    	include "class/"."$class_name".".php";
                    });


                    $Html = new Html;
                    $Php  = new Php;
                    $Java = new Java;
                
                
                    
                ?>
                
                <br><hr>  Method Chaining <hr> <br>
                
                <?php
                
                    spl_autoload_register(function($class_name){
                    	include "class/"."$class_name".".php";
                    });


                   
                //    $Method = new Method;
                //    $Method->php()->java()->html();
                
                $cal = new Calculate;
                echo "Result : ".$cal->value(5,6)->result();

                
                ?>
                
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
