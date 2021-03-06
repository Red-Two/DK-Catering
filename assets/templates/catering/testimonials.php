<!doctype html>

<html lang="en">
	<?php $this->includeFile("assets/templates/include/head.php"); ?>

	<body>
		<div id="content">
			<?php $this->includeFile("assets/templates/include/header.php"); ?>
			<div id="pageWrapper" class="navMenu-collapsed">
				<?php $this->includeFile("assets/templates/include/billboard.php"); ?>

				<div id="pageContent">
					<article>
						<h2 class="contentHeader"><?php echo $title; ?></h2>
						<h3>Jamie Flynt</h3>
							Rating: 5/5
							<p>I used the catering services for my grandmother's 76th birthday party. We were able to try out the mac & cheese, pork roast, mashed potatoes & gravy, and garden salad. My grandmother enjoyed the tasting very much and couldn't wait to present the food to her guests. Thank you so much for providing my family with an amazing memory.
								-Jamie Flynt
							</p>
						<hr>
						<h3>Lexii Malun</h3>
							Rating: 4.5/5
							<p>My office can never decid on one cohesive thing to eat at lunch for everyone to share. So I gathered a few of my co-workers to pitch in for an office celebration. A friend also reccommended me to the catering service. Let me tell you, I had the best eggplant parmesean I ever ate last friday. The chicken cutlets reminded me of my best friend's nonna growing up. My entire office was unbelievably satisfied. We are even thinking of doing this more frequently. Wonderful food.
								-Lexii Malun
							</p>
						<hr>
						<h3>Crow Walthier</h3>
							Rating: 5/5
							<p>When I decided I was going to host a housewarming party for myself after just purchasing my first condo, I knew I did not waqnt to cook. Cooking for more than 10 people always left me with stress and after just moving all my things across state lines I didn't want to do anymore work. Gladly the catering
							  -Crow Walthier
							</p>
					</article>
				</div>
			</div>

			<div class="breadcrumbs">
				<ul class="crumbs">
					<li><a href="<?php echo $helper->route("index"); ?>">Home</a></li>

				</ul>
			</div>
		</div>

		<?php $this->includeFile("assets/templates/include/footer.php"); ?>
	</body>
</html>