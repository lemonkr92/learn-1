<?php

	$fonts="sans-serif";
	$color="#fff";
	$bgcolor="blue";

?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title>Array</title>
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
					
					$x = array(
						'a'=> "Jessore",
						'b'=> "Khulna",
						
					);
					
					$y = array(
						'c'=> "Barishal",
						'd'=> "Dhaka",
						
					);
				
					var_dump($x+$y);
				
					
					echo "<hr>","Indexed Array","<hr>";
				
				
					$x=array(5,3,1,5,8);
	/* Print*/		echo "The 3th Value is = ", $x[2] , "<br>";		
	/* Count*/		echo "Total Value is = ", count($x);	
				
					echo "<br>";
					echo "<hr>";
				
	/* For Loop*/	$length = count($x);
				
					for($i=0;$i<$length;$i++){
						echo $x[$i];
						echo ",";
					}
				
				
					/*
						$x[0] = 5,				
						$x[1] = 3,					
						$x[2] = 1,						
						$x[3] = 5,					
						$x[4] = 8;					
									*/
		
				
				
					echo "<hr>","Assative Array","<hr>";
				
					$age = array("lemon" => "22", "Masud" => "23" );

					foreach ($age as $key => $value) {
							echo "NAME = ".$key.", Age = ".$value;
							echo "<br>";
						}	



					echo "<hr>","Multidination Array","<hr>";
				
					$car = array(
						array("BMW",45,4,5),
						array("CBR",1,11,114),
						array("TVS",35,12,14)
					
					);

					echo $car[1][2];

						
						echo"</ul>";
					
				
					
					echo "<hr>","Sorting Array","<hr>";
				
				
					$m = array("Lemon","Masud","Emon","Abir","Zahid");
					sort($m);
					
					for($i=0;$i<5;$i++){
							echo $m[$i],"<br>";
						}
				
					echo "<hr>";
				
					$n = array(3,5,4,2,1,6);
					sort($n);
					for($i=0;$i<6;$i++){
							echo $n[$i],"<br>";
						}
				
					echo "<hr>";
				
					$p = array(3,5,4,2,1,6);
   /* Reverch */	rsort($p);
					for($i=0;$i<6;$i++){
							echo $p[$i],"<br>";
						}
				
					echo "<hr>";
				
					$x = array("C"=>"1","B"=>"3","A"=>"2");
   /* Key sort */	asort($x);
					foreach($x as $k => $n){
						echo $k, " = ", $n;
						echo "<br>";
					}
				
								
					echo "<hr>";
				
					$x = array("C"=>"1","B"=>"3","A"=>"2");
  /* Number sort */	ksort($x);
					foreach($x as $k => $n){
						echo $k, " = ", $n;
						echo "<br>";
					}
				
				
				?>
				
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
