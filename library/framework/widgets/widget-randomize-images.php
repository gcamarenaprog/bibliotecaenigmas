<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/widgets/
   * File name:          widgets-image.php
   * Description:        This file contains the code for the random image widget.
   * Date:               25-08-2025
   */
  
  require_once (ABSPATH . 'wp-admin/includes/file.php');
  
  // Widget initialization and register
  add_action ('widgets_init', 'be_randomize_image_widget');
  
  /**
   * Widget register
   *
   * @return void
   */
  function be_randomize_image_widget ()
  {
    register_widget ('be_randomize_image');
  }
  
  
  /**
   * Randomize widget class
   */
  class be_randomize_image extends WP_Widget
  {
    
    /**
     * Main construct
     */
    public function __construct ()
    {
      $widgetOptions = array(
        'classname' => 'randomize_image',
        'description' => 'This widget displays an image randomly.'
      );
      $controlOptions = array(
        'width' => 250,
        'height' => 350,
        'randomize_image-widget'
      );
      parent::__construct ('randomize_image-widget', THEME_SUBNAME . ' - ' . __ ('Random image', 'tie'), $widgetOptions, $controlOptions);
    }
    
    
    /**
     * Echoes the widget content.
     *
     * @param $arguments
     * @param $instance
     * @return void
     */
    public function widget ($arguments, $instance)
    {
      extract ($arguments);
      
      $title = apply_filters ('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
      $imagePath = $instance['image_path'];
      
      $hide = !empty($instance['hide']) ? $instance['hide'] : false;
      
      echo $before_widget;
      echo $before_title;
      if (!$hide) {
        echo $title;
      }
      echo $after_title;
      
      $upload_dir = '/var/www/vhosts/bibliotecaenigmas.com/httpdocs/wp-content/themes/sahifa/library/images/' . $imagePath;
      $files = list_files ($upload_dir, 2);
      $arraySize = count ($files);
      $randomNumber = wp_rand (1, $arraySize);
      $imageName = $randomNumber . '.jpg';
      $urlImage = '/wp-content/themes/sahifa/library/images' . $imagePath . '/' . $imageName;
      
      ?>

      <div class="picture" style="font-size: 18px;overflow: hidden;text-align: center;width: 100%;padding: 0px;">
        <a href="<?php echo $urlImage; ?>" class="fancybox image" aria-controls="fancybox-wrap" aria-haspopup="dialog">
          <img src="<?php echo $urlImage ?>" alt="" width="auto" height="auto" class="tie-appear">
        </a>
      </div>

      <div class="clear"></div>
      
      <?php
      echo $after_widget;
    }
    
    
    /**
     * Updates the instance of the widget.
     *
     * @param $new_instance
     * @param $old_instance
     * @return mixed
     */
    public function update ($new_instance, $old_instance)
    {
      $instance = $old_instance;
      $instance['title'] = strip_tags ($new_instance['title']);
      $instance['image_path'] = strip_tags ($new_instance['image_path']);
      $instance['hide'] = !empty($new_instance['hide']) ? $new_instance['hide'] : false;
      return $instance;
    }
    
    
    /**
     * Outputs the settings update form.
     *
     * @param $instance
     * @return void
     */
    public function form ($instance)
    {
      $defaults = array('title' => __ ('Random image', 'tie'), 'image_path' => '/randomize-suffix');
      $instance = wp_parse_args ((array)$instance, $defaults);
      ?>

      <!-- Title widget -->
      <p>
        <label for="<?php echo $this->get_field_id ('title'); ?>"><?php _e ('Title:', 'tie') ?></label>
        <input id="<?php echo $this->get_field_id ('title'); ?>" name="<?php echo $this->get_field_name ('title'); ?>"
               value="<?php if (!empty($instance['title']))
                 echo $instance['title']; ?>" class="widefat" type="text"/>
      </p>

      <!-- Image path -->
      <p>
        <label
            for="<?php echo $this->get_field_id ('image_path'); ?>"><?php _e ('Number of books to display:', 'tie') ?></label>
        <input id="<?php echo $this->get_field_id ('image_path'); ?>"
               name="<?php echo $this->get_field_name ('image_path'); ?>"
               value="<?php if (!empty($instance['image_path']))
                 echo $instance['image_path']; ?>" class="widefat" type="text"/>
        <em>Default directory: '/library/images/randomize-suffix'</em>
      </p>


      <p>
        <label for="<?php echo $this->get_field_id ('hide'); ?>"><?php _e ('Hide title:', 'tie') ?></label>
        <input id="<?php echo $this->get_field_id ('hide'); ?>" name="<?php echo $this->get_field_name ('hide'); ?>"
               value="true" <?php if (!empty($instance['hide']))
          echo 'checked="checked"'; ?> type="checkbox"/>
      </p>
      
      <?php
    }
  }

?>