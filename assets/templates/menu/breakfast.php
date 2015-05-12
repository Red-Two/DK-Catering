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
							<img src="<?php echo $helper::dataInclusion("assets/images/omelet.png"); ?>">
							<img src="<?php echo $helper::dataInclusion("assets/images/crepe_thumb.png"); ?>">
						</div>

						<div id="orderform">
							<form name = "breakfastform" action="breakfastprocess.php" onsubmit="return validateBreakfast();" method = "POST">
								<p>Omelet($5.99)<input type="radio" name="breakfast" value="omelet"></p>
								<p>Crepes ($4.99)<input type="radio" name="breakfast" value="crepe"></p>
								Name:<br>
								<input type="text" name="name"><br><br>
								Special Note:<br>
								<input type="text" name="snote"><br><br>
								<input type="submit" value="Submit">
							</form>
						</div>
						<div id="description">
							<p>The Omelets are made iwth the freshest eggs. It is cooked over a flat-top with 
							the best cheddar cheese and veggies. Please let us know if you would like any special requests</p>
							<p>Our Crepes are just gorgeous! They look like they shouldn't even be eaten. They are made 
							with any sort of fruit you would like. This can include, strawberries, blue berries, or peaches. 
							Please let us know if you would like any special requests</p>
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