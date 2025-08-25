<?php
/*
  Template: 	 Biblioteca Enigmas
  Author: 		 Guillermo Camarena
  Section: 		 Library | Framework | Blocks | Blog | Map
  File name: 	 writer-blog-map.php
  Date: 			 13-05-2024
  Description: This file contains the fortean blog map.
  Note:        Refactored
  */
?>

<section>
  <div class="sitemap-col">
    <ul id="sitemap-tags">
      <?php
      $args = [
        'show_option_all'         => '',
        'show_option_none'        => __('No hay categorías'),
        'orderby'                 => 'name',
        'parent'                  => 1300,
        'order'                   => 'ASC',
        'style'                   => 'list',
        'show_count'              => 1,
        'hide_empty'              => 1,
        'use_desc_for_title'      => 1,
        'child_of'                => 0,
        'hierarchical'            => true,
        'title_li'                => __(''),
        'echo'                    => 1,
        'taxonomy'                => 'category',
        'hide_title_if_empty'     => false,
        'separator'               => '<br />'
      ];
      wp_list_categories($args);
      ?>
    </ul>
  </div>
</section>