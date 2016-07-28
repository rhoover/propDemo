<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package propeller
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<!-- #secondary -->
<aside>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
