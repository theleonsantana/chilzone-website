<?php
/**
 * Displays the custom transitional logo for ChilZone
 *
 * @package WordPress
 * @subpackage cz-template
 * @since 1.0.0
 */
?>
<div class="logo-container">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img src="<?php bloginfo('stylesheet_directory')?>/images/CZ-Logo-ColorSteeps-01.png" alt="main-chilzone-logo-heartbulb" />
        
    </a>
 </div>
 <div class="site-branding">
 <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
 <?php if ( has_nav_menu( 'primary' ) ) : ?>
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
                'theme_location'  => 'primary',
                'menu_class'     => 'main-menu',
            ))
			?>
		</nav><!-- #site-navigation -->
	<?php endif; ?>
</div>