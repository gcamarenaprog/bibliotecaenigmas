<?php
  /**
   * Template Name:      Biblioteca Enigmas
   * Theme URI:          https://github.com/gcamarenaprog/bibliotecaenigmas
   * Description Theme:  Sahifa theme personalized for bibliotecaenigmas.com website!
   * Author:             Guillermo Camarena
   * Author URL:         http://gcamarenaprog.com
   * Path:               /library/framework/blocks/blog/single/
   * File name:          related.php
   * Description:        This file contains the related section of a blog post page.
   * Date:               25-08-2025
   */
?>

<?php
global $get_meta, $post, $do_not_duplicate;
$original_post = $post;

if ((tie_get_option('related') && empty($get_meta["tie_hide_related"][0])) || (isset($get_meta["tie_hide_related"][0]) && $get_meta["tie_hide_related"][0] == 'no')):
  $related_no = tie_get_option('related_number') ? tie_get_option('related_number') : 3;

  if (!empty($get_meta["tie_sidebar_pos"][0]) && $get_meta["tie_sidebar_pos"][0] == 'full' && tie_get_option('related_number_full'))
    $related_no = tie_get_option('related_number_full');

  $query_type = tie_get_option('related_query');
  if ($query_type == 'author') {
    $args = array('post__not_in' => array($post->ID), 'posts_per_page' => $related_no, 'author' => get_the_author_meta('ID'), 'no_found_rows' => 1);
  } elseif ($query_type == 'tag') {
    $tags = wp_get_post_tags($post->ID);
    $tags_ids = array();
    foreach ($tags as $individual_tag)
      $tags_ids[] = $individual_tag->term_id;
    $args = array('post__not_in' => array($post->ID), 'posts_per_page' => $related_no, 'tag__in' => $tags_ids, 'no_found_rows' => 1);
  } else {
    $categories = get_the_category($post->ID);
    $category_ids = array();
    foreach ($categories as $individual_category)
      $category_ids[] = $individual_category->term_id;
    $args = array('post__not_in' => array($post->ID), 'posts_per_page' => $related_no, 'category__in' => $category_ids, 'no_found_rows' => 1);
  }
  $related_query = new wp_query($args);
  if ($related_query->have_posts()) : $count = 0; ?>

    <!-- Title /-->
    <section>
      <div class="tb-head">
        <h1>= Publicaciones relacionadas =</h1>
      </div>
    </section>

    <!-- Related posts /-->
    <section>
      <div class="tb-box">
        <div class="container_">
          <div class="row_">


            <?php while ($related_query->have_posts()) : $related_query->the_post();
              $do_not_duplicate[] = get_the_ID(); ?>

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
                            class="fa overlay-icon tbh-overlay-icon"
                            style=" ">
                          </li>
                        </a>

                      </div>

                      <div class="tbh-thumbnail-title">
                        <h1>
                          <a class="title" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?>
                          </a>
                        </h1>

                      </div>

                    </div><!--/.tb-thumbnails-->
                  </div><!--/.blog-->

                </article><!--/.card-blog-->

              </div><!--/.cols-->

            <?php endwhile; ?>
            <div class="clear"></div>


          </div>
        </div>
      </div>
    </section>

    <div class="clear"></div>


<?php
  endif;
  $post = $original_post;
  wp_reset_query();
endif; ?>