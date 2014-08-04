<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="music, videos, Joseph, John, Robert, Cardarelli, JoeJohnRobert, prog, punk, turkish, psych, folk, programmer, musician">
		<meta name="description" content="Music and other things of interest...">
		<title>JoeJohnRobert Contact</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/device_styles.css">	
	</head>
	<div id="border">
		<body>
			<div id="social">
			<a class="twitt" href="#" target="_blank" title="twitter">Twitter</a>
			<a class="insta" href="#" target="_blank" title="instagram">Facebook</a>	
		</div>
			<header>
				<div id="nav_bar">
					<div class="wrapper">
						<nav>
							<a href="index.html">Home</a>
							<a href="music.html">Music</a>
							<a class="selected" href="contact.html">Contact</a>
						</nav>
					</div>		
				</div>	
				<div id="logo" class="clearfix">
						<div class="wrapper">
							<h1>JoeJohnRobert</h1>
							<!--	<h2>Who's that boy with the sandwich in his hand?</h2> -->
							<h4>Music and other things of interest...</h4>
						</div>	
					</div>	
				<!-- <hgroup> -->
				<div class="wrapper">
					<!-- <h1>Hit me up!</h1> -->
				</div>	
				<!-- </hgroup>	-->
			</header>
			<div class="wrapper">	
				<section class="shadow">
					<form method="post" action="mailer.php">
						Name<input type="text" name="name" placeholder="CAPTAIN SENSIBLE" required> 
			 			Email<input type="email" name="email" placeholder="CATLOVER@GEOCITIES.COM" required>
			 			Message<textarea rows="10" name="message" placeholder="YOUR SITE ROCKS!"></textarea>
			 			<input type="text" name="verify" class="verif_box" placeholder="VERIFY YOU'RE HUMAN" required> 
						<img class="verif_img" src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image">
			 			<input type="submit" value="Send!">	
			 		</form>
			 	</section>
			</div> 		
	 		<footer>
				Who's that boy with the sandwich in his hand?
			</footer>	
		</body>
	</div>	
</html>
