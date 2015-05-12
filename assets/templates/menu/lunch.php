<!doctype html>

<html lang='en'>
	<?php $this->includeFile("assets/templates/include/head.php"); ?>

	<body>
		<div id="content">
			
			<?php $this->includeFile("assets/templates/include/header.php"); ?>

			<div id="pageWrapper" class="navMenu-collapsed">
				<?php $this->includeFile("assets/templates/include/billboard.php"); ?>

				<div id="pageContent">
					<article>
						<h2 class="contentHeader"><?php echo $title; ?></h2>
						<div id="foodpics">
							<img src="<?php echo $helper::dataInclusion("assets/images/fish_taco.png"); ?>">
							<img src="<?php echo $helper::dataInclusion("assets/images/pasta_salad.png"); ?>">
						</div>
						<div id="orderform">
							<form name = "lunchform" action="lunchprocess.php" onsubmit="return validateLunch();" method = "POST">
								<p>Fish Taco ($6.99)<input type="radio" name="lunch" value="fish"></p>
								<p>Pasta Salad ($5.99)<input type="radio" name="lunch" value="pasta"></p>
								Name:<br>
								<input type="text" name="name"><br><br>
								Special Note:<br>
								<input type="text" name="snote"><br><br>
								<input type="submit" value="Submit">
							</form>
						</div>
						<div id="description">
							<p>Our Fish Tacos are awesome. They are made with fresh cod which are battered and baked
							to perfection. We then use flour tortilla's with fresh veggies as toppings Please let us know if you would like any special requests</p>
							<p>Our Pasta Salad is very tastey. It is made with bow-tie pasta, spinach, tomatoes, and your choice of dressing.
							It is a light meal but very filling. Please let us know if you would like any special requests</p>
						</div>
					</article>
				</div>
			</div>

			<div class="breadcrumbs">
				<ul class="crumbs">
					<li><a href="<?php echo $helper->route("index"); ?>">Home</a></li>
				</ul>
			</div>

			<?php $this->includeFile("assets/templates/include/footer.php"); ?>
		</div>
	</body>
</html>