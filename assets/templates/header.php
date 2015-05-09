<?php $template = new Template(); ?>

<header>
	<div class="pageHeader">
		<h1><?php echo $template->getName(); ?></h1>
	</div>

	<nav>
		<div id="navMenu">&#9776;</div>

		<ul id="navTabs">
			<li><a href="index.html">Home</a></li>
			<li>Menu
			    <ul>
			        <li><a href="<?php dataInclusion("menu/breakfast.php") ?>">Breakfast</a></li>
				<li><a href="<?php dataInclusion("menu.lunch.php") ?>">Lunch</a></li>
				<li><a href="<?php dataInclusion("menu.dinner.php") ?>"">Dinner</a></li>
				<li><a href="<?php dataInclusion("menu.desert.php") ?>"">Desert</a></li>
				<li><a href="<?php dataInclusion("menu.platters.php") ?>"">Platters</a></li>
			    </ul>
			</li>
			<li>Catering
			    <ul>
			        <li><a href="<?php dataInclusion("menu.events.php") ?>"">Events</a></li>
                                <li><a href="<?php dataInclusion("menu.testimonials.php") ?>"">Testimonials</a></li>
                                <li><a href="<?php dataInclusion("menu.photos.php") ?>"">Photos</a></li>
			    </ul>
			</li>
			<li>Recipes
			    <ul>
			         <li><a href="<?php dataInclusion("menu.ours.php") ?>"">Our Recipes</a></li>
                                 <li><a href="<?php dataInclusion("menu.yours.php") ?>"">Your Recipes</a></li>
			    </ul>
			</li>
			<li>Community
			    <ul>
			         <li><a href="<?php dataInclusion("menu.forums.php") ?>"">Forums</a></li>
                                 <li><a href="<?php dataInclusion("menu.reviews.php") ?>"">Reviews</a></li>
			    </ul>
			</li>
			<li>About
			    <ul>
			     <li><a href="<?php dataInclusion("menu.lunch.php") ?>"">Our Story</a></li>
                             <li><a href="<?php dataInclusion("menu.lunch.php" ?>"">Contact Us</a></li>
			    </ul>
			</li>        
		</ul>
	</nav>
</header>
