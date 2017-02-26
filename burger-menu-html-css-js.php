<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Burger Menu - HTML, CSS & JS';
$date = '26th Febuary 2017';
$dateAlt = '2017-02-26';
$desc = 'Burger menus are a great way to indicate a trigger for a sites navigation. In this article I will share how I create my menu icons using HTML, CSS and JS. Below is an example of what can be achieved with just a few lines of code.';
$image = 'article-assets/bg/burger.jpg';
$imageHeight = '1280';
$imageWidth = '853';

include('article-partials/article-head.php');
include('partials/header.php'); ?>

	<div class="site_wrapper content">

	<article itemscope itemtype="http://schema.org/BlogPosting" itemprop="mainEntityOfPage">

		<?php include('article-partials/header-blog.php'); ?>

		<div class="container-fluid article-wrapper" itemprop="articleBody">

			<?php include('article-content/burger-menu-html-css-js.php'); ?>
			
		</div>

	</article>

	<?php include('partials/project.php'); ?>
	<?php include('partials/footer.php'); ?>
	
	</div>

	<?php include('partials/mob-menu.php'); ?>
	
<script type="text/javascript" src="js/skrollr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/prism.js"></script>
<script src="js/app.js"></script>

</body>
</html>