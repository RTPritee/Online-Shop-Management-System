<!DOCTYPE html>    
<html>    
<head>    
    <title>Edit Staff List Form</title>       
</head> 
<style>
.table,th,td {
        font-family: arial, sans-serif;
        width: 5000px;
		height: 20px; 
		border:1px solid black;
        border-collapse:collapse;
        }
</style>   
<body style = "background : #eeffcc"> 
 
<?php
$name="Rehnuma";
$joinday="";
$salary="5000";
$shift="Morning";
$bonus="500";
$servername="localhost";
$username="root";
$password="";
$dbname="staffinfo";
$conn=new mysqli($servername,$username,$password,$dbname);//creating the connection


if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
else
{
	?>
	<script> alert ('Successfully connection created!'); </script>
<?php
//echo "Successfully connection created!"."<br/>";
/*
if (isset ($_POST['submit'])){
  if (!empty($_POST['name']) && !empty($_POST['joinday']) && !empty($_POST['salary']) && !empty($_POST['shift']) && !empty($_POST['bonus'])) {	
             $name = $_POST['name'];
             $joinday = $_POST['joinday'];
             $salary = $_POST['salary'];
             $shift = $_POST['shift'];
             $bonus = $_POST['bonus'];
 */
$q="INSERT INTO staffinfo(name,joinningdate,salary,shift,bonus) VALUES('".$name."','".$joinday."','".$salary."','".$shift."','".$bonus."')";
//echo $q;
//$q="INSERT INTO staffinfo(name,joinningdate,salary,shift,bonus) VALUES('$name','$joinday','$salary','$shift','$bonus')";

$result=$conn->query($q);
if ($result)
	echo "Insertion Successfull";
else 
	echo "Error occured";
 // }
  //else 
	 // echo "Require all!";
//}
}
$conn->close();
?>
 
<?php
   if (isset ($_POST['delete'])){
     mysqli_query($conn, "DELETE FROM staffinfo WHERE name = '$_POST[name]'" ) or die (mysql_error($conn));
   }
	   
?>
 
<h4 style="text-align:right" ><a href="http://localhost/WebTecLab/Project/view/StaffListEdit.php">Back</a>&nbsp;&nbsp;&nbsp;<a href="http://localhost/WebTecLab/Project/view/AdminDashboard.php">My Profile</a>&nbsp;&nbsp;&nbsp;<a href="http://localhost/WebTecLab/Project/controllar/Login.php">Log Out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
<center><h3 style = "color : red"> <b>Add Staff</b></h3></center>

<table>
			
			<tr>
			<td>Name</td>
			
			<td>
				<input type="text" id="name"  name="name"><br>
			</td>
		</tr>
		
			<tr>
			<td>Joinning Date</td>
			
			<td>
			       
				<select name="joinday" id="joinday">
				    
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
			
				<select name="joinday" id="joinday">
				  
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
		
				<select name="joinday" id="joinday">
				  
					  <option value="">Year</option>
					  <option value="">----</option>
					  <option value="2021">2021</option>
					  <option value="2020">2020</option>
					  <option value="2019">2019</option>
					  <option value="2018">2018</option>
					  <option value="2017">2017</option>
					  <option value="2016">2016</option>
					  <option value="2015">2015</option>
					  <option value="2014">2014</option>
					  <option value="2013">2013</option>
					  <option value="2012">2012</option>
					  <option value="2011">2011</option>
					  <option value="2010">2010</option>
					  <option value="2009">2009</option>
					  <option value="2008">2008</option>
					  <option value="2007">2007</option>
					  <option value="2006">2006</option>
					  <option value="2005">2005</option>
				</select><br>
			</td>
		</tr>
			<tr>
			<td>Salary</td>
			
			<td>
				<input type="text"  id="salary" name="salary"><br>
			</td>
		</tr>
		<tr>
			<td>Shift</td>
			
			<td>
				 <select name="shift" id="shift">
			    <option value="">---</option>  
				<option value="1">Morning</option>
				<option value="2">Day</option>
			</td>
		</tr>
		<tr>
			<td>Bonus</td>
			
			<td>
				<input type="text"  id="bonus" name="bonus"><br>
			</td>
		</tr>
		</table>
 <form method="post" action="http://localhost/WebTecLab/Project/controllar/ConAddStaffforAdminShow.php">
 <input  style ="color:blue"type="submit" name="submit"  value="Confirm" > 
 </form> <br> 
 <input  style ="color:red"type="delete" name="delete"  value="Write the name" > <br>
</body>    
</html> 