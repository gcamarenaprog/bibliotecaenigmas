<?php
/*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Books | Framework | Blocks | Blog | Single
  File name: 			check-also.php
  Date: 					04-06-2025
  Description: 		This file contains the check also window.
  Note:           Refactored
  */
?>

<?php
global $postId, $postname;
$currentId = $post->ID;
$currentCategory = wp_get_post_terms($post->ID, 'category', array('fields' => 'slugs'));

$maximum_random_number = sizeof($currentCategory);

if ($maximum_random_number <= 1) {
  $random_number = 0;
} else {
  $random_number = rand(0, $maximum_random_number - 1);
}

$array_genres_check_also = (array)$currentCategory;
$selected_genre = $array_genres_check_also[$random_number];

$arguments = array(
  'post_type' => 'post',
  'posts_per_page' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => 'category',
      'field' => 'slug',
      'terms' => $selected_genre,
    ),
  ),
);

$query = new WP_Query($arguments);
$index = 0;
$first_posts_related_to_current_post = null;

if ($query->have_posts()) {
  while ($query->have_posts()) {

    $query->the_post();
    $postId = $query->post->ID;
    $postname = $query->post->post_name;

    // If the selected post is different to current post
    if ($postId != $currentId) {
      $first_posts_related_to_current_post[] = $postId;
      if ($index > 4) {
        break;
      }
      $index++;
    }
  }
}

wp_reset_query();

if ($first_posts_related_to_current_post) {

  $visibility = true;

  $arguments = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'post__in' => $first_posts_related_to_current_post,
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms' => $selected_genre,
      ),
    ),
  );

  $query = new WP_query($arguments);
  $index = 0;
} else {
  $visibility = false;
}
?>

<?php if ($visibility) : ?>

  <section>
    <div id="check-also-box" class="post-listing check-also-<?php echo $check_also_position ?> show-check-also">
      <a href="#" id="check-also-close"><i class="fa fa-close"></i></a>

      <!-- Title /-->
      <section>
        <div class="block-head">
          <h1>= <?php _eti('Check Also'); ?> =</h1>
        </div>
      </section>

      <!-- Check also post /-->
      <section>
        <div class="check-also">
          <?php while ($query->have_posts()) : $query->the_post() ?>
            <article class="card-blog card-blog-check-also">

              <!-- Data -->
              <div class="blog">
                <div class="tbh-thumbnail">

                  <div class="post-thumbnail tie-appear tbh-post-thumbnail"
                    style=" ">
                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                      <?php the_post_thumbnail(); ?>
                      <li
                        class="fa overlay-icon tbh-overlay-icon"
                        style=" ">
                      </li>
                    </a>

                  </div>

                  <div class="tbh-thumbnail-title">
                    <h1>
                      <a class="title" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?>
                      </a>
                    </h1>

                  </div>

                </div><!--/.tb-thumbnails-->
              </div><!--/.blog-->

            </article><!--/.card-blog-->
          <?php endwhile; ?>
        </div>
      </section>

  </section>

<?php endif; ?>
<?php wp_reset_query(); ?>