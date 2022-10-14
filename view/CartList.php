<!DOCTYPE html>

<html>
<head>

	<title >Shopping Cart</title>


</head>

<style>
body
{
margin: 0;
padding: 0;
background-color:#eeffcc;
}
.container{
	max-width: 1220px;
	margin: 0 auto;
}
.container > h1{
	padding: 20px 0;
}
.cart{
	display: flex;
}

.products{
	flex: 0.75;
}
.product{

	display: flex;

	width: 100%;

	height: 200px;

	overflow: hidden;

	border: 1px solid silver;

	margin-bottom: 20px;

}

.product-info{

	padding: 20px;

	width: 100%;

	position: relative;

}

.product-name, .product-offer{

	margin-bottom: 20px;

}

.product-remove{

	position: absolute;

	bottom: 20px;

	right: 20px;

	padding: 10px 25px;

	background-color: green;

	color: white;

	cursor: pointer;

	border-radius: 5px;

}


.cart-total{

	flex: 0.25;

	margin-left: 20px;

	padding: 25px;

	height: 280px;

	border: 1px solid silver;

	border-radius: 5px;

}

.cart-total p{

	display: flex;

	justify-content: space-between;

	margin-bottom: 35px;

	font-size: 20px;

}

.cart-total a{

	display: block;

	text-align: center;

	height: 40px;

	line-height: 40px;

	background-color: tomato;

	color: black;

	text-decoration: none;

}

		
	.remove{

		display: none;

	}

    .product{

		height: 150px;

	}


	.product-name, .product-offer{

		margin-bottom: 10px;

	}
	.cart-total{

		margin-left: 0;

		margin-bottom: 20px;

	}

	
.container{

		max-width: 95%;
	}	
	.back{
width: 40px;
height: 20px;
border: outset;
border-radius: 10px;
padding-left: 7px;
color:black;
float:right;
border-color:#3CB371;
}
</style>
<body>
<div class="container">
	<br>
    
	&nbsp;&nbsp;<a href="Categories.php" class="back">Back</a>&nbsp;&nbsp;
	<a href="CartText.php">Text Information</a>&nbsp;&nbsp;<br>

	<center><h1>Shopping Cart List</h1></center>

	<div class="cart">

		<div class="products">

			<div class="product">

				<img src="http://localhost/WebTecLab/Project/image/apple.png">

				<div class="product-info">

					<h3 class="product-name">APPLE/আপেল</h3>

					<h4 class="product-offer">10%</h4>

					<p class="product-quantity">Quantity: <input value="1kg" name="">

					<p class="product-remove">
					  
				

						<span>Remove</span>

					</p>

				</div>

			</div>

			<div class="product">

				<img src="http://localhost/WebTecLab/Project/image/mango.jpg">

				<div class="product-info">

					<h3 class="product-name">MANGO/আম </h3>

					<h4 class="product-offer">No offer Available</h4>

					<p class="product-quantity">Quantity: <input value="500gm" name="">

					<p class="product-remove">

						<span>Remove</span>

					</p>

				</div>

			</div>
			<div class="product">

				<img src="http://localhost/WebTecLab/Project/image/dalim.png">

				<div class="product-info">

					<h3 class="product-name">DALIM/ডালিম</h3>

					<h4 class="product-offer">5%</h4>

					<p class="product-quantity">Quantity: <input value="1kg" name="">

					<p class="product-remove">


						<span >Remove</span>

					</p>

				</div>

			</div>
			
			<div class="product">

				<img src="http://localhost/WebTecLab/Project/image/orange.png">

				<div class="product-info">

					<h3 class="product-name">ORANGE/মাল্টা </h3>

					<h4 class="product-offer">10%</h4>

					<p class="product-quantity">Quantity: <input value="500gm" name="">

					<p class="product-remove">

						<span >Remove</span>

					</p>
				</div>
			</div>
			<div class="product">
				<img src="http://localhost/WebTecLab/Project/image/grap.png">
				<div class="product-info">
					<h3 class="product-name">GRAPE/আঙ্গুর  </h3>
					<h4 class="product-offer">No offer Available</h4>
					<p class="product-quantity">Quantity: <input value="1kg" name="">
					<p class="product-remove">
						<span>Remove</span>
					</p>
				</div>
			</div>
		</div>
		<div class="cart-total">
			<p>
				<span>Total Price</span>
				<span>800tk</span>
			</p>
			<p>
				<span>Types of item</span>
				<span>5</span>
	    	</p>
			<p>
				<span>Discount Amount</span>
				<span>200tk</span>
			</p>
			<p>
				<span>Need to Pay</span>
				<span>600tk</span>
			</p>
			<a href="http://localhost/WebTecLab/Project/controllar/Payment.php">Proceed to Pay</a>
		</div>
	</div>
</div>
<h2><center><a href="http://localhost/WebTecLab/Project/model/CartInfo.php">Cart Information</a></h2>
</body>
</html>