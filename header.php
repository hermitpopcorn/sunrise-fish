<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<meta name="author" content="HIMADE S1 UNPAD, <?php the_author(); ?>">
	<meta name="theme-color" content="#EE3B3F">

	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
	<link href="<?php echo get_bloginfo('template_directory');?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory');?>/vendor/slick-carousel/slick.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory');?>/vendor/slick-carousel/slick-theme.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory');?>/style.css?update=1555934887" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>
