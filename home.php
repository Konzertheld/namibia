<?php include("header.php"); ?>
			<div id="mitte">
				<div id="mitte_content" class="clearfix">
					<div id="pagetitle">
						<h2><?php Options::out( 'tagline' ); ?></h2>
					</div>
					<div id="mitte_content_wrapper" class="floatbox">
						<?php foreach($posts as $post): ?>
							<?php echo $theme->content($post, 'multiple'); ?>
						<?php endforeach; ?>
					</div>
<?php include("footer.php"); ?>