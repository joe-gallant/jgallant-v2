<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog - Joe Gallant - Freelance Web Designer / Developer in Essex</title>
	<meta name="description" content="Hi, my name is Joe. I am a web designer / developer based in Essex. I specialise in building bespoke Wordpress sites, totally custom to the clients needs. If you are interested in my services please feel free to get in touch, I would love to discuss what you need doing!">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="css/style.css">

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-85888402-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
<body class="blog">

	<?php include('partials/header.php'); ?>

	<div class="site_wrapper content">

	<section class="hero blogTitle">
		<div class="text">
			<h1 class="title">blog</h1>
		</div>
	</section>

	<section class="blog-wrapper">
		
		<div class="container-fluid">
			
			<article>
				<a class="containerlink" href="burger-menu-html-css-js">
					<div class="row">
						<div class="col-md-7">
							<h2 class="title">Burger Menu - HTML, CSS & JS</h2>
							<span class="date">26th Feb 2017</span>
							<p class="excerpt">Burger menus are a great way to indicate a trigger for a sites navigation. In this article I will share how I create my menu icons using HTML, CSS and JS. Below is an example of what can be achieved with just a few lines of code.</p>
						</div>
						
						<div class="col-md-5">
							<img src="article-assets/sm/burger-sm.jpg" alt="Burger Menu">
						</div>
					</div>
				</a>
			</article>

		</div>

	</section>


	<?php include('partials/project.php'); ?>
	<?php include('partials/footer.php'); ?>
	
	</div>

	<?php include('partials/mob-menu.php'); ?>
	
<script async src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script async src="js/all.js"></script>

</body>
</html>