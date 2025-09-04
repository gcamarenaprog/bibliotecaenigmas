<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/book/single/
   * File name:          navigation.php
   * Description:        This file shows the navigation section of the single book page.
   * Date:               25-08-2025
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