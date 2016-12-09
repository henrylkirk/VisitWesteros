<figure>
	<img src='<?= URL_IMG . $image_name ?>.jpg'>
	<figcaption><a href=<?php echo $images[$image_name]; ?>><?php echo $images[$image_name]; ?></a></figcaption>
</figure>

<div id='info' onclick="toggleCaption();"><span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span></div>