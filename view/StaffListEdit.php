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
<h4 style="text-align:right" ><a href="webpage.php">Home</a>&nbsp;&nbsp;&nbsp;<a href="AdminDashboard.php">My Profile</a>&nbsp;&nbsp;&nbsp;<a href="http://localhost/WebTecLab/Project/controllar/Login.php">Log Out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
<center><h3 style = "color : red"> <b>Staff List</b></h3></center>
<table class=" table,th,td" >
<tr>
    <th>Staff Id</th>
    <th>Name</th>
    <th>JoinningDate</th>
	<th>Salary</th>
	<th>Shift</th>
	<th>Bonus</th>
  </tr>
  <tr>
    <td>001</td>
	<td>Tom</td>
    <td>8/4/2020</td>
	 <td><input type="text" id="salary"  name="salary" value ="3000"></td>
	 <td>Morning</td>
    <td><input type="text" id="salary"  name="salary" value ="900"></td>
  </tr>
  <tr>
     <td>002</td>
	<td>Bruce</td>
    <td>4/4/2020</td>
	 <td><input type="text" id="salary"  name="salary" value ="3000"></td>
	 <td>Morning</td>
    <td><input type="text" id="salary"  name="salary" value ="1000"></td>
  </tr>
  <tr>
     <td>003</td>
	<td>Lily</td>
    <td>7/4/2020</td>
	 <td><input type="text" id="salary"  name="salary" value ="3000"></td>
	 <td>Morning</td>
    <td><input type="text" id="salary"  name="salary" value ="600"></td>
  </tr>
  <tr>
     <td>004</td>
	<td>Jack</td>
    <td>6/4/2020</td>
	 <td><input type="text" id="salary"  name="salary" value ="4000"></td>
	 <td>Day</td>
    <td><input type="text" id="salary"  name="salary" value ="800"></td>
  </tr>
  <tr>
     <td>005</td>
	<td>Harry</td>
    <td>3/5/2020</td>
	 <td><input type="text" id="salary"  name="salary" value ="4000"></td>
	 <td>Day</td>
    <td><input type="text" id="salary"  name="salary" value ="1000"></td>
  </tr>
  <tr>
     <td>006</td>
	<td>Harlin</td>
    <td>8/5/2020</td>
	 <td><input type="text" id="salary"  name="salary" value ="3000"></td>
	 <td>Day</td>
    <td><input type="text" id="salary"  name="salary" value ="570"></td>
  </tr>
</table><br>
 <form method="post" action="http://localhost/WebTecLab/Project/controllar/ConAddStaffforAdmin.php">
 <input  style ="color:blue"type="submit" name="AClick"  value="Add Staff" > </form> 
<br><form method="post" action="http://localhost/WebTecLab/Project/model/StaffList.php">  	
   <input type="submit" name="lClick" value="Confirm Edit" >
</form>
</body>    
</html> 