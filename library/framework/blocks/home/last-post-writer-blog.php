<?php
  
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/home/
   * File name:          last-post-writer-blog.php
   * Description:        This file shows the last post writer blog section in home page.
   * Date:               03-02-2026
   */
?>

<!-- Title /-->
<section>
  <div class="tb-head">
    <h1>= LO ÚLTIMO EN BLOG DEL AUTOR =</h1>
  </div>
</section>

<!-- Content /-->
<section>
  <div class="tb-box">

    <!-- Items cards -->
    <div class="row_">
      
      <?php
        global $block, $get_meta;
        wp_enqueue_script ('tie-cycle');
        
        $cat_id = 1491;
        
        $arguments_blog = array(
          'post_type' => array('post'),
          'posts_per_page' => 3,
          'paged' => $paged,
          'cat' => $cat_id,
        );
        
        $wp_query = new WP_Query($arguments_blog);
      ?>
      
      <?php
        $count = 0;
        if ($wp_query->have_posts ()) : while ($wp_query->have_posts ()) : $wp_query->the_post ();
        
          $postTitle = get_the_title ();
          $count++;
          
          if ($count != 3) {
            $class = 'col_-sm-6';
          } else {
            $class = 'col_-sm-12';
          }
          ?>

          <div class="col_-xxl-4 col_-xl-4 col_-md-4  <?php echo $class; ?> col_xs-12 text-center mb10">
            <div class="tb-card-blog">

              <div class="post-thumbnail tie_author tb-card-blog-thumbnail tie-appear">
                <a href="<?php the_permalink (); ?>" rel="bookmark">
                  <?php the_post_thumbnail (); ?>
                  <li class="fa overlay-icon tb-card-blog-overlay-icon"></li>
                </a>
              </div>

              <figcaption class="tb-card-blog-text">
                <a href="<?php the_permalink (); ?>" rel="bookmark"><?php echo $postTitle; ?></a>
                <span class="tb-card-blog-text-paragraph-end"></span>
              </figcaption>

            </div><!--/.tbh-card-item-->
          </div><!--/.cols-->
        
        <?php endwhile; ?>

          <!-- No posts -->
        <?php else : ?>

          <!-- No more posts /-->
          <div class="col_-12">
            <div class="row_">
              <p class="text-center">No hay publicaciones.</p>
            </div>
          </div>
        
        <?php endif ?>
      
      <?php wp_reset_query (); ?>


    </div><!--/.row_-->

    <!-- Button -->
    <section>
      <div class="text-center">
        <a title="Ir a Blog de Autor" href="https://bibliotecaenigmas.com/category/blog-del-autor/"
           class="tb-button">Ir a la sección</a>
      </div>
    </section>

  </div><!--/.tb-box-->
</section>