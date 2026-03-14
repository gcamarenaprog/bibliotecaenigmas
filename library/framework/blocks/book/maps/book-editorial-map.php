<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               library/framework/blocks/book/maps
   * File name:          book-editorial-map.php
   * Description:        This file shows the editorial map page.
   * Date:               22-11-2025
   */
?>

<div class="sitemap-col ml20">
  <ul id="sitemap-tags">
    <?php
      $terms = get_terms (array(
        'taxonomy' => 'editorial',
        'hide_empty' => false
      ));
      if (empty($terms) || is_wp_error ($terms)) {
        return;
      } ?>
    <?php
      foreach ($terms as $term) {
        printf (
          '<li><a href="%s">%s</a> <span class="term-count">(%s)</span></li>',
          esc_url (get_term_link ($term)),
          esc_attr ($term->name),
          $term->count
        );
      } ?>
  </ul>
</div>