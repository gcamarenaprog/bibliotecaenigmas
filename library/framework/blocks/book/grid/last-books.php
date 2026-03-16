<?php
/**
 * Template Name:      Biblioteca Enigmas
 * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
 * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
 * Author:             Guillermo Camarena
 * Author URL:         http://gcamarenaprog.com
 * Path:               /library/framework/blocks/book/grid/
 * File name:          last-books.php
 * Description:        This file displays last books section on the grid books.
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
      $countBooks = 0;
      if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();

        // Get data of the books
        $fullTitle = get_the_title();
        $title = getTitle($fullTitle);

        ?>

        <div class="col_-xxl-4 col_-xl-4  col_-md-4 col_-sm-6 col_xs-12 text-center">
          <article>
            <div class="tb-card-book">
              <?php if (function_exists("has_post_thumbnail") && has_post_thumbnail()) : ?>

                <!-- Cover book -->
                <section>
                  <?php
                  $be_theme_check = get_post_meta($post->ID, 'be_theme_check', true);
                  if ($be_theme_check != 'yes') {
                    echo '<div  class="post-thumbnail tie_check tie-appear tb-card-book-thumbnail">';
                  } else {
                    echo '<div  class="post-thumbnail tie_book tie-appear tb-card-book-thumbnail">';
                  }
                  ?>
                  <a href="<?php the_permalink(); ?>" rel="bookmark">
                    <?php the_post_thumbnail(); ?>
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
                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                      <?php echo $title; ?> <span class="tb-card-book-title-end"></span>
                    </a>
                  </div>

                  <!-- Writer -->
                  <div class="tb-card-book-writer">
                    <?php $writer = get_the_term_list($post->ID, 'writer', '', ', ', '');
                    echo $writer;
                    ?>
                    <span class="tb-card-book-writer-end "></span>
                  </div>

                  <!-- Excerpt -->
                  <div class="tb-card-book-excerpt">
                    <p> <?php the_excerpt(); ?></p>
                    <span class="tb-card-book-excerpt-end"></span>
                  </div>

                </div>
              </section>

            </div>
          </article><!--/.card-->
        </div><!--/.cols-->

        <?php $countBooks++; ?>

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

    </div><!--/.row_-->
  </div><!--/.tb-box-->

  <section>
    <div class="row_">
      <!-- Pagination /-->
      <?php if ($wp_query->max_num_pages > 1)
        tie_pagenavi(); ?>
    </div>
  </section>

</section>