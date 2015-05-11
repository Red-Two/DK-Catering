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
						<h2 class="contentHeader">Home Page</h2>
						<p>I have decided to do my project about my home. Why my home? Because it's near and dear to me
						and while describing the place, I can include very funny and interesting stories about me and my
						siblings growing up there!</p>

						<p>Throughout your experience at this website, you will learn about the interesting parts of
						different places throughout my home and the stories from my childhood that really make them
						quite significant to me. Hopefully you will find the content enjoyable to read!</p>

						<p>To get started, choose an area above. Have fun!</p>
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