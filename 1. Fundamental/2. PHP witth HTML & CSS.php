<!DOCTYPE html>

<html lang="en">

	<head>
		<title> PHP witth HTML & CSS</title>
		<meta charset="UTF-8">	
		<style>
			.main{
				width: 900px;
				height: 600px;
				background: <?php echo "#ddd"; ?>;
				margin-left: 220px;
				font-family: sans-serif;
			}
			h2{
				padding: 20px;
			}
			.Header{
				width: 900px;
				height: 70px;
				background: brown;
				text-align: center;

			}
			.Footer{
				width: 900px;
				height: 70px;
				background: brown;
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
		
					echo "I Love PHP";
		
				?>
		
				
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
