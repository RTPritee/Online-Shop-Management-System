<html>
  <head>
         <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		 <link rel="stylesheet" href="http://localhost/WebTecLab/Project/view/LoginCSs.css">
		 <script>
		    function chk()
			{
				var fname=document.getElementById('fname').value;
				var lname=document.getElementById('lname').value;
				var aname=document.getElementById('aname').value;
				var cname=document.getElementById('cname').value;
				var dname=document.getElementById('dname').value;
			    var dataString='fname=' + fname + '&lname=' + lname + '&aname=' +aname + '&cname=' +cname + '&dname=' +dname;

				$.ajax({
					type:"post",
					url:"contactInfo.php",
					data:dataString,
					cache:false,
					success:function(html){
						$('#msg').html(html);
					}
				});
				return false;
			}
			
		 </script>
  </head>
  <style>
 #idForHead {
background-color: #ffcc00;
color: white;
padding: 15px;
text-align:center;
font-family:courier;
font-size:100%;
} 
.back{
width: 45px;
height: 25px;
border: outset;
border-radius: 10px;
padding-left: 7px;
color:black;
float:center;
border-color:#ffcc66;
font-family: 'Times New Roman';  
font-size:100%;
	
}
  
</style>
 &nbsp;&nbsp;<a href="http://localhost/WebTecLab/Project/view/webpage.php" class="back">Back</a>&nbsp;&nbsp;
<body class = "body";>  
   <h3 id = "idForHead"> &nbsp;&nbsp;Get in Touch!!</h2><br>
         <form class = "login">
		 <label>First Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label/><input type="text" id="fname">
		 <br/><br/>
		 <label>Last Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label/><input type="text" id="lname">
		 <br/><br/>
		 <label>Your Opinion : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label/><input type="text" id="aname">&nbsp;&nbsp;&nbsp;&nbsp;
		 <br/><br/>
		 <label>Contact Number :&nbsp;<label/><input type="text" id="cname">
		 <br/><br/>
		 <label>Mail : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label/><input type="text" id="dname">
		 <br/><br/>
		 <input type="submit" value="submit" onclick="return chk()">
		</form>
		<p id="msg"></p>
		</body>
</html>