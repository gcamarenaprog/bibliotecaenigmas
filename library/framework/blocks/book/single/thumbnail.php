<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/book/single/
   * File name:          thumbnail.php
   * Description:        This file shows the thumbnail section of the single book page.
   * Date:               25-08-2025
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