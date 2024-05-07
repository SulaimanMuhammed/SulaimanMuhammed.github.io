<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>checkout</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <a href="addToCart.php" class="checkout-heading-a">Continue shopping! 🛍️</a>
	<h1 class="checkout-heading">Complete Your Order!  🛒</h1>

<section class="checkout">
    

	<form action="https://formsubmit.co/ma18117@auis.edu.krd" method="POST">


		<div class="flex">

		<div class="inputBox">
			<span>Full name:</span>
			<input type="text" placeholder="Enter your name here" name="name" required>
		</div>

		<div class="inputBox">
			<span>Phone number:</span>
			<input type="text" placeholder="Enter your phone number " name="number" required>
		</div>

		<div class="inputBox">
			<span>Your email address:</span>
			<input type="text" placeholder="Enter your email here" name="email" required>
		</div>

		<div class="inputBox">
			<span>Special comments:</span>
			<input type="text" placeholder="Type your comment here " name="email" required>
		</div>
		<div class="inputBox">
			<span>Address:</span>
			<textarea name="address" placeholder="Enter your address here" required cols="30" rows="10"></textarea>
		</div>

		<div class="inputBox">
		<span>Selected items:</span>
		<textarea name="selected_products" id="selectedProducts" rows="4" cols="50" readonly></textarea>
		</div>
		
		<div class="inputBox">
			<span>Payment method:</span>
			<select name="purchase" id="">
			<option value="Cash">Cash</option>
			<option value="Mobile paymant">Mobile paymant</option>
			<option value="Credit Card">Credit Card</option>
			<option value="PayPal">PayPal</option>

			</select>
		</div>
        	
		<!-- Display total price -->
		<div class="inputBox">
		<span>Total price:</span>
			<input type="text" id="total" name="total" readonly>
		</div>

        
	</div>
	<input type="submit" value="Checkout" name="send" class="btn">
</form>

</section>


<!--custom javascript file link-->
<script src="Js/server.js"></script>
<script>
// Extract cart data from local storage
const cartData = JSON.parse(localStorage.getItem('cart'));

// Display selected products and total price
if (cartData) {
    const selectedProductsTextarea = document.getElementById('selectedProducts');
    const totalPriceInput = document.getElementById('total');

    selectedProductsTextarea.value = cartData.map(item => `${item.title} (${item.quantity}x)`).join('\n');
    
    const total = cartData.reduce((acc, item) => acc + (item.price * item.quantity), 0);
    totalPriceInput.value = '$' + total.toFixed(2);
} else {
    selectedProductsTextarea.value = "No products selected";
    totalPriceInput.value = "$0.00";
}
</script>

</body>
</html>