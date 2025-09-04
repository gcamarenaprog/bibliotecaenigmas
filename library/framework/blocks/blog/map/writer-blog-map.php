<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/blog/maps/
   * File name:          writer-blog-maps.php
   * Description:        This file displays the writer blog maps.
   * Date:               25-08-2025
   */
?>

<section>
  <div class="sitemap-col">
    <ul id="sitemap-tags">
      <?php
        $args = [
          'show_option_all' => '',
          'show_option_none' => __ ('No hay categorías'),
          'orderby' => 'name',
          'parent' => 1300,
          'order' => 'ASC',
          'style' => 'list',
          'show_count' => 1,
          'hide_empty' => 1,
          'use_desc_for_title' => 1,
          'child_of' => 0,
          'hierarchical' => true,
          'title_li' => __ (''),
          'echo' => 1,
          'taxonomy' => 'category',
          'hide_title_if_empty' => false,
          'separator' => '<br />'
        ];
        wp_list_categories ($args);
      ?>
    </ul>
  </div>
</section>