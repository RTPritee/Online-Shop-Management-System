<!DOCTYPE html>    
<html>    
<head>    
    <title>Staff List Form</title>       
</head>   
<body style = "background : #eeffcc">   
<h4 style="text-align:right" ><a href="http://localhost/WebTecLab/Project/view/webpage.php">Home</a>&nbsp;&nbsp;&nbsp;<a href="http://localhost/WebTecLab/Project/view/AdminDashboard.php">My Profile</a>&nbsp;&nbsp;&nbsp;<a href="http://localhost/WebTecLab/Project/controllar/Login.php">Log Out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
<center><h3 class = "a" style = "color : red"> <b>Staff List</b></h3></center>
<?php
$jsondata = file_get_contents("StaffListShow.json");
$data = json_decode($jsondata,true);
echo '<h3>Satff Information</h3>';
$a="";
foreach ($data['staff'] as $b)
{
    $a.= "Staff_ID---> ".$b['id']."<br/>";
    $a.= "Name--->".$b['name']."<br/>";
    $a.= "JoinningDate---> ".$b['joinningdate']."<br/>";
	$a.= "Salary--->".$b['salary']."<br/>";
	$a.= "Shift--->".$b['shift']."<br/>";
	$a.= "Bonus--->".$b['bonus']."<br/>";
}
echo $a;
?> 
<form method="post" action="http://localhost/WebTecLab/Project/view/StaffListEdit.php">  	
   <input type="submit" name="lClick" value="Edit" >
</form>
</body>    
</html> 

