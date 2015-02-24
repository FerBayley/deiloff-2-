<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php the_title(); ?></title>

	<meta name="description" content="Marmoleria Deiloff de Entre Rios">

	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width, initial-escale=1.0">
	<!-- VIEWPORT -->

	<!-- CSS -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
	<!-- CSS -->

	<!-- JS -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.48366.js" type="text/javascript"></script>
	<!-- JS -->

	<!-- FAVICON -->
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- FAVICON -->


	<!--[if lt IE 9]>
    	<script src="components/html5shiv/html5shiv.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>