<!DOCTYPE html>
<html>
<head>
<title>Categories</title>
</head>
<style>
body
{
margin: 0;
padding: 0;
background-color:white;
font-family: 'Times New Roman';
font-size:110%;
}

.button{
width: 150px;
height: 38px;
border: outset;
border-radius: 10px;
padding-left: 7px;
color:black;
border-color:#3CB371;
}
.back{
width: 40px;
height: 20px;
border: outset;
border-radius: 10px;
padding-left: 7px;
color:black;
float:right;
border-color:#3CB371;
}
.footer {
       background-color:#ffcc00;
       color: black;
       padding: 20px;
       text-align:right;
	   font-family:courier;
	   font-size:80%;
	   
    }
</style>
<body>
<br>
&nbsp;&nbsp;<a href="webpage.php" class="back">Back</a>
<table>
<tr>
<p><h1 style = "text-align:center;text-color:red; background-color: yellow"><b>Choose Your Item Type</b></h1></p>
<td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img align ="center" width="480px" height="340px" src="http://localhost/WebTecLab/Project/image/A1.png" alt="fruit picture"></td>

<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img align ="center" width="550px" height="400px" src="http://localhost/WebTecLab/Project/image/A2.png"alt="Vegetables Picture"></td>
</tr>
<br><br> <br>

<tr><td></td>
<td ><a href="Fruits.php"><center><input type="submit" class="button" name="btnClick" value="Available Fruits"></center></td>
<td >&nbsp;&nbsp;&nbsp;&nbsp;<a href="Vegetable.php"><center><input type="submit" class="button" name="btnClick" value="Available Vegetables"></center></td>
</tr>
<br><br/>
</table>
<table>
		<tr>
		 <p class = "footer"><b>Hotline Number:</b>&nbsp;+8801900001&nbsp;&nbsp;<b>Emergency Number:</b>&nbsp;+8801300001
		 <br><>copyright by Rehnuma,Nazmul,Velen</p>
		</tr>
</table> 
</body>
</html>