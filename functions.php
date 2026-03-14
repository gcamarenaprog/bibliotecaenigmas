<?php
  /*
    Template Name: 	Biblioteca Enigmas
    Author: 				Guillermo Camarena
    Section: 				template
    File name: 			functions.php
    Date: 					24-03-2024
    Description: 		This file contains the template functions.
  */
define ('THEME_NAME',   'Sahifa' );
define ('THEME_FOLDER', 'sahifa' );
define ('THEME_VER',    '5.8.2'  );	//DB Theme Version
define ('SAHIFA_ID',   '2819356' );
define ('THEME_SUBNAME', 'Biblioteca Enigmas' );

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

if( tie_get_option( 'live_search' ) )
	require_once ( get_template_directory() . '/framework/functions/search-live.php');

// Library
require_once ( get_template_directory() . '/library/library-functions.php'    );
