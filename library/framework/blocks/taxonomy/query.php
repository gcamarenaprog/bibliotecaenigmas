<?php
/*
      Template Name: 	Biblioteca Enigmas - Home Books Page
      Author: 				Guillermo Camarena
      Section: 				Books | Framework | Blocks | Book | Taxonomy
      File name: 			query.php
      Date: 					31-05-2025
      Description: 		This file has php code for query.
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