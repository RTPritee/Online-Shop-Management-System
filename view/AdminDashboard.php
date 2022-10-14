<!DOCTYPE html>    
<html>    
<head>    
    <title>Admin Dashboard Form</title>       
</head> 
<style>
	.a {
       background-color:#ffcc00;
       color: black;
       padding: 10px;
       text-align:center;
	   font-family:'courier';
	   font-size:310%;
	 }
	.login
	{  
        width: 320px;  
        margin: auto;  
        margin: 15 0 0 350px;  
        padding: 30px;  
        background-color: #98FB98;  
        border-radius: 15px ;
		border-style:groove;
		border-color:black;	 
	}   
	.up
	{  
    width: 350px;  
    height: 30px;  
	font-family: 'courier'; 	
	}   
	.log{  
    width: 100px;  
    height: 30px;  
    border: outset;  
    border-radius: 10px;  
    padding-left: 7px;  
    color:black;
    border-color:#3CB371;		
	}  


</style>   
<body style = "background : #eeffcc">   
<h4 style="text-align:right" ><a href="http://localhost/WebTecLab/Project/view/webpage.php">Home</a>&nbsp;&nbsp;&nbsp;<a href="http://localhost/WebTecLab/Project/controllar/Login.php">Log Out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
<h3 class = "a"> <b>Welcome Admin</b></h3>
   <?php
   if(isset($_POST["lClick"])){						
header("Location:http://localhost/WebTecLab/Project/controllar/Admin.php");
}
?>

    <div class="login"> 
    <center><img width="100px" height="100px" src="http://localhost/WebTecLab/Project/image/man.png" alt = "User Image"></center>	
	<center> <h3>My Profile</h2></center>
    <form method="post" action="http://localhost/WebTecLab/Project/controllar/Admin.php">  
	<table>
			
		<tr>
			<td><b>Name</b><br></td>
			<td>:<br></td>
			<td class="up">Jonson Admin</td>
		</tr>
		<tr>
			<td><b>Email</b><br></td>
			<td>:<br></td>
			<td class="up">jonsonadmin@gmail.com</td>
		</tr>
		<tr>
			<td><b>Gender</b><br></td>
			<td>:<br></td>
			<td class="up">Male</td>
		</tr>
		<tr>
			<td><b>Blood Group</b><br></td>
			<td>:<br></td>
			<td class="up">O+</td>
		</tr>
		<tr>
			<td><b>Date of Birth</b><br></td>
			<td>:<br></td>
			<td class="up">10/10/1999</td>
		</tr>
		<tr>
			<td><b>Address</b><br></td>
			<td>:<br></td>
			<td class="up">477 8th St Imperial Beach, California(CA), 91932</td>
		</tr>
	
		</table>
		<br>
		<center><input type="submit" class="log" name="lClick" value="Edit Item"></center><br>
    </form> 
    <form method="post" action="http://localhost/WebTecLab/Project/model/StaffList.php">  	
        <center><input type="submit" class="log" name="lClick" value="Edit Staff" ></center>	
	<br></form> 
	   <form method="post" action="http://localhost/WebTecLab/Project/view/UserInfoForAdminShow.php">  	
        <center><input type="submit" class="log" name="UClick" value="Edit Buyer" ></center>	
	</form> 
</div>    
</body>    
</html>  