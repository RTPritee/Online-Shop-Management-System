<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="http://localhost/WebTecLab/Project/view/LoginCSs.css">
<title>Login Form</title>
</head>
<body style = "background : #eeffcc">
<h3 style="text-align:right" ><a href="http://localhost/WebTecLab/Project/view/webpage.php">Home</a>&nbsp;&nbsp;&nbsp;</h3>
<br> <br>

<?php
if (isset ($_POST["check"]))
{
setcookie ("email","",time()+(60*60*24*7));
setcookie ("password","",time()+(60*60*24*7));
}
if (isset ($_COOKIE ["email"]))
{
echo $_COOKIE["email"];
}
if (isset ($_COOKIE ["password"]))
{
echo $_COOKIE["password"];
}
?>

<div class="login">
<center> <h3>LogIn</h2></center><b3>
<form onsubmit ="return  validate()" method = "post" action="http://localhost/WebTecLab/Project/view/AdminDashboard.php">
<table>

<tr>
<td><b>Email</b><br></td>
<td>:<br></td>
<td class="up">
<input type="text" id="email" name="email"><br>

</td>
</tr>
<tr>
<td><b>Password</b></td>
<td>:</td>
<td class="up">
<input type="password" id="pass" name="pass" minlength="8" ><br>

</td>
</tr>
</table>
<br>
<input type="checkbox" style="border: outset; border-color:#3CB371; float:middle" name="check" value="Remember Me">&nbsp;<b>Remember Me</b><br><br>
<center><input type="submit" class="log" name="submit" value="Log In"></center><br>
<center><p><b>New user?</b><a href="Registration.php" <b>Register Here</b></p></center><center>

</form>
</div>
<script src="http://localhost/WebTecLab/Project/model/LoginValidation.js"></script>
</body>
</html>