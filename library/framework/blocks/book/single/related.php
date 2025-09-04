<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/book/single/
   * File name:          related.php
   * Description:        This file shows the related section of the single book page.
   * Date:               25-08-2025
   */
?>

<?php
global $post_id, $post_name;
$currentPostId = $post->ID;
$genresRelatedToPost = wp_get_post_terms($post->ID, 'genre', array('fields' => 'slugs'));
$maximumRandomNumber = sizeof($genresRelatedToPost);

if ($maximumRandomNumber <= 1) {
  $randomNumber = 0;
} else {
  $randomNumber = rand(0, $maximumRandomNumber - 1);
}
$arrayGenresRelatedToPost = null;
$visibility = false;

$arrayGenresRelatedToPost = (array)$genresRelatedToPost;
if ($arrayGenresRelatedToPost != null) {
  $selectedGenre = $arrayGenresRelatedToPost[$randomNumber];

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
      'posts_per_page' => 4,
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

  <section>
    <div id="related-posts">

      <!-- Title /-->
      <section>
        <div class="tb-head">
          <h1>= Publicaciones relacionadas =</h1>
        </div>
      </section>

      <!-- Related books list /-->
      <section>
        <div class="post-listing">

          <?php
          while ($query->have_posts()) :
            $query->the_post(); ?>

            <!-- Thumbnail image /-->
            <?php if (function_exists("has_post_thumbnail") && has_post_thumbnail()) : ?>

              <div class="tb-single-book-related-book">
                <?php
                $be_theme_check = get_post_meta($post->ID, 'be_theme_check', true);
                if ($be_theme_check != 'yes') {
                  echo '<div class="post-thumbnail tie_check  tie-appear mr0" >';
                } else {
                  echo '<div class="post-thumbnail tie_book tie-appear mr0" >';
                }
                ?>
                <a href="<?php the_permalink(); ?>" rel="bookmark">
                  <img src="<?php echo tie_thumb_src('tie-library_related'); ?>" alt="">
                  <li class="fa overlay-icon"></li>
                </a>
              </div>

            <?php endif; ?>
            <?php $index++; ?>
            
        </div>
      <?php endwhile; ?>
      </section>

      <div class="clear"></div>

    </div>
  </section>

<?php endif; ?>

<?php wp_reset_query(); ?>