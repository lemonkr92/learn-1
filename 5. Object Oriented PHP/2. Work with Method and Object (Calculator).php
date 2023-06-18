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
			
		</style>
	</head>
	
	<body>
		
		<div class="main">
		
			<section class="Header">
				<h2><?php echo "Object Oriented PHP",date(' Y');?></h2>
			</section>
			
			
			<section class="PHP-content">
				
				<form action="" method="post">
					
					<table width="55%" align="center">
						<tr>
							<td>Eanter The First Number : </td>
							<td><input type="number" name="num1" ></td>
						</tr>	
						<tr>
							<td>Eanter The Second Number : </td>
							<td><input type="number" name="num2" ></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="calculation" value="Calculate" ></td>
						</tr>
					</table>
					
				</form>
				
				<?php
				        
                        if(isset($_POST["calculation"])){
                            $Num1=$_POST["num1"];
                            $Num2=$_POST["num2"];
                        } 
					
                        if(empty($Num1) or empty ($Num2)){
                            echo "<span style='color:red'>Eanter The value Number One & Number Two</span>"."<br>"."<br>";
                        } else {
                            
                            $cal = new calculation;
                            $cal->add($Num1,$Num2);
                            $cal->sub($Num1,$Num2);
                            $cal->mul($Num1,$Num2);
                            $cal->div($Num1,$Num2);
						
						}
						
				?>

				<?php

					
					class calculation{
                        
                        function add($a,$b){
                                echo "Summation = ".($a+$b)."<br>";
                            }
                        function sub($a,$b){
                                echo "Subtraction = ".($a-$b)."<br>";
                            }
                        function mul($a,$b){
                                echo "Multiplication = ".($a*$b)."<br>";
                            }
                        function div($a,$b){
                                echo "Division = ".($a/$b)."<br>";
                            }

                    }
                           

				?>

				
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
