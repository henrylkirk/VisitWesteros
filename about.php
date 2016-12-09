<?php
	$page_title = "About";
	$active_page = "";
	include "assets/includes/page_start.inc.php";
	include PATH_INC . "header.inc.php";
?>
		<h3>Final Requirements:</h3>
		<ul>
			<li><h3>Corrections:</h3></li>
			<li>Images now have in-page citations.</li>
			<li>Fixed issue where pixels of content were above nav.</li>
			<li>Made images smaller.</li>
			<li>Site title and page title now in title tags.</li>
		</ul>
		<br />
		<ul>
			<li><h3>Responsive Design:</h3></li>
			<li>(Original breakpoints are in files custom.css and nav.css)</li>
		</ul>
		<br />
		<ul>
			<li><h3>Comments Form:</h3></li>
			<li>assets/includes/comments.inc.php, assets/scripts/addComment.php, assets/scripts/comments.js</li>
			<li>Javascript validation happens in comments.js in the 'addMessage' function.</li>
		</ul>
		<br />
		<ul>
			<li><h3>Original JavaScript:</h3></li>
			<li>assets/scripts/update_nav_offset.js</li>
			<li>This script sets the nav 'offset' for desktop/mobile. Also reloads the page if the breakpoint is passed to fix 'affix' issue in the navbar. Without this script, the navbar is not fixed at the top on mobile sized screens when window is adjusted from larger size.</li>
		</ul>
		<br />
		<ul>
			<li><h3>DHTML:</h3></li>
			<li>assets/scripts/caption_toggle.js</li>
			<li>Located at the bottom left-hand corner of the large images on every page (Click on the 'i' icon).</li>
			<li>I created a function to change the style of the figcaptions to toggle between hiding and displaying them.</li>
		</ul>
		<br />
		<ul>
			<li><h3>Extras:</h3></li>
			<li>Off-side sidebar on mobile (Not original, but style modifications were made).</li>
			<li>Favicon</li>
			<li>AJAX Comments</li>
			<li>Original php script to fill local navigation. (located in assets/includes/local-nav.inc.php)</li>
			<li>'Affix' navbar on 768px+ screens</li>
			<li>Spectacular design (if I do say so myself)</li>
			<li>Image slideshow on index.php. The script for this is unoriginal, but the css is original -this includes the 'info' button, caption, and arrows. The php foreach loop used to fill the slideshow is also original.</li>
		</ul>
		<br />
		<ul>
			<li><h3>Sources:</h3></li>
			<li><a href="http://bootsnipp.com/snippets/featured/fancy-sidebar-navigation">Sidebar</a></li>
			<li><a href="http://unslider.com/">Image Slideshow</a></li>
		</ul>



		<br />
		<br />

		<h3>Midterm Requirements:</h3>
		<p>This site has a consistent color scheme throughout as well as a consistent font  which both compliment the topic. This site features a custom logo which adjusts via media queries. On top of this, the navigation, layout, and pictures adjust with the screen size to make the site more dynamic.</p>
		<h3>Organization of Information</h3>
		<p>The content on this page is split up into a main-article and a side-article. Each page has a picture of the location it features, as well as headers to identify the topics covered. This format is applied to every page. </p>
		<h3>Content</h3>
		<p>Content is all origin and was created for this site. All pages have enough information to keep a reader interested without seeming crowded or requiring a huge time commitment for the user. Content is thoughtful and thorough.</p>
		<h3>Navigation</h3>
		<p>Every page of this site is accessible through the global navigation, except the "About" page which is located in the footer. The navigation resizes with the screen size, fits with the site's color scheme, and avoids being too crowded with dropdown links.</p>
		<h3>HTML5 and CSS</h3>
		<p>Elements are broken into classes for styles to be applied. Duplicate code is kept to a minimum with shtml and grouping in the CSS. Elements are formated with padding and margins. The pages cleanly alter as the screen size changes. The site contains the necessary 10 pages and an about page. The site validates. </p>


	</div>

		<?php include PATH_INC . "footer.inc.php"; ?>