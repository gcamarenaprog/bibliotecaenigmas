<?php

define ('THEME_NAME',   'Sahifa' );
define ('THEME_FOLDER', 'sahifa' );
define ('THEME_VER',    '5.8.5'  );	//DB Theme Version
define ( 'SAHIFA_ID',   '2819356' );

define( 'NOTIFIER_CHANGELOG_URL', "http://tielabs.com/changelogs/?id=2819356" );
define( 'DOCUMENTATION_URL',      "http://themes.tielabs.com/docs/".THEME_FOLDER );

if ( ! isset( $content_width ) ) $content_width = 618;

// Main Functions
require_once ( get_template_directory() . '/framework/functions/theme-functions.php');
require_once ( get_template_directory() . '/framework/functions/common-scripts.php' );
require_once ( get_template_directory() . '/framework/functions/mega-menus.php'     );
require_once ( get_template_directory() . '/framework/functions/pagenavi.php'       );
require_once ( get_template_directory() . '/framework/functions/breadcrumbs.php'    );
require_once ( get_template_directory() . '/framework/functions/tie-views.php'      );
require_once ( get_template_directory() . '/framework/functions/translation.php'    );
require_once ( get_template_directory() . '/framework/widgets.php'                  );
require_once ( get_template_directory() . '/framework/admin/framework-admin.php'    );
require_once ( get_template_directory() . '/framework/shortcodes/shortcodes.php'    );

if( tie_get_option( 'live_search' ) ){
	require_once ( get_template_directory() . '/framework/functions/search-live.php');
}



/**
 * By Fouad Badawy @mo3aser
 * 
 * Ensure users upgrade to the Genuine ACF plugin that we trust the team who developed it and actively maintain it, not some pirated version by @photomatt
 */
 if ( is_admin() && class_exists( 'ACF' ) && defined( 'ACF_BASENAME' ) && ! class_exists( '\ACF\Upgrades\PluginUpdater' ) && ( ( function_exists( 'acf_is_pro' ) && ! acf_is_pro() ) || ! function_exists( 'acf_is_pro' ) ) ) {

	require get_template_directory() . '/framework/class-acf-updater.php';

	add_action( 'admin_init', 'sahifa_acf_genuine_updater' );
	function sahifa_acf_genuine_updater() {
		new \ACF\Upgrades\PluginUpdater();
	}
}

/**
 * Temperory fix for WordPress 6.7 bug wich prevent the website from loading the translations files.
 * Will be removed later
 */
add_action( 'init', 'sahifa_wp67_temp_lang_fix' );
function sahifa_wp67_temp_lang_fix() {

	global $l10n, $wp_textdomain_registry;
	$domain = 'tie';
	$locale = get_locale();

	$wp_textdomain_registry->set($domain, $locale, get_template_directory() . '/languages');

	if ( isset( $l10n[ $domain ] )) {
		unset( $l10n[ $domain ] );
	}

	load_theme_textdomain($domain, get_template_directory() . '/languages');
};
