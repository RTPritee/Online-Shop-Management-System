<html>
<head>
<link rel="stylesheet" href="http://localhost/WebTecLab/Project/view/AdminAddedCSS.css">
<title>Admin Added List</title>
</head>
<body
<br><br>
&nbsp;&nbsp;<a href="http://localhost/WebTecLab/Project/controllar/Admin.php" class="back">Back</a>&nbsp;&nbsp;<br>
<center> <h2 class="head">New Item Information</h2></center>
<div class="info">    
    <form method="post" action="">    
<?php
$file=fopen('AdminAdded.txt','r') or die("File is unable to open.");

while(!feof($file))
{
echo fgets($file)."<br>";//read line by line
}
fclose($file);
?>
</form>     
</div>  
<h1 class="h"></h1>
</body>
</html>