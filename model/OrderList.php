<!DOCTYPE html>    
<html>    
<head>    
    <title>Staff List Form</title>       
</head>   
<body style = "background : #eeffcc">   

<center><h3 class = "a" style = "color : red"> <b>Order List</b></h3></center>
<?php
$jsondata=file_get_contents("Order.json");
$data=json_decode($jsondata,true);
echo '<h3> Order information </h3>';
$a="";
foreach($data['book'] as $b)
{
	    $a.="".$b['no']."<br/>";
	    $a.="Transaction ID: ".$b['id']."<br/>";
		$a.="Transaction Date: ".$b['date']."<br/>";
		$a.="Customer Name: ".$b['name']."<br/>";
		$a.="Total Cost: ".$b['cost']."<br/>";
		$a.="Status: ".$b['stat']."<br/><br/>";
}
echo $a;
?>
<form method="post" action="http://localhost/WebTecLab/Project/view/Staff.php">  	
   <input type="submit" name="lClick" value="Back" >
</form>
</body>    
</html> 

