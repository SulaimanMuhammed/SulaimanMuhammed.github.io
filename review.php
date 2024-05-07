<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>review</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


	<link rel="stylesheet" href="/css/styles.css">
</head>
<body>


<?php @include 'header.php'; ?>
<section class="contact">
	<h1 class="review-heading">Customer Reviews and Ratings 🌟📝</h1>
	<p>Immersed in the allure of our carefully crafted collection,
    we await your discerning appraisal. 
    Your insights and recommendations are pivotal as we strive for continual refinement and excellence.</p>


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

		<span>Rate our products!</span>
        <select name="rating" id="rating" required>
            <option value=""></option>
            <option value="1">⭐ Bad</option>
            <option value="2">⭐⭐Not bad</option>
            <option value="3">⭐⭐⭐Good</option>
            <option value="4">⭐⭐⭐⭐Very good</option>
            <option value="5">⭐⭐⭐⭐⭐Awesome</option>
        </select>


		</div>

		<div class="inputBox">
			<span>Write your comments:</span>
			<textarea name="message" placeholder="Enter your message here" required cols="30" rows="10"></textarea>
		</div>
	</div>
	<input type="submit" value="Submit review" name="send" class="btn">
</form>

<p>Give it a try!🔍Check out the videos and get hands-on! 🖐️</p>
<div class="videos">
		<iframe width="480" height="300" src="https://www.youtube.com/embed/-hsj3CkRSxk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
		<iframe width="480" height="300" src="https://www.youtube.com/embed/grXCvhNisq4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>




</section>

<?php @include 'footer.php'; ?>


<!--custom javascript file link-->
<script src="Js/server.js"></script>

</body>
</html>