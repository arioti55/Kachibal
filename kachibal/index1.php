<!DOCTYPE html>
<html>
<head>
	<title>Kachibal</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="Content">
		<div id="divNje">
			<div class="Container">
				<div class="Navigation">
					<div class="Logo">
						<p class="plogo"><b>Kachibal</b></p>
						<p class="psleugon">Put your sleugon here 2011</p>
					</div>
						<label for="toggle">&#9776;</label>
						<input type="checkbox" id="toggle">
					<div class="Menu">
						<div class="Home">
							<p class="Pmenu"><a href="index.php">Home</a></p>
							<p class="Smenu">All News Here</a></p>	
						</div>
						<div class="About">
							<p class="Pmenu2"><a href="aboutUs.php">About us</a></p>
							<p class="Smenu2">Resume About</p>
						</div>
						<div class="Portofolio">
							<p class="Pmenu"><a href="Portofolio.php">Portofolio</a></p>
							<p class="Smenu">All News Here</p>
						</div>
						<div class="Contact">
							<p class="Pmenu"><a href="Contact.php">Contact</a></p>
							<p class="Smenu">All News Here</p>
						</div>
						<div class="logout">
							<p class="Pmenu"><a href="index.php">Log-out</a></p>
						</div>
						
					</div>
				</div>
				<div class="slideshow">
					<div class="slides">
						<img src="Slider1.jpg" width=100%>
					</div>
					<div class="slides">
						<img src="Slider2.jpg" width=100%>
					</div>
					<div class="slides">
						<img src="Slider1.jpg" width=100%>
					</div>
					<div class="slides">
						<img src="Slider2.jpg" width=100%>
					</div>
					<div style="text-align: left; margin-left: 30px; margin-top: -30px;">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
					<span class="dot" onclick="currentSlide(4)"></span>
				</div>
				</div>
				
			</div>
 		</div>
		<div id="divDy">
			<p class="contentText">WordPress is web software you can use to create a beautiful website or blog. 
				Like to say that WordPress is both free and priceless at the same time!</p>
			<p class="contentText2">Stunning 3D Effects, 20 Unique Page Layouts, 70+ Shortcodes, and 20 Gorgeous Color Variations 		are just some of the features that make Karma the premiere WordPress Theme.</p>
			<img src="button1.jpg"<a href="https://www.google.com"></a>>
			<p class="btnDescription">WordPress Theme. All Details Are Here.</p>
		</div>
		<div class="ndarjeNje">
			<p class="text1">Loren ipsum is simply a dummy text of the printing industy. Loren ipsum has been the industys standard dummy text ever --- when an unknow printer took a gallery of type and screenshot display.</p>
		</div>
		<div id="divTre">
			<div class="CurrentP">
				<p>Current Project</p>
				<p>All the new projects are here</p>
			</div>
			<div class="squaresContainer">
				<div class="box"><img src="foto1.jpg" width=205px; height=125px;></div>
				<div class="box"><img src="foto2.jpg" width=202px; height=124px;></div>
				<div class="box"><img src="foto3.jpg" width=202px; height=124px;></div>
				<div class="box"><img src="foto4.jpg" width=202px; height=124px;></div>
			</div>
			<div class="newsContainer">
				<div class="News"><p>Loren ipsum is simply a dummy text of the printing industy. Loren ipsum has been the industys</p><strong>+ read more</strong>
				</div>
				<div class="News"><p>Loren ipsum is simply a dummy text of the printing industy. Loren ipsum has been the industys</p><strong>+ read more</strong></div>
				<div class="News"><p>Loren ipsum is simply a dummy text of the printing industy. Loren ipsum has been the industys</p><strong>+ read more</strong></div>
				<div class="News"><p>Loren ipsum is simply a dummy text of the printing industy. Loren ipsum has been the industys</p><strong>+ read more</strong></div>
			</div>
		</div>
		<div class="ndarjeDy">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Portofolio</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			<p>Designed by Bard Kachibal</p>
		</div>
		<div id="divKater">
			<div class="logot">
				<img src="twiterlogo.jpg">
				<img src="youtubelogo.jpg">
				<img src="facebooklogo.jpg">
			</div>
			<p class="Copyright">Coypright (c) 2009 - 2011 kachibal.com - Portofolio Website - All Rights Reserved</p>
		</div>
	</div>
	<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>	
</body>
</html>
