<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/home/
   * File name:          last-post-media.php
   * Description:        This file shows the last post media section in home page.
   * Date:               25-08-2025
   */
?>

<section>
  <div class="tb-head">
    <h1>= LO ÚLTIMO EN VIDEOTECA =</h1>
  </div>
</section>
<section>
  <div class="tb-box">

    <div class="container_">
      <div class="row_">

        <?php
        global $block, $get_meta;
        wp_enqueue_script('tie-cycle');

        $arguments = array(
          'post_type' => 'book',
          'posts_per_page' => 3,
          'paged' => $paged,
          'tax_query' => array(
            array(
              'taxonomy' => 'genre',
              'field'    => 'id',
              'terms'    => 1523,
            ),
          ),

        );

        $wp_query = new WP_Query($arguments);

        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();

            // Get data of the books
            $completeTitleOfBook = get_the_title();
            $titleOfBook = getTitle($completeTitleOfBook);
        ?>

            <div class="col_-xxl-4 col_-xl-4  col_-md-4 col_-sm-12 col_xs-12">
              <article class="card">

                <!-- Cover book -->
                <?php if (function_exists("has_post_thumbnail") && has_post_thumbnail()) : ?>

                  <section>
                    <div class="tbh-thumbnail-b">

                      <?php
                      $be_theme_check = get_post_meta($post->ID, 'be_theme_check', true);
                      if ($be_theme_check != 'yes') {
                        echo '<div  class="post-thumbnail tie_check tie-appear tbh-post-thumbnail-b"';
                      } else {
                        echo '<div  class="post-thumbnail tie_book tie-appear tbh-post-thumbnail-b">';
                      }
                      ?>
                      <a href="<?php the_permalink(); ?>" rel="bookmark">
                        <?php the_post_thumbnail(); ?>
                        <li
                          class="fa overlay-icon tbh-overlay-icon-b">
                        </li>
                      </a>

                    </div>
                  </section>

                <?php endif; ?>

                <!-- Data -->
                <section>
                  <div class="book">

                    <!-- Title -->
                    <h1>
                      <a class="title" href="<?php the_permalink(); ?>" rel="bookmark">
                        <?php echo $titleOfBook; ?> <span class="paragraph-end"></span>
                      </a>
                    </h1>

                    <!-- Writer -->
                    <div class="writer">
                      <?php echo get_the_term_list($post->ID, 'writer', '', ', ', ''); ?><span
                        class="paragraph-end-writer"></span>
                    </div>

                    <!-- Excerpt -->
                    <div class="excerpt">
                      <p> <?php the_content(); ?></p>
                      <span class="paragraph-end"></span>
                    </div>

                  </div>
                </section>

              </article><!--/.card-->

            </div><!--/.cols-->

          <?php endwhile; ?>

          <!-- No books -->
        <?php else : ?>

          <!-- No books message /-->
          <article>
            <div class="item-list">
              <div class="tb-no-more-books">
                No hay más publicaciones.
              </div>
            </div>
          </article>

        <?php endif ?>

        <section>
          <div class="tbh-button">
            <a title="Ir a videoteca" href="https://bibliotecaenigmas.com/genre/videoteca/"
              class="shortc-button tbh">Ir a Videoteca</a>
          </div>
        </section>

      </div>
    </div>

  </div><!--/.tb-box-->
</section>