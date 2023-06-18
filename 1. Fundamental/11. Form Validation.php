<?php

	$fonts="sans-serif";
	$color="#fff";
	$bgcolor="blue";

?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title>From Validation</title>
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
				<h2><?php echo "PHP Fundamental"; ?></h2>
			</section>
			
			
			<section class="PHP-content">
			
				
				<form method="post" action="">
					<table width="50%" align="center" >
						<tr>
							<td>Name : </td>
							<td><input type="text" name="name" required></td>
						</tr>		
						<tr>
							<td>E-Mail : </td>
							<td><input type="email" name="email"></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="password" name="password"></td>
						</tr> 
						<tr>
							<td>Web Site : </td>
							<td><input type="text" name="website"></td>
						</tr>		
						<tr>
							<td>Comment : </td>
							<td><textarea name="comment" rows="5" cols="21" ></textarea></td>
						</tr>
						<tr>
							<td>Gender : </td>
							<td>
								<input type="radio" name="gender" value="Male"> Male
								<input type="radio" name="gender" value="Female"> Female
							</td>
						</tr>	
						<tr>
							<td></td>
							<td>
								<input type="submit" value="Sent">
							</td>
						</tr>
					</table>
				</form>
				 
				
				<?php
 				
					if($_SERVER["REQUEST_METHOD"] == "POST" ){
                        $name       =    validate($_POST["name"]);
                        $email      =    validate($_POST["email"]);
                        $password   =    validate($_POST["password"]);
                        $website    =    validate($_POST["website"]);
                        $comment    =    validate($_POST["comment"]);
                        $gender     =    validate($_POST["gender"]);
                        
                    echo "> ". $name ."<br>";
                    echo "> ". $email ."<br>";
                    echo "> ". $password."<br>";
                    echo "> ". $website ."<br>";
                    echo "> ". $comment ."<br>";
                    echo "> ". $gender ."<br>";
                        
                    }
                    
                    function validate($data){     
                        $data = trim($data);
                        $data = stripcslashes ($data);
                        $data = htmlspecialchars($data);
                    
                        return $data;
                    }
                
                   

				?>
				
				
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
