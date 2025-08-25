<?php
  /*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Blog | Parts
  File name: 			excerpt.php
  Date: 					25-04-2024
  Description: 		This file contains the thumbnail for list of blog posts.
  Note:           Refactored
  */
?>

<div class="entry">
  <p><?php tie_excerpt () ?></p>
  <a class="more-link" href="<?php the_permalink () ?>">
    <?php _eti ('Read More &raquo;') ?>
  </a>
</div>
