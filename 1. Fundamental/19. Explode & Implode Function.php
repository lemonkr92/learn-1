<?php

	$fonts="sans-serif";
	$color="#fff";
	$bgcolor="blue";
		
	session_start();
	setcookie("visitor","", time()- 3600);	
?> 

<!DOCTYPE html>
 
<html lang="en">

	<head>
		<title>Explode & Implode Function</title>
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
				font-size: 20px;
			}
			
		</style>
	</head>
	
	<body>
		
		<div class="main">
		
			<section class="Header">
				<h2><?php echo "PHP Fundamental",date(' Y');?></h2>
			</section>
			
			
			<section class="PHP-content">
				
				
				<?php
				
				echo "<hr>","<hr>","Explode Function","<br>","<hr>";
					
					$mystr  = "My Name Is Lemon Khandokar";
					$str 	= explode(" ", $mystr);
					echo $str[3];
				
				echo "<hr>","<hr>","Implode Function","<br>","<hr>";
					
					$mystr  = array ("My","Name","Is","Lemon","Khandokar");
					echo implode(" ", $mystr);
					 
				
				?>
				
				
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
