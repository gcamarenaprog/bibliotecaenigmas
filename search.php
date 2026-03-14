<?php
/*
  Template Name: 	Biblioteca Enigmas - Search Blog
  Author: 				Guillermo Camarena
  Section: 				Theme
  File name: 			search.php
  Date: 					03-06-2025
  Description: 		This file calls the search results loop file.
  Changed:				Changed
  */
?>

<?php get_header(); ?>
<?php tie_breadcrumbs(); ?>

<section>
  <div class="content">

    <!-- Title /-->
    <section>
      <div class="tb-head">
        <h1>
          <?php echo 'Los siguientes resultados contienen el texto buscado: '; ?> <b> <?php echo get_search_query(); ?> </b>
        </h1>
      </div>
    </section>

    <!-- Head /-->
    <section>
      <div class="page-head">

        <?php if (have_posts()) : ?>

        <?php else : ?>
          <?php _eti('Nothing Found'); ?>
        <?php endif; ?>

      </div>
    </section>

    <!-- Get loop search results template /-->
    <?php if (have_posts()) : ?>
      <section>
        <?php $loop_layout = tie_get_option('search_layout'); ?>

        <div class="mt30">
          <?php get_template_part('loop'); ?>
        </div>

        <?php
        echo $taxonomy = get_query_var('taxonomy');
        ?>

        <!-- Pagination /-->
        <?php if ($wp_query->max_num_pages > 1)
          tie_pagenavi(); ?>
      </section>

    <?php else : ?>
      <!-- Not search results /-->
      <section>
        <div id="post-0" class="post not-found post-listing" style="margin-top: -59px">
          <div class="entry">
            <div class="image-crash">
              <img src="https://bibliotecaenigmas.com/wp-content/themes/sahifa/library/images/images/crash.png" alt="" class="tie-appear">
            </div>
            <p class="text-center"><?php _eti('Sorry, but nothing matched your search criteria. Please try again with some different keywords.'); ?></p>
          </div>
        </div>
      </section>
    <?php endif; ?>

  </div>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>