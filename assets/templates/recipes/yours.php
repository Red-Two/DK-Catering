<!DOCTYPE html>
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
							<p>These are a few of the submitted recipes we received from our lovely customers.
							</p>
							<h3>Lemon Braised Chicken</h3>
							<p>serves 6 to 8
							<ul>
								  <li>1 pound dried small white beans, such as flageolet</li>
								  <li>2 tablespoons olive oil</li>
								  <li>4 cloves garlic, minced</li>
								  <li>1 small white onion, diced</li> 
								  <li>2 lemons</li>
								  <li>2 pounds boneless skinless chicken thighs</li>
								  <li>Kosher salt and freshly ground black pepper</li> 
								  <li>4 sprigs fresh thyme</li>
								  <li>2/3 cup finely chopped dill fronds</li>
							  </ul>

							  <ol>
								  <li>Place the dried beans in a large bowl and cover them with water. Soak for 24 hours, or at least overnight — topping up the water as the beans soak it up. Drain the beans and set aside.</li>

								  <li>Heat the oven to 350°F. In a 4-quart (or larger) Dutch oven or heavy ovenproof pot, heat the oil over medium heat. Add the garlic and onion and cook for 5 to 7 minutes, stirring frequently, until they are tender and the onion is nearly translucent. Add the drained beans and stir to coat the beans with the garlic, onion, and oil. Turn off the heat.</li>

								  <li>Take a sharp vegetable peeler and carefully peel one of the lemons. Peel it in wide strips, taking care that you remove only the top yellow layer of peel — you do not want any of the bitter white pith. Add all of this shaved lemon peel to the beans and stir. Juice the lemon and add the juice to the beans. (Reserve the second lemon for later.)</li>

								  <li>Pat the chicken dry, and lightly salt and pepper it. Lay it on top of the beans in the Dutch oven. Add water until it covers the beans and comes up to just below the chicken. Lay the thyme sprigs on top. Turn the heat to high and bring the water to a simmer. Cover the pot and put it in the oven.</li>

								  <li>Bake for 1 1/2 hours, or until the beans are very tender and creamy.</li>

								  <li>Alternative Slow Cooker Variation: Cook the garlic and onion as directed above, and stir in the soaked and drained beans. Transfer to a slow cooker insert. Pat the chicken dry, and lightly salt and pepper it. Lay it on top of the beans in the slow cooker. Add boiling water until it covers the beans and comes up to just below the chicken. Lay the thyme sprigs on top. Cook on LOW for 8 hours or until beans are tender, then proceed with the remaining steps in recipe.
								  Remove the lid from the pot, and take out the chicken and put it to the side on a plate. Remove the thyme stalks. Zest and juice the second lemon, and stir the zest and juice, along with the chopped dill fronds, into the beans. Shred or chop the chicken and place it back on top of the beans. </li>
								  </p>
							<h3>Lamb Riblets</h3>
							<ul>
								  <li>3 racks of lamb ribs weighing 3/4 pound each, each rack cut across the bone into three strips</li>
								  <li>3 tablespoons soy sauce</li>
								  <li>1 tablespoon hoisin sauce</li>
								  <li>1 tablespoon chopped garlic</li>
								  <li>1 tablespoon dry vermouth</li>
								  <li>Pinch dry mustard</li>
								  <li>Pinch five-spice powder</li>
								  <li>½ scallion, trimmed and sliced into 1/4-inch rounds</li>
								  <li>2 teaspoons rice wine vinegar</li>
								  <li>1 teaspoon tarragon vinegar</li>
							</ul>
							<ol>
								<li>With a sharp knife, cut between the ribs of the nine strips (three per rack) to divide into riblets.</li>
								<li>Mix together all remaining ingredients in a bowl to create a marinade. Add riblets and stir to coat well. Let riblets marinate at least 3 hours, or overnight in refrigerator, turning them occasionally in marinade.</li>
								<li>Preheat oven to 375 degrees.</li>
								<li>Place riblets, separated, on a roasting pan or jelly roll pan. Bake 35 to 50 minutes, depending on meatiness of ribs, basting every 10 minutes. Serve hot.</li>
							</ol>
							<h3>Oven Baked Salmon</h3>
							<ul>
								<li>12 ounce salmon fillet, cut into 4 pieces</li>
								<li>Coarse-grained salt</li>
								<li>Freshly ground black pepper</li>
								<li>Serve with chilled salad, or baked asparagus (optional)</li>
							</ul>
							<ol>
								<li>Preheat the oven to 450 degrees F.</li>
								<li>Season salmon with salt and pepper. Place salmon, skin side down, on a non-stick baking sheet or in a non-stick pan with an oven-proof handle. Bake until salmon is cooked through, about 12 to 15 minutes. Serve with the Toasted Almond Parsley Salad and squash, if desired.</li>
							</ol>
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

			<?php $this->includeFile("assets/templates/include/footer.php"); ?>
		</div>
	</body>
</html>