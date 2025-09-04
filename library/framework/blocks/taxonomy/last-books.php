<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/taxonomy/
   * File name:          last-books.php
   * Description:        This file shows the last books in taxonomy file.
   * Date:               25-08-2025
   */
?>

<?php

// Get genre image
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$filename = $term->slug . '.jpg';
$imageUrl = get_template_directory_uri() . '/library/images/genres/' . $filename;
$slug = $term->slug;

if ($term->slug == 'books') {
  $title = 'Biblioteca';
} else {
  $title = $term->slug;
}

?>


<?php if ($slug != 'coleccion-de-libros'): ?>

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
          $postId = get_the_ID();

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
                    <p> <?php echo get_the_excerpt($postId); ?></p>
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

<?php else: ?>

  <section>
    <div class="tb-head">
      <h1>= COLECCIONES DE LIBROS =</h1>
    </div>
  </section>

  <?php

  $parent_term_id = 603; // term id of parent term (edited missing semi colon)

  $taxonomies = array(
    'genre',
  );


  $args = array(
    'parent'         => $parent_term_id,
    'orderby'    => 'term_order',
    // 'child_of'      => $parent_term_id, 
  );

  $terms = get_terms($taxonomies, $args);


  ?>



  <section>

    <div class="tb-box">
      <div class="container_">
        <div class="row_">
          <?php
          foreach ($terms as $cat) {

            $term = $cat->slug;

            $filename = $term . '.jpg';
            $imageUrl = get_template_directory_uri() . '/library/images/genres/' . $filename;

            $name = $cat->name;

            $home = get_home_url();
            $link = $home . '/genre/' .$term;
           // $link = the_permalink();

            

            echo '         
              <div class="col_-xxl-4 col_-xl-4  col_-md-4 col_-sm-12 col_xs-12">
              <article class="card-blog">

                <!-- Data -->
                <div class="blog">
                  <div class="tbh-thumbnail">

                    <div class="post-thumbnail tie-appear tbh-post-thumbnail" style=" ">
                      <a href="'. $link .'" rel="bookmark">
                        <img width="660" height="380" 
                        src=" ' . $imageUrl . '  " 
                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image tie-appear" 
                        alt="" decoding="async" 
                        fetchpriority="high" 
                        srcset=". ' . $imageUrl . ' . " 660w, 
                        " ' . $imageUrl . ' " 300w, 
                        " ' . $imageUrl . ' " 150w, " ' . $imageUrl . ' " 100w, " ' . $imageUrl . ' " 194w" sizes="(max-width: 660px) 100vw, 660px">                        
                        <li class="fa overlay-icon tbh-overlay-icon">
                        </li>
                      </a>
                    </div>

                    <div class="tbh-thumbnail-title">
                      <h1>
                        <a class="title" href="'. $link .'" rel="bookmark">
                          '. $name .'                       </a>
                      </h1>
                    </div>

                  </div><!--/.tb-thumbnails-->
                </div><!--/.blog-->

              </article><!--/.card-blog-->
               </div><!--/.cols-->';
          }
          ?>


        </div><!--/.row_-->
      </div><!--/.container_-->
    </div>












  </section>

<?php endif; ?>