<!DOCTYPE html>
<html lang="<?php echo get_bloginfo( 'language' );?>">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="<?php echo get_bloginfo( 'charset' );?>">
	<?php wp_head();?>
</head>
<body>

  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>