<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="divNje" style="height: 550px;">
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
							<div class="Login">
							<p class="Pmenu"><a href="login.php">Login</a></p>
							
						</div>
						<div class="Signup">
							<p class="Pmenu"><a href="Signup.php" style="margin-left: 20px;">Sign-up</a></p>
							
						</div>
						</div>
		</div>
		<div class="contactForm">
			<h3 class="LoginForm">Contact Form</h3>
			<form class="Contactforma">
				<div class="form-group">
          			<input type="text" required class="form-control" placeholder="Enter your name" />
				</div>
				<div class="form-group">
          			<input type="email" required class="form-control" placeholder="Enter your e-mail" />
				</div>
				<div class="form-group">
          			<input type="password" required class="form-control" placeholder="Enter your password" />
				</div>
				<div class="form-group">
          			<input type="textarea" style="height: 40px;" required class="form-control" placeholder="Write Something..." />
				</div>
				<div class="form-group">
          			<input type="submit"/>
				</div>
			</form>
		</div>
	</div>
	<div id="ndarjeNje"></div>
	<div id="divDy">
		<div class="contactInfo">
			<p><strong> Kachibal Inc. Kosove</strong></p>
			<p><strong>Adresa: </strong> Ahmet Krasniqi, Veranda C2.7 Hyrja II, Lokali 7, Prishtinë, Kosovë</p>
			<p><strong>Tel: </strong> +377 (0) 44 991 206</p>
			<p><strong>E-mail </strong>  contact@Kachibal.com</p>
		</div>
		<div class="contactInfo2">
			<p><strong> Kachibal Inc. Albania</strong></p>
			<p><strong>Adresa: </strong> Tirana Business Park, Rruga Rinas, Tiranë, Shqipëri</p>
			<p><strong>Tel: </strong> +377 (0) 44 991 206</p>
			<p><strong>E-mail </strong>  contact@Kachibal.com</p>
		</div>
		<img class="lokacioni"  style="margin-right: 200px;" src="Screenshot (6).png">
	</div>
	<div id="divKater" style="margin-top: 50px; height: 100px;"  >
			<div class="logot">
				<img src="twiterlogo.jpg">
				<img src="youtubelogo.jpg">
				<img src="facebooklogo.jpg">
			</div>
			<p class="Copyright"></style>>Coypright (c) 2009 - 2011 kachibal.com - Portofolio Website - All Rights Reserved</p>
		</div>
		<script src="pristine.js"></script>
		<script>
			window.onload = function () {

    		var form = document.querySelector(".Contactforma");

    		// create the pristine instance
    		var pristine = new Pristine(form);

   	   form.addEventListener('submit', function (e) {
       e.preventDefault();
       
       // check if the form is valid
       var valid = pristine.validate();
       if (valid == true){
       return alert("Keni bere Login me sukses!")
   	   } else {
   	   	return alert("Keni bere Gabim!")
   	   }
    });
};
</script>
</body>
</html>