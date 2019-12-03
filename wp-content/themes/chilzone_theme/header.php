<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper container">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo-container">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="<?php bloginfo('stylesheet_directory')?>/images/CZ-Logo-ColorSteeps-02.png" alt="main-chilzone-logo-heartbulb" />
                        </a>
                    </div>
					<!-- /logo -->

					<!-- nav -->
                    <nav id="site-navigation" class="main-navigation">
                        <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'menu_class'     => 'main-menu',
                        ))
                        ?>
                    </nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
