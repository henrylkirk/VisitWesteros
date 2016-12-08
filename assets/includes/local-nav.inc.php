<div class="local-nav">
	<h2>MUST READ</h2>
	<?php
		$content = "";
		foreach($local as $value){
			$content .= "<a href='" . $value . ".php'><div class='local-nav-item'><img src='assets/media/" . $value . ".jpg' alt='" . $value . "'></div></a>";
		}
		echo $content;
	?>
	
</div>