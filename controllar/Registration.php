<!DOCTYPE html>    
<html>    
<head>
    <link rel="stylesheet" href="http://localhost/WebTecLab/Project/view/registerDesign.css">    
    <title>Registration Form</title>     
</head>	 	
<body style = "background : #eeffcc">  
    <br><br/>
	<?php
//$id ="1004";
$UserType ="Staff";
$name="tom";
$email="raju@gmail.com";
$gender="Male";
$pass="34456612";
$Cnfpass="34456612";
$Dob="1996-12-12";
$bloodgrp="A+";
$add="abchfedsh";
$servername="localhost";
$username="root";
$password="";
$dbname="registration";
$conn=new mysqli($servername,$username,$password,$dbname);//creating the connection
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
else
{
//echo "Successfully connection created!"."<br/>";
?>
<script> alert ('Connection Successfull!'); </script>
<?php
$q="INSERT INTO registration(username,email,gender,dateofbirth,bloodgroup,address,password,usertype) VALUES('".$name."','".$email."','".$gender."','".$Dob."','".$bloodgrp."','".$add."','".$pass."','".$UserType."')";
//echo $q;
$result=$conn->query($q);
if ($result)
{//echo "Successfully Created";
?>
<script> alert ('Successfull!'); </script>
<?php
}
 else 
	//echo "Error occured";
?>
<script> alert ('Give data!'); </script>
<?php
}
$conn->close();
?>
<?php
$n="";
$e="";
$dd="";
$p="";
$cp="";
$g="";
$b="";
$a="";
$ut="";
if(isset($_POST["btnClick"])){
$n="";
$e="";
$dd="";
$p="";
$cp="";
$g="";
$b="";
$a="";
$ut="";
if(isset($_POST["username"]))
$n=$_POST["username"];
if(isset($_POST["email"]))
$e=$_POST["email"];
if($n!="" && $e!="")
if(isset($_POST["dob-day"]))
$dd=$_POST["dob-day"];
if(isset($_POST["password"]))
$p=$_POST["password"];
if(isset($_POST["confirmpassword"]))
$cp=$_POST["confirmpassword"];
if(isset($_POST["gender"]))
$g=$_POST["gender"];
if(isset($_POST["bgroup"]))
$b=$_POST["bgroup"];
if(isset($_POST["address"]))
$a=$_POST["address"];
if(isset($_POST["usertype"]))
$ut=$_POST["usertype"];

if($p!=$cp)
echo "<<span style='color:#e62e00'><center>Password and Confirm Password does not match</center></span><br/>";
if($n!="" && $e!="" && $dd!=""&& $p!=""&& $cp!=""&& $g!=""&& $b!=""&& $a!="" && $ut!="")
						
header("Location:Login.php");
}
?>
    <div class="register">  
			
    <form action="#" method="post">
		<div>
		<center><h4>Registration</h4></center>
		<table>
			
			<tr>
			<td>Username</td>
			<td>:</td>
			<td>
				<input type="text" id="username"  name="username"><br>
					<?php
						if($n=="")
						echo "<span style='color:red'>Username Required</span><br/>";
					?>
			</td>
		</tr>
		<tr>
			<td>UserType</td>
			<td>:</td>
			<td>
				 <select name="usertype" id="UserType">
			    <option value="">---</option>  
				<option value="1">Buyer</option>
				<option value="2">Staff</option>
					<?php
						if($ut=="")
						echo "<span style='color:red'>Usertype Required</span><br/>";
					?>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>
				<input type="email"  id="email" name="email"><br>
				<?php
						if($e=="")
						echo "<span style='color:red'>Email Required</span><br/>";
				?>
			</td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td>:</td>
			<td>
			       
				<select name="dob-day" id="dob-day">
				    
					  <option value="">Day</option>
					  <option value="">---</option>
					  <option value="01">01</option>
					  <option value="02">02</option>
					  <option value="03">03</option>
					  <option value="04">04</option>
					  <option value="05">05</option>
					  <option value="06">06</option>
					  <option value="07">07</option>
					  <option value="08">08</option>
					  <option value="09">09</option>
					  <option value="10">10</option>
					  <option value="11">11</option>
					  <option value="12">12</option>
					  <option value="13">13</option>
					  <option value="14">14</option>
					  <option value="15">15</option>
					  <option value="16">16</option>
					  <option value="17">17</option>
					  <option value="18">18</option>
					  <option value="19">19</option>
					  <option value="20">20</option>
					  <option value="21">21</option>
					  <option value="22">22</option>
					  <option value="23">23</option>
					  <option value="24">24</option>
					  <option value="25">25</option>
					  <option value="26">26</option>
					  <option value="27">27</option>
					  <option value="28">28</option>
					  <option value="29">29</option>
					  <option value="30">30</option>
					  <option value="31">31</option>
                 </select>
			
				<select name="dob-month" id="dob-month">
				  
					  <option value="">Month</option>
					  <option value="">-----</option>
					  <option value="01">January</option>
					  <option value="02">February</option>
					  <option value="03">March</option>
					  <option value="04">April</option>
					  <option value="05">May</option>
					  <option value="06">June</option>
					  <option value="07">July</option>
					  <option value="08">August</option>
					  <option value="09">September</option>
					  <option value="10">October</option>
					  <option value="11">November</option>
					  <option value="12">December</option>
                </select>
		
				<select name="dob-year" id="dob-year">
				  
					  <option value="">Year</option>
					  <option value="">----</option>
					  <option value="2012">2012</option>
					  <option value="2011">2011</option>
					  <option value="2010">2010</option>
					  <option value="2009">2009</option>
					  <option value="2008">2008</option>
					  <option value="2007">2007</option>
					  <option value="2006">2006</option>
					  <option value="2005">2005</option>
					  <option value="2004">2004</option>
					  <option value="2003">2003</option>
					  <option value="2002">2002</option>
					  <option value="2001">2001</option>
					  <option value="2000">2000</option>
					  <option value="1999">1999</option>
					  <option value="1998">1998</option>
					  <option value="1997">1997</option>
					  <option value="1996">1996</option>
					  <option value="1995">1995</option>
					  <option value="1994">1994</option>
					  <option value="1993">1993</option>
					  <option value="1992">1992</option>
					  <option value="1991">1991</option>
					  <option value="1990">1990</option>
					  <option value="1989">1989</option>
					  <option value="1988">1988</option>
					  <option value="1987">1987</option>
					  <option value="1986">1986</option>
					  <option value="1985">1985</option>
					  <option value="1984">1984</option>
					  <option value="1983">1983</option>
					  <option value="1982">1982</option>
					  <option value="1981">1981</option>
					  <option value="1980">1980</option>
					  <option value="1979">1979</option>
					  <option value="1978">1978</option>
					  <option value="1977">1977</option>
					  <option value="1976">1976</option>
					  <option value="1975">1975</option>
					  <option value="1974">1974</option>
					  <option value="1973">1973</option>
					  <option value="1972">1972</option>
					  <option value="1971">1971</option>
					  <option value="1970">1970</option>
					  <option value="1969">1969</option>
					  <option value="1968">1968</option>
					  <option value="1967">1967</option>
					  <option value="1966">1966</option>
					  <option value="1965">1965</option>
					  <option value="1964">1964</option>
					  <option value="1963">1963</option>
					  <option value="1962">1962</option>
					  <option value="1961">1961</option>
					  <option value="1960">1960</option>
					  <option value="1959">1959</option>
					  <option value="1958">1958</option>
					  <option value="1957">1957</option>
					  <option value="1956">1956</option>
					  <option value="1955">1955</option>
				</select><br>
				<?php
						if($dd=="")
						echo "<span style='color:red'> Date of Birth Required</span><br/>";
				?>
			</td>
		</tr>
		
		<tr>
			<td>Password </td>
			<td>:</td>
			<td>
				<input type="password" id="pass"  name="password"  minlength="8" ><br>
				    <?php
						if($p=="")
						echo "<span style='color:red'>Password Required</span><br/>";
					?>
			</td>
		</tr>
		
		<tr>
			<td>Confirm Password</td>
			<td>:</td>
			<td>
				<input type="password" id="cpass"  name="confirmpassword"><br>
				    <?php
						if($cp=="" && $cp==$p)
						echo "<span style='color:red'>Confirm password Required</span><br/>";
					?>
			</td>
		</tr>
		
		<tr>
			<td>Gender</td>
			<td>:</td>
			<td>
				<input type="radio" name="gender" value="Male"> &nbsp; Male
				<input type="radio" name="gender" value="Female"> &nbsp; Female
				<input type="radio" name="gender" value="Other"> &nbsp; Other <br>
				    <?php
						if($g=="")
						echo "<span style='color:red'>Gender Required</span><br/>";
					?>
			</td>
		</tr>
		
		<td>Blood Group</td>
			<td>:</td>
			<td>
			   <select name="bgroup" id="bgroup">
			    <option value="">---</option>  
				<option value="1">A+</option>
				<option value="2">A-</option>
				<option value="3">B+</option>
				<option value="4">B-</option>
				<option value="5">AB+</option>
				<option value="6">AB-</option>
				<option value="7">O+</option>
				<option value="8">O-</option>
				</select><br>
				<?php
						if($b=="")
						echo "<span style='color:red'>Blood Group Required</span><br/>";
					?>
			</td>
		</tr>
		
		<tr>
			<td>Address</td>
			<td>:</td>
			<td>
				<textarea name="address" rows="2" cols="20"></textarea><br>
				   <?php
						if($a=="")
						echo "<span style='color:red'>Address Required</span><br/>";
					?>
			</td>
		</tr>
		</table>
		<br>
		<center><input type="submit" class="register_button" name="btnClick" value="Register"></center>
		<center><p><b>Already a user?</b><a href="Login.php"<b>Log In</b></p></center>
		</div>
	
	</form> 
</div>   
<br> <br> <br><br>
</body>    
</html>     