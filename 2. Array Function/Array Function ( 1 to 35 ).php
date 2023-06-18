<?php

	$fonts="sans-serif";
	$color="#fff";
	$bgcolor="blue";

?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title>Array Function</title>
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
				<h2><?php echo "Array Function"; ?></h2>
			</section>
			
			
			<section class="PHP-content">
			
				<?php
                
                echo "<br>"."<hr>"."1. Create an Array"."<hr>"."<br>";
                
					$x = array("lemon","khandokar","neoyajul");
					$lenght = count($x);
					for ($i=0; $i < $lenght; $i++) { 
						echo $x[$i]." ";
					}
                
                echo "<br>"."<br>"."Asusiative Array"."<hr>"."<br>";
                
					$x = array(

						"lemon" => "22",
						"lezan" => "17",
						"lamim" => "15",
						"lehaz" => "12"

						);
					foreach ($x as $key => $value) {
						echo "Name =".$key.", Age =" .$value,"<br>";
					}
				echo "<br>"."<br>"."Maultidimention Array"."<hr>"."<br>";
                
					$x = array(

							 array("lemon","41","141"),
							 array("lemon","14","49"),
							 array("lemon","144","45")

						);
					   
                    echo $x[1][2];
					
				?>
				
                			
				<?php
                
                echo "<br>"."<br>"."<hr>"."2. array_change_key_case "."<hr>"."<br>";

					$x = array(

						"Lemon" => "22",
						"Lezan" => "17",
						"Lamim" => "15",
						"Lehaz" => "12"

						);
					   
                        print("<pre>");
                		print_r(array_change_key_case($x, CASE_UPPER));
                		print_r(array_change_key_case($x, CASE_LOWER)); 
                        print("</pre>");
				?>
                
				<?php
                
                echo "<br>"."<hr>"."3. array_column "."<hr>"."<br>";
                    
                    $x = array(

                                 array(

                                "Lezan" => "17",
                                "Lamim" => "15",
                                "Lehaz" => "12"
                             ),
                                 array(

                                "Lezan" => "18",
                                "Lamim" => "55",
                                "Lehaz" => "52"
                             ),
                                 array(

                                "Lezan" => "54",
                                "Lamim" => "71",
                                "Lehaz" => "11"
                             )

							 
						);
                
                        $last_name = array_column($x, 'Lamim');
                
                        print("<pre>");
                		print_r($last_name); 
                        print("</pre>");
					
				?>
				
                <?php
                
                echo "<br>"."<hr>"."4. array_combine "."<hr>"."<br>";

					$name = array("lemon","lezan","lamim");
					$diperment = array("computer","math","english");
						
						$Combine = array_combine($name, $diperment);
				   
                        print("<pre>");
                		print_r($Combine);
                        print("</pre>");
				?>
                 
                <?php
                
                echo "<br>"."<hr>"."5. array_count_values "."<hr>"."<br>";

					$name = array("lemon","lezan","lamim","lezan","lamim","labu","labib","lihaz","labib","lihaz");
					$age = array("10","52","45","52","45","52","45","11","12","45","11","12","15");
						
						
					   
                        print("<pre>");
                		print_r(array_count_values($name));
                		print_r(array_count_values($age));
                        print("</pre>");
				?>
                
                <?php
                
                echo "<br>"."<hr>"."6. array_diff "."<hr>"."<br>";
                    
                    $x = array(

                                "Lezan" => "17",
                                "Labu" => "15",
                                "Lehaz" => "12",
                                "Lamim" => "19"
                             );
                
                    $y = array(

                                "Lezan" => "14",
                                "Lamim" => "19",
                                "Lehaz" => "11"
                             );

                        $diff = array_diff($x, $y);
                
                        print("<pre>");
                		print_r($diff); 
                        print("</pre>");
					
				?>
				
                <?php
                
                echo "<br>"."<hr>"."7. array_diff_assoc "."<hr>"."<br>";
                    
                    $x = array(

                                "Lezan" => "17",
                                "Labu" => "15",
                                "Lehaz" => "12",
                                "Lamim" => "18"
                             );
                
                    $y = array(

                                "Lezan" => "15",
                                "Lamim" => "19",
                                "Lehaz" => "11"
                             );

                        $diff = array_diff_assoc($x, $y);
                
                        print("<pre>");
                		print_r($diff); 
                        print("</pre>");
					
				?>
				 
                <?php
                
                echo "<br>"."<hr>"."8. array_diff_key "."<hr>"."<br>";
                    
                    $x = array(

                                "Lezan" => "17",
                                "Labu"  => "15",
                                "Lehaz" => "12",
                                "Lamim" => "18"
                             );
                
                    $y = array(

                                "Lezan" => "15",
                                "Lamim" => "19",
                                "Lehaz" => "11"
                             );

                        $diff = array_diff_key($x, $y);
                
                        print("<pre>");
                		print_r($diff); 
                        print("</pre>");
					
				?>
				 
                <?php
                
                echo "<br>"."<hr>"."9. array_intersect "."<hr>"."<br>";
                    
                    $x = array(

                                "Lezan" => "17",
                                "Labu" => "15",
                                "Lehaz" => "11",
                                "Lamim" => "19"
                             );
                
                    $y = array(

                                "Lezan" => "15",
                                "Lamim" => "19",
                                "Lehaz" => "11"
                             );

                        $diff = array_intersect($x, $y);
                
                        print("<pre>");
                		print_r($diff); 
                        print("</pre>");
					
				?>
				
                <?php
                
                echo "<br>"."<hr>"."10. array_intersect_assoc "."<hr>"."<br>";
                    
                    $x = array(

                                "Lezan" => "17",
                                "Labu" => "15",
                                "Lehaz" => "11",
                                "Lamim" => "19"
                             );
                
                    $y = array(

                                "Lezan" => "15",
                                "Lamim" => "19",
                                "Lehaz" => "11"
                             );

                        $diff = array_intersect_assoc($x, $y);
                
                        print("<pre>");
                		print_r($diff); 
                        print("</pre>");
					
				?>
				 
                <?php
                
                echo "<br>"."<hr>"."11. array_intersect_key "."<hr>"."<br>";
                    
                    $x = array(

                                "Lezan" => "17",
                                "Labu" => "15",
                                "Lehaz" => "11",
                                "Lamim" => "19"
                             );
                
                    $y = array(

                                "Lezan" => "15",
                                "Lamim" => "19",
                                "Lehaz" => "11"
                             );

                        $diff = array_intersect_key($x, $y);
                
                        print("<pre>");
                		print_r($diff); 
                        print("</pre>");
					
				?>
				
                <?php
                
                echo "<br>"."<hr>"."12. array_key_exists "."<hr>"."<br>";
                    
                    $x = array(

                                "Lezan" => "17",
                                "Lamim" => "15"
                             );
                
                    $y = array("Lezan","Lamim");
                
                   		if (array_key_exists("Lezan", $x)) {
                   			echo  "array key is exists";
                   		} else {
                   			echo  "array key dosn't exists";
                   		}
                        
                echo "<br>"."<br>";
                
                   		if (array_key_exists("Name", $x)) {
                   			echo  "array key is exists";
                   		} else {
                   			echo  "array key dosn't exists";
                   		}
                
                echo "<br>"."<hr>";
                
                   		if (array_key_exists(1, $y)) {
                   			echo  "array key is exists";
                   		} else {
                   			echo  "array key dosn't exists";
                   		}
                
                echo "<br>"."<br>";
                
                   		if (array_key_exists(2, $y)) {
                   			echo  "array key is exists";
                   		} else {
                   			echo  "array key dosn't exists";
                   		}
                        
				?>
                	
                <?php
                
                echo "<br>"."<br>"."<hr>"."13. array_keys "."<hr>"."<br>";
                    
                    $x = array(

                                "Lezan" => "17",
                                "Lamim" => "15",
                                "Lehaz" => "11"
                             );
                
                      $keys = array_keys($x);
                
                        print("<pre>");
                		print_r($keys); 
                        print("</pre>"); 
                
                    $y = array(

                                "Lezan" => "17",
                                "Lamim" => "15",
                                "Lehaz" => "11"
                             );
                
                      $keys = array_keys($y, "17");
                
                        print("<pre>");
                		print_r($keys); 
                        print("</pre>");
                ?>
				
                <?php
                
                echo "<br>"."<br>"."<hr>"."14. array_map "."<hr>"."<br>";
                    
                    function name($value){
                    	return($value+$value);
                    }
                   	
                   	$x = array(1,2,3,4,5);

                   		$result = array_map("name", $x);

                        print("<pre>");
                		print_r($result); 
                        print("</pre>");
                ?>
				
                <?php
                
                echo "<br>"."<br>"."<hr>"."15. array_merge "."<hr>"."<br>";
                    
                    
                   	$x = array(1,2,3);
                   	$y = array(4,5);

                   		$result = array_merge($x,$y);

                        print("<pre>");
                		print_r($result); 
                        print("</pre>");
                ?>
				
                <?php
                
                echo "<br>"."<br>"."<hr>"."16. array_multisort "."<hr>"."<br>";
                    
                    
                   	$x = array(1,0,2);
                   	$y = array(5,4,3);
                   	$y = array(5,4,3);

                   	array_multisort($x);
                   	array_multisort($y);

                        print("<pre>");
                		print_r($x); 
                        print("</pre>");  
                
                        print("<pre>");
                		print_r($y); 
                        print("</pre>");
                ?>
				
                <?php
                
                echo "<br>"."<br>"."<hr>"."17. array_pad "."<hr>"."<br>";
                    
                    
                   	$x = array(1,2,3);
                   
                    $result = array_pad($x, -4 , 0);
                                   
                        print("<pre>");
                		print_r($result); 
                        print("</pre>");
                ?>
				
                <?php
                
                echo "<br>"."<br>"."<hr>"."18. array_pop & array_push "."<hr>"."<br>";
                    
                    
                   	$x = array(1,2,3,4,5);
                   
                    array_pop($x);
                    array_push($x,6,7);

                        print("<pre>");
                		print_r($x); 
                        print("</pre>");
                ?>
				
                <?php
                
                echo "<br>"."<br>"."<hr>"."19. array_product "."<hr>"."<br>";
                    
                    
                   	$x = array(10,20);
                   	
                   	echo (array_product($x));

                       
                ?>
				
                <?php
                
                echo "<br>"."<br>"."<hr>"."20. array_replace "."<hr>"."<br>";
                    
                    
                   	$x = array(1,2);
                   	$y = array(3,4);

                   	$result = array_replace($y, $x);

                   	print("<pre>");
                	print_r($result); 
                    print("</pre>");

                       
                ?>
				
                <?php
                
                echo "<br>"."<br>"."<hr>"."21. array_reverse "."<hr>"."<br>";
                    
                    
                   	$x = array(1,2,3,4,5);

                   	$result = array_reverse($x);

                   	print("<pre>");
                	print_r($result); 
                    print("</pre>");

                       
                ?>
				
            
                
                <?php
                
                echo "<br>"."<br>"."<hr>"."22. array_search "."<hr>"."<br>";
                    
                    $x = array(1,2,3,4,5);

                   	if(isset($_POST["text"])){
                   		global $txt;
                   		$txt = $_POST["text"];
                   		$result = array_search($txt, $x);
                   		echo "you search $txt, your key is $result";
                   	}
                       
                ?>
				
                    <!-- array search -->

                <form action="Array Function.php" method="post">
                    <input type="text" name="text" value="<?php global $txt; echo $txt; ?>">
                    <input type="submit" value="sent">
                </form>

                
                <?php
                
                echo "<br>"."<br>"."<hr>"."23. array_shift "."<hr>"."<br>";
                    
                    
                   $x = array(

                                "Lezan" => "17",
                                "Lamim" => "15",
                                "Lehaz" => "11"
                             );
                
                    $y = array(1,2,3,4);

                   	array_shift($x);
                   	array_shift($y);

                   	print("<pre>");
                	print_r($x); 
                    print("</pre>");
                    
                    print("<pre>");
                	print_r($y); 
                    print("</pre>");

                       
                ?>
				
                <?php

                    echo "<br>"."<br>"."<hr>"."24. array_slice "."<hr>"."<br>";


                       $x = array(

                                    "Lezan" => "17",
                                    "Lamim" => "15",
                                    "Lehaz" => "11",
                                    "Labu" => "32",
                                    "Lemon" => "22"
                                 );

                       $result = array_slice($x,-3,2);

                        print("<pre>");
                        print_r($result); 
                        print("</pre>");


                    ?>

                    <?php

                    echo "<br>"."<br>"."<hr>"."25. array_sum "."<hr>"."<br>";


                       $x = array(10,20,30);

                       $result = array_sum($x);

                        echo "Total = ",$result;

                    ?>

                    <?php

                    echo "<br>"."<br>"."<hr>"."26. array_unique "."<hr>"."<br>";


                       $x = array(1,2,3,1,2,3,4);

                       $result = array_unique($x);

                        print("<pre>");
                        print_r($result); 
                        print("</pre>");
                
                    ?>

                    <?php

                    echo "<br>"."<br>"."<hr>"."27. array_unshift "."<hr>"."<br>";


                       $x = array(2,3,4,5);

                       array_unshift($x,'s',1);
                       
                        print("<pre>");
                        print_r($x); 
                        print("</pre>");
                
                    ?>

                    <?php

                    echo "<br>"."<br>"."<hr>"."28. array_values "."<hr>"."<br>";

                   
                       $x = array(
								    "a" => 1,
								    "b" => 2,
								    "c" => 3
								  );

                       $result = array_values($x);
                       
                        print("<pre>");
                        print_r($result); 
                        print("</pre>");
                
                    ?>

                    <?php

                    echo "<br>"."<br>"."<hr>"."29. array_walk "."<hr>"."<br>";


                     function FunctionName($value ,$key)
                    {
                    	echo "$key for $value <br>";
                    }


                       $x = array(
								    "a" => 1,
								    "b" => 2,
								    "c" => 3
								  );

                     array_walk($x, "FunctionName");
            
                    ?>

                    <?php

                    echo "<br>"."<br>"."<hr>"."30. arsort & asort "."<hr>"."<br>";

                       $x = array(
								    "a" => 1,
								    "b" => 3,
								    "d" => 2,
								    "e" => 5,
								    "c" => 4,
								  );

                     asort($x);
              //     arsort($x);
                    
                     foreach ($x as $key => $value) {
                     	echo "$key => $value <br>";                     }

                    ?>

                     <?php

                    echo "<br>"."<br>"."<hr>"."31. compact"."<hr>"."<br>";

                    $x = "lemon";
                    $y = "lezan";
                    $z = "lamim";
                    
                    $result = compact("x","y","z");

                     print("<pre>");
                     print_r($result); 
                     print("</pre>");
                

                    ?>

                    <?php

                    echo "<br>"."<br>"."<hr>"."32. current & end "."<hr>"."<br>";

                    $x = array(1,2,3,4,5);
                
                  	echo "The current value is : ", current($x) ,"<br>";
                  	echo "The Next value is : ", next($x) ,"<br>";
                
                	echo "Now current value is : ", current($x) ,"<br>";
                	echo "Previous value is : ", prev($x) ,"<br>";
                
                  	echo "The end value is : ", end($x),"<br>";
                    
                
                    ?>

                    <?php

                    echo "<br>"."<br>"."<hr>"."33. in_array "."<hr>"."<br>";

                        $x = array(1,2,3,4,5);

                        if(isset($_POST["username"])){
                        	$y = $_POST["username"];
                           
                           if (in_array($y, $x)) {
                           	 echo "Exist ";
                           } else {
                           		echo "NOT Exist ";
                           }

                        }

                    ?>

                        <!-- in_array -->

                    <form action="Array Function.php" method="post">
                        <input type="text" name="username">
                        <input type="submit" value="sent">
                    </form>
                        
                     <?php

                    echo "<br>"."<br>"."<hr>"."34. krsort & ksort "."<hr>"."<br>";

                       $x = array(
								    "a" => 1,
								    "b" => 3,
								    "d" => 2,
								    "e" => 5,
								    "c" => 4,
								  );
                        
                     ksort($x);
              //     krsort($x);
                    
                     foreach ($x as $key => $value) {
                     	echo "$key => $value <br>";                     }

                    ?>

                    <?php

                        echo "<br>"."<br>"."<hr>"."35. shuffle "."<hr>"."<br>";

                           $x = array(
                                        "a" => 1,
                                        "b" => 2,
                                        "c" => 3,
                                        "d" => 4,
                                        "e" => 5
                                      );

                         shuffle($x);


                         print("<pre>");
                         print_r($x); 
                         print("</pre>");

                        ?>


			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
