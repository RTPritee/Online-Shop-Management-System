<html>
<head>
<title>Admin get notice</title>
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
font-size:100%

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
  margin: 25px auto;
  height: auto;
  padding: 35px;
  padding-top: 70px;
  border-radius: 5px;
  position: relative;
  border-style:dotted;
  border-color:black;
  font-family:'Times New Roman';
  font-size:90%
}

</style>
<body
<br><br><br>
&nbsp;&nbsp;<a href="CartList.php" class="back">Back</a>&nbsp;&nbsp;<br><br>
<center> <h2 class="head">New User Notification</h2></center>
<div class="info">    
    <form method="post" action="http://localhost/WebTecLab/Project/controllar/login.php">    
<?php
$XMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Admin</to>
<from>Staff-->Tom</from>
<heading>Get Notice</heading>
<body>Join a user recently</body>
</note>";
$xml=simplexml_load_string($XMLData) or die("Error: Unable to create object");
print_r($xml)."<br>"."</br>";//r xml data print in array*/
?>    
    <br><br>
<?php
$XMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Admin</to>
<from>Staff-->Jack</from>
<heading>Notification</heading>
<body>Order Confirmed from a user</body>
</note>";
$xml=simplexml_load_string($XMLData) or die("Error: Unable to create object");
print_r($xml)."<br>"."</br>";//r xml data print in array*/
?>  
 <br><br>
  
<?php
$XMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Admin</to>
<from>Staff-->Harry</from>
<heading>Notification</heading>
<body>Order Confirmed from a user </body>
</note>";
$xml=simplexml_load_string($XMLData) or die("Error: Unable to create object");
print_r($xml)."<br>"."</br>";//r xml data print in array*/
?>
<br><br>
  
<?php
$XMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Admin</to>
<from>Staff-->Harry</from>
<heading>Notification</heading>
<body>Order Confirmed from a user</body>
</note>";
$xml=simplexml_load_string($XMLData) or die("Error: Unable to create object");
print_r($xml)."<br>"."</br>";//r xml data print in array*/
?>
<br><br>

<?php
$XMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Admin</to>
<from>Staff-->Lily</from>
<heading>Notification</heading>
<body>Order Confirmed from a user</body>
</note>";
$xml=simplexml_load_string($XMLData) or die("Error: Unable to create object");
print_r($xml)."<br>"."</br>";//r xml data print in array*/
?>
  
</form>     
</div>  
<h1 class="head"></h1>
</body>
</html>