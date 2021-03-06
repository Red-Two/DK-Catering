<?php $template = new Template(); ?>

<header>
	<div class="pageHeader">
		<h1><?php echo $helper::getWebsiteName(); ?></h1>
	</div>

	<nav>
		<div id="navMenu">&#9776;</div>

		<ul id="navTabs">
			<li>
				<a href="<?php echo $helper->route("index"); ?>">Home</a>
			</li>

			<li>
				<a href="<?php echo $helper->route("menu"); ?>">Menu</a>
				<ul>
					<li><a href="<?php echo $helper->route("menu/breakfast"); ?>">Breakfast</a></li>
					<li><a href="<?php echo $helper->route("menu/lunch"); ?>">Lunch</a></li>
					<li><a href="<?php echo $helper->route("menu/dinner"); ?>">Dinner</a></li>
					<li><a href="<?php echo $helper->route("menu/desert"); ?>">Desert</a></li>
					<li><a href="<?php echo $helper->route("menu/platters"); ?>">Platters</a></li>
				</ul>
			</li>

			<li>
				<a href="<?php echo $helper->route("catering"); ?>">Catering</a>
				<ul>
					<li><a href="<?php echo $helper->route("catering/events"); ?>">Events</a></li>
					<li><a href="<?php echo $helper->route("catering/testimonials"); ?>">Testimonials</a></li>
					<li><a href="<?php echo $helper->route("catering/photos"); ?>">Photos</a></li>
				</ul>
			</li>

			<li>
				<a href="<?php echo $helper->route("recipes"); ?>">Recipes</a>
				<ul>
					<li><a href="<?php echo $helper->route("recipes/ours"); ?>">Our Recipes</a></li>
					<li><a href="<?php echo $helper->route("recipes/yours"); ?>">Your Recipes</a></li>
				</ul>
			</li>

			<li>
				<a href="<?php echo $helper->route("community"); ?>">Community</a>
				<ul>
					<li><a href="<?php echo $helper->route("community/forums"); ?>">Forums</a></li>
					<li><a href="<?php echo $helper->route("community/reviews"); ?>">Reviews</a></li>
				</ul>
			</li>

			<li>
				<a href="<?php echo $helper->route("catering"); ?>">About</a>
				<ul>
					<li><a href="<?php echo $helper->route("about/ourstory"); ?>">Our Story</a></li>
					<li><a href="<?php echo $helper->route("about/contactus"); ?>">Contact Us</a></li>
				</ul>
			</li>        
		</ul>
	</nav>
</header>