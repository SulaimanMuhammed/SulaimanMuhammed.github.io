
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>contact form</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="./css/styles.css">
</head>
<body>


<?php @include 'header.php'; ?>

<section class="contact">
	<h1 class="heading">Contact Form</h1>
	<p>
Welcome to Elva Woolen Craft's contact page! 🧶 Have questions? ❓ Need advice?  💡 We're here for you. Share your ideas 💡, and let's create something special together! 🌟</p>

	<form action="https://formsubmit.co/ma18117@auis.edu.krd" method="POST">


		<div class="flex">

		<div class="inputBox">
			<span>Your name:</span>
			<input type="text" placeholder="Enter your name here" name="name" required>
		</div>

		<div class="inputBox">
			<span>Your email address:</span>
			<input type="text" placeholder="Enter your email here" name="email" required>
		</div>

		<div class="inputBox">
			<span>Your number:</span>
			<input type="text" placeholder="Enter your number here" name="number" required>
		</div>

		<div class="inputBox">
			<span>Personalize your purchase:</span>
			<select name="purchase" id="">
			<option value="custom-craft">Custom Craft</option>
			<option value="made-to-order">Made-to-Order</option>
			<option value="bespoke-creation">Bespoke Creation</option>
			</select>
		</div>

		<div class="inputBox">
			<span>Your address location:</span>
			<textarea name="address" placeholder="Enter your address here" required cols="30" rows="10"></textarea>
		</div>

		<div class="inputBox">
			<span>Your message:</span>
			<textarea name="message" placeholder="Enter your message here" required cols="30" rows="10"></textarea>
		</div>
	</div>
	<input type="submit" value="Send" name="send" class="btn">
</form>

</section>

<?php @include 'footer.php'; ?>


<!--custom javascript file link-->
<script src="Js/server.js"></script>

</body>
</html>