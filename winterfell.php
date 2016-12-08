<?php
	$page_title = "Winterfell";
	$active_page = "castles";
	$local = array("eyrie", "riverrun");
	include "assets/includes/page_start.inc.php";
	include PATH_INC . "header.inc.php";
?>
		<figure>
			<img src='<?= URL_IMG?>winterfell.jpg'>
			<figcaption id='image-src'><a href=<?php echo $images["winterfell"]; ?>><?php echo $images["winterfell"]; ?></a></figcaption>
		</figure>
		
		<div id="info">
			<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		</div>
		
		<p class="large-first-letter">Winterfell is the castle of House Stark and is considered to be the capital of the north of Westeros. Built on a hot spring, this castle is a must-see if you're travelling in the north on the kingsroad. Now, you may be thinking to yourself: didn't Ramsay Bolton put Winterfell to the torch? You would be correct. However, I would argue that this only adds to the history and character of the place. Be sure to check out the crypt of Winterfell: this cavernous vault and its countless Stark inhabitants is a must see!</p>

		<?php include PATH_INC . "comments.inc.php"; ?>

	</div>
	<div class="side-article">
		<?php include PATH_INC . "local-nav.inc.php"; ?>

		<h2>House Stark</h2>
		<p class="large-first-letter">House Stark of Winterfell is an important house in the realm. In the past, Starks have served as "King of the North" and "Warden of the North", meaning that they have ruled over one of the largest regions of the continent, the north. The Starks are one of the oldest houses of Westeros, with their ancestry stretching back thousands of years.</p>

		<?php include PATH_INC . "footer.inc.php"; ?>