
	</div>
</div>
<div class="footer">
	<a href="about.php">About this site</a>
</div>

        </div> <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

<!-- jQuery -->
<script src="assets/scripts/jquery-3.1.1.min.js"></script>
<!-- Bootstrap -->
<script src="assets/scripts/bootstrap.min.js"></script>
<!-- Sidebar -->
<script src="assets/scripts/sidebar.js"></script>
<!-- Custom JS: Reload page to display affix correctly -->
<script src="assets/scripts/update_nav_offset.js"></script>
<!-- Handle Comments -->
<script src="assets/scripts/comments.js"></script>
<!-- Unslider -->
<script src="assets/scripts/unslider.js"></script>
<script>
		jQuery(document).ready(function($) {
			$('.my-slider').unslider({
				autoplay: true,
				infinite: true
			});	
			
			$( "#info" ).click(function() { // Toggle image caption
				if($("figcaption").css("visibility") == "hidden"){
					$("figcaption").css("visibility", "visible");
				} else {
					$("figcaption").css("visibility", "hidden");
				}
			});
		});
</script>

</body>
</html>