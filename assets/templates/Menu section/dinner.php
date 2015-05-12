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
						<h2 class="contentHeader">Dinner Menu</h2>
						<div id="foodpics">
		<img src="chicken_india.png">
		<img src="chicken_thumb.png">
	</div>
	<div id="orderform">
		<form name = "dinnerform" action="dinnerprocess.php" onsubmit="return validateDinner();" method = "POST">
			<p>Chicken India ($8.99)<input type="radio" name="dinner" value="india"></p>
			<p>Chicken Marsala ($7.99)<input type="radio" name="dinner" value="marsala"></p>
			Name:<br>
			<input type="text" name="name"><br><br>
			Special Note:<br>
			<input type="text" name="snote"><br><br>
			<input type="submit" value="Submit">
		</form>
	</div>
	<div id="description">
		<p>Our Chicken India is amazing. Our recipe was crafted from the 
		best  herbs and spices. Please let us know if you would like any special requests</p>
		<p>Our Chicken Marsala tastes moist and scrumptous. The sauce is made to perfection.
		 Please let us know if you would like any special requests</p>
	</div>
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