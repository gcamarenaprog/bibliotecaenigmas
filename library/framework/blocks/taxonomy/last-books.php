<?php

/**
 * Template Name:      Biblioteca Enigmas
 * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
 * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
 * Author:             Guillermo Camarena
 * Author URL:         http://gcamarenaprog.com
 * Path:               /library/framework/blocks/taxonomy/
 * File name:          last-books.php
 * Description:        This file shows the last books in books collections, encyclopedia collection or taxonomy file.
 * Date:               03-02-2026
 */
?>

<?php
// Get genre image
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$filename = $term->slug . '.jpg';
$imageUrl = get_template_directory_uri() . '/library/images/genres/' . $filename;
$slug = $term->slug;

$parent_term_id = null;

if ($slug == 'coleccion-de-libros') {
  $parent_term_id = 603;
  $slug = true;
} elseif ($slug == 'coleccion-de-enciclopedias') {
  $parent_term_id = 298;
  $slug = true;
}
?>

<?php if ($parent_term_id): // Books collection or Encyclopedias collection
?>

  <?php
  $taxonomies = array(
    'genre',
  );
  $args = array(
    'parent' => $parent_term_id,
    'orderby' => 'term_order',
  );
  $terms = get_terms($taxonomies, $args);
  ?>

  <!-- Title /-->
  <section>
    <div class="tb-head">
      <?php if ($parent_term_id == 298): ?>
        <h1>= COLECCIONES DE ENCICLOPEDIAS =</h1>
      <?php elseif ($parent_term_id == 603): ?>
        <h1>= COLECCIONES DE LIBROS =</h1>
      <?php endif; ?>
    </div>
  </section>

  <!-- Content / Start -->
  <section>
    <div class="tb-box">
      <div class="row_">
        <?php
        foreach ($terms as $cat) {
          $term = $cat->slug;
          $filename = $term . '.jpg';
          $imageUrl = get_template_directory_uri() . '/library/images/genres/' . $filename;
          $name = $cat->name;
          $home = get_home_url();
          $link = $home . '/genre/' . $term;
        ?>

          <div class="col_-xxl-4 col_-xl-4 col_-md-4  col_-sm-6 col_xs-12 text-center mb10">
            <div class="tb-card-blog">
              <div class="post-thumbnail tie_book tb-card-blog-thumbnail tie-appear">
                <a href="<?php echo $link; ?>" rel="bookmark">
                  <img width="660" height="380"
                    src=" <?php echo $imageUrl; ?> "
                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image tie-appear"
                    alt="" decoding="async"
                    fetchpriority="high">
                  <li class="fa fa-book overlay-icon tb-card-blog-overlay-icon">
                  </li>
                </a>
              </div>

              <figcaption class="tb-card-blog-text">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo $name; ?></a>
                <span class="tb-card-blog-text-paragraph-end"></span>
              </figcaption>
            </div>
          </div>

        <?php
        }
        ?>
      </div><!--/.row_-->
    </div><!--/.tb-box-->
  </section>

<?php else: // Books and multimedia genres
?>

  <?php  $genre = get_the_taxonomies();  ?>

  <!-- Title /-->
  <section>
    <div class="tb-head">
      <?php if (str_contains($genre['genre'], 'Multimedia')):
        $tieIcon = 'tie_play';

      ?>
        <h1>= ÚLTIMAS PUBLICACIONES EN <?php echo $term->name; ?> =</h1>

      <?php else:
        $tieIcon = 'tie_book';
      ?>
        <h1>= ÚLTIMAS LIBROS DE <?php echo $term->name; ?> =</h1>
      <?php endif; ?>
    </div>
  </section>

  <!-- Content /-->
  <section>
    <div class="tb-box">
      <div class="row_">

        <?php
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();

            // Get data of the books
            $completeTitleOfBook = get_the_title();
            $title = getTitle($completeTitleOfBook);
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
                        echo '<div  class="post-thumbnail ';
                        echo $tieIcon;
                        echo ' tie-appear tb-card-book-thumbnail">';
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
                          <?php echo $title; ?> <span
                            class="tb-card-book-title-paragraph-end"></span>
                        </a>
                      </div>

                      <!-- Writer -->
                      <div class="tb-card-book-writer">
                        <?php $writer = get_the_term_list($post->ID, 'writer', '', ', ', '');
                        echo $writer;
                        ?>
                        <span class="tb-card-book-writer-paragraph-end "></span>
                      </div>

                      <!-- Excerpt -->
                      <div class="tb-card-book-excerpt">
                        <p> <?php the_excerpt(); ?></p>
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

<?php endif; ?>