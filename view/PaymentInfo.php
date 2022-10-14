<html>
<head>
<title>Payment Information</title>
</head>
<style>
body
{
margin: 0;
padding: 0;
background-color:#eeffcc;
font-family: 'Times New Roman';
font-size:110%;
}

.head{
background-color: #ffcc00;
color: black;
padding: 15px;
font-family:'Times New Roman';
font-size:120%

}
.h{
background-color: #ffcc00;
color: black;
padding: 25px;
font-family:'Times New Roman';
font-size:110%

}
  .back{
width: 45px;
height: 25px;
border: outset;
border-radius: 10px;
padding-left: 7px;
color:black;
float:right;
border-color:#ffcc66;
font-family: 'Times New Roman';  
	font-size:105%;
}

.info{
  background: #ffff99;;
  max-width: 360px;
  margin: 80px auto;
  height: auto;
  padding: 35px;
  padding-top: 70px;
  border-radius: 5px;
  position: relative;
  border-style:double;
  border-color:black;
}

</style>
<body
<br><br>
&nbsp;&nbsp;<a href="Fruits.php" class="back">Back</a>&nbsp;&nbsp;<br>
<center> <h2 class="head">Order Complete ! Here your order Information</h2></center>
<div class="info">    
    <form method="post" action="">    
<?php
$file=fopen('payment.txt','r') or die("File is unable to open.");

while(!feof($file))
{
echo fgets($file)."<br>";//read line by line

}
fclose($file);

?>
</form>     
</div>  
<h2 class="h"><center><a href="Survey.php">Survey</a></h2>
</body>
</html>