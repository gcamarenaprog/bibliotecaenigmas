<?php
  /*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Blog | Parts
  File name: 			thumbnail.php
  Date: 					18-05-2024
  Description: 		This file contains the thumbnail for list of blog posts.
  Note:           Refactored
  */
?>

<section class="tb-thumbnail">
  <div class="post-thumbnail">
    <a href="<?php the_permalink (); ?>" rel="bookmark">
      <?php the_post_thumbnail ('tie-medium'); ?>
      <li class="fa overlay-icon"></li>
    </a>
</section>
