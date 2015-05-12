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
						<img src="<?php echo $helper::dataInclusion("assets/images/catering1.jpg"); ?>">
						<img src="<?php echo $helper::dataInclusion("assets/images/catering2.jpg"); ?>">
						<img src="<?php echo $helper::dataInclusion("assets/images/catering3.jpg"); ?>">
						<img src="<?php echo $helper::dataInclusion("assets/images/catering4.jpg"); ?>">
						<img src="<?php echo $helper::dataInclusion("assets/images/catering5.jpg"); ?>">
						<img src="<?php echo $helper::dataInclusion("assets/images/catering6.jpg"); ?>">
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