<?php
/**
 * Theme Notifier and Auto Update
 *
 */


defined( 'ABSPATH' ) || exit; // Exit if accessed directly



if( ! class_exists( 'TIELABS_THEME_UPDATER' ) ){


	class TIELABS_THEME_UPDATER {

		/**
		 * __construct
		 *
		 * Class constructor where we will call our filter and action hooks.
		 */
		function __construct( ) {

			// we moved the new_update_available inside the methods to avoid loading it in the ajax requests

			// Debug
			/*
			global  $wp_current_filter;
			echo '<br /><br /><br /><br />--------------- <br />';
			var_dump( $wp_current_filter );
			var_dump( get_site_transient( 'update_themes' ));
			*/

			// Filters
			add_filter( 'pre_set_site_transient_update_themes', array( $this, 'check_for_update' ) );

			// Actions
			add_action( 'admin_menu', array( $this, 'update_notifier_menu' ), 11 );
			add_action( 'TieLabs/after_theme_data_update', array( $this, 'update_cached_data' ) );
		}


		/**
		 * is the theme has a new update
		 */
		function new_update_available(){

			if( ! current_user_can( 'manage_options' ) ){
				return false;
			}

			$remote_theme_version = SAHIFA_VERIFICATION::get_api_data( 'version' );

			if( ! defined('THEME_VER') || empty( THEME_VER ) || version_compare( $remote_theme_version, THEME_VER, '<=' ) ){
				return false;
			}

			return true;
		}


		/**
		 * check_for_update
		 *
		 * Check if update is available.
		 * @param object $transient
		 */
		function check_for_update( $transient ){

			if( ! $this->new_update_available() ){
				return $transient;
			}

			if ( empty( $transient->checked ) || ! SAHIFA_VERIFICATION::get_api_data( 'download_url' ) ){
				return $transient;
			}

			$data = array(
				'new_version' => SAHIFA_VERIFICATION::get_api_data( 'version' ),
				'url'         => apply_filters( 'TieLabs/External/changelog', '' ) . '&via-iframe=true',
				'package'     => SAHIFA_VERIFICATION::get_api_data( 'download_url' ),
			);

			if( ! empty( $data ) ){
				$transient->response[ THEME_FOLDER ] = $data;
			}

			return $transient;
		}


		/**
		 * update_cached_data
		 *
		 * Update the theme's update URL after updating the theme data via the API
		 */
		function update_cached_data(){

			if( ! $this->new_update_available() ){
				return;
			}

			set_site_transient( 'update_themes', null );
		}


		/**
		 * update_notifier_menu
		 *
		 * Set custom menu for the updates
		 */
		function update_notifier_menu(){

			if( ! $this->new_update_available() ){
				return;
			}

			add_submenu_page(
				'panel',
				esc_html__( 'Theme Updates', 'tie' ),
				esc_html__( 'New Update', 'tie' ) . ' <span class="update-plugins tie-theme-update"><span class="update-count">'. SAHIFA_VERIFICATION::get_api_data( 'version' ) .'</span></span>',
				'administrator',
				'theme-update-notifier',
				array( $this, 'add_theme_updates_page' )
			);
		}


		/**
		 * add_theme_updates_page
		 *
		 * Add new section for the notifier in the theme options page
		 */
		function add_theme_updates_page(){


			// Make connection to refresh support
			if( isset( $_REQUEST['refresh-support'] ) && check_admin_referer( 'refresh-support', 'refresh_support_nonce' ) ){
				SAHIFA_VERIFICATION::get_api_data( '', false, true );
			}
			
			if ( is_multisite() && current_user_can('update_themes') ) {
				wp_clean_themes_cache( true );
				wp_update_themes();
			}

			echo '
				<style>
					.notice{
						display: none;
					}

					.sahifa-update-box{
						background: #fff;
						border: 1px solid #eee;
						box-shadow: 0 5px 5px rgba(0,0,0,.1);
						margin: 20px 0;
						padding: 30px;
						font-size: 15px;
					}

					.tie-message-hint{
						background-color: #FFF8DC;
						border: 0 solid #ffeb8e;
						margin: 0 !important;
						padding: 10px 20px;
						line-height: 1.9;
						color: #444;
						font-size: 15px;
					}


				</style>
			';
			echo '<div class="wrap">';
				echo '<h1 class="wp-heading-inline" style="margin-bottom: 15px;">'. esc_html__( 'New Theme Update', 'tie' ) .'</h2>';
				echo '<p class="tie-message-hint">'. esc_html__( 'There is a new version of Sahifa Theme available.', 'tie' ) .' <a href="https://tielabs.com/changelogs/?id=2819356" target="_blank">'. sprintf( esc_html__( 'View version %1$s details.', 'tie' ), SAHIFA_VERIFICATION::get_api_data( 'version' ) ).'</a></p>';

			echo '<div class="sahifa-update-box">';

			echo '<p style="font-size: 15px;">'. esc_html__( 'It is very important to keep your WordPress site always up to date with the latest version of WordPress, plugins and theme. Keeping your WordPress website updated regularly ensures that;', 'tie' ) .'<p>';

				echo '<ol>';
					echo '<li>'. esc_html__( 'Your website is secure from the threat of hackers and malware', 'tie' ). '</li>';
					echo '<li>'. esc_html__( 'Your data remains intact', 'tie' ). '</li>';
					echo '<li>'. esc_html__( 'Your website remains functional and you don’t experience downtime', 'tie' ). '</li>';
					echo '<li>'. esc_html__( 'Your website is faster and free of bugs', 'tie' ). '</li>';
					echo '<li>'. esc_html__( 'You get access to cool new features!', 'tie' ). '</li>';
				echo '</ol>';

				echo '</div>';

			echo '<div class="sahifa-update-box">';


			// ---
			$support_info = SAHIFA_VERIFICATION::support_period_info();

			if( ! empty( $support_info['status'] ) && $support_info['status'] == 'active' ){
				
				// Check the theme folder name
				if( get_template() != THEME_FOLDER ) {

					echo '<p class="tie-message-hint" style="background: #FBEAEA">';
						printf(
							esc_html__( 'The theme folder name does not match the original theme folder name %1$s%3$s%2$s, you need to chnage the theme folder name back to be able to update the theme automatically, or you can update the theme manually via FTP.', 'tie' ),
							'<strong>',
							'</strong>',
							THEME_FOLDER
						);
					echo '</p>';

				}
				else{

					$update_url = add_query_arg( array(
							'action' => 'upgrade-theme',
							'theme'  => THEME_FOLDER,
						), self_admin_url( 'update.php' ) );
					?>

					<div class="tie-theme-updates-buttons">
						<a class="tie-primary-button button button-primary button-hero" href="<?php echo esc_url( wp_nonce_url( $update_url, 'upgrade-theme_' . THEME_FOLDER ) ) ?>"><?php esc_html_e( 'Update Automatically', 'tie' ) ?></a>
					</div>

					<?php
				}
			}
			else{

				echo '<p class="tie-message-hint" style="background: #FBEAEA">';
					printf(
						esc_html__( 'Your Support Period has expired, %1$sAutomatic Theme Updates%2$s and %1$sSupport System Access%2$s have been disabled. %3$sRenew your Support Period%5$s. Once the support is renewed please click on the %1$sRefresh expiration date%2$s button below to refresh the stored data.', 'tie' ),
						'<strong>',
						'</strong>',
						'<a target="_blank" href="'. SAHIFA_VERIFICATION::purchase_link( array( 'utm_medium' => 'renew-support' ) ) .'">',
						'<a href="'. menu_page_url( 'tie-theme-welcome', false ) .'">',
						'</a>'
					);
				echo '</p>';

				?>

				<div class="tie-theme-updates-buttons" style="margin-top: 20px">
					<a class="tie-primary-button button button-primary button-hero" href="<?php echo wp_nonce_url( admin_url( 'admin.php?page=theme-update-notifier&refresh-support' ), 'refresh-support', 'refresh_support_nonce' ); ?>"><?php esc_html_e( 'Refresh expiration date', 'tie' ) ?></a>
				</div>

				<?php



				if( SAHIFA_VERIFICATION::get_api_data( 'sale_banner' ) ){
					?>
						<div class="renew-support-banner" style="margin-top: 20px">
							<a href="<?php echo SAHIFA_VERIFICATION::purchase_link( array( 'utm_medium' => 'sale-renew-support' ) ) ?>" target="_blank">
								<img src="<?php echo esc_url( SAHIFA_VERIFICATION::get_api_data( 'sale_banner' ) ) ?>" alt="" />
							</a>
						</div>
					<?php
				}
			}

			echo '</div>'; // sahifa-update-box;
			?>
			<p style="margin-bottom: 0"><?php esc_html_e( 'Please Note: Any customizations you have made to theme files will be lost. Please consider using child themes for modifications.', 'tie' ); ?></p>
			<?php

			echo '</div>'; // wrapx;

		}
	}


	add_action( 'init', 'tie_update_the_theme' );
	function tie_update_the_theme() {
		new TIELABS_THEME_UPDATER();
	}

}
