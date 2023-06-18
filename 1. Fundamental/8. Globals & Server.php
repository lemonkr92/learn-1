<?php

	$fonts="sans-serif";
	$color="#fff";
	$bgcolor="blue";

?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title>Globals & Server</title>
		<meta charset="UTF-8">	
		<style>
			.main{
				width: 900px;
				height: auto;
				background: <?php echo "#ddd"; ?>;
				margin-left: 220px;
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
				font-size: 20px;
			}
			
		</style>
	</head>
	
	<body>
		
		<div class="main">
		
			<section class="Header">
				<h2><?php echo "PHP Fundamental"; ?></h2>
			</section>
			
			
			<section class="PHP-content">
			
				<?php
 				
				echo "<hr>","Globals Variable","<hr>"; 
				
					$x = 5;
				
					function sum(){
						global $x;
						$a = 10;
						echo $a;
						echo ","," Global is = ",$x;
					}
					
					sum();
	
				echo "<br>","<br>"; 
				
					$x = 10;
					$y = 20;
				
					function sum2(){
						$GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
					} 
				
					sum2();
					echo $z;
				
				
				echo "<hr>","Server","<hr>"; 
				echo "<br>"; 
									
					echo $_SERVER['PHP_SELF'];
				
				echo "<br>"; 
				echo "<br>"; 
									
					echo $_SERVER['SERVER_NAME'];
				
				echo "<br>"; 
				echo "<br>"; 
									
					echo $_SERVER['SCRIPT_NAME'];
				
				echo "<br>"; 
				echo "<br>"; 
												
					echo $_SERVER['HTTP_USER_AGENT'];
				
				echo "<br>"; 
				echo "<br>"; 
									
					echo $_SERVER['SERVER_ADDR'];
				
				echo "<br>"; 
				echo "<br>"; 
				

				?>
				
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
