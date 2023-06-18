<?php

	$fonts="sans-serif";
	$color="#fff";
	$bgcolor="blue";

?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title>Form</title>
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
            #login{
                width: 45%;
                padding: 20px;
                border: 1px solid red;
                background: skyblue;
            }
            .formtbl{
                display: inline-block;
            }
            .tblone{
                float: right;
                color: blue;
                width: 45%;
                border: 1px solid red;
                margin-top: -176px;
                padding: 5px 10px;
            }
            .tblone tr:nth-child(n){
                background: orange;
            }
			
		</style>
	</head>
	
	<body>
		
		<div class="main">
		
			<section class="Header">
				<h2><?php echo "Form"; ?></h2>
			</section>
			
			
			<section class="PHP-content">
			
				
                    <!-- Form  -->

                    <hr> 1. Getting values from a Text Box with PHP<hr><br>

                <form action="Form  ( 1 to 10 ) .php" method="post" name="myform" id="myform">
                    <table>
                        <tr>
                            <td>Username : </td>
                            <td><input type="text" name="username" required="1" ></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Sent">
                                <input type="reset" value="Clear">
                            </td>
                        </tr>
                    </table>
                </form>

               
                <?php
                
                    if(isset($_POST['username'])){
                        $name = $_POST['username']; 
                        echo "User Name : ".$name;
                    }   
                
                ?>
               		 
                <br><br><hr> 2. Getting values from a Text Box with JavaScript<hr><br>


                <form action="" method="post" name="myform" id="myform" onsubmit="formFunction(); return false;">
                    <table>
                        <tr>
                            <td>Username : </td>
                            <td><input type="text" name="username2" required="1" ></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Sent">
                                <input type="reset" value="Clear">
                            </td>
                        </tr>
                    </table>
                </form>

                <div id="output"></div>
                
           
                <script>
                    function formFunction(){
                    	var name = document.myform.username2.value;
                    	var shwoData = "Username :"+name;
                    	document.getElementById('output').ineerHTML = shwoData;
                    }
                </script>
                

                <br><br><hr> 3. Getting values from Radio Button in PHP <hr><br>

                
                <form action="Form  ( 1 to 10 ) .php" method="post" name="myform" id="myform">
                    <table>
                        <tr>
                            <td>Gender : </td>
                            <td>
                                <input type="radio" name="gender" value="Male" > Male
                                <input type="radio" name="gender" value="Female"> Female
                                <input type="radio" name="gender" value="Custom"> Custom
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Sent">
                                <input type="reset" value="Clear">
                            </td>
                        </tr>
                    </table>
                </form>



                <?php

   				  if (isset($_POST['gender'])) {
                  	$gender = $_POST['gender'];
                      if ($gender == "Male") {
                      	 echo "User Gender is : ".$gender;                  
                      } else if ($gender == "Female") {
                      	 echo "User Gender is : ".$gender;               
                      } else {
                         echo "User Gender is : ".$gender;         
                      }
                    }         
                ?>

                <br><br><hr> 4. Getting values from Radio Button in JavaScript <hr><br>

                                
                <form action="" method="post" name="myform" id="myform" onsubmit="clickHere(); return false;">
                    <table>
                        <tr>
                            <td>Gender : </td>
                            <td>
                                <input type="radio" name="gender" value="Male" > Male
                                <input type="radio" name="gender" value="Female"> Female
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Sent">
                                <input type="reset" value="Clear">
                            </td>
                        </tr>
                    </table>
                </form>
                
                <p di="show"></p>
                
                <script>
                    function clickHere(){
                    	var genderlength = document.myform.gender.lenght;

                    	for (var i = 0; i<genderlength; i++){
                    		var checkvalue = document.myform.gender[i].checked;
                    		if (checkvalue) {
                    			var checkedResult = document.myform.gender.value;
                    		}
                    	}

                    	var shwoData = "Gender :"+checkedResult;
                    	document.getElementById('show').ineerHTML = shwoData;
                    }
                </script>

                
                <br><br><hr> 5. Get Multiple Checkbox Values in PHP <hr><br>

                                
                <form action="Form  ( 1 to 10 ) .php" method="post" name="myform" id="myform">
                    <table>
                        <tr>
                            <td>Language : </td>
                            <td>
                                <input type="checkbox" name="code[]" value="PHP" checked > PHP
                                <input type="checkbox" name="code[]" value="JAVA"> JAVA
                                <input type="checkbox" name="code[]" value="C"> C
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Sent">
                                <input type="reset" value="Clear">
                            </td>
                        </tr>
                    </table>
                </form>
                
                
                <?php

   				  if (isset($_POST['submit'])) {
                  	$lang = $_POST['code'];
                      	 echo "Ueser Language is : ";                  
                      foreach ($lang as $key => $value) {
                      	echo $value.", ";
                      }
                    }         
                ?>
                
                
                <br><br><hr> 6. Get Multiple Checkbox Values in JavaScript <hr><br>

                                
                <form action="" method="post" name="myform" id="myform" onsubmit="MultiCheck(); return false;">
                    <table>
                        <tr>
                            <td>Language : </td>
                            <td>
                                <input type="checkbox" name="code" value="PHP" > PHP
                                <input type="checkbox" name="code" value="JAVA"> JAVA
                                <input type="checkbox" name="code" value="C"> C
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Sent">
                                <input type="reset" value="Clear">
                            </td>
                        </tr>
                    </table>
                </form>
                
                <p di="state"></p>
                
                <script>
                    function MultiCheck(){
                    	var length = document.myform.code.lenght;
                    	var result = " ";
                    	for (var i = 0; i<length; i++) {
                    		var checkvalue = document.myform.code[i].checked;
                    		if (checkvalue) {
                    			var result += document.myform.code[i].value+", ";
                    		}
                    	}

                    	var shwoData = "Gender :"+result;
                    	document.getElementById('state').ineerHTML = shwoData;
                    }
                </script>

                <br><br><hr> 7. Get Selected Option Value in PHP <hr><br>

                                
                <form action="Form  ( 1 to 10 ) .php" method="post" name="myform" id="myform">
                    <table>
                        <tr>
                            <td>Language : </td>
                            <td>
                                <select name="code">
                                    <option value="HTML">HTML</option>
                                    <option value="CSS">CSS</option>
                                    <option value="C">C</option>
                                    <option value="C++">C++</option>
                                    <option value="PHP">PHP</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Sent">
                                <input type="reset" value="Clear">
                            </td>
                        </tr>
                    </table>
                </form>
                
                
                <?php

   				  if(isset($_POST['submit'])){
   				     $select= $_POST['code'];
                      echo "You Select " .$select;
                  }
                      
                ?>
                
                 <br><br><hr> 8. Get Selected Option Value in JavaScript <hr><br>

                                
                <form action="" method="post" name="myform" id="myform" onsubmit="selectopt(); return false">
                    <table>
                        <tr>
                            <td>Language : </td>
                            <td>
                                <select name="code">
                                    <option value="HTML">HTML</option>
                                    <option value="CSS">CSS</option>
                                    <option value="C">C</option>
                                    <option value="C++">C++</option>
                                    <option value="PHP">PHP</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Sent">
                                <input type="reset" value="Clear">
                            </td>
                        </tr>
                    </table>
                </form>
                
                <p id="show"></p>

                <script>
                 function selectopt(){
                  	var index = document.myform.code.selectedIndex;
                  	var value = document.myform.code.options[index].value;
                   
                 	}

                	var shwoData = "Selected is :"+value;
                	document.getElementById('show').ineerHTML = shwoData;
                 }
                </script>
                
                
                <br><br><hr> 9. Get data from a data table in JavaScript <hr><br>

                 <form action="" method="post" name="myform" id="login" onsubmit="login(); return false">
                    <table class="formtbl">
                        <tr>
                            <td>Name : </td>
                            <td><input type="text" name="name" required="1"> </td>
                        </tr> 
                        <tr>
                            <td>Gender : </td>
                            <td>
                            <input type="radio" name="gender" value="Male">Male 
                            <input type="radio" name="gender" value="Female">Female 
                            </td>
                        </tr>
                        <tr>
                            <td>Department : </td>
                            <td>
                                <input type="checkbox" name="dep" value="EEE" > EEE
                                <input type="checkbox" name="dep" value="CSE"> CSE
                                <input type="checkbox" name="dep" value="CE"> CE
                            </td>
                        </tr>
                        <tr>
                            <td>Language : </td>
                            <td>
                                <select name="code" required="1">
                                    <option value="HTML">Select One</option>
                                    <option value="CSS">CSS</option>
                                    <option value="C">C</option>
                                    <option value="C++">C++</option>
                                    <option value="PHP">PHP</option>
                                </select>
                            </td>
                            
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Sent">
                                <input type="reset" value="Clear">
                            </td>
                        </tr>
                    </table>
                </form>
                
                 <script>
                     function login(){
                        var getname = document.myform.name.value;
                        document.getElementById('showname').ineerHTML = getname;

                        var genderlength = document.myform.gender.lenght;
                        for (var i = 0;i<genderlength; i++ ){
                        	var checkgender = document.myform.gender[i].checked;
                        	if (checkgender) {
                        		 gendervalue = document.myform.gender[i].value;
                        	}
                        	
                        }

                        document.getElementById('showgender').ineerHTML = gendervalue;

						var deplength = document.myform.dep.lenght;
                        for (var i = 0;i<deplength; i++){
                        	var checkgender = document.myform.dep[i].checked;
                        	if (checkgender) {
                        		 depvalue = document.myform.dep[i].value;
                        	}
                        	
                        }

                        document.getElementById('showdep').ineerHTML = depvalue;

                        var index = document.myform.code.selectedIndex;
                        var codevalue = document.myform.code.option[index].value;
                        document.getElementById('codevalue').ineerHTML = codevalue;

                    } 

                    
                </script>
                
                <table class="tblone">
                    <tr>
                        <td align="center">Input</td>
                        <td align="center">Output</td>
                    </tr>
                    
                    <tr>
                        <td>Name :</td>
                        <td><span id="showname"></span></td>
                    </tr>
                    
                    <tr>
                        <td>Gender :</td>
                        <td><span id="showgender"></span></td>
                    </tr>
                    
                    <tr>
                        <td>Department :</td>
                        <td><span id="showdep"></span></td>
                    </tr>
                    
                    <tr>
                        <td>Coder :</td>
                        <td><span id="codevalue"></span></td>
                    </tr>
                    
                </table>
                  
                
                <br><br><hr> 10. Get data from a data table in PHP <hr><br>

                 <form action="" method="post" name="myform" id="login">
                    <table class="formtbl">
                        <tr>
                            <td>Name : </td>
                            <td><input type="text" name="name" required="1"> </td>
                        </tr> 
                        <tr>
                            <td>Gender : </td>
                            <td>
                            <input type="radio" name="gender" value="Male">Male 
                            <input type="radio" name="gender" value="Female">Female 
                            </td>
                        </tr>
                        <tr>
                            <td>Department : </td>
                            <td>
                                <input type="checkbox" name="dep" value="EEE" > EEE
                                <input type="checkbox" name="dep" value="CSE"> CSE
                                <input type="checkbox" name="dep" value="CE"> CE
                            </td>
                        </tr>
                        <tr>
                            <td>Language : </td>
                            <td>
                                <select name="code" required="1">
                                    <option value="HTML">Select One</option>
                                    <option value="CSS">CSS</option>
                                    <option value="C">C</option>
                                    <option value="C++">C++</option>
                                    <option value="PHP">PHP</option>
                                </select>
                            </td>
                            
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Sent">
                                <input type="reset" value="Clear">
                            </td>
                        </tr>
                    </table>
                </form>
                
                 <?php

                 if (isset($_POST['submit'])) {
                  	$name = $_POST['name'];
                  	$gender = $_POST['gender'];
                  	$dep = $_POST['dep'];
                  	$code = $_POST['code'];
                      
                    }         

                 ?>
                
                <table class="tblone">
                    <tr>
                        <td align="center">Input</td>
                        <td align="center">Output</td>
                    </tr>
                    
                    <tr>
                        <td>Name :</td>
                        <td>
                       	    <?php echo $name; ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Gender :</td>
                        <td>
                            <?php 
                                if ($gender == "Male") {
                                	echo "Male"; 
                                }elseif($gender == "Female"){
                                    echo "Female"; 
                                } else{
                                	echo "Empty"; 
                                }
                            ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Department :</td>
                        <td>
                            <?php 
                                if ($dep == "EEE"){
                                	echo "EEE"; 
                                }elseif($dep == "CSE"){
                                    echo "CSE"; 
                                }elseif($dep == "CS"){
                                    echo "CS"; 
                                }else{
                                	echo "Empty"; 
                                }
                            ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Coder :</td>
                        <td>
                            <?php echo $code; ?>
                        </td>
                    </tr>
                    
                </table>
                
                
			</section>
			
			
			<section class="Footer">
				<h2><?php echo "lemon.kr92@gmail.com"; ?></h2>
			</section>
			
		</div>
		

	</body>
	
</html>
