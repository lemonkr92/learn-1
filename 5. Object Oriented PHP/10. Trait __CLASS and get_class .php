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
           	p{
                color: red;
            }
			
		</style>
	</head>
	
	<body>
		
		<div class="main">
		
			<section class="Header">
				<h2><?php echo "Object Oriented PHP",date(' Y');?></h2>
			</section>
			
			
			<section class="PHP-content">
				
                
                
                <hr> Trait <hr> <br>
                               
                
                <?php
                  
                    trait PHP{
                        public function phpcoder(){
                            return "i love PHP<br>";
                        }
                    }
                    trait JAVA{
                            public function javacoder(){
                                return "i love JAVA<br>";
                            }
                        }

                   class coder1{
                       use JAVA,PHP;
                       
                   }
                   class coder2{
                       use JAVA;
                   }
                   
                    $obj1 = new coder1;
                    echo    $obj1->javacoder();
                    echo    $obj1->phpcoder();
                    $obj2 = new coder2;
                    echo    $obj2->javacoder();
                
                ?>
                
                <br><hr> __CLASS__ & get_class <hr> <br>
                
                <?php
                
                class PHP1{
                    public function Name(){
                        
                        echo "My name is lemon".__CLASS__."<br>";
                        echo "My name is lemon".get_class($this)."<br>";;
                    }  
                    
                    public function age(){
                        
                        echo "My Age 23";
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
