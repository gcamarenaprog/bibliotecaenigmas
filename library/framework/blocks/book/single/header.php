<?php
/*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Book | Single
  File name: 			header.php
  Date: 					03-06-2025
  Description: 		This file contains the header information (title, subtitle, and meta) for book type posts.
  Note:           Refactored
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