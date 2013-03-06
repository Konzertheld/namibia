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
<div >
	<div id="page">
		
	<!-- creating the Border, 10 DIV  -->		
	<div class="bg05"><div class="bg02"><div class="bg04"><div class="bg06"><div class="bg08">	
	<div class="corner">
	<div class="bg01"><div class="bg03"><div class="bglogo"><div class="bg07"><div class="bg09">
	<!-- / creating the Border, 10 DIV  -->		
		
		
		<!-- begin: main content area #main -->
		<div id="main">
		<?php $theme->display('sidebars'); ?>