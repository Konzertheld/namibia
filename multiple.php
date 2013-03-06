<div class="multiple post <?php echo Post::type_name($content->content_type[0]); ?>
	<div class="postmeta">
		<h2 class="postmeta-title"><a href="<?php echo $content->permalink; ?>" title="<?php echo $content->title_out; ?>"><?php echo $content->title_out; ?></a></h2>
	</div>
	<div class="postcontent-container">
		<div class="postcontent">
			<?php echo $content->content_out;?>
		</div>
	</div>
</div>