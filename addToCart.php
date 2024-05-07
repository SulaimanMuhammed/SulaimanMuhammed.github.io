<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>addToCart</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="./css/styles.css">
</head>
<body>

<?php @include 'header.php'; ?>
<section class="addToCart" id="addToCart">

<div class="cart-header">
            <p class="cart-logo"></p>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
        </div>

        <div class="cart-container">

            <div id="root"></div>
            <div class="cart-sidebar">
                <div class="cart-head"><p>My Cart</p></div>
                <div id="cartItem">Your cart is currently empty</div>
                <div class="foot">
                    <h3>Total price</h3>
                    <h2 id="total">$ 0.00</h2>
                </div>

                <div class="cart-foot">
                <button class="checkout-btn" onclick="redirectToCheckout()">Checkout</button>

                </div>


            </div>


		</section>

<?php @include 'footer.php'; ?>

<!--custom javascript file link-->
<script src="Js/server.js"></script>


<!-- Add the JavaScript code for redirection -->
<script>
    function redirectToCheckout() {
        // Change the URL to the checkout page
        window.location.href = "checkout.php"; 
    }
</script>

</body>
</html>