<?php

add_action( 'widgets_init', 'tie_flickr_photos_widget' );
function tie_flickr_photos_widget() {
	register_widget( 'tie_flickr_photos' );
}
class tie_flickr_photos extends WP_Widget {

	public function __construct(){
		$widget_ops 	= array( 'classname' => 'flickr-widget' );
		$control_ops 	= array( 'width' => 250, 'height' => 350, 'id_base' => 'flickr_photos-widget' );
		parent::__construct( 'flickr_photos-widget', THEME_NAME .' - '.__( 'Flickr' , 'tie') , $widget_ops, $control_ops );
	}

	public function widget( $args, $instance ) {
		extract( $args );

		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

		echo $before_widget;
		if ( $title )
			echo $before_title;
			echo $title ; ?>
		<?php echo $after_title; ?>

		<?php
				
			if( ! empty( $instance['flickr_id'] ) ) {
			
			$transient_key = 'tie_flickr_cache_' . $instance['flickr_id'];
			$flickr_data   = get_transient( $transient_key );

			if ( empty( $flickr_data ) ) {
				$flickr_data = array();
				$rss = 'https://api.flickr.com/services/feeds/photos_public.gne?id='. $instance['flickr_id'] .'&lang=en-us&format=rss_200';
				$rss = fetch_feed( $rss );

				if ( ! is_wp_error( $rss ) ) {
					$maxitems  = $rss->get_item_quantity( 20 ); // 20 is the max in the RSS response 
					$rss_items = $rss->get_items( 0, $maxitems );

					foreach ( $rss_items as $item ) {
						$temp = array();
						$temp['url'] = esc_url( $item->get_permalink() );
						$temp['title'] = esc_html( $item->get_title() );
						$content =  $item->get_content();
						preg_match_all( "/<IMG.+?SRC=[\"']([^\"']+)/si", $content, $sub, PREG_SET_ORDER );
						$photo_url = $sub[0][1]; //str_replace( '_m.jpg', '_t.jpg', $sub[0][1] );
						$temp['src'] = esc_url( $photo_url );
						$flickr_data[] = $temp;
					}

					set_transient( $transient_key, $flickr_data, 60 * 60 * 24 );
				}
			}

			if( ! empty( $flickr_data ) ){

				$no_of_photos   = ! empty( $instance['no_of_photos'] )   ? $instance['no_of_photos']   : 6;
				$flickr_display = ! empty( $instance['flickr_display'] ) ? $instance['flickr_display'] : 'latest';

				if( $flickr_display != 'latest' ){
					shuffle( $flickr_data );
				}

				$flickr_data = array_slice( $flickr_data, 0, $no_of_photos );
				?>
				<div class="flickr-images-wrapper">
					<?php foreach( $flickr_data as $single ){ ?>
						<a class="flickr_badge_image" href="<?php echo esc_attr( $single['url'] ) ?>" title="<?php echo esc_attr( $single['title'] ) ?>" target="_blank" rel="nofollow noopener">
							<img src="<?php echo esc_attr( $single['src'] ) ?>" alt="<?php echo esc_attr( $single['title'] ) ?>" width="120" height="120" loading="lazy" />
						</a>
					<?php } ?>
					<div class="clearfix"></div>
				</div><!-- .flickr-images-wrapper -->
				<div class="clear"></div>
				<?php
			}
		}
		?>
	<?php
		echo $after_widget;
	}

	public function update( $new_instance, $old_instance ) {
		$instance 					= $old_instance;
		$instance['title'] 			= strip_tags( $new_instance['title'] );
		$instance['no_of_photos'] 	= strip_tags( $new_instance['no_of_photos'] );
		$instance['flickr_id'] 		= strip_tags( $new_instance['flickr_id'] );
		$instance['flickr_display'] = strip_tags( $new_instance['flickr_display'] );
		return $instance;
	}

	public function form( $instance ) {
		$defaults = array( 'title' =>__( 'Flickr' , 'tie'), 'no_of_photos' => '8' , 'flickr_display' => 'latest' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' , 'tie') ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php if( !empty($instance['title']) ) echo $instance['title']; ?>" class="widefat" type="text" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'flickr_id' ); ?>"><?php _e( 'Flickr ID:' , 'tie') ?></label>
			<input id="<?php echo $this->get_field_id( 'flickr_id' ); ?>" name="<?php echo $this->get_field_name( 'flickr_id' ); ?>" value="<?php if( !empty($instance['flickr_id']) ) echo $instance['flickr_id']; ?>" class="widefat" type="text" />
			<small><?php _e( 'Find Your ID at' , 'tie') ?> (<a href="http://www.idgettr.com">idGettr</a>)</small>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'no_of_photos' ); ?>"><?php _e( 'Number of photos to show:' , 'tie') ?></label>
			<input id="<?php echo $this->get_field_id( 'no_of_photos' ); ?>" name="<?php echo $this->get_field_name( 'no_of_photos' ); ?>" value="<?php if( !empty($instance['no_of_photos']) ) echo $instance['no_of_photos']; ?>" type="text" size="3" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'flickr_display' ); ?>"><?php _e( 'Photos Order:' , 'tie') ?></label>
			<select id="<?php echo $this->get_field_id( 'flickr_display' ); ?>" name="<?php echo $this->get_field_name( 'flickr_display' ); ?>" >
				<option value="latest" <?php if( !empty($instance['flickr_display']) && $instance['flickr_display'] == 'latest' ) echo "selected=\"selected\""; else echo ""; ?>><?php _e( 'Most recent' , 'tie') ?></option>
				<option value="random" <?php if( !empty($instance['flickr_display']) && $instance['flickr_display'] == 'random' ) echo "selected=\"selected\""; else echo ""; ?>><?php _e( 'Random' , 'tie') ?></option>
			</select>
		</p>

	<?php
	}
}
?>
