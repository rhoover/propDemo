<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package propeller
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  <?php
    $criticalstyles = get_template_directory() . '/style-critical.css';
    echo file_get_contents($criticalstyles);
  ?>
</style>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Icons for IE 11, Chrome, Firefox, Safari, Opera -->
<link rel="icon"
  href="<?php  echo esc_url( get_template_directory_uri() . '/icons/favicon-16.png' ); ?>" sizes="16x16" type="image/png">
<link rel="icon"
  href="<?php  echo esc_url( get_template_directory_uri() . '/icons/favicon-32.png' ); ?>" sizes="32x32" type="image/png">
<link rel="icon"
  href="<?php  echo esc_url( get_template_directory_uri() . '/icons/favicon-48.png' ); ?>" sizes="48x48" type="image/png">
<link rel="icon"
  href="<?php  echo esc_url( get_template_directory_uri() . '/icons/favicon-62.png' ); ?>" sizes="62x62" type="image/png">
<link rel="icon"
  href="<?php  echo esc_url( get_template_directory_uri() . '/icons/favicon-192.png' ); ?>" sizes="192x192" type="image/png">

<!-- Because Microsoft Exists, SAMF's -->
<meta name="msapplication-TileImage" content="<?php  echo esc_url( get_template_directory_uri() . '/icons/favicon-192.png' ); ?>">
<meta name="msapplication-TileColor" content="#222222">

<!-- Apple iOS Add To Homescreen and StandAlone Mode -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="VermontBrewers">
<meta name='apple-touch-fullscreen' content='yes'>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- Chrome for Android Add To Homescreen -->
<meta name="mobile-web-app-capable" content="yes">

<!-- Chrome for Android Tool Bar Color -->
<meta name="theme-color" content="#56721C">

<?php wp_head(); ?>
</head>

<body>

  <!-- #masthead -->
	<header class="site-header">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>

    <!-- #site-navigation -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'propeller' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
	</header>

  <!-- #content wrapper-->
	<main class="main-wrapper">
    <p>Base URL Is: <?php echo site_url(); ?></p>
