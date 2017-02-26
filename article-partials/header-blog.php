<section id="hero" class="article-header hero" style="background-image:url(<?php echo $imagebg; ?>)">

	<div class="overlay"></div>
	<div class="text">
		<h1 class="title" itemprop="name headline"><?php echo $title; ?></h1>
		<p class="date"><?php echo $date; ?></p>
		<meta itemprop="author" content="Joe Gallant">
		<meta itemprop="datePublished dateModified" content="<?php echo $dateAlt; ?>">
		<div itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
		  <meta itemprop="url" content="http://jgallant.co.uk/<?php echo $image; ?>">
		  <meta itemprop="height" content="<?php echo $imageHeight; ?>">
	      <meta itemprop="width" content="<?php echo $imageWidth; ?>">
		</div>
	</div>

</section>
