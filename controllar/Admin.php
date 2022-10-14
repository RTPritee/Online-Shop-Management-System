   
<html>    
<head>
    <h1 style = "text-align:center">Welcome Admin</h1>    
    <title>Admin Form-Edit</title>     
</head>	
<style>
   .product-remove{
	position: absolute;
	bottom: 20px;
	right: 20px;
	padding: 10px 25px;
	background-color: red;
	color: white;
	cursor: pointer;
	border-radius: 5px;
   } 
   .product-add
	{  
        width: 500px;  
        margin: auto;  
        margin: 10 0 0 380px;  
        padding: 15px;  
        background-color: #98FB98;         
	} 
   .add_button{  
    width: 130px;  
    height: 25px;   
    border-radius: 10px;  
    padding-left: 7px;  
    color:black;
    border-color:#3CB371;
	font-family: 'courier';  
	font-size:100%;
    position : relative;	
	}   
</style>
</head>
<body style = "background : #eeffcc">
<center><img width="800px" height="250px" src="http://localhost/WebTecLab/Project/image/admin.png" alt="fruit and vegetable image background"></center>
<div>
	<br>
	&nbsp;&nbsp;<a href="http://localhost/WebTecLab/Project/view/AdminDashboard.php">Back</a>&nbsp;&nbsp;
	<center><h1>Update Item List</h1></center>
	<div>
		<div>
		<div>
				<img width="150px" height="100px" src="http://localhost/WebTecLab/Project/image/mango.jpg">
				<div>
					<h3>MANGO/আম </h3>
					<table>
					<tr><td><h4>Available</td><td> :</td><td> 10%</h4></td></tr>
					<tr><td>Quantity </td><td>:</td><td><input value="60gm" name=""></td></tr>
					<tr><td>Price </td><td>:</td><td> <input value="75tk" name=""></td></tr>
                  
						<input type="submit" name="delete" id="empty-cart"  value="Remove" />
					
					</table>
				</div>
			</div>
			<div>
				<img width="150px" height="100px" src="http://localhost/WebTecLab/Project/image/apple.png">
				<div>
					<h3>APPLE/আপেল</h3>
					<table>
					<tr><td><h4>Available</td><td> :</td><td> 12%</h4></td></tr>
					<tr><td>Quantity </td><td>:</td><td><input value="20gm" name=""></td></tr>
					<tr><td>Price </td><td>:</td><td> <input value="83tk" name=""></td></tr>
					
						<!--- <span>Remove</span> ---->
						<input type="submit" name="delete" id="empty-cart"  value="Remove" />
					
					</table>
				</div>
			</div>
			<div>
				<img width="150px" height="100px" src="http://localhost/WebTecLab/Project/image/dalim.png">
				<div>
					<h3>DALIM/ডালিম</h3>
					<table>
					<tr><td><h4>Available</td><td> :</td><td> 20%</h4></td></tr>
					<tr><td>Quantity </td><td>:</td><td><input value="25gm" name=""></td></tr>
					<tr><td>Price </td><td>:</td><td> <input value="100tk" name=""></td></tr>
					
						<input type="submit" name="delete" id="empty-cart"  value="Remove" />
					
					</table>
				</div>
			</div>
			<div>
				<img width="150px" height="100px" src="http://localhost/WebTecLab/Project/image/orange.png">
				<div>
					<h3>ORANGE/মাল্টা </h3>
					<table>
					<tr><td><h4>Available</td><td> :</td><td> 50%</h4></td></tr>
					<tr><td>Quantity </td><td>:</td><td><input value="15gm" name=""></td></tr>
					<tr><td>Price </td><td>:</td><td> <input value="70tk" name=""></td></tr>
					
						<input type="submit" name="delete" id="empty-cart" value="Remove" />
					
					</table>
				</div>
			</div>
			<div>
				<img width="150px" height="100px" src="http://localhost/WebTecLab/Project/image/Cauliflower.jpg">
				<div>
					<h3>Cauliflower/ফুলকপি  </h3>
					<table>
					<tr><td><h4>Available</td><td> :</td><td> 55%</h4></td></tr>
					<tr><td>Quantity </td><td>:</td><td><input value="18gm" name=""></td></tr>
					<tr><td>Price </td><td>:</td><td> <input value="75tk" name=""></td></tr>
					
						<input type="submit" name="delete" id="empty-cart" value="Remove" />
					
					</table>
				</div>
			</div>
			<div>
				<img width="150px" height="100px" src="http://localhost/WebTecLab/Project/image/grap.png">
				<div>
					<h3>GRAPE/আঙ্গুর  </h3>
					<table>
					<tr><td><h4>Available</td><td> :</td><td> 25%</h4></td></tr>
					<tr><td>Quantity </td><td>:</td><td><input value="20gm" name=""></td></tr>
					<tr><td>Price </td><td>:</td><td> <input value="165tk" name=""></td></tr>
					
						<input type="submit" name="delete" id="empty-cart"  value="Remove" />
					
					</table>
				</div>
			</div>
		</div><br>
		<div>
			<a href="http://localhost/WebTecLab/Project/view/Categories.php">Confirm</a>
		</div>
	</div>
	<div>
	<center><h1>Add New Item</h1></center>
	</div>
