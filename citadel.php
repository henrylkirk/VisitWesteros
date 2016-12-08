<?php
	$page_title = "The Citadel";
	$active_page = "attractions";
	$local = array("wall");
	include "assets/includes/page_start.inc.php";
	include PATH_INC . "header.inc.php";
?>
		<figure>
			<img src='<?= URL_IMG?>citadel.jpg'>
			<figcaption id='image-src'><a href='#'><?php echo $images["citadel"]; ?></a></figcaption>
		</figure>
		
		<div id="info">
			<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		</div>
		
		<p class="large-first-letter">Dating back to the time of the First Men, the Citadel of Oldtown is the headquarters of the land's Maesters. As I'm sure you know, the Maesters are scholars who advise the lords and royalty of the Seven Kingdoms on everything scientific, political, medical, historical, and magical. The Citadel is where young men go to be trained to become Maesters.</p>

		<?php include PATH_INC . "comments.inc.php"; ?>

	</div>
	<div class="side-article">
		<?php include PATH_INC . "local-nav.inc.php"; ?>

		<h2>Library</h2>
		<p class="large-first-letter">If you end up visiting the Citadel, be sure to check out the library. The most extensive library in the Seven Kingdoms, this library is filled floor-to-ceiling with every book imaginable. Seriously, there are more books than you could read in ten lifetimes. If you get bored of reading, I suggest checking out the city's architecture. Oldtown, being the oldest town in Westeros, has some fascinating buildings and bridges.</p>

		<?php include PATH_INC . "footer.inc.php"; ?>