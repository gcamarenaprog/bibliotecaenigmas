<?php
  /**
   * Template Name:      Biblioteca Enigmas - Search in fortean blog
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               root
   * File name:          template-be-search-fortean-blog.php
   * Description:        This file show searches fortean blog.
   * Date:               02-12-2025
   */
?>


<?php get_header(); ?>
<?php tie_breadcrumbs(); ?>

<?php $postId = get_the_ID(); ?>

<!-- Title /-->
<section>
  <div class="tb-head">
    <h1>= <?php the_title(); ?> =</h1>
  </div>
</section>

<!-- Content /-->
<article <?php post_class ('post-listing post'); ?> id="the-post">
  <div class="post-inner ">
    <div class="clear"></div>
    <div class="entry mt20">

        <!-- Entry content /-->
        <?php the_content(); ?>

        <?php if ($postId == 18134) : ?>
          <!-- Fast search /-->
          <?php get_template_part('library/framework/blocks/blog/search/fast-search-fortean-blog'); ?>

        <?php else: ?>

          <!-- Search form /-->
          <?php echo do_shortcode('[ivory-search id="20893" title="Busqueda en blog forteano"]'); ?>

        <?php endif ?>

    </div><!-- .entry -->
    <div class="clear"></div>
  </div><!-- .post-inner -->
</article>

  <div class="clear"></div>
  </div><!-- .content -->

<?php get_footer (); ?>