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
				
                
                
                <hr> Interface <hr> <br>
                
                
                <?php
                    
                    interface school{
                        public function myschool();
                    } 
                
                    interface college{
                        public function mycollege();
                    } 
                
                    interface versity{
                        public function myversity();
                    } 
                
                    class Teacher implements school, college, versity{
                         
                         public function __construct(){
                             $this->myschool();
                             $this->mycollege();
                             $this->myversity();
                         }
                             
                             
                         public function myschool(){
                             echo "I am a school Teacher"."<br>";
                         }     
                         public function mycollege(){
                             echo "I am a college Teacher"."<br>";
                         }     
                         public function myversity(){
                             echo "I am a versity Teacher"."<br>"."<br>";
                         }
                            
                    }
                
                    class Student implements school, college, versity{
                         
                         public function __construct(){
                             $this->myschool();
                             $this->mycollege();
                             $this->myversity();
                         }
                             
                             
                         public function myschool(){
                             echo "I am a school Student"."<br>";
                         }     
                         public function mycollege(){
                             echo "I am a college Student"."<br>";
                         }     
                         public function myversity(){
                             echo "I am a versity Student";
                         }
                            
                    }
                
                $obj = new Teacher();
                $obj = new Student();

                ?>

			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
