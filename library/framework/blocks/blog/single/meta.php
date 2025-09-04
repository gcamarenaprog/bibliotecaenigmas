<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/blog/single/
   * File name:          meta.php
   * Description:        This file contains the meta section of a blog post page.
   * Date:               25-08-2025
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
