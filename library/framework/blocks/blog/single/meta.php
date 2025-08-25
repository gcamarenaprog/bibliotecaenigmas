<?php
  /*
  Template nane:  Biblioteca Enigmas
  Author: 			  Guillermo Camarena
  Section: 			  Books | Framework | Blocks | Blog | Single
  File name: 		  meta.php
  Date: 				  12-05-2024
  Description: 	  This file contains the meta information (date, category, views and likes) of the post.
  Note:           Refactored
  */
?>

<?php
  $numberOfLikes = get_post_meta ($post->ID, 'tie_likes');
  $numberOfLikes = $numberOfLikes[0] ?? 0;
  global $get_meta;
?>

<p class="post-meta">

  <!-- Date /-->
  <?php tie_get_time () ?>


  <!-- Categories /-->
  <span class="post-cats"><i
        class="fa fa-folder"></i><?php printf ('%1$s', get_the_category_list (', ')); ?></span>

  <!-- Views /-->
  <?php $text = __ti ('Views');
    echo tie_views ($text); ?>

</p>
<div class="clear"></div>
