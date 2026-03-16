<?php
/*
  Template Name: 	Biblioteca Enigmas - Writer Taxonomy
  writer: 				Guillermo Camarena
  Section: 				Library
  File name: 			taxonomy-writer.php
  Date: 					17-05-2024
  Description: 		This file show the writer taxonomy
  Note:           Refactored
  */
?>

<?php get_header(); ?>
<?php tie_breadcrumbs(); ?>

  <!-- PHP code /-->
<?php get_template_part('library/framework/blocks/taxonomy/query'); ?>

  <!-- Welcome message /-->
<?php get_template_part('library/framework/blocks/taxonomy/biography'); ?>

  <!-- Blockquote day /-->
<?php get_template_part('library/framework/blocks/common/blockquote-day'); ?>

  <!-- Table of posts /-->
<?php get_template_part('library/framework/blocks/taxonomy/list-books'); ?>

  <!-- Las books /-->
<?php get_template_part('library/framework/blocks/taxonomy/last-books'); ?>

<?php get_footer(); ?>