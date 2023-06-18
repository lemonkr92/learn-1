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
				
				
                <hr> Class Constants<hr><br>
            
				<?php
                
				    class Name{
                      const NAME = "LEMON KR"; 
                     
                         public function display(){
                              echo "Usre Name is : ".Name::NAME; 
                         } 

                    } 
              
                    $object = new Name();
                    $object->display();
                    
             
				?>
                
                <br> <br><hr>  Static properties & method <hr>
                
                <?php
                    
                    class Name1{
                        const NAME = "LEMON KR"; 
                        public static $age = "23";
                     
              /*          public function display(){
                              echo "Usre Name is : ".Name::NAME."<br>"; 
                              echo "Usre Age is : ".self::$age; 
                         }  */
                        
                        public static function display(){
                              echo "Usre Name is : ".Name::NAME."<br>"; 
                              echo "Usre Age is : ".self::$age; 
                         } 

                    } 
              
                    $object = new Name1();
        //          $object->display();
                    Name1::display();
                    
             
               
                ?>
                
                
                <br> <br><hr> Inheritance <hr>
                
                
                <?php
                    
      /*              class Name3{
                        const NAME = "LEMON KR"; 
                     
                         public function display(){
                              echo "Usre Name is : ".Name::NAME; 
                         } 
                        
                    class Admin extends Name3{

                    } 
              
                    $object = new Name3();
                    $object->display();
                    
                            */
                ?>

			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
