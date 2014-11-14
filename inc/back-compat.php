<?php
/**
 * MyMeds back compat functionality
 *
 * Prevents MyMeds from running on WordPress versions prior to 3.6,
 * since this theme is not meant to be backward compatible beyond that
 * and relies on many newer functions and markup changes introduced in 3.6.
 *
 * @package WordPress
 * @subpackage MyMeds
 * @since MyMeds 1.0
 */

/**
 * Prevent switching to MyMeds on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since MyMeds 1.0
 */
function mymeds_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'mymeds_upgrade_notice' );
}
add_action( 'after_switch_theme', 'mymeds_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * MyMeds on WordPress versions prior to 3.6.
 *
 * @since MyMeds 1.0
 */
function mymeds_upgrade_notice() {
	$message = sprintf( __( 'MyMeds requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'mymeds' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Theme Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since MyMeds 1.0
 */
function mymeds_customize() {
	wp_die( sprintf( __( 'MyMeds requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'mymeds' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'mymeds_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.4.
 *
 * @since MyMeds 1.0
 */
function mymeds_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'MyMeds requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'mymeds' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'mymeds_preview' );
