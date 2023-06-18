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
		<title>Filter & Advence Filter</title>
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
				
				echo "<hr>","<hr>","Filter","<hr>","<hr>";
					
					$str 	= "<h2>I am Lemon Khandokar</h2>";
					$newstr	= filter_var($str, FILTER_SANITIZE_STRING);  
					echo $newstr;
					
				echo "<hr>","<br>";
					
					$int = 12.5;
					if(filter_var($int, FILTER_VALIDATE_INT)){
						echo "It is intger value";
					}  else {
						echo "It is not intger value";	
					}
		 			
						
				echo "<hr>","<br>";
					
					$ip = "127.0.0.1";
					if(filter_var($ip, FILTER_VALIDATE_IP)){
						echo "It is Real IP";
					}  else {
						echo "It is not Real IP";	
					}
		 			
				echo "<hr>","<br>";
					
					$email = "lemon.kr92@gmail.com";
					if(filter_var($email, FILTER_VALIDATE_EMAIL)){
						echo "It is Real Mail Address";
					}  else {
						echo "It is not Real Mail Address";	
					}
		 					
				echo "<hr>","<br>";
					
					$url = "http://localhost/Fundamental/";
					if(filter_var($url, FILTER_VALIDATE_URL)){
						echo "It is Real URL";
					}  else {
						echo "It is not Real URL";	
					}
		 			
				
				echo "<hr>","<hr>"," Advence Filter","<hr>","<hr>";
				
					$int = 300;
					$min = 1;
					$max = 200;
						
					if(filter_var($int, FILTER_VALIDATE_INT, array("options"=> array("min_range"=>$min,"max_range"=>$max)))){
						echo "It is valid";
					}  else {
						echo "It is NOT valid";	
					}	
					
		 					
				echo "<hr>","<br>";
					
					$url = "http://localhost/Fundamental/";
					if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
						echo "It is Real URL";
					}  else {
						echo "It is not Real URL";	
					}
		 			
				?>
				
				
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
