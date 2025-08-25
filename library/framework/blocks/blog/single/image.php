<?php
/*
  Template name:  Biblioteca Enigmas
  Author: 			  Guillermo Camarena
  Section: 			  Books | Framework | Blocks | Blog | Single
  File name: 		  image.php
  Date: 				  12-05-2024
  Description: 	  This file contains the featured image for posts.
  Note:           Refactored
  */
?>

<section>
  <div class="tb-thumbnail-box">
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="clear"></div>
</section>