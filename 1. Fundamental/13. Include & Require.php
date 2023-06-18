<?php include 'Linking File/13. Header.php'?>

			<section class="PHP-content">
			
				<span style="float:right;font-size:14px">
					<?php
						
						date_default_timezone_set("Asia/Dhaka"); 
						echo " Time: ",date("h:i:sa");
					?>
				</span>
				
				
				
				<?php
 				
					echo "Today is ",date("d-m-Y"),"<br>","<br>";
				
					echo "Today is ",date("l"),"<br>","<br>";
				
					echo "Default Time is ",date("h:i:sa"),"<br>","<br>";
				
					date_default_timezone_set("Asia/Dhaka"); 
					echo "Bangladesh Time is ",date("h:i:sa");
				

				?>
				
				
			</section>
			
<?php include 'Linking File/13. Footer.php'?>