<?php

	$fonts="sans-serif";
	$color="#fff";
	$bgcolor="blue";

?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title>Read File</title>
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
 				
					echo readfile("Linking File/Text Document.txt");
				
				echo "<hr>","<br>";
				
					$file = fopen("Linking File/Text Document.txt","r") or die ("File Not Found");
					echo fread($file,filesize("Linking File/Text Document.txt"));
					fclose($file);

				echo "<hr>","<br>";
				
					$file = fopen("Linking File/Text Document.txt","r") or die ("File Not Found");
					echo fgets($file,filesize("Linking File/Text Document.txt"));
					fclose($file);

				echo "<hr>","<br>";
				
					$file = fopen("Linking File/Text Document.txt","r") or die ("File Not Found");
					echo fgetc($file);
					fclose($file);

				echo "<hr>","<br>";
				
					$file = fopen("Linking File/Text Document.txt","r") or die ("File Not Found");
					while(!feof($file)){
						echo fgets($file),"<br>";
					}
					fclose($file);

				echo "<hr>","<br>";
				
					$file = fopen("Linking File/Text Document.txt","r") or die ("File Not Found");
					while(!feof($file)){
						echo fgetc($file),"<br>";
					}
					fclose($file);
				
				?>
				
				
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
