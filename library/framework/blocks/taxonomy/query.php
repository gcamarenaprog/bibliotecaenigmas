<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/taxonomy/
   * File name:          query.php
   * Description:        This file has php code for query in taxonomy file.
   * Date:               25-08-2025
   */
?>

<?php if (!have_posts()) : ?>
  <div class="content container full-width"><?php get_template_part('framework/parts/not-found'); ?></div>
<?php endif; ?>

<?php
global $block, $get_meta;
wp_enqueue_script('tie-cycle');

$completeTitleOfBook = get_the_title();
$titleOfBook = getTitle($completeTitleOfBook);
$subtitleOfBook = getTitle($completeTitleOfBook);

set_query_var('titleOfBook', $titleOfBook);
set_query_var('subtitleOfBook', $subtitleOfBook);

$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

$query = get_query_var('query');

// Get slug name of the taxonomy
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$taxonomy = get_query_var('taxonomy');
$slug = $term->slug;

$maximumGetPosts = 20000;
$arguments = array(
  'post_type' => 'book',
  'post_status' => 'publish',
  'posts_per_page' => $maximumGetPosts,
  'tax_query' => array(
    array(
      'taxonomy' => $taxonomy,
      'field' => 'slug',
      'terms' => $slug,
    ),
  ),
);
$query = new WP_query($arguments);

set_query_var('query', $query);
?>