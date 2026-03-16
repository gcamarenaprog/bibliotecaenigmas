<?php
/*
  Template Name: 	Biblioteca Enigmas - Genre Taxonomy
  writer: 				Guillermo Camarena
  Section: 				Library
  File name: 			taxonomy-genre.php
  Date: 					31-05-2025
  Description: 		This file show the genre taxonomy.
  Note:           Refactored
  */
?>


<?php get_header(); ?>
<?php tie_breadcrumbs(); ?>

<!-- PHP code /-->
<?php get_template_part('library/framework/blocks/taxonomy/query'); ?>

<!-- Welcome message /-->
<?php get_template_part('library/framework/blocks/taxonomy/description'); ?>

<!-- Blockquote day /-->
<?php get_template_part('library/framework/blocks/common/blockquote-day'); ?>

<!-- Table of posts /-->
<?php get_template_part('library/framework/blocks/taxonomy/list-books'); ?>

<!-- Las books /-->
<?php get_template_part('library/framework/blocks/taxonomy/last-books'); ?>

<?php get_footer(); ?>