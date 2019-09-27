<?php 
 require './controllers/newsController.php' ;
 

 $news = new newsController;
 $articles = $news->all();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Portofolio</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="divNje">
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
	</div>
	<div id="ndarjeNje"></div>
	<div id="divDyPortofolio">
		<div class="portofolioContainer">
		<?php foreach($articles as $news) : ?>
			<div class="lajmet">
			
				<h1><?php echo $news['title']; ?></h1>
				<img src="<?php echo $news['image']; ?>" alt=""></a> 
				<p><?php echo $news['description']; ?></p>
			</div>
			<?php endforeach;?>
			<!-- <div class="lajmet">
				<h1>Science</h1>
				<img src="lajmi2.jpg">
				<p>The Bulletin of the Atomic Scientists is a nonprofit organization concerning science and global security issues resulting from accelerating technological advances that have negative consequences for humanity. The Bulletin publishes content at both a free-access website and a bi-monthly, nontechnical academic journal.</p>
			</div>
			<div class="lajmet">
				<h1>Art</h1>
				<img src="lajmi3.jpg">
				<p>Art is a diverse range of human activities in creating visual, auditory or performing artifacts (artworks), expressing the author's imaginative, conceptual ideas, or technical skill, intended to be appreciated for their beauty or emotional power.[1][2] In their most general form these activities include the production of works of art, the criticism of art, the study of the history of art, and the aesthetic dissemination of art.</p>
			</div> -->
		</div>
	</div>
	<div id="divKater" style="margin-top: 50px; height: 100px;">
			<div class="logot">
				<img src="twiterlogo.jpg">
				<img src="youtubelogo.jpg">
				<img src="facebooklogo.jpg">
			</div>
			<p class="Copyright"></style>>Coypright (c) 2009 - 2011 kachibal.com - Portofolio Website - All Rights Reserved</p>
	</div>
</body>
</html>