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
   * Date:               25-08-2025
   */
?>

<section>
  <div class="tb-head">
    <h1>= ÚLTIMAS NOVEDADES =</h1>
  </div>
</section>

<section>

  <div class="tb-content-grid">

    <?php
    $countOfBooks = 0;
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();

        // Get data of the books
        $completeTitleOfBook = get_the_title();
        $titleOfBook = getTitle($completeTitleOfBook);

        $return_value = match ($countOfBooks) {
          $countOfBooks = 2, 5, 8, 11, 14, 17, 20, 23  => 'one_third',
          $countOfBooks = 1, 3, 4, 6, 7, 9, 10, 11, 12, 13, 15, 16, 18, 19, 20, 21, 24  => 'one_third last',
        };
    ?>
        <div class="<?php echo $return_value; ?>">

          <article class="card">

            <!-- Cover book -->
            <section>
              <?php if (function_exists("has_post_thumbnail") && has_post_thumbnail()) : ?>

                <section class="tb-thumbnail">

                  <?php
                  $be_theme_check = get_post_meta($post->ID, 'be_theme_check', true);
                  if ($be_theme_check != 'yes') {
                    echo '<div  class="post-thumbnail tie_check tie-appear tb-overlay-icon">';
                  } else {
                    echo '<div  class="post-thumbnail tie_book tie-appear tb-overlay-icon" >';
                  }
                  ?>
                  <a href="<?php the_permalink(); ?>" rel="bookmark">
                    <?php the_post_thumbnail(); ?>
                    <li
                      class="fa overlay-icon tb-overlay-icon">
                    </li>
                  </a>

                </section>

              <?php endif; ?>
            </section>

            <!-- Data book -->
            <section>
              <div class="data">


                <h1>
                  <a class="title" href="<?php the_permalink(); ?>" rel="bookmark">
                    <?php echo $titleOfBook; ?> <span class="paragraph-end"></span>
                  </a>
                </h1>

                <!-- Writer -->
                <div class="writer">
                  <?php echo get_the_term_list($post->ID, 'writer', '', ', ', ''); ?><span class="paragraph-end"></span>
                </div>

                <!-- Excerpt -->
                <div class="excerpt">
                  <p> <?php the_content(); ?></p>
                  <span class="paragraph-end"></span>
                </div>
              </div>

            </section>

          </article><!--/.card-->

        </div><!--/.one_third last-->

        <?php
        $return_value = match ($countOfBooks) {
          $countOfBooks = 2, 5, 8, 11, 14, 17, 20, 23  => '<div class="clear"></div>',
          $countOfBooks = 1, 3, 4, 6, 7, 9, 10, 11, 12, 13, 15, 16, 18, 19, 20, 21, 24  => 'one_third last',
        };
        echo $return_value;
        ?>

        <?php $countOfBooks++; ?>

      <?php endwhile; ?>

    <?php else : ?>

      <!-- No books message /-->
      <article>
        <div class="item-list">
          <div class="tb-no-more-books">
            No hay más libros.
          </div>
        </div>
      </article>

    <?php endif ?>

  </div><!--./tb-content-grid-->

  <!-- Pagination /-->
  <?php if ($wp_query->max_num_pages > 1) tie_pagenavi(); ?>


</section>