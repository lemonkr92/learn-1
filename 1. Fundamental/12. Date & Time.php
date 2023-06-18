<?php

	$fonts="sans-serif";
	$color="#fff";
	$bgcolor="blue";

?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title>Date & Time</title>
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
			
				<span style="float:right;font-size:14px; ">
					<?php
						
						date_default_timezone_set("Asia/Dhaka"); 
						echo " Time: ",date("h:i:sa");
					?>
				</span>
				
				
				
				<?php
 				
					echo " DATE : ",date("d/m/y"),"<br>"; 
					echo " Today is : ",date("l"),"<br>"; 
					echo " Time is : ",date("h:i:sa"),"<br>"; 
					echo " Time is : ",date("h:i:sA"),"<br>"; 
                
                    date_default_timezone_set('Asia/Dhaka');
					echo " Time is : ",date("h:i:sA"),"<br>"; 
					 
	               

				?>
				
				
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
