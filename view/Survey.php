<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
</head>
<style>
body
{
margin: 0;
padding: 0;
background-color:#f2f2f2;
font-family: 'Times New Roman';
font-size:95%;
}
.login
{
width: 320px;
margin: auto;
margin: 15 0 0 350px;
padding: 70px;
background-color: #98FB98;
border-radius: 15px ;
border-style:groove;
border-color:black;

}

label
{
color: black;
font-size: 17px;
}
.up
{
width: 350px;
height: 30px;
font-family: 'Times New Roman';
}
.password{
width: 300px;
height: 30px;
border: outset;
border-radius: 3px;
padding-left: 8px;
border-color:#3CB371;

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
span{
color: black;
font-size: 17px;

}



</style>
<body style = "background : #eeffcc">
<h3 style="text-align:right" ><a href="webpage.php">Home</a>&nbsp;&nbsp;&nbsp; <a href="http://localhost/WebTecLab/Project/controllar/Login.php">Log Out</a>&nbsp;&nbsp; </h3>
<br> <br>

<div class="login">
<center> <h3>Survey</h2></center><b3>
<form method="post" action="SurveyNotice.php">

<table>
<tr>
<td><b>1.Are you satisfied with our service?</b><br></td>
</tr>
<tr>
<td>
<input type="radio" name="ans" value="Satisfied"> &nbsp;Satisfied
<input type="radio" name="ans" value="Not satisfied"> &nbsp; Not satisfied
<input type="radio" name="ans" value="No comment"> &nbsp; No comment <br><br>
</td>
</tr>

<tr>
<td><b>2.Is our webpage meet your requirements?</b><br></td>
</tr>
<tr>
<td>
<input type="radio" name="a" value="Yes"> &nbsp;Yes
<input type="radio" name="a" value="No"> &nbsp; No <br><br>

</td>
</tr>

<tr>
<td><b>3.Are you facing any problem to use this application?</b><br></td>
</tr>
<tr>
<td>
<input type="radio" name="b" value="Yes"> &nbsp;Yes
<input type="radio" name="b" value="No"> &nbsp; No <br><br>

</td>

</tr>

<tr>
<td><b>4.In future do you like to purchase again?</b><br></td>
</tr>
<tr>
<td>
<input type="radio" name="c" value="Yes"> &nbsp;Yes
<input type="radio" name="c" value="No"> &nbsp; No <br><br>

</td>

</tr>

<tr>
<td><b>5.What type of requrements do you want to be added?Please comment below.</b><br></td>
</tr>
<tr>
<td>
<textarea name="address" rows="3" cols="40"></textarea><br>

</td>

</tr>

</table>

<br><center><input type="submit" class="log" name="lClick" value="Submit"></center><br>

</form>
</div>
</body>
</html>