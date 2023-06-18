<?php

	$fonts="sans-serif";
	$color="#fff";
	$bgcolor="blue";

?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title>Variable Decliaretion</title>
		<meta charset="UTF-8">	
		<style>
			.main{
				width: 900px;
				height: 600px;
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
				height: 380px;
				margin: 40px;
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
					
					$a = 5;
					$b = 10;
					$c = $a+$b;
					
					echo " $a TK + $b TK = $c " ," TK";
				
				?>
				
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
