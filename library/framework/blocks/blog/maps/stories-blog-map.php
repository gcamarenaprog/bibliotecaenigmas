<?php
/**
 * Template Name:      Biblioteca Enigmas
 * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
 * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
 * Author:             Guillermo Camarena
 * Author URL:         http://gcamarenaprog.com
 * Path:               /library/framework/blocks/blog/maps/
 * File name:          stories-blog-maps.php
 * Description:        This file displays the stories blog maps.
 * Date:               03-04-2026
 */
?>

<div class="sitemap-col ml20">
  <ul id="sitemap-tags">

    <!-- Items cards -->

      <?php
      $cat_id = 1881;

      // Get the current page number (essential for pagination to work)
      if (get_query_var('paged')) {
        $paged = get_query_var('paged');
      } elseif (get_query_var('page')) {
        // For static front pages
        $paged = get_query_var('page');
      } else {
        $paged = 1;
      }

      $args = array(
          'post_type' => 'post',        // Query standard posts
          'posts_per_page' => 30,            // Limit to 10 posts per page
          'cat' => 1881,       // Filter by category ID
          'paged' => $paged         // Enable pagination
      );
      $wp_query = new WP_Query($args);
      if ($wp_query->have_posts()) :
        while ($wp_query->have_posts()) : ?>
    <?php  $wp_query->the_post();?>

       <li><a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?></a></li>
        <?php  endwhile; ?>


      <?php else : ?>

        <!-- No more posts /-->
        <div class="tb-no-more-books">
          <p>No hay publicaciones.</p>
        </div>

      <?php endif ?>

  </ul>
</div>

  <!-- Pagination /-->
<?php if ($wp_query->max_num_pages > 1)
  tie_pagenavi(); ?>

<?php wp_reset_query(); ?>