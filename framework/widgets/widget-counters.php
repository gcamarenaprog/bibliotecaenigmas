<?php

/*-----------------------------------------------------------------------------------*/
# Social Counter Widget
/*-----------------------------------------------------------------------------------*/
add_action( 'widgets_init', 'arqam_lite_counter_widget_box' );
function arqam_lite_counter_widget_box() {
	register_widget( 'arqam_lite_counter_widget' );
}

class arqam_lite_counter_widget extends WP_Widget {

	public function __construct(){
		$widget_ops 	= array( 'classname' => 'arqam_lite_counter-widget', 'description' => ''  );
		$control_ops 	= array( 'width' => 250, 'height' => 350, 'id_base' => 'arqam_lite_counter-widget' );
		parent::__construct( 'arqam_lite_counter-widget', 'Sahifa - Social Counter', $widget_ops, $control_ops );
	}

	public function widget( $args, $instance ) {
		
		if( ! class_exists( 'ARQAM_LITE_COUNTERS' ) ){
			return;
		}

		$counters = new ARQAM_LITE_COUNTERS();
		$arq_counters = $counters->counters_data();
		?>

		<div class="arqam-lite-widget-counter <?php echo $instance['style'] ?>">
			<ul>
				<?php
					if( ! empty( $arq_counters ) && is_array( $arq_counters ) ){
						foreach ( $arq_counters as $social => $counter ){
							?>
							<li class="social-icons-item arq-lite-<?php echo esc_attr( $social ) ?>">
								<a class="<?php echo esc_attr( $social ) ?>-social-icon" href="<?php echo esc_url( $counter['url'] ) ?>" rel="nofollow noopener" target="_blank">
									<?php
										$icon = str_replace( '<span', '<i', $counter['icon'] );
										echo str_replace( '</span', '</i', $icon );
									?>
										<span class="followers-num"><?php echo apply_filters( 'TieLabs/Social_Counters/number', $counter['count'] ) ?></span>
										<small class="followers-name"><?php echo $counter['text'] ?></small>
								</a>
							</li>
							<?php
						}
					}
				?>
			</ul>
		</div>

		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['style'] = $new_instance['style'] ;

		return $instance;
	}

	public function form( $instance ) {
		$defaults = array(  'style' => 'gray' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'style' ); ?>"><?php _e( 'Style :' , 'tie' ) ?></label>
			<select class="widefat" id="<?php echo $this->get_field_id( 'style' ); ?>" name="<?php echo $this->get_field_name( 'style' ); ?>" >
				<option value="gray" <?php if( $instance['style'] == 'gray' ) echo "selected=\"selected\""; else echo ""; ?>><?php _e( 'Gray Icons' , 'tie' ) ?></option>
				<option value="colored" <?php if( $instance['style'] == 'colored' ) echo "selected=\"selected\""; else echo ""; ?>><?php _e( 'Colored Icons' , 'tie' ) ?></option>
				<option value="border" <?php if( $instance['style'] == 'border' ) echo "selected=\"selected\""; else echo ""; ?>><?php _e( 'Colored border Icons' , 'tie' ) ?></option>
			</select>
		</p>
	<?php
	}
}
