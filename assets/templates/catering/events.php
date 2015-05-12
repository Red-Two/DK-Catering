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
						<h2>Booked Dates</h2>
						<p>These are all the dates we currently have booked for events. We hope you can contact us for scheduling on any free date that fits your event.
						</p>
						<h3>5/29/15</h3>
						<h3>6/5/15</h3>
						<h3>6/13/15</h3>
						<h3>6/22/15</h3>
						<hr>
						<h2></h2>
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