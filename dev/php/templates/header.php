<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?> >
   <!-- Main navigation -->
    <div class="Navigation">
		<div class="Nav-wrapper">
			<div class="Toggle-wrap">
				<div class="Toggle-bar left">
					<div class="Nav-leftstroke">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brushstroke-left.png">
					</div>
				</div>
				<div class="Toggle-btn-wrap">
					<a href="#" id="js-navCollapse" class="Nav-dropdown-btn">Menu</a>
				</div>
				<div class="Toggle-bar right">
					<div class="Nav-rightstroke">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brushstroke-right.png">
					</div>
				</div>
			</div>

			<div class="Nav-mid-wrapper"></div>
			<div class="u-gridContainer">
			
				<div class="Nav-inner-leftWrap">
					<div class="Nav-mid-wrapper inner">
						<a href="/home/">
							<div class="logo-text">
								<p>Schilderbedrijf<span class="logo-name-span">Romario</span></p>
							</div>
						</a>
						
						<div class="Nav-leftstroke">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brushstroke-left.png">
						</div>			
					</div>
				</div>
				
				<div class="Nav-menu">
				    <?php include 'includes/navigation.php'; ?>
				</div>
			</div>
			
			<div class="Nav-mid-wrapper right">
				<div class="Nav-rightstroke">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brushstroke-right.png">
				</div>			
			</div>
		</div>
	</div> <!-- Main nav -->
		

	<?php if(is_front_page()) { ?>
		<div class="Header">
			<div class="Header-img">
				<div class="u-gridContainer"></div>		
			</div>
		</div> <!-- Header -->
		
	<?php } ?>