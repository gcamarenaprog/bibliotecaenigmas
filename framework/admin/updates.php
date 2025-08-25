<?php

$db_theme_version = get_option( 'tie_active' );
$theme_options = $saved_options = get_option( 'tie_options' );

if( version_compare( $db_theme_version, THEME_VER, '<' ) ){
	
	if( $db_theme_version < 4 ){

		$categories_obj = get_categories('hide_empty=0');
		foreach ($categories_obj as $pn_cat) {
			$category_id = $pn_cat->cat_ID;
			$new_cat['cat_sidebar']         = tie_get_option( 'sidebar_cat_'.$category_id );
			$new_cat['cat_slider']          = tie_get_option( 'slider_cat_'.$category_id  );
			$new_cat['cat_color']           = tie_get_option( 'cat_'.$category_id.'_color' );
			$new_cat['cat_background']      = tie_get_option( 'cat'.$category_id.'_background' );
			$new_cat['cat_background_full'] = tie_get_option( 'cat'.$category_id.'_background_full' );

			update_option( 'tie_cat_' . $category_id, $new_cat );
		}

		if( ! empty( $theme_options['theme_skin'] ) ){
			if( $theme_options['theme_skin'] == 'red' ){
				$theme_options['theme_skin'] = '#ef3636';
			}

			elseif( $theme_options['theme_skin'] == 'blue' ){
				$theme_options['theme_skin'] = '#37b8eb';
			}

			elseif( $theme_options['theme_skin'] == 'green' ){
				$theme_options['theme_skin'] = '#81bd00';
			}

			elseif( $theme_options['theme_skin'] == 'pink' ){
				$theme_options['theme_skin'] = '#e95ca2';
			}

			elseif( $theme_options['theme_skin'] == 'black' ){
				$theme_options['theme_skin'] = '#000';
			}

			elseif( $theme_options['theme_skin'] == 'yellow' ){
				$theme_options['theme_skin'] = '#ffbb01';
			}
			elseif( $theme_options['theme_skin'] == 'purple' ){
				$theme_options['theme_skin'] = '#7b77ff';
			}
		}

		$theme_options['post_og_cards']	        = true;
		$theme_options['slider_caption']        = true;
		$theme_options['slider_caption_length'] = 100;
		$theme_options['box_meta_score']        = true;
		$theme_options['box_meta_date']         = true;
		$theme_options['box_meta_comments']     = true;
		$theme_options['arc_meta_score']        = true;
		$theme_options['arc_meta_date']         = true;
		$theme_options['arc_meta_comments']     = true;
	}

	if( $db_theme_version < 5 ){

		if( get_option ( 'show_on_front' ) == 'posts' ){
			$post = array(
				'post_name'      => 'home',
				'post_title'     => 'Home',
				'post_status'    => 'publish',
				'post_type'      => 'page',
				'comment_status' => 'closed'
			);
			$post_id = wp_insert_post( $post, $wp_error );

			//Set the new page as Homepage
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $post_id );

			// Move Builder To pages
			$tie_get_blocks   = get_option( 'tie_home_cats' );
			$home_tabs_active = tie_get_option('home_tabs_box');
			$home_tabs        = tie_get_option('home_tabs');

			if( ! empty( $tie_get_blocks ) && is_array( $tie_get_blocks ) && tie_get_option('on_home') == 'boxes' && !empty( $post_id ) ){
				$tie_new_blocks = $tie_get_blocks;

				if( $home_tabs_active && $home_tabs ){
					$tie_tabs_block = array( 'boxid' => 'tabs_111372', 'cat' => $home_tabs, 'type' => 'tabs' );
					$tie_new_blocks[] = $tie_tabs_block;
				}
			}
			elseif( tie_get_option('on_home') != 'boxes' && !empty( $post_id ) ){

				if( tie_get_option( 'blog_display' ) == 'content' ){
					$tie_new_blocks = array( array( 'title' => '', 'number' => '15', 'offset' => '', 'pagi' => 'true', 'boxid' => 'recent_111372', 'display' => 'content', 'type' => 'recent' ));
				}elseif( tie_get_option( 'blog_display' ) == 'full_thumb' ){
					$tie_new_blocks = array( array( 'title' => '', 'number' => '15', 'offset' => '', 'pagi' => 'true', 'boxid' => 'recent_111372', 'display' => 'full_thumb', 'type' => 'recent' ));
				}else{
					$tie_new_blocks = array( array( 'title' => '', 'number' => '15', 'offset' => '', 'pagi' => 'true', 'boxid' => 'recent_111372', 'display' => 'blog', 'type' => 'recent' ));
				}
			}

			if( ! empty( $tie_new_blocks ) && !empty( $post_id ) ){
				update_post_meta( $post_id, 'tie_builder_active',	'yes' );
				update_post_meta( $post_id, 'tie_builder', $tie_new_blocks );
				update_post_meta( $post_id, 'home_exc_length',   tie_get_option('home_exc_length') );
				update_post_meta( $post_id, 'box_meta_score',    tie_get_option('box_meta_score') );
				update_post_meta( $post_id, 'box_meta_author',   tie_get_option('box_meta_author') );
				update_post_meta( $post_id, 'box_meta_date',     tie_get_option('box_meta_date') );
				update_post_meta( $post_id, 'box_meta_cats',     tie_get_option('box_meta_cats') );
				update_post_meta( $post_id, 'box_meta_comments', tie_get_option('box_meta_comments') );
				update_post_meta( $post_id, 'box_meta_views',    tie_get_option('box_meta_views') );
			}

			//Store Slider
			if ( tie_get_option( 'slider' ) && !empty( $post_id ) ) {
				update_post_meta( $post_id, 'slider' , true );
				update_post_meta( $post_id, 'slider_type',             tie_get_option('slider_type') );
				update_post_meta( $post_id, 'slider_caption_length',   tie_get_option('slider_caption_length') );
				update_post_meta( $post_id, 'slider_pos',              tie_get_option('slider_pos') );
				update_post_meta( $post_id, 'elastic_slider_effect',   tie_get_option('elastic_slider_effect') );
				update_post_meta( $post_id, 'elastic_slider_interval', tie_get_option('elastic_slider_interval') );
				update_post_meta( $post_id, 'elastic_slider_speed',    tie_get_option('elastic_slider_speed') );
				update_post_meta( $post_id, 'flexi_slider_effect',     tie_get_option('flexi_slider_effect') );
				update_post_meta( $post_id, 'flexi_slider_speed',      tie_get_option('flexi_slider_speed') );
				update_post_meta( $post_id, 'flexi_slider_time',       tie_get_option('flexi_slider_time') );
				update_post_meta( $post_id, 'slider_number',           tie_get_option('slider_number') );
				update_post_meta( $post_id, 'slider_query',            tie_get_option('slider_query') );
				update_post_meta( $post_id, 'slider_cat',              tie_get_option('slider_cat') );
				update_post_meta( $post_id, 'slider_tag',              tie_get_option('slider_tag') );
				update_post_meta( $post_id, 'slider_posts',            tie_get_option('slider_posts') );
				update_post_meta( $post_id, 'slider_pages',            tie_get_option('slider_pages') );
				update_post_meta( $post_id, 'slider_custom',           tie_get_option('slider_custom') );

				if( tie_get_option('slider_caption') ){
					update_post_meta( $post_id, 'slider_caption' , true );
				}
			}
		}

		$theme_options['theme_layout']         = 'boxed';
		$theme_options['lightbox_all']         = true;
		$theme_options['lightbox_gallery']     = true;
		$theme_options['top_search']           = true;
		$theme_options['live_search']          = true;
		$theme_options['top_social']           = true;
		$theme_options['post_views']           = true;
		$theme_options['share_post_type']      = 'counter';
		$theme_options['related_number_full']  = '4';
		$theme_options['check_also']           = true;
		$theme_options['check_also_position']  = 'right';
		$theme_options['check_also_number']    = '1';
		$theme_options['check_also_query']     = 'category';
		$theme_options['homepage_cats_colors'] = true;
		$theme_options['lazy_load']            = true;
		$theme_options['sticky_sidebar']       = true;
		
	}

	if( $db_theme_version < '5.1.0' ){

		$theme_options['mobile_menu_active']  = true;
		$theme_options['mobile_menu_search']  = true;
		$theme_options['mobile_menu_social']  = true;
		$theme_options['share_buttons_pages'] = true;
	}


	if( $db_theme_version < '5.2.0' ){

		$theme_options['reading_indicator'] = true;

		global $tie_default_texts;
		foreach ( $tie_default_texts as $value ) {
			if( !is_array( $value ) ){
				$value 				= htmlspecialchars ( $value );
				$tie_sanitize_title	= tie_sanitize_title( $value );
				$sanitize_title 	= sanitize_title    ( $value );

				if( $tie_sanitize_title != $sanitize_title ) {
					if( ! empty( $theme_options[ $tie_sanitize_title ] ) ){
						$theme_options[ $tie_sanitize_title ] = $theme_options[ $sanitize_title ];
					}
				}
			}
		}

		//Update Categories custom options
		$tie_cats_options = '';
		$categories_obj = get_categories();
		foreach ($categories_obj as $pn_cat) {
			$category_id = $pn_cat->cat_ID ;
			$old_cat_options = get_option( "tie_cat_$category_id" );
			if( $old_cat_options ){
				$tie_cats_options[ $category_id ] =  $old_cat_options;
			}
			delete_option( "tie_cat_$category_id" );
		}
		update_option( 'tie_cats_options' , $tie_cats_options );
	}


	if( $db_theme_version < '5.3.0' ){

		$renamed_options = array( 'top_menu', 'main_nav', 'mobile_menu_hide_icons', 'rss_icon' );
		foreach ( $renamed_options as $option ) {
			if( tie_get_option( $option ) ){
				unset( $theme_options[ $option ] );
			}
			else{
				$theme_options[ $option ] = true;
			}
		}
	}


	if( $db_theme_version < '5.4.0' ){

		if( empty( $theme_options['typography_general']['font'] ) ){
			$theme_options['typography_general']['font'] = 'Droid Sans:regular|700';
		}
	}


	if( $db_theme_version < '5.7.0' ){

		$theme_options['structure_data'] = true;
		$theme_options['schema_type']    = 'Article';
	}

	if( $db_theme_version < '5.8.0' ){

		$theme_options['classic_widgets_page'] = true;

		// ---
		if( ! get_option( 'arq_options' ) && get_option( 'arq_lite_options' ) ){
			update_option( 'arq_options', get_option( 'arq_lite_options' ) );
		}
		
		if( ! get_option( 'arqam_TwitterToken' ) && get_option( 'arqam_lite_TwitterToken' ) ){
			update_option( 'arqam_TwitterToken', get_option( 'arqam_lite_TwitterToken' ) );
		}

	}


	if( $db_theme_version < '5.8.3' ){

		// Remove TieLabs Social Networks
		if( ! empty( $theme_options['social'] ) && is_array( $theme_options['social'] ) ){
			foreach ( $theme_options['social'] as $key => $value ) {
				$value = strtolower( $value );
				if( strpos( $value, 'mo3aser' ) !== false || strpos( $value, 'tielabs' ) !== false ){
					$theme_options['social'][ $key ] = '#';
				}
			}
		}
	}
	

	if( $saved_options != $theme_options ){
		update_option( 'tie_options' , $theme_options );
	}

	update_option( 'tie_active', THEME_VER );
}


