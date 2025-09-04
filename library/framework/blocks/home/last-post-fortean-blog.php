<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/home/
   * File name:          last-post-fortean-blog.php
   * Description:        This file shows the last post fortean blog section in home page.
   * Date:               25-08-2025
   */
?>

<section>
  <div class="tb-head">
    <h1>= LO ÚLTIMO EN EL BLOG FORTEANO =</h1>
  </div>
</section>

<section>
  <div class="tb-box">
    <div class="container_">
      <div class="row_">

        <?php
        global $block, $get_meta;
        wp_enqueue_script('tie-cycle');

        $cat_id = 1300;

        $arguments_blog = array(
          'post_type' => array('post'),
          'posts_per_page' => 3,
          'paged' => $paged,
          'cat' => $cat_id,
        );

        $wp_query = new WP_Query($arguments_blog);
        ?>

        <?php
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
            $postTitle = get_the_title();
        ?>

            <div class="col_-xxl-4 col_-xl-4  col_-md-4 col_-sm-12 col_xs-12">
              <article class="card-blog">

                <!-- Data -->
                <div class="blog">
                  <div class="tbh-thumbnail">

                    <div class="post-thumbnail tie-appear tbh-post-thumbnail"
                      style=" ">
                      <a href="<?php the_permalink(); ?>" rel="bookmark">
                        <?php the_post_thumbnail(); ?>
                        <li
                          class="fa overlay-icon tbh-overlay-icon">
                        </li>
                      </a>                      
                    </div>

                    <div class="tbh-thumbnail-title">
                      <h1>
                        <a class="title" href="<?php the_permalink(); ?>" rel="bookmark">
                          <?php echo $postTitle; ?>
                        </a>
                      </h1>

                    </div>

                  </div><!--/.tb-thumbnails-->
                </div><!--/.blog-->

              </article><!--/.card-blog-->

            </div><!--/.cols-->

          <?php endwhile; ?>

          <!-- No posts -->
        <?php else : ?>

          <!-- No books message /-->
          <article>
            <div class="item-list">
              <div class="tb-no-more-books">
                No hay publicaciones.
              </div>
            </div>
          </article>

        <?php endif ?>

        <?php wp_reset_query(); ?>

        <section>
          <div class="tbh-button">
            <a title="Ir a Blog Forteano" href="https://bibliotecaenigmas.com/category/blog-forteano/" class="shortc-button tbh  ">Ir a Blog Forteano</a>
          </div>
        </section>

      </div><!--/.row_-->
    </div><!--/.container_-->
  </div><!--/.tb-box-->
</section>