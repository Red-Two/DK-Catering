<?php $template = new Template(); ?>

<header>
<div class="pageHeader">
	<h1><?php echo $template->getName(); ?></h1>
</div>

<nav>
	<div id="navMenu">&#9776;</div>

	<ul id="navTabs">
		<li>
			<a href="index.html">Home</a>
		</li>

		<li>Menu
			<ul>
				<li><a href="<?php $template->dataInclusion("menu/breakfast.php") ?>">Breakfast</a></li>
				<li><a href="<?php $template->dataInclusion("menu/lunch.php") ?>">Lunch</a></li>
				<li><a href="<?php $template->dataInclusion("menu/dinner.php") ?>">Dinner</a></li>
				<li><a href="<?php $template->dataInclusion("menu/desert.php") ?>">Desert</a></li>
				<li><a href="<?php $template->dataInclusion("menu/platters.php") ?>">Platters</a></li>
			</ul>
		</li>

		<li>Catering
			<ul>
				<li><a href="<?php $template->dataInclusion("catering/events.php") ?>">Events</a></li>
				<li><a href="<?php $template->dataInclusion("catering/testimonials.php") ?>">Testimonials</a></li>
				<li><a href="<?php $template->dataInclusion("catering/photos.php") ?>">Photos</a></li>
			</ul>
		</li>

		<li>Recipes
			<ul>
				<li><a href="<?php $template->dataInclusion("recipes/ours.php") ?>">Our Recipes</a></li>
				<li><a href="<?php $template->dataInclusion("recipes/yours.php") ?>">Your Recipes</a></li>
			</ul>
		</li>

		<li>Community
			<ul>
				<li><a href="<?php $template->dataInclusion("community/forums.php") ?>">Forums</a></li>
				<li><a href="<?php $template->dataInclusion("community/reviews.php") ?>">Reviews</a></li>
			</ul>
		</li>

		<li>About
			<ul>
			<li><a href="<?php $template->dataInclusion("about/ourstory.php") ?>">Our Story</a></li>
			<li><a href="<?php $template->dataInclusion("about/contactus.php" ?>">Contact Us</a></li>
			</ul>
		</li>        
	</ul>
</nav>
</header>
