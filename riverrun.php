<?php
	$page_title = "Riverrun";
	$active_page = "castles";
	$local = array("winterfell", "eyrie");
	include "assets/includes/page_start.inc.php";
	include PATH_INC . "header.inc.php";
?>
		<figure>
			<img src='<?= URL_IMG?>riverrun.jpg'>
			<figcaption id='image-src'><a href=<?php echo $images["riverrun"]; ?>><?php echo $images["riverrun"]; ?></a></figcaption>
		</figure>
		
		<div id="info">
			<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		</div>
		
		<p class="large-first-letter">Riverrun is a castle and the ancestral home of House Tully. However, after the events of the infamous Red Wedding in which Robb Stark, 5000 northern men, and Catelyn Tully were murdered, the castle went into the possession of Walder Frey.</p>
		<br />
		<p class="large-first-letter">Located in the heart of the Riverlands, this scenic area is perfect for fishing, hiking, horseback riding, or rowing. One note of warning: rumors of direwolves inhabiting the area are widespread, so keep an eye out!</p>

		<?php include PATH_INC . "comments.inc.php"; ?>

	</div>
	<div class="side-article">
		<?php include PATH_INC . "local-nav.inc.php"; ?>

		<h2>Hot Pie</h2>
		<p class="large-first-letter">If you're looking for a hearty meal, you won't have to venture far to find the Inn at the Crossroads. A popular stop for travellers, this Inn has (in my experience) the best kidney pie in the Seven Kingdoms! I also cannot recommend enough the direwolf-shaped-bread, baked by the world renowned chef Hot Pie himself.</p>

		<?php include PATH_INC . "footer.inc.php"; ?>