<?php
	$page_title = "My Favorite Place";
	$active_page = "home";
	include "assets/includes/page_start.inc.php";
	include PATH_INC . "header.inc.php";
?>
	<div class="my-slider automatic-slider">
		<ul>
		<?php
			foreach ($images as $key => $value) { // $images defined in page_start.inc.php
    			echo "<li><figure><img src='" . URL_IMG . $key . ".jpg' alt='" . $key . "'><figcaption><a href='"
    			. $value . "'>link</a></figcaption></figure></li>";
			}
		?>
		</ul>
	</div>
		
		<p class="large-first-letter">Westeros is one of the four known continents in the world. It is comprised of seven kingdoms, which are all ruled by the protector of the realm in King's Landing. It is home to a huge number of families, known as "houses" who each have their own rich histories and culture. Westeros has been inhabited by humans for thousands of years, and so is full of ancient cities, castles, and other historic sites. Valar Morghulis!</p>

		<?php include PATH_INC . "comments.inc.php"; ?>

	</div>
	<div class="side-article">
		<h2>WHAT IS THIS?</h2>
		<p class="large-first-letter">This site explores my favorite place: the fictional continent of George R.R. Martin's A Song of Ice and Fire book series, Westeros. The goal of this site is to inform people about this wonderful place, its culture, and what to see and do when you visit. </p>
		<p class="large-first-letter">This site explores my favorite place: the fictional continent of George R.R. Martin's A Song of Ice and Fire book series, Westeros. The goal of this site is to inform people about this wonderful place, its culture, and what to see and do when you visit. </p>
		<p class="large-first-letter">This site explores my favorite place: the fictional continent of George R.R. Martin's A Song of Ice and Fire book series, Westeros. The goal of this site is to inform people about this wonderful place, its culture, and what to see and do when you visit. </p>
		<p class="large-first-letter">This site explores my favorite place: the fictional continent of George R.R. Martin's A Song of Ice and Fire book series, Westeros. The goal of this site is to inform people about this wonderful place, its culture, and what to see and do when you visit. </p>

		<?php include PATH_INC . "footer.inc.php"; ?>