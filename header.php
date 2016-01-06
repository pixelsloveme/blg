<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 ie6"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9 ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10 ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	
<head>

	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo_rss('name'); ?>" href="<?php bloginfo_rss('atom_url') ?>">

	
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div class="header">
	<div class="wrapper">
		<section>
			<header>
				<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
				
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_id' => 'main-nav', 'container_class' => 'nav', 'container' => 'nav', 'depth' => 1 ) ); ?>	

				<a href="#" class="search">
					<i class="tn tn-search"></i>
				</a>
			</header>
		</section>
	</div>
</div>