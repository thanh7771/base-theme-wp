<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package xenia
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();?>

<div class="page-404 text-center px-2x">
	<div class="container">
		<h1>404 - Page not found</h1>
		<h3><?php _e( 'Not all who wander are lost.', 'xenia' ); ?></h3>
		<p><?php _e( 'The page you are looking for has been moved or deleted.', 'xenia' ); ?></p>
		<a href="<?php echo home_url(); ?>"><?php _e( 'You can return to our homepage by clicking.', 'xenia' ); ?></a>
	</div>
</div>

<?php get_footer(); ?>
