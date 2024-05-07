<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>listings</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<!--swiper css link-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php @include 'header.php'; ?>

<div class="container">

   <h1 class="heading">Explore our product catalog! 🛍️</h1>

   <input type="text" placeholder="search products" id="search-box">

   <div class="image-container">

      <div class="image" data-title="crocheted">
         <img src="img/pic13.png" alt="">
         <h3>Crocheted coaster</h3>
         <p>$2.00</p>
      </div>

      <div class="image" data-title="bag">
         <img src="img/pic14.png" alt="">
         <h3>Textured, woven bags</h3>
         <p>$10.00</p>
      </div>

      <div class="image" data-title="hairband">
         <img src="img/hairband.jfif" alt="">
         <h3> Woolen hairband</h3>
         <p>$8.00</p>
      </div>

      <div class="image" data-title="bag">
         <img src="img/pic15.png" alt="">
         <h3>Handwoven Satchel bag</h3>
         <p>$12.00</p>
      </div>

      <div class="image" data-title="bag">
         <img src="img/pic16.png" alt="">
         <h3>Woolen white bag</h3>
         <p>$10.00</p>
      </div>

      <div class="image" data-title="gloves">
         <img src="img/pic18.jfif" alt="">
         <h3>Embroidered Women's Gloves</h3>
         <p>$6.00</p>
      </div>

      <div class="image" data-title="gloves">
         <img src="img/pic19.jfif" alt="">
         <h3>Floral wrist warmers</h3>
         <p>$8.00</p>
      </div>

      <div class="image" data-title="scarf">
         <img src="img/pic21.jfif" alt="">
         <h3>Long Woolen Scarf</h3>
         <p>$8.00</p>
      </div>

      <div class="image" data-title="scarf">
         <img src="img/pic20.jfif" alt="">
         <h3>Woolen Scarf Bright Grey</h3>
         <p>$12.00</p>
      </div>

	  <div class="image" data-title="gloves">
         <img src="img/pic22.jfif" alt="">
         <h3>Woolen Finger Less Gloves</h3>
         <p>$8.00</p>
      </div>

	  <div class="image" data-title="scarf">
         <img src="img/pic17.jpg" alt="">
         <h3>Cachecol com squares</h3>
         <p>$10.00</p>
      </div>
	  <div class="image" data-title="socks">
         <img src="img/pic4.jfif" alt="">
         <h3>Woolen women socks</h3>
         <p>$3.00</p>
      </div>
      <div class="image" data-title="hat">
         <img src="img/cap.jfif" alt="">
         <h3>Woolen cap</h3>
         <p>$7.00</p>
      </div>
      <div class="image" data-title="socks">
         <img src="img/pic23.jfif" alt="">
         <h3>Women pray socks</h3>
         <p>$5.00</p>
      </div>
      <div class="image" data-title="hat">
         <img src="img/cap2.jfif" alt="">
         <h3>Beige woolen hat</h3>
         <p>$8.00</p>
      </div>

   </div>

</div>

<script>

let searchBox = document.querySelector('#search-box');
let img = document.querySelectorAll('.container .image-container .image');

searchBox.oninput = () =>{
	img.forEach(hide => hide.style.display = 'none');
   let value = searchBox.value;
   img.forEach(filter =>{
      let title = filter.getAttribute('data-title');
      if(value == title){
         filter.style.display = 'block';
      }
      if(searchBox.value == ''){
         filter.style.display = 'block';
      }
   });
};

</script>
<?php @include 'footer.php'; ?>


</div>
<!--custom javascript file link-->
<script src="Js/server.js"></script>

</body>
</html>