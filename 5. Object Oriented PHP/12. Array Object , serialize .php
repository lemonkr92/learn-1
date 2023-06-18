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
				
                
                
                <hr> Array Object <hr> <br>
                               
                
                <?php
                
                    $arr = array("HTML","CSS","PHP","JAVA");
                   
                $coding = new ArrayObject($arr);  
                $iterator =   $coding -> getIterator(); 
                
                while ($iterator->valid()){
                    echo $iterator->current()."<br>";
                    $iterator->next();
                }
                
                ?>
                
                <hr> serialize <hr> <br>
                
               <?php
                
                class Programming{
                    public      $html;
                    public      $css;
                    private     $php;
                    protected   $java;
                    
                    function __construct(){
                        $this->html = "I know HTML";
                        $this->css = "I know CSS";
                        $this->php = "I know PHP";
                        $this->java = "I know JAVA";
                        
                    } 
                } 
                
                
                $pro = new Programming();
                $ser = serialize($pro);
                file_put_contents("Programming.txt", $ser);
                echo $ser;
                ?>
                
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
