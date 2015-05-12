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
						<div id="foodpics">
		<img src="platter1.jpg">
		<img src="platter2.jpg">
	</div>
	<div id="orderform">
		<form name = "platterform" action="platterprocess.php" onsubmit="return validatePlatter();" method = "POST">
			<p>Small Platter ($2.99)<input type="radio" name="platter" value="small"></p>
			<p>Large Platter ($4.99)<input type="radio" name="platter" value="large"></p>
			Name:<br>
			<input type="text" name="name"><br><br>
			Special Note:<br>
			<input type="text" name="snote"><br><br>
			<input type="submit" value="Submit">
		</form>
	</div>
	<div id="description">
		<p>Our small platter provides enough food for 5-10 people.
		This platter includes foods like cheese, crackers, deli meats,
		and many more. Please let us know if you would like any special requests</p>
		<p>Our large platter provides enough food for 15-20 people.
		This platter includes foods like subs, fruit, sushi, and many more. 
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