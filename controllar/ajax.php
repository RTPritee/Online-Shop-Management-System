<html>
  <head>
         <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		 <script>
		    function chk()
			{
				var name=document.getElementById('name').value;
				var dataString='name='+name;
				$.ajax({
					type:"post",
					url:"hi.php",
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
  
  <body>
         <form>
		 <input type="text" id="name">
		 <br/><br/>
		 <input type="submit" value="submit" onclick="return chk()">
		</form>
		<p id="msg"></p>
		</body>
</html>