</div>
</body>
<body>
<?php
$n="";
$e="";
$p="";
$b="";
//$a="";
if(isset($_POST["btnClick"])){
$n="";
$e="";
$p="";
$b="";
//$a="";
if(isset($_POST["productname"]))
$n=$_POST["productname"];
if(isset($_POST["price"]))
$e=$_POST["price"];
if(isset($_POST["quantity"]))
$p=$_POST["quantity"];
if(isset($_POST["type"]))
$b=$_POST["type"];
//if(isset($_POST["image"]))
//$a=$_POST["image"];
if($n=="" && $e=="" && $p==""&& $b=="")
echo "<center><span style='color:red'>Please fill up the requirements.</span></center>";
if($n!="" && $e!="" && $p!=""&& $b!="")
//header("Location:http://localhost/WebTecLab/Project/view/AdminAdded.php");
echo "<center><span style='color:blue'>Item added <br/> Please cheack on added item list</span></center>";

}
?>
    <div class="product-add">  
			
    <form method="post" action="Admin.php">	
		<div>
		<center><table style = "text-align :left">	
			<tr>
			<td>Product Name</td>
			<td>:</td>
			<td>
				<input type="text" id="productname" name="productname">
					<?php
						if($n=="")
						echo "<span style='color:red'>Required</span><br/>";
					?>
			</td>
		</tr>
		<tr>
			<td>Price</td>
			<td>:</td>
			<td>
				<input type="text"  id="price" name="price">
				<?php
						if($e=="")
						echo "<span style='color:red'>Required</span><br/>";
				?>
			</td>
		</tr>
		<tr>
			<td>Quantity </td>
			<td>:</td>
			<td>
				<input type="text" id="quantity"  name="quantity">
				    <?php
						if($p=="")
						echo "<span style='color:red'>Required</span><br/>";
					?>
			</td>
		</tr>
		<tr>
			<td>Discount</td>
			<td>:</td>
			<td>
				<input type="text" id="discount"  name="discount">
			</td>
		</tr>
		<tr>
		<td>Item Type</td>
			<td>:</td>
			<td>
			   <select name="type" id="type"> 
                <option value="">---</option>			   
				<option value="1">Fruit</option>
				<option value="2">Vegetable</option>
				</select>
				<?php
						if($b=="")
						echo "<span style='color:red'>Required</span><br/>";
					?>
			</td>
		</tr>
		<tr>
		</table><br>
		<center><input type="submit" class="add_button" name="btnClick" value="ADD"></center>
		</div>
	</form> </center><br>
	<center><table style = "text-align :left">
	   <tr>
			<td>Upload An Image</td>
			<td>:</td>
			<td>
				<input type="submit" name="image" value="Upload Image">
				<!--<?php
						//if($a=="")
						//echo "<span style='color:red'>Required</span><br/>";
					//?> --->
			</td>
		</tr>
		</table></center><br>
		<center><a href="http://localhost/WebTecLab/Project/view/AdminAdded.php">Check added item list</a></center>
</div> 
</body>
</html>