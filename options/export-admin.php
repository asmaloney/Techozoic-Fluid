<?php    	
	global $themename, $shortname, $options, $tech_error;
    if ( $_REQUEST['import'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings imported.</strong></p></div>';
?>
	<div class="tech_head"><img src="<?php echo get_bloginfo('template_directory')?>/images/techozoic-logo.png" alt="Techozoic Fluid Logo" class="alignleft" style="margin-right:5px;"><h2><?php echo $themename;?> Export/Import Settings</h2>
	<div style="clear:both;"></div>
	<h3>Export Settings</h3>
	<p>Here you can export your current Techozoic settings, this is useful if you plan on copying your current layout to another blog using Techozoic.</p>
	<form method="post">
		<span class="tech_submit submit save">
			<input name="export" type="submit" value="Export Settings" />
			<input type="hidden" name="action" value="export" />
		</span>
	</form>	
	<div style="clear:both"></div>
	<h3> Import Settings</h3>
	<p>If you have an export file from Techozoic you can upload it here.  (This will overwrite any current changes)</p>
	<form enctype="multipart/form-data" encoding="multipart/form-data" method="post">
		<input type="file" name="settings" /><br />
		<span class="tech_submit submit save">
			<input type="submit" name="submit" value="Import Settings" />
		</span><br /><br />
	</form>
			<div style="clear:both"></div>
		<h4>Theme Option page for <?php echo $themename; ?>&nbsp; | &nbsp; Framework by <a href="http://clark-technet.com/" title="Jeremy Clark">Jeremy Clark</a></h4>
		</div>