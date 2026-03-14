<?php
  /*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Theme | Framework | Loops
  File name: 			loop-default.php
  Date: 					09-05-2024
  Description: 		This loop file, shows posts of blog.
  Note:           Refactored
  */
?>

<?php
  $currentObject = get_queried_object ();
  $maximumNumberPosts = 20000;
  
  $arguments = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => $maximumNumberPosts,
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms' => $currentObject,
      ),
    ),
  );
  $query = new WP_query($arguments);
  
  if ($query->have_posts ()) :
    $firstPosts = array();
    $index = 0;
    while ($query->have_posts ()) : $query->the_post ();
      if ($index < 6) {
        $firstPosts[] = $post->ID; // add post id to array
        $index++;
      }
    endwhile;
  endif;
  
  $arguments = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'paged' => $paged,
    'post__not_in' => $firstPosts,
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms' => $currentObject,
      ),
    ),
  );
  
  $wp_query = new WP_Query($arguments);

?>

<!-- Title /-->
<section>
  <div class="tb-head">
    <h1>
      = ÚLTIMAS NOVEDADES =
    </h1>
  </div>
</section>

<!-- Content /-->
<section>
  <div class="recent-box recent-blog tb-re-box">
    <div class="cat-box-content tb-box-list ">

      <!-- Loop of books -->
      <?php if ($wp_query->have_posts ()) : while ($wp_query->have_posts ()) : $wp_query->the_post (); ?>

        <!-- Item /-->
        <article>
          <div class="tb-item-list">

            <!-- Header /-->
            <?php get_template_part ('library/framework/blocks/blog/parts/header'); ?>

            <!-- Thumbnail /-->
            <?php if (function_exists ("has_post_thumbnail") && has_post_thumbnail ()) : ?>
              <?php get_template_part ('library/framework/blocks/blog/parts/thumbnail'); ?>
            <?php endif; ?>

            <!-- Excerpt /-->
            <?php get_template_part ('library/framework/blocks/blog/parts/excerpt'); ?>

            <div class="clear"></div>

          </div>
        </article>
      
      <?php endwhile; ?>

        <!-- No posts -->
      <?php else : ?>

        <!-- No posts message /-->
        <article>
          <div class="item-list">
            <div class="tb-no-more-books">
              No hay más artículos.
            </div>
          </div>
        </article>
      
      <?php endif ?>

    </div>
  </div>
</section>