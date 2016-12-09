
	</div>
</div>
<div class="footer">
	<a href="about.php">About this site</a>
</div>

        </div> <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

<!-- jQuery CDN -->
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<!-- Bootstrap CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Sidebar -->
<script src="<?= URL_JS ?>sidebar.js"></script>
<!-- Custom JS: Reload page to display affix correctly -->
<script src="<?= URL_JS ?>update_nav_offset.js"></script>
<!-- Handle Comments -->
<script src="<?= URL_JS ?>comments.js"></script>
<!-- Unslider -->
<script src="<?= URL_JS ?>unslider.js"></script>
<!-- When document is ready, start the slider and caption toggle -->
<script src="<?= URL_JS ?>caption_toggle.js"></script>
<script>
// load image slider when document is ready
jQuery(document).ready(function($) {
	$('.my-slider').unslider({
		autoplay: true,
		infinite: true
	});	
});
</script>

</body>
</html>