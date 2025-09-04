<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/book/single/
   * File name:          check-also.php
   * Description:        This file shows the check also section of the single book page.
   * Date:               25-08-2025
   */
?>

<?php
global $post_id, $post_name, $check_also_position;
$currentPostId = $post->ID;
$genresCheckAlso = wp_get_post_terms($post->ID, 'genre', array('fields' => 'slugs'));
$maximumRandomNumber = sizeof($genresCheckAlso);

if ($maximumRandomNumber <= 1) {
  $random_number = 0;
} else {
  $random_number = rand(0, $maximumRandomNumber - 1);
}

$array_genres_related_to_post = null;
$visibility = false;
$arrayGenresCheckAlso = (array)$genresCheckAlso;

if ($arrayGenresCheckAlso != null) {
  $selectedGenre = $arrayGenresCheckAlso[$random_number];

  $arguments = array(
    'post_type' => 'book',
    'posts_per_page' => -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'genre',
        'field' => 'slug',
        'terms' => $selectedGenre,
      ),
    ),
  );

  $query = new WP_Query($arguments);
  $index = 0;
  $firstPostsRelatedToCurrentPost = null;

  if ($query->have_posts()) {
    while ($query->have_posts()) {

      $query->the_post();
      $postId = $query->post->ID;
      $post_name = $query->post->post_name;

      // If the selected post is different to current post
      if ($postId != $currentPostId) {
        $firstPostsRelatedToCurrentPost[] = $postId;
        if ($index > 4) {
          break;
        }
        $index++;
      }
    }
  }

  wp_reset_query();

  if ($firstPostsRelatedToCurrentPost) {
    $visibility = true;
    $arguments = array(
      'post_type' => 'book',
      'posts_per_page' => 1,
      'post__in' => $firstPostsRelatedToCurrentPost,
      'tax_query' => array(
        array(
          'taxonomy' => 'genre',
          'field' => 'slug',
          'terms' => $selectedGenre,
        ),
      ),
    );
    $query = new WP_query($arguments);
    $index = 0;
  } else {
    $visibility = false;
  }
}
?>


<?php if ($visibility) : ?>

  <?php
  while ($query->have_posts()) : $query->the_post() ?>

    <?php
    $completeTitleOfBook = get_the_title();
    $titleOfBook = getTitle($completeTitleOfBook);
    $subtitleOfBook = getSubtitle($completeTitleOfBook);
    ?>

    <section>
      <div id="check-also-box" class="post-listing check-also-<?php echo $check_also_position ?> show-check-also">
        <a href="#" id="check-also-close"><i class="fa fa-close"></i></a>

        <!-- Title section /-->
        <section>
          <div class="block-head">
            <h1>= <?php _eti('Check Also'); ?> =</h1>
          </div>
        </section>

        <!-- Thumbnail /-->
        <section>
          <div <?php tie_post_class('check-also-post tie_book'); ?>>
            <?php
            if (function_exists("has_post_thumbnail") && has_post_thumbnail()) : ?>
              <?php
              $be_theme_check = get_post_meta($post->ID, 'be_theme_check', true);
              if ($be_theme_check != 'yes') {
                echo '<div class="post-thumbnail tie_check tie-appear tb-single-check-also-thumbnail">';
              } else {
                echo '<div class="post-thumbnail tie_book tie-appear tb-single-check-also-thumbnail">';
              }
              ?>
              <a href="<?php the_permalink(); ?>" rel="bookmark">
                <img src="<?php echo tie_thumb_src('tie-library_related'); ?>"
                  alt="">
                <li class="fa overlay-icon"></li>
              </a>
            <?php endif; ?>
          </div>
        </section>

        <!-- Title and subtitle /-->
        <section>

          <div class="check-also-title-and-subtitle">

            <!-- Title /-->
            <h3>
              <a class="title" href="<?php the_permalink(); ?>" rel="bookmark"><?php echo $titleOfBook; ?></a>
            </h3>

            <!-- Subtitle /-->
            <?php if ($subtitleOfBook) : ?>
              <h3>
                <a class="subtitle" href="<?php the_permalink(); ?>" rel="bookmark">
                  <em><?php echo $subtitleOfBook; ?></em>
                </a>
              </h3>
            <?php endif; ?>

          </div>

        </section>

      </div>
    </section>

  <?php
  endwhile; ?>

<?php endif; ?>
<?php wp_reset_query(); ?>