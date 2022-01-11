<script>
	$(document).ready(function(){
			 var unloggedinMenus = <?php echo json_encode(ossn_plugin_view('unloggedinmenu/menus'));?>;	
			 $('body').prepend(unloggedinMenus);
	 });
</script>