<?php
/*
  Template Name: 	Biblioteca Enigmas - Home Books Grid Page
  Author: 				Guillermo Camarena
  Section: 				Library
  File name: 			template-be-books-grid.php
  Date: 					31-05-2025
  Description: 		This file show home book grid page.
  Note:           Refactored
  */
?>

<?php get_header(); ?>
<?php tie_breadcrumbs(); ?>
<?php tie_setPostViews(); ?>

<?php if (!have_posts()) : ?>
  <div class="content"><?php get_template_part('framework/parts/not-found'); ?></div>
<?php endif; ?>

<?php
global $block, $get_meta;
wp_enqueue_script('tie-cycle');

$arguments = array(
  'post_type' => 'book',
  'posts_per_page' => 24,
  'paged' => $paged,
  'tax_query' => array(
    array(
      'taxonomy' => 'genre',
      'field'    => 'term_id',
      'terms'    => array(1523),
      'operator' => 'NOT IN',
    ),
  ),
);

$wp_query = new WP_Query($arguments);
?>

<section>
  <div class="content">

    <!-- Welcome /-->
    <?php get_template_part('library/framework/blocks/book/grid/welcome'); ?>

    <!-- Blockquote day /-->
    <?php get_template_part('library/framework/blocks/book/grid/blockquote-day'); ?>

    <!-- Books grid /-->
    <?php get_template_part('library/framework/blocks/book/grid/last-books'); ?>

  </div><!--./content-->
</section>

<?php get_footer(); ?>