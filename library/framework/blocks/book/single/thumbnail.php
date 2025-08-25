<?php
/*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Book | Single
  File name: 			thumbnail.php
  Date: 					04-06-2025
  Description: 		This file contains the thumbnail image for book type posts.
  Note:           Refactored
  */
?>

<section>
  <div class="tb-single-thumbnail">
    <div class="tb-single-img ">
      <?php
      if (function_exists("has_post_thumbnail") && has_post_thumbnail()) : ?>
        <?php
        $be_theme_check = get_post_meta($post->ID, 'be_theme_check', true);
        if ($be_theme_check != 'yes') {
          echo '<div class="post-thumbnail tie_check tie-appear m0 ">';
        } else {
          echo '<div class="post-thumbnail tie_book tie-appear m0 ">';
        }
        ?>
        <a href="<?php echo tie_thumb_src('tie-library'); ?>" class="fancybox image">
          <img src="<?php echo tie_thumb_src('tie-library'); ?>" alt="" width="auto" height="auto" class="tie-appear">
          <li class="fa overlay-icon"></li>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>