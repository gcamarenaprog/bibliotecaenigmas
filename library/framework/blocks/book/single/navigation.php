<?php
  /*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Book | Single
  File name: 			navigation.php
  Date: 					04-06-2025
  Description: 		This file contains the navigation next and previous post box.
  Note:           Refactored
  */
?>

<section>
  
  <div class="post-navigation">
    
    <!-- Previous /-->
    <div class="post-previous">
      <?php previous_post_link ('%link', '<span class="tbsibo-prev-and-next-title">' . __ti ('Previous') . '</span> %title'); ?>
    </div>
    <!-- Next /-->
    <div class="post-next">
      <?php next_post_link ('%link', '<span class="tbsibo-prev-and-next-title">' . __ti ('Next') . '</span> %title'); ?>
    </div>
    
  </div>
</section>