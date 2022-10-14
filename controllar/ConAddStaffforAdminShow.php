<!DOCTYPE html>    
<html>    
<head>    
    <title>Show Staff List Form</title>       
</head> 
<style>
.table,th,td {
        font-family: arial, sans-serif;
        width: 5000px;
		height: 20px; 
		border:1px solid black;
        border-collapse:collapse;
        }
		th{
			background-color : #d96459;
			color: white;
		} 
</style>   
<body style = "background : #eeffcc">  
<center><h3 style = "color : red"> <b>List of all Staff</b></h3></center>
<table>
<tr>
<th>Staff ID</th>
<th>Name</th>
<th>Joinning Date</th>
<th>Salary</th>
<th>Shift</th>
<th>Bonus</th>

<?php
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
	<script> alert ('Successfully Added!'); </script>
<?php
//echo "Successfully connection created!"."<br/>";
$q="SELECT staffId,name,joinningdate,salary,shift,bonus FROM staffinfo";
$result=$conn->query($q);
if($result->num_rows > 0)
{

while($row=$result-> fetch_assoc())
{
	
 echo "<tr><td> ".$row["staffId"]."</td><td> ".$row["name"]."</td><td>".$row["joinningdate"]."</td><td>".$row["salary"]."</td><td>".$row["shift"]."</td><td>".$row["bonus"]."</td></tr>";

}
 echo "</table>";
}
else
echo "0 results";
}
$conn->close();
?>
</tr>
</table>
<br>
 <form method="post" action="http://localhost/WebTecLab/Project/view/AdminDashboard.php">
 <center><input  style ="color:blue"type="submit" name="submit"  value="Done" ></center> 
 </form> <br>
</body>    
</html> 