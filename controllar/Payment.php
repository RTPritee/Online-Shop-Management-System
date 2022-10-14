<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment</title>

</head>
<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Times New Roman';
   
}

body{
  background: #eeffcc;
  margin: 0 10px;
}

.payment{
  background: #ffff99;;
  max-width: 360px;
  margin: 80px auto;
  height: auto;
  padding: 35px;
  padding-top: 70px;
  border-radius: 5px;
  position: relative;
  border-style:groove;
  border-color:black;
}

.back{
width: 45px;
height: 25px;
border: outset;
border-radius: 10px;
padding-left: 7px;
color:black;
float:right;
border-color:#ffcc66;
font-family: 'Times New Roman';  
	font-size:100%;
}

	.btn{  
    width: 100px;  
    height: 30px;  
    border: outset;  
    border-radius: 10px;  
    padding-left: 7px;  
    color:black;
    border-color:#ffcc66;		
	}  
</style>
<body>
	<br>
&nbsp;&nbsp;<a href="http://localhost/WebTecLab/Project/view/CartList.php" class="back">Back</a>&nbsp;&nbsp;
 <?php
$b="";
$c="";
$d="";
$e="";
   if(isset($_POST["lClick"])){
$b="";
$c="";
$d="";
$e="";
if(isset($_POST["cardholder"]))
$b=$_POST["cardholder"];
if(isset($_POST["typeofcard"]))
$c=$_POST["typeofcard"];
if(isset($_POST["cardnumber"]))
$d=$_POST["cardnumber"];
if(isset($_POST["expiredate"]))
$e=$_POST["expiredate"];

if($b=="" && $c=="" && $d=="" && $e=="")
echo "<center><span style='color:red'>Please fill up the requirements.</span></center>";	
if($b!="" && $c!="" && $d!="" && $e!="")
header("Location:http://localhost/WebTecLab/Project/view/PaymentInfo.php");
}

?>
  <div>
  <div class="payment">
    <center> <h3>Payment</h2></center><b3><br>
    <form action="#" method="post" >    
	<table>
			<tr>
			<td><b>Card Holder</b><br><br></td>
			<td>:<br><br></td>
			<td class="up">
				<input type="text" id="name"  name="cardholder">
				<?php
						if($b=="")
						echo "<span style='color:red'>Required.</span><br/>";
				?>
			</td>
		</tr>
		<tr>
			<td><b>Type of Card</b><br><br></td>
			<td>:<br></td>
			<td class="up">
				<select id="card" name="typeofcard">
			    <option value="">---</option>  
				<option value="1">Credit</option>
				<option value="2">Debit</option>
				<option value="3">PayPal</option>
				<option value="3">Bkash</option>
				</select>
				<?php
						if($c=="")
						echo "<span style='color:red'>Required.</span>";
				?>
			</td>
		</tr>
		<tr>
			<td><b>Card Number</b><br><br></td>
			<td>:<br><br></td>
			<td class="up">
				<input type="text" id="number"  name="cardnumber"  minlength="8" >
				<?php
						if($d=="")
						echo "<span style='color:red'>Required.</span><br/>";
				?>
			</td>
		</tr>
		<tr>
			<td><b>Expire Date</b><br></td>
			<td>:<br><br></td>
			<td class="up">
				<input type="date" name="expiredate" placeholder="dd-mm-yyyy" value=""min="2021-10-26" max="2021-12-30">
				<?php
						if($e=="")
						echo "<span style='color:red'>Required.</span><br/>";
				?>
			</td>
		</tr>
		</table>
		</table>       
		<br>
        <center><input type="submit" class="btn" name="lClick" value="Confirm Order"></center>
</form>
</body>
</html>