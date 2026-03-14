<?php
  /*
  Template Name: 	Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Theme | Framework | Loops
  File name: 			loop-timeline.php
  Date: 					26-06-2023
  Description: 		This loop timeline file.
  Note:           Refactored
  */
?>

<div class="post-listing archive-box">
  <div class="post-inner">
    <div class="timeline-contents timeline-archive pt-30 mt10">
      
      <?php $timeline_time = ''; ?>
      <?php while (have_posts ()) :
        the_post (); ?>
      
      <?php
        if ((empty($timeline_time) && get_the_time ('F, Y')) || (!empty($timeline_time) && $timeline_time != get_the_time ('F, Y'))){
        if (!empty($timeline_time)) {
          ?>
          </ul>
          <div class="clear"></div>
        <?php }
        $timeline_time = get_the_time ('F, Y');
      ?>

      <!-- Timeline date /-->
      <h2 class="timeline-head"><?php echo $timeline_time ?></h2>

      <div class="clear"></div>

      <!-- List of posts /-->
      <ul class="timeline">
        
        <?php } ?>

        <!-- Item /-->
        <li <?php tie_post_class ('timeline-post'); ?>>
          <div class="timeline-content">

            <!-- Date /-->
            <span class="timeline-date"><?php echo get_the_time ('j F') ?></span>

            <!-- Title /-->
            <h2 class="post-box-title">
              <a href="<?php the_permalink (); ?>"><?php the_title (); ?></a>
            </h2>
            
            <?php if (function_exists ("has_post_thumbnail") && has_post_thumbnail ()) : ?>
              
              <?php $postType = get_post_type (); ?>

              <!-- Image post /-->
              <?php if ($postType == 'post') : ?>

                <div class="post-thumbnail">
                  <a href="<?php the_permalink (); ?>">

                    <img style="width: 194;" height="112"
                         src="<?php echo tie_thumb_src ('tie-medium'); ?>"
                         alt=""
                         class="tie-appear">
                    <span class="fa overlay-icon"></span>
                  </a>
                </div>

                <!-- Image book /-->
              <?php elseif ($postType == 'book') : ?>
                
                <?php
                $statusBook = get_post_meta ($post->ID, 'be_theme_check', true);
                $tie_ = ($statusBook != 'yes') ? 'tie_check' : 'tie_book';
                ?>

                <div class="pr10 post-thumbnail  <?php echo $tie_; ?> tie-appear">

                  <!-- Title /-->
                  <a href="<?php the_permalink (); ?>" title="<?php the_title_attribute (); ?>">
                    <img style="width: 66px;"
                         src="<?php echo tie_thumb_src ('tie-library_widget'); ?>"
                         alt=""
                         class="tie-appear">
                    <span class="fa overlay-icon"></span>
                  </a>

                </div>
              
              <?php endif; ?>
            
            <?php endif; ?>

            <!-- Excerpt /-->
            <div class="entry"><p><?php tie_excerpt () ?></p></div>

            <!-- Social and share /-->
            <?php if (tie_get_option ('archives_socail'))
              get_template_part ('framework/parts/share'); ?>

          </div>

          <div class="clear"></div>

        </li>
        
        <?php endwhile; ?>

      </ul>

      <div class="clear"></div>

    </div>
  </div>
</div>
