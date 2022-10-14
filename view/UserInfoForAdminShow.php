<?php
session_start();
?>
<html>
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
<h4 style="text-align:right" ><a href="http://localhost/WebTecLab/Project/view/webpage.php">Home</a>&nbsp;&nbsp;&nbsp;<a href="http://localhost/WebTecLab/Project/view/AdminDashboard.php">My Profile</a>&nbsp;&nbsp;&nbsp;<a href="http://localhost/WebTecLab/Project/controllar/Login.php">Log Out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
<center><h3 class = "a" style = "color : red"> <b>Buyer List</b></h3></center>
</body>
<body>
<table class=" table,th,td">
<tr>
<th><?php echo "Customer <br/>Name"?></th>
<th><?php echo "Transaction <br/> ID"?></th>
<th><?php echo "Transaction <br/> Date"?></th>
<th><?php echo "Total <br/> Cost"?></th>
<th><?php echo "Status"?></th>
</tr>
<tr>
<td><?php echo $_SESSION ["CustomerName"]?></td>
<td><?php echo $_SESSION ["TransactionID"]?></td>
<td><?php echo $_SESSION ["TransactionDate"]?></td>
<td><?php echo $_SESSION ["TotalCost"]?></td>
<td><?php echo $_SESSION ["Status"]?></td>
</tr>
<tr>
<td><?php echo $_SESSION ["CustomerName2"]?></td>
<td><?php echo $_SESSION ["TransactionID2"]?></td>
<td><?php echo $_SESSION ["TransactionDate2"]?></td>
<td><?php echo $_SESSION ["TotalCost2"]?></td>
<td><?php echo $_SESSION ["Status2"]?></td>
</tr>
<tr>
<td><?php echo $_SESSION ["CustomerName3"]?></td>
<td><?php echo $_SESSION ["TransactionID3"]?></td>
<td><?php echo $_SESSION ["TransactionDate3"]?></td>
<td><?php echo $_SESSION ["TotalCost3"]?></td>
<td><?php echo $_SESSION ["Status3"]?></td>
</tr>
<tr>
<td><?php echo $_SESSION ["CustomerName4"]?></td>
<td><?php echo $_SESSION ["TransactionID4"]?></td>
<td><?php echo $_SESSION ["TransactionDate4"]?></td>
<td><?php echo $_SESSION ["TotalCost4"]?></td>
<td><?php echo $_SESSION ["Status4"]?></td>
</tr>
<tr>
<td><?php echo $_SESSION ["CustomerName5"]?></td>
<td><?php echo $_SESSION ["TransactionID5"]?></td>
<td><?php echo $_SESSION ["TransactionDate5"]?></td>
<td><?php echo $_SESSION ["TotalCost5"]?></td>
<td><?php echo $_SESSION ["Status5"]?></td>
</tr>
</table>
<br><input type="submit" name="lClick" value="Block user" >
</body>
</html>

