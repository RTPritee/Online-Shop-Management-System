<!DOCTYPE html>    
<html>    
<head>    
    <title>Staff</title>     
</head>	
<style>
	body  
	{  
	margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color:#f2f2f2;  
    font-family: 'Times New Roman';  
	font-size:100%;
	}  
	.register
	{  
        width: 1200px;  
        margin: auto;  
        margin: 10 0 0 380px;  
        padding: 15px;  
        background:white;
		border-style:groove;
		border-color:black;	
		display:
          
	}  
	.body
		{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		background-color:#f2f2f2;
		font-family: 'Times New Roman';
		font-size:130%;
		}
   .register_button{  
	    width: 130px;  
	    height: 25px;  
		border: double;  
		border-radius: 10px;  
		padding-left: 7px;  
		color:black;
		border-color:#3CB371;
		font-family: 'Times New Roman';  
		font-size:100%;	
		}  
    .home_button{  
	    width: 130px;  
	    height: 25px;  
		border: single;  
		padding-left: 7px;  
		color:black;
		border-color:#3CB371;
		font-family: 'Times New Roman';  
		font-size:100%;	
		}  
	.table,th,td {
        font-family: arial, sans-serif;
        width: 5000px;
		height: 20px; 
		border:1px solid black;
        border-collapse:collapse;
           }
    .th,td {
            background-color: #96D4D4;
           }
   input.right {
	   width: 130px;  
	    height: 25px;  
		border: single;  
		padding-left: 7px;  
		color:black;
		border-color:#3CB371;
		font-family: 'Times New Roman';  
		font-size:100%;	
        float: right;
      }
		   
		   
</style>

<body style = "background-image: url('http://localhost/WebTecLab/Project/image/backstaff.png');">  

			<center><h1>Orders</h1></center>  
	    <form method="post" action="http://localhost/WebTecLab/Project/model/OrderList.php">  	
			<input  type="submit" class="right" name="lClick" value="Show Order List" >
	    </form> 
		
		<form method="post" action="webpage.php">  
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="submit" class="home_button" name="homeClick" value="Home">
		</form> 
	
          
<br><br>

    <div class="register">  
	
			<table class="table,th,td">
			  <tr >
				<th >Transaction ID</th>
				<th>Transaction Date</th>
				<th>Customer Name</th>
				<th>Total Cost</th>
				<th>Status</th>
			  </tr>
			  <tr>
				<td>5E5QD218D1Q</td>
				<td>21/10/2021</td>
				<td>Nazmul Islam</td>
				 <td>2500TK</td>
				<td>PENDING</td>
			  </tr>
			  <tr>
				<td>1122DQ3345D</td>
				<td>21/10/2021</td>
				<td>Rehnuma Tabassum</td>
				 <td>1215TK</td>
				<td>PENDING</td>
			  </tr>
			  <tr>
				<td>4QE2SD612DF</td>
				<td>20/10/2021</td>
				<td>Ayesha Akter</td>
				 <td>1090TK</td>
				<td>COMPLETE</td>
			  </tr>
			  <tr>
				<td>6QD1Q6Q56ED</td>
				<td>19/10/2021</td>
				<td>Meghla</td>
				 <td>845TK</td>
				<td>PENDING</td>
			  </tr>
			  <tr>
				<td>QD5WD61E4QD</td>
				<td>21/10/2021</td>
				<td>Rahman</td>
				 <td>975TK</td>
				<td>COMPLETE</td>
			  </tr>
			  <tr>
				<td>456D51AS3D6</td>
				 <td>16/10/2021</td>
				<td>Tanzil</td>
				<td>1375TK</td>
				<td>COMPLETE</td>
			  </tr>
			</table>

	</div>
		<br>
		<center><input type="submit" class="register_button" name="conClick" value="Confirm Order"></center>
		<center><input type="submit" class="register_button" name="viewClick" value="Order History"></center>
		<center><input type="submit" class="register_button" name="cancelClick" value="Cancel Order"></center>
        <center><input type="submit" class="register_button" name="prntlClick" value="Print order"></center>
	
		
	
	</form> 
	<center><a href="UserAddedNotice.php">Notification</a></center>
</div>   
<br> <br> <br><br>

</body>    
</html>     