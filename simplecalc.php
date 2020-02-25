<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator </title>

	<style>
		
*{

margin:0;
padding: 0;
font-family: cursive;
font-weight: bold;
}
body{

	background: #FE774E;
}
.box h2{
	padding-left: 10px;
}

.box{
	
	border:0px solid black;
	width: 500px;
	height: 350px;
	margin: auto;
	position: relative;
	top: 160px;
	box-sizing:border-box; 
	border-radius: 30px;
	background: #191919;
}
.box .content1{

color:yellow;
width: 38%;
border: 0px solid red;
float: left;
line-height: 350px;
box-sizing: border-box;

}.box .content2{
float: right;
color:yellow;
height: auto;
width: 62%;
border: 0px solid red;
position: relative;
top:60px;
line-height: 30px;
box-sizing: border-box;

}
input {
  width: 80%;
  color:white;
 font-size:17px;
  padding: 8px 13px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color:black;
  
   border:1px solid black;
 border-radius:6px;
 
}
::placeholder
{
 color:white;
 opacity:0.7;
}
input[type=submit] {
  width: 33%;
  border:0px solid green;
  color:white;
 font-size:18px;
margin:10px 37px;
background-color:black;
  padding: 8px 13px;
  border-radius:19px;
  letter-spacing: 1px;
 transition:0.5s;
  box-sizing: border-box;
}
input[type="submit"]:hover,input[type="text"]:hover{
background-color:#43ba2b;
color:black;
}
form select
{ 
  color:white;
  font-size:15px;
  width:130px;
  background:#FE774E;
  margin: 5px 0 0 30px;
  padding:10px;
  border:0px solid black;
  border-radius:4px;
}
select:hover {
color: #444645;
background: #43ba2b;
}





	</style>
</head>
<body>
	

<div class="box">
	


	<div class="content1">
	<h2> PHP Calculator</h2>
	
	</div>
	<div class="content2">
			
			<form method="POST">
			
			<input type="text" name="num1" placeholder ="Enter First Number:
			">
			<br>
			<input type="text" name="num2" placeholder="Enter second Number:
			">
			<br>
			<select name="operation" autofocus required="" >
				<option value="add">ADDITION</option>
				<option value="sub">SUBTRACTION</option>
				<option value="multi">MULTIPLY</option>
				<option value="div">DIVISION</option>
				option
			</select>
			<input type="submit"
			 value="submit" name="submit">
			</form>
			<p>
			<?php

				if(isset($_POST['submit']))

				{
						$num1=$_POST['num1'];
						$num2=$_POST['num2'];
						$operation=$_POST['operation'];
						// echo "$num1   ";
						switch ($operation) {
							case 'add':
								
								$result=$num1+$num2;

								echo "ADDITION OF TWO NUMBER IS $result";
								break;
							case 'sub':
								
								$result=$num1-$num2;

								echo "SUBTRACTION OF TWO NUMBER IS $result";
								break;
							case 'multi':
								
								$result=$num1*$num2;

								echo "MULTIPLY OF TWO NUMBER IS $result";
								break;
							case 'div':
								
								$result=$num1/$num2;

								echo "DIVISION OF TWO NUMBER IS $result";
								break;
							
							default:

							echo "somthing went wrong ";
								

								break;
						}




				}

			?>
		</p>

			</div>
	
</div>


</body>
</html>