<?php
  /**
   * Template Name:      Biblioteca Enigmas - Search in books
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               root
   * File name:          template-be-search-book.php
   * Description:        This file show the searches books.
   * Date:               14-03-2026
   */
?>

<?php get_header (); ?>
<?php tie_breadcrumbs (); ?>

<?php
$postId = get_the_ID ();
?>

  <div class="content">

    <!-- Title /-->
    <section>
      <div class="tb-head">
        <h1>= <?php the_title (); ?> =</h1>
      </div>
    </section>

    <!-- Content /-->
    <article <?php post_class ('post-listing post'); ?> id="the-post">
      <div class="post-inner ">
        <div class="clear"></div>
        <div class="entry mt20">

          <!-- Entry content /-->
          <?php the_content (); ?>

          <!-- Books search table -->
          <?php if ($postId == 17841) : ?>
            <?php $query = get_query_var ('query'); ?>
            <?php get_template_part ('library/framework/blocks/book/search/fast-search'); ?>
          <?php endif ?>

          <!-- Deep search books -->
          <?php if ($postId == 20904) : ?>
            <?php echo do_shortcode ('[ivory-search id="20863" title="Búsqueda de libros"]'); ?>
          <?php endif ?>

          <!-- Writer search table -->
          <?php if ($postId == 15359) : ?>
            <?php set_query_var ('taxonomyName', 'writer'); ?>
            <?php get_template_part ('library/framework/blocks/book/search/taxonomy-search'); ?>
          <?php endif ?>

          <!-- Editorial search table -->
          <?php if ($postId == 15363) : ?>
            <?php set_query_var ('taxonomyName', 'editorial'); ?>
            <?php get_template_part ('library/framework/blocks/book/search/taxonomy-search'); ?>
          <?php endif ?>

          <!-- Genre search table -->
          <?php if ($postId == 15364) : ?>
            <?php set_query_var ('taxonomyName', 'genre'); ?>
            <?php get_template_part ('library/framework/blocks/book/search/taxonomy-search'); ?>
          <?php endif ?>

        </div><!-- .entry -->
        <div class="clear"></div>
      </div><!-- .post-inner -->
    </article>

    <div class="clear"></div>
  </div><!-- .content -->

<?php get_footer (); ?>