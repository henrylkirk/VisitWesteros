<?php
	$page_title = "The Eyrie";
	$active_page = "castles";
	$local = array("winterfell", "riverrun");
	include "assets/includes/page_start.inc.php";
	include PATH_INC . "header.inc.php";
?>
		<figure>
			<img src='<?= URL_IMG?>eyrie.jpg'>
			<figcaption id='image-src'><a href='#'><?php echo $images["eyrie"]; ?></a></figcaption>
		</figure>
		
		<div id="info">
			<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		</div>
		
		<p class="large-first-letter">The Eyrie is an extremely old castle and the home of House Arryn. Located in the Vale of Arryn, this castle sits on a mountain, thousands of feet above the valley below. Made of beautiful white stone, this castle is unlike any other in the realm. It is particularly known for its impregnability: to reach it, an invading army would have pass through a number of gates and extremely narrow walkways.</p>

		<?php include PATH_INC . "comments.inc.php"; ?>

	</div>
	<div class="side-article">
		<?php include PATH_INC . "local-nav.inc.php"; ?>

		<h2>Goats</h2>
		<p class="large-first-letter">The reason The Eyrie is one of my favorite places is the goats. There must be hundreds of goats in The Vale, and they let you ride them. Yes, you read that right: they let you ride their goats. In fact, the goats are the only things that can navigate the treacherously narrow paths up the mountain to The Eyrie. Have fun!</p>

		<?php include PATH_INC . "footer.inc.php"; ?>