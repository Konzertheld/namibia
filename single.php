<?php include("header.php"); ?>
			<div id="mitte">
				<div id="mitte_content" class="clearfix">
					<div id="pagetitle">
						<h2><?php echo $post->title_out; ?></h2>
					</div>
					<div id="mitte_content_wrapper" class="floatbox">
						<?php echo $post->content_out; ?>
					</div>
<?php include("footer.php"); ?>