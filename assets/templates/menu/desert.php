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
							<img src="<?php echo $helper::dataInclusion("assets/images/apple_pie.jpg"); ?>">
						</div>
						<div id="orderform">
							<form name = "desertform" action="desertprocess.php" onsubmit="return validateDesert();" method = "POST">
								<p>Apple Pie ($5.99)<input type="radio" name="desert" value="apple"></p>
								Name:<br>
								<input type="text" name="name"><br><br>
								Special Note:<br>
								<input type="text" name="snote"><br><br>
								<input type="submit" value="Submit">
							</form>
						</div>
						<div id="description">
							<p>Our Apple Pie is hot, crisp, and delicious. It is made fresh once every hour
							and our ice cream comes from the best dairy famr around. Please let us know if 
							you would like any special requests</p>
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