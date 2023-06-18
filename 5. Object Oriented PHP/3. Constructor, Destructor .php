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
				
				
                <hr>Construct<hr><br>
                
				<?php
				        
                    class Name{
                        public $name;
                        private $age; 
                        
                        public function __construct($x, $y){
                           $this->name = $x;
                           $this->age  = $y;
                        } 
                        
                        public function PersoneName(){
                            echo "Persone Name is  {  $this->name } <br> Persone Age is {  $this->age } "; 
                        } 
                        
                    } 
                
                $object = new Name("Lemon KR", "20");
                $object->PersoneName(); 
             
				?>
                
                <br> <br><hr> Destruct <hr>
                
                <?php
                
                    class Name1{
                        public $name;
                        public $age; 
                        public $id; 
                        
                   //   public function __construct($x, $y){
                  //        $this->name = $x;
                 //         $this->age  = $y;
                //        } 
                        
                        public function setID($id){
                          $this->id = $id ; 
                        } 
                        
                        public function __destruct(){
                            if (!empty($this->id)){
                                echo "Lemon KR";
                            }
                        }
                        
                    } 
                
                $object = new Name1();
                $object->setID(12);
                unset($object);
               
                ?>
                
                
                <br> <br><hr> Construct & Destruct Project <hr>
                
                
                <?php
                
                class Name2{
                        public $user;
                        public $id; 
                        
                        public function __construct($a, $b){
                            $this->user = $a;
                            $this->id   = $b;
                            echo "Usre Name is  {  $this->user } <br> User ID is {  $this->id } "; 
                         
                        } 
                    
                        public function __destruct(){
                           unset($this->user );
                           unset($this->id );
                        } 
                        
                    } 
                
                $user = "Lemon";
                $id   = "13114";
                
                $object= new Name2($user,$id);
                
                
              
                
                ?>

			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
