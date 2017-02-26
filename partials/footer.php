<?php
  //date in mm/dd/yyyy format; or it can be in other formats as well
  $birthDate = "09/03/1995";
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
?>

<footer id="contact">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-6 col-md-offset-3">
				<img src="images/profile-pic.png" alt="Joe Gallant Profile Pic">
				<h4>Joe Gallant</h4>
				<p>I'm a <?php echo $age; ?> year old self-taught web developer from Essex. I currently work full-time for a digital agency completing all of my freelance projects in the evenings and weekends. Feel free to get in touch if you want to discuss a project!</p>
				<a href="mailto:joe@jgallant.co.uk">joe@jgallant.co.uk</a>
				<span class="tel">07984567668</span>

				<ul class="social-media">
					<li class="twitter"><a href="https://twitter.com/JoeGallant95" target="_blank"><img src="images/twitter.svg" alt="Twitter Icon" /></a></li>
					<li class="facebook"><a href="https://www.facebook.com/joe.gallant.568" target="_blank"><img src="images/facebook.svg" alt="Facebook Icon" /></a></li>
					<li class="linkedin"><a href="https://www.linkedin.com/in/jgallant/" target="_blank"><img src="images/linkedin.svg" alt="LinkedIn Icon" /></a></li>
					<li class="github"><a href="https://github.com/joe-gallant" target="_blank"><img src="images/github-logo.svg" alt="Github Icon" /></a></li>
				</ul>
			</div>

		</div>
	</div>
</footer>