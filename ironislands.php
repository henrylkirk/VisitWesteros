<?php
	$page_title = "The Iron Islands";
	$active_page = "islands";
	$local = array("dragonstone");
	include "assets/includes/page_start.inc.php";
	include PATH_INC . "header.inc.php";
?>
		<figure>
			<img src='<?= URL_IMG?>ironislands.jpg'>
			<figcaption id='image-src'><a href='#'><?php echo $images["ironislands"]; ?></a></figcaption>
		</figure>
		
		<div id="info">
			<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		</div>
		
		<p class="large-first-letter">The Iron Islands are a cluster of small islands off the coast of Westeros and are home to a seafaring people known as the ironborn. The islands are ruled by House Greyjoy from their castle of Pyke (pictured above). When you're there, venture to their stony shores and witness one of their ancient religious ceremonies. It may seem barbaric to drown people for the "drowned God" to some, but I can assure you most people survive the process! As the ironmen are known for their sailing prowess, I have to recommend that you go for a sailing tour of the islands. Go down to the docks and ask anyone (literally anyone) for passage aboard their ship -they all have at least one.</p>

		<?php include PATH_INC . "comments.inc.php"; ?>

	</div>
	<div class="side-article">
		<?php include PATH_INC . "local-nav.inc.php"; ?>

		<h2>Tourneys</h2>
		<p class="large-first-letter">A common pastime in Pyke (besides raiding villages) is tourneys. A huge social event, tourneys bring together people and knights from all over the realm. Many forms of competition take place, including jousting, melees, horse-racing, and archery. The main event in the tourneys is jousting, in which two armored knights attempt to knock each other off their horses. The loser usually has to give up their armor and/or horse to the victor. While jousts are intended to be non-lethal, it is not uncommon for accidental deaths to occur.</p>

		<?php include PATH_INC . "footer.inc.php"; ?>