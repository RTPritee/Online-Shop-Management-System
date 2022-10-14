<html>
<head>
<title>Fruits Information</title>
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
  border-style:solid;
  border-color:black;
}

</style>
<body
<br><br>
&nbsp;&nbsp;<a href="http://localhost/WebTecLab/Project/view/CartList.php" class="back">Back</a>&nbsp;&nbsp;<br>
<center> <h2 class="head"></h2></center>
<div class="info">    
    <form method="post" action="login.php">    
<?php
$jsondata=file_get_contents("cartinfo.json");
$data=json_decode($jsondata,true);
echo '<center><h3> Cart  information </h3><center>';
$a="";
foreach($data['cart'] as $b)
{
$a.="Item Name: ".$b['name']."<br/>";
$a.="Quantity: ".$b['qua']."<br/>";
$a.="Offer: ".$b['offer']."<br/>"."<br/>";
}
echo $a;
?>
</form>     
</div>  
<h1 class="head"></h1>
</body>
</html>