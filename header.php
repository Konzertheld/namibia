<!DOCTYPE html>
<html>
<head>
	<title><?php Options::out( 'title' ); ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="generator" content="Habari <?php echo Version::get_habariversion() ?>" />
	<link rel="stylesheet" type="text/css" href="<?php Site::out_url( 'theme' ); ?>/style.php" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php Site::out_url( 'theme' ); ?>/user.css" media="screen" />
	<?php echo $theme->header(); ?>
</head>

<body>
	<div id="page">
		<div class="bg_top"><div class="bg_left"><div class="corner"><div class="bg_corner"><div class="bg_right"><div class="bg_topright"><div class="bglogo"><div class="bg_bottom"><div class="bg_bottomleft"><div class="bg_bottomright">
			<div id="main">
				<?php $theme->display('sidebars'); ?>