<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://alx.media', // Site where EDD is hosted
		'item_name'      => 'Split', // Name of theme
		'theme_slug'     => 'split', // Theme slug
		'version'        => '1.3.9', // The current version of this theme
		'author'         => 'AlxMedia', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'split' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'split' ),
		'license-key'               => __( 'License Key', 'split' ),
		'license-action'            => __( 'License Action', 'split' ),
		'deactivate-license'        => __( 'Deactivate License', 'split' ),
		'activate-license'          => __( 'Activate License', 'split' ),
		'status-unknown'            => __( 'License status is unknown.', 'split' ),
		'renew'                     => __( 'Renew?', 'split' ),
		'unlimited'                 => __( 'unlimited', 'split' ),
		'license-key-is-active'     => __( 'License key is active.', 'split' ),
		'expires%s'                 => __( 'Expires %s.', 'split' ),
		'expires-never'             => __( 'Lifetime License.', 'split' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'split' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'split' ),
		'license-key-expired'       => __( 'License key has expired.', 'split' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'split' ),
		'license-is-inactive'       => __( 'License is inactive.', 'split' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'split' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'split' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'split' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'split' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'split' ),
	)

);
