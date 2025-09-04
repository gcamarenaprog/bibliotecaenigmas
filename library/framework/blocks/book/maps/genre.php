<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/book/maps/
   * File name:          genre.php
   * Description:        This file shows the genre map page.
   * Date:               25-08-2025
   */
  /*
  Template: 	 Biblioteca Enigmas
  Author: 		 Guillermo Camarena
  Section: 		 Library | Framework | Blocks | Books | Maps
  File name: 	 genre.php
  Date: 			 01-06-2025
  Description: This file contains the genres maps.
  Note:        Refactored
  */
?>

<section>
  <div class="sitemap-col">
    <ul id="sitemap-tags">
      <?php
        $terms = get_terms (array(
          'taxonomy' => 'genre',
          'hide_empty' => false,
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
</section>