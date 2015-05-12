<!doctype html>

<html lang='en'>
	<?php $this->includeFile("assets/templates/include/head.php"); ?>

	<body>
		<div id="content">
			
			<?php $this->includeFile("assets/templates/include/header.php"); ?>

			<div id="pageWrapper" class="navMenu-collapsed">
				<?php $this->includeFile("assets/templates/include/billboard.php"); ?>

				<div id="pageContent">
					<div id="feed">
                         <a class="twitter-timeline" href="https://twitter.com/hashtag/recipe" data-widget-id="597990408296108032">#recipe Tweets</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
					</div>
					<article>
						<h2 class="contentHeader"><?php echo $title; ?></h2>
						<h4>Welcome! We are Donna and Karen, sisters, mothers, and chefs! </h4>

						<p>We encourage you to let us cook for you or your family when you want a real,
							home cooked meal. As parents, we both have a long history of cooking for our families,
							and with the kids all grown up we want to continue to bring delicious home cooking to
							the families around us.</p>

						<p>Feel free to peruse our menu any time of the day, we provide delivery
							services for breakfast, lunch and dinner! If last minute plans change and you
							need light snacks for a gathering, we also provide platter deliveries.</p>

						<p>
							We are also beginning a catering service for our neighbors. We grew up in this 
							community and feel that we want to give back to your families now. Catering services
							will include many of our dishes and platters, and we will be there cooking as if it was
							our family.
						</p>
					</article>
				</div>
			</div>

			<div class="breadcrumbs">
				<ul class="crumbs">
					<li><a href="index.html">Home</a></li>
				</ul>
			</div>

			<?php $this->includeFile("assets/templates/include/footer.php"); ?>
		</div>
	</body>
</html>