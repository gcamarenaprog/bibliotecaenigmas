<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/blog/single/
   * File name:          check-also.php
   * Description:        This file contains the check-also section of a blog post page.
   * Date:               25-08-2025
   */
?>

<?php
global $postId, $postname;
$currentId = $post->ID;
$currentCategory = wp_get_post_terms($post->ID, 'category', array('fields' => 'slugs'));

$maximumRandomNumber = sizeof($currentCategory);

if ($maximumRandomNumber <= 1) {
  $randomNumber = 0;
} else {
  $randomNumber = rand(0, $maximumRandomNumber - 1);
}

$arrayGenresCheckAlso = (array)$currentCategory;
$selectedGenre = $arrayGenresCheckAlso[$randomNumber];

$arguments = array(
  'post_type' => 'post',
  'posts_per_page' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => 'category',
      'field' => 'slug',
      'terms' => $selectedGenre,
    ),
  ),
);

$query = new WP_Query($arguments);
$index = 0;
$firstPostRelatedToCurrentPost = null;

if ($query->have_posts()) {
  while ($query->have_posts()) {

    $query->the_post();
    $postId = $query->post->ID;
    $postname = $query->post->post_name;

    // If the selected post is different to current post
    if ($postId != $currentId) {
      $firstPostRelatedToCurrentPost[] = $postId;
      if ($index > 4) {
        break;
      }
      $index++;
    }
  }
}

wp_reset_query();

if ($firstPostRelatedToCurrentPost) {

  $isVisible = true;

  $arguments = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'post__in' => $firstPostRelatedToCurrentPost,
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms' => $selectedGenre,
      ),
    ),
  );

  $query = new WP_query($arguments);
  $index = 0;
} else {
  $isVisible = false;
}
?>

<?php if ($isVisible) : ?>

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