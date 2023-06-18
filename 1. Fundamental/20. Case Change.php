<?php

	$fonts="sans-serif";
	$color="#fff";
	$bgcolor="blue";

?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title>Case Change</title>
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
			
			input:first-child{
				width: 250px; 
				height: 44px;
			}
			
		</style>
	</head>
	
	<body>
		
		<div class="main">
		
			<section class="Header">
				<h2><?php echo "PHP Fundamental",date(' Y');?></h2>
			</section>
			
			
			<section class="PHP-content">
				
				<form method="POST" action="20. Case Change.php">
					<input type="text" name="text">
					<input type="submit" value="Sent">
				</form> <br>
				
				<?php
				
				echo "<hr>","<hr>","Case Change","<hr>","<hr>";
				
					if(isset($_POST["text"]));
						$txt = $_POST["text"];
					echo strtoupper($txt);
				
				echo "<hr>";
				
				if(isset($_POST["text"]));
						$txt = $_POST["text"];
					echo strtolower($txt);
				
				echo "<hr>";
				
					if(isset($_POST["text"]));
						$txt = $_POST["text"];
					echo ucfirst($txt);

				echo "<hr>";
				
					if(isset($_POST["text"]));
						$txt = $_POST["text"];
					echo ucwords($txt);
				
				echo "<hr>","<hr>","White Space","<hr>","<hr>";
				
					if(isset($_POST["text"]));
						$txt = $_POST["text"];
					echo trim($txt);
				
				echo "<hr>";
				
					if(isset($_POST["text"]));
						$txt = $_POST["text"];
					echo ltrim($txt);
				
				echo "<hr>";
				
					if(isset($_POST["text"]));
						$txt = $_POST["text"];
					echo rtrim($txt," .");
				
				?>
				
				
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
