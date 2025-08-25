<?php
  /*
  Template: 	 Biblioteca Enigmas
  Author: 		 Guillermo Camarena
  Section: 		 Library | Framework | Blocks | Books | Maps
  File name: 	 genres.php
  Date: 			 01-06-2025
  Description: This file contains the genres map.
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