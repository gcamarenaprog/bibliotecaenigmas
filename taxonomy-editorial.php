<?php
  /*
  Template Name: 	Biblioteca Enigmas - Editorial Taxonomy
  writer: 				Guillermo Camarena
  Section: 				Library
  File name: 			taxonomy-editorial.php
  Date: 					17-05-2024
  Description: 		This file show the editorial taxonomy.
  Changed:				Changed
  */
?>

<?php get_header(); ?>
<?php tie_breadcrumbs(); ?>

<!-- PHP code /-->
<?php get_template_part('library/framework/blocks/taxonomy/query'); ?>

<!-- Table of posts /-->
<?php get_template_part('library/framework/blocks/taxonomy/list-books'); ?>

<!-- Las books /-->
<?php get_template_part('library/framework/blocks/taxonomy/last-books'); ?>

<?php get_footer(); ?>