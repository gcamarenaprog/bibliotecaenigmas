<?php
  /*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Blog | Parts
  File name: 			header.php
  Date: 					18-05-2024
  Description: 		This file contains the header information (title, subtitle and meta) for blog list.
  Note:           Refactored
  */
?>

<?php
  $numberOfLikes = get_post_meta ($post->ID, 'tie_likes');
  $numberOfLikes_ = $numberOfLikes[0] ?? 0;
?>

<section>
  <div class="tb-title-and-meta-box">

    <!-- Title /-->
    <section>
      <h2>
        <a class="tb-header-title" href="<?php the_permalink (); ?>" rel="bookmark"><?php echo get_the_title (); ?> </a>
      </h2>
    </section>

    <!-- Meta /-->
    <section>
      <p class="post-meta">

        <!-- Date /-->
        <?php tie_get_time () ?>

        <!-- Categories /-->
        <span class="post-cats">
          <i class="fa fa-folder"></i>
          <?php echo get_the_term_list ($post->ID, 'category', '', ', ', ''); ?>
        </span>

        <!-- Views /-->
        <?php
          $text = __ti ('Views');
          echo tie_views ($text);
        ?>

      </p>

      <hr>
      <div class="clear"></div>
    </section>

  </div>
</section>