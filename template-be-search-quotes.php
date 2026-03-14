<?php
/*
  Template Name: 	Biblioteca Enigmas - Search Quotes
  Author: 				Guillermo Camarena
  Section: 				Quotes / Search
  File name: 			template-be-search-quotes.php
  Date: 					31-05-2025
  Description: 		This file show searches quotes section.
  Note:           Refactored
  */
?>

<?php get_header(); ?>
<?php tie_breadcrumbs(); ?>

<section>
  <div class="content_">

    <!-- Search /-->
    <?php get_template_part('library/framework/blocks/quotes/search'); ?>

  </div><!--/.content_-->
</section>

<?php get_footer(); ?>