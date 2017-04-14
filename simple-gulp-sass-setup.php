<!DOCTYPE html>
<html lang="en">

<?php
$title = 'My simple Gulp and SASS setup';
$date = '14th April 2017';
$dateAlt = '2017-04-14';
$desc = 'Gulp is a great tool for front end developers, this article is showing my simple setup for compiling SASS using Gulp.';
$image = 'article-assets/bg/simple-gulp-sass-setup-social.jpg';
$imageHeight = '1280';
$imageWidth = '853';

$imagebg = 'article-assets/bg/simple-gulp-sass.jpg';
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$hashtags = "gulp,sass,front-end,webdesign";

include('article-partials/article-head.php');
include('partials/header.php'); ?>

	<div class="site_wrapper content">

	<article itemscope itemtype="http://schema.org/BlogPosting" itemprop="mainEntityOfPage">

		<?php include('article-partials/header-blog.php'); ?>

		<div class="container-fluid article-wrapper" itemprop="articleBody">

			<?php include('article-content/gulp-content.php'); ?>
		
			<?php include('article-partials/share-buttons.php'); ?>

		</div>
	</article>

	<?php include('partials/project.php'); ?>
	<?php include('partials/footer.php'); ?>
	
	</div>

	<?php include('partials/mob-menu.php'); ?>
	
<script async src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script async src="js/all.js"></script>

</body>
</html>