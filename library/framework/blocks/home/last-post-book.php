<?php
  
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/home/
   * File name:          last-post-book.php
   * Description:        This file shows the last post book section in home page.
   * Date:               03-02-2026
   */
?>

<section>
  <div class="tb-head">
    <h1>= ÚLTIMOS LIBROS =</h1>
  </div>
</section>

<section>
  <div class="tb-box">
    <div class="row_">
      
      <?php
        global $block, $get_meta;
        $paged = -1;
        
        $arguments = array(
          'post_type' => 'book',
          'posts_per_page' => 3,
          'paged' => $paged,
          'tax_query' => array(
            array(
              'taxonomy' => 'genre',
              'field' => 'term_id',
              'terms' => array(1523),
              'operator' => 'NOT IN',
            ),
          ),
        );
        
        $wp_query = new WP_Query($arguments);
        
        if ($wp_query->have_posts ()) : while ($wp_query->have_posts ()) : $wp_query->the_post ();
          
          // Get data of the books
          $fullTitle = get_the_title ();
          $title = getTitle ($fullTitle);
          ?>

          <div class="col_-xxl-4 col_-xl-4  col_-md-4 col_-sm-12 col_xs-12 text-center">
            <article>
              <div class="tb-card-book">
                <?php if (function_exists ("has_post_thumbnail") && has_post_thumbnail ()) : ?>

                  <!-- Cover book -->
                  <section>
                    <?php
                      $be_theme_check = get_post_meta ($post->ID, 'be_theme_check', true);
                      if ($be_theme_check != 'yes') {
                        echo '<div  class="post-thumbnail tie_check tie-appear tb-card-book-thumbnail"';
                      } else {
                        echo '<div  class="post-thumbnail tie_book tie-appear tb-card-book-thumbnail">';
                      }
                    ?>
                    <a href="<?php the_permalink (); ?>" rel="bookmark">
                      <?php the_post_thumbnail (); ?>
                      <li
                          class="fa overlay-icon tb-card-book-overlay-icon">
                      </li>
                    </a>
                  </section>
                
                <?php endif; ?>

                <!-- Data -->
                <section>
                  <div class="tb-card-book-data">

                    <!-- Title -->
                    <div class="tb-card-book-title">
                      <a href="<?php the_permalink (); ?>" rel="bookmark">
                        <?php echo $title; ?> <span class="tb-card-book-title-paragraph-end"></span>
                      </a>
                    </div>

                    <!-- Writer -->
                    <div class="tb-card-book-writer">
                      <?php $writer = get_the_term_list ($post->ID, 'writer', '', ', ', '');
                        echo $writer;
                      ?>
                      <span class="tb-card-book-writer-paragraph-end "></span>
                    </div>

                    <!-- Excerpt -->
                    <div class="tb-card-book-excerpt">
                      <p> <?php the_excerpt (); ?></p>
                      <span class="tb-card-book-excerpt-paragraph-end"></span>
                    </div>

                  </div>
                </section>

              </div>
            </article><!--/.card-->
          </div><!--/.cols-->
        
        <?php endwhile; ?>

          <!-- No books -->
        <?php else : ?>

          <!-- No more posts /-->
          <div class="col_-12">
            <div class="row_">
              <p class="text-center">No hay publicaciones.</p>
            </div>
          </div>
        
        <?php endif ?>

      <div class="col_-12">

        <!-- Button -->
        <section>
          <div class="text-center">
            <a title="Ir a la sección de Libros"
               href="https://bibliotecaenigmas.com/books/"
               class="tb-button">Ir a la sección</a>
          </div>
        </section>


      </div><!--/.col_-12-->
    </div><!--/.row_-->
  </div><!--/.tb-box-->
</section>