<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale = 1">

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	
	<!-- Tab icons -->
	<link rel="icon" type="image/png" href="../images/iconTab.png">
	<link rel="shortcut icon" type="image/png" href="../images/iconTab.png">
	<link rel="shortcut icon" href="../Images/iconTab.png" type="image/png">
	<link rel="icon" href="../Images/iconTab.png" type="image/png">

	<title>Thank You!</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-transparent" id="thankYou">
		<div class="container">
		<a href="index.html"><img src="../images/icon.png" id="iconsNav"></a>
  		<a class="navbar-brand" href="../index.html">&nbsp&nbsp&nbspArthur Tran</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav ml-auto">
      			<li class="nav-item">
        			<a class="nav-link" href="../index.html">Home</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="../games.html">Games</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="../articles.html">Articles</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="../music.html">Music</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Porfolio</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">About Me</a>
      			</li>
      			<li class="nav-item active">
        			<a class="nav-link" href="../contact.html">Contact</a>
      			</li>
    		</ul>
		</div>
	</div>
	</nav>

	<?php

		$first = $_POST['name'];
		$last = $_POST['surname'];
		$from = $_POST['email'];
		$message = $_POST['message'];
		$to = 'tran.art13@gmail.com';
		$human = $_POST['human'];
		$subject = 'New message from: ' . $first . ' ' . $last;
		$body = $message . "\n" . 'From: ' . $from;
	?>

	<div class="text-center">
		<?php
			if($_POST['submit'] && $human == 4) {
				if(mail($to, $subject, $body)) {
					echo "Thank you! I'll be in touch";
				}
				else {	
					echo "I'm sorry, something went wrong sending your email. Go back and try again.";
				}
			}
		?>
	</div>
</body>
</html>
