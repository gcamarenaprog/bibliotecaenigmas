<?php
/*
  Template: 			Biblioteca Enigmas
  Author: 				Guillermo Camarena
  Section: 				Blog / Category
  File name: 			category.php
  Date: 					04-06-2025
  Description: 		This file shows scroll and slider of the categories.
  Note:           Refactored
  */
?>

<?php get_header(); ?>
<?php tie_breadcrumbs(); ?>
<?php tie_setPostViews(); ?>

<?php

$term = get_queried_object();
$slug =  $term->slug;

if ($slug === "blog-forteano" || $slug === "blog-del-autor" || $slug === "cuentos-del-autor") {
  $slug = false;
}



if ($slug): ?>

  <section>
    <div id="main-content" class="container full-width">
      
      <!-- Information /-->
      <?php get_template_part('library/framework/blocks/blog/grid/information'); ?>

      <!-- Blockquote day /-->
      <?php get_template_part('library/framework/blocks/blog/grid/blockquote-day'); ?>

      <!-- Table of posts only categories /-->
      <?php get_template_part('library/framework/blocks/blog/grid/list-posts'); ?>

      <!-- Last news /-->
      <?php get_template_part('library/framework/blocks/blog/grid/last-posts'); ?>

    </div>
  </section>

<?php else: ?>

  <section>
    <div id="main-content" class="container full-width">

      <!-- Welcome /-->
      <?php get_template_part('library/framework/blocks/blog/grid/information'); ?>

      <!-- Blockquote day /-->
      <?php get_template_part('library/framework/blocks/blog/grid/blockquote-day'); ?>

      <!-- Last news /-->
      <?php get_template_part('library/framework/blocks/blog/grid/last-posts'); ?>

    </div>
  </section>

<?php endif; ?>

<?php get_footer(); ?>