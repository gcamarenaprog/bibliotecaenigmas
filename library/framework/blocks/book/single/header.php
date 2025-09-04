<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/book/single/
   * File name:          header.php
   * Description:        This file shows the header section of the single book page.
   * Date:               25-08-2025
   */
?>

<?php 
 $fullTitle = get_the_title();
 $title = getTitle($fullTitle);
 $subtitle = getSubtitle($fullTitle);
?>

<section>
  <div class="tb-title-and-meta-box">

    <!-- Title /-->
    <h2 class="tb-title">
      = <?php echo $title; ?> =
    </h2>

    <!-- Subtitle /-->
    <?php if ($subtitle) : ?>
      <h3>
        <?php echo $subtitle; ?>
      </h3>
    <?php endif; ?>

    <hr>

    <!-- Meta /-->
    <p class="post-meta">

      <!-- Date /-->
      <?php tie_get_time() ?>

      <!-- Genres /-->
      <span class="post-cats">
        <i class="fa fa-folder"></i><?php echo get_the_term_list($post->ID, 'genre', '', ', ', ''); ?>
      </span>

      <!-- Views /-->
      <?php
      $text = __ti('Views');
      echo tie_views($text);
      ?>

    </p>

    <div class="clear"></div>

  </div>
</section>