<html>
<head>
<title>Survey Notification</title>
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
  max-width: 950px;
  margin: 20px auto;
  height: 3px;
  padding: 35px;
  padding-top: 70px;
  border-radius: 5px;
  position: relative;
  border-style:solid;
  border-color:black;
  font-family:Arial;
}

</style>
<body
<br><br>
&nbsp;&nbsp;<a href="CartList.php" class="back">Back</a>&nbsp;&nbsp;<br>
<center> <h2 class="head">Notification Of Surveys</h2></center>
<div class="info">    
    <form method="post" action="login.php">    
<?php
$XMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Admin</to>
<from>July</from>
<heading>Notification</heading>
<body>Survey Completed</body>
</note>";
$xml=simplexml_load_string($XMLData) or die("Error: Unable to create object");
print_r($xml)."<br>"."</br>";//r xml data print in array*/
?>
</form>     
</div>  
<div class="info">    
    <form method="post" action="http://localhost/WebTecLab/Project/controllar/login.php">    
<?php
$XMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Admin</to>
<from>Fariha</from>
<heading>Notification</heading>
<body>Survey Completed</body>
</note>";
$xml=simplexml_load_string($XMLData) or die("Error: Unable to create object");
print_r($xml)."<br>"."</br>";//r xml data print in array*/
?>
</form>     
</div>  
<div class="info">    
    <form method="post" action="http://localhost/WebTecLab/Project/controllar/login.php">    
<?php
$XMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Admin</to>
<from>Taskia</from>
<heading>Notification</heading>
<body>Survey Completed</body>
</note>";
$xml=simplexml_load_string($XMLData) or die("Error: Unable to create object");
print_r($xml)."<br>"."</br>";//r xml data print in array*/
?>
</form>     
</div>  
<h1 class="head"></h1>
</body>
</html